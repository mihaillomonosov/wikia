<?php
/*
 * ArticlesUsingMediaQuery returns an array of articles ( ns, title, url ) that are using File ( image or video )
 *
 */

class ArticlesUsingMediaQuery
{
	private $fileTitle;
	private $app;
	private $memc;

	/*
	 * @param Title $fileTitle
	 */
	public function __construct($fileTitle) {

		$this->fileTitle = $fileTitle;
		$this->app = F::app();
		$this->memc = $this->app->getGlobal('wgMemc');
	}

	/*
	 * @param bool $purgeCache - force the script to do the real DB query
	 * @return array article list ( ns, title, url )
	 */
	public function getArticleList($purgeCache = false) {

		wfProfileIn( __METHOD__ );

		if ( !$purgeCache ) {

			$data = $this->memc->get( $this->getMemcKey() );

			if ( !is_null($data) ) {
				return $data;
			}
		}

		$dbr = wfGetDB( DB_SLAVE );

		$res = $dbr->select(
			array( 'imagelinks', 'page' ),
			array( 'page_namespace', 'page_title' ),
			array( 'il_to' => $this->fileTitle->getDBKey(), 'il_from = page_id' ),
			__METHOD__,
			array( 'ORDER BY' => 'page_namespace ASC' )
		);

		$data = array() ;
		while ( $s = $res->fetchObject() ) {
			$title = Title::makeTitle($s->page_namespace, $s->page_title);
			$data[] = array( 'ns' => $s->page_namespace,
			                 'title' => $s->page_title,
			                 'url' => $title->getLocalURL()
			);

		}

		$this->memc->set( $this->getMemcKey(), $data );

		wfProfileOut(__METHOD__);

		return $data;
	}

	public function getMemcKey() {

		$key = '';
		$key .= $this->app->wg->cityId;
		$key .= 'ArticlesUsingMediaQuery';
		$key .= $this->fileTitle->getDBKey();

		return $key;
	}

	public function unsetCache() {

		$this->memc->set( $this->getMemcKey(), null );
	}

	public static function onUpdateLinks( &$LinksUpdate ) {

		$imageList = $LinksUpdate->getExistingImages();
		$imageDeletes = $LinksUpdate->getImageDeletions( $imageList );
		$imageInserts = $LinksUpdate->getImageInsertions( $imageList );

		foreach ( $imageDeletes as $img ) {
			$imageList[ $img['il_to'] ] = 1;
		}

		foreach ( $imageInserts as $img ) {
			$imageList[ $img['il_to'] ] = 1;
		}

		if ( is_array( $imageList ) ) {

			foreach ( $imageList as $imageDBName => $v ) {

				$title = Title::newFromDBkey( $imageDBName );
				if ( !empty( $title ) ) {
					$mq = new self( $title );
					$mq->unsetCache();
				}
			}
		}
		return true;
	}

	public static function onArticleDelete( &$article, &$wgUser=false, &$reason=false, &$error=false ) {

		$id = $article->mTitle->getArticleID();
		$dbr = wfGetDB( DB_SLAVE );

		if ( (int) $id > 0 ) {

			$res = $dbr->select(
				array( 'imagelinks' ),
				array( 'il_to' ),
				array( 'il_from='.$id ),
				__METHOD__
			);

			while ( $s = $res->fetchObject() ) {

				$title = Title::newFromDBkey( $s->il_to );
				if ( !empty( $title ) ) {
					$mq = new self( $title );
					$mq->unsetCache();
				}
			}
		}
		return true;
	}


}