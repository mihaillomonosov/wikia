<?php
/**
 * WikiaMobile page body
 * 
 * @author Jakub Olek <bukaj.kelo(at)gmail.com>
 * @authore Federico "Lox" Lucignano <federico(at)wikia-inc.com>
 */
class WikiaMobileBodyService extends WikiaService {
	public function index() {
		$bodyContent = $this->getVal( 'bodyText', '' );
		$categoryLinks = $this->getVal( 'categoryLinks', '' );
		$afterBodyHtml = '';
		$afterContentHookText;
		
		// this hook allows adding extra HTML just after <body> opening tag
		// append your content to $html variable instead of echoing
		// (taken from Monaco skin)
		$this->wf->RunHooks( 'GetHTMLAfterBody', array ( $this->wg->User->getSkin(), &$afterBodyHtml ) );

		// this hook is needed for SMW's factbox
		if ( !$this->wf->RunHooks('SkinAfterContent', array( &$afterContentHookText ) ) ) {
			$afterContentHookText = '';
		}

		$this->pageHeaderContent = $this->sendRequest( 'WikiaMobilePageHeaderService', 'index' )->toString();
		$this->bodyContent = $bodyContent;
		$this->response->setVal(
			'relatedPages',
			( !empty( $this->wg->EnableRelatedPagesExt ) &&
				empty( $this->wg->MakeWikiWebsite ) &&
				empty( $this->wg->EnableAnswers ) ) ? $this->app->renderView( 'RelatedPagesModule', 'index' ) : null);
		$this->response->setVal(
			'categoryLinks',
			$this->sendRequest(
				'WikiaMobileCategoryService',
				'index',
				array( 'categoryLinks' => $categoryLinks )
			)->toString()
		);
		$this->response->setVal(
			'navMenu',
			$this->sendRequest(
				'WikiaMobileNavigationService',
				'navMenu'
			)->toString()
		);
		$this->afterBodyContent = $afterBodyHtml;
		$this->afterContentHookText = $afterContentHookText;
		$this->response->setVal(
			'comments',
			( class_exists( 'ArticleCommentInit' ) && ArticleCommentInit::ArticleCommentCheck() ) ?
				$this->sendRequest(
					'ArticleComments',
					'index'
				)->toString() :
				''
		);
	}
}