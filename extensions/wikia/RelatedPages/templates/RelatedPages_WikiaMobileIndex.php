<? if ( !$skipRendering ) :?>
	<section id=wkRelPag>
		<h1 class="collSec addChev open"><?= $wf->MsgForContent( 'wikiarelatedpages-heading' ) ;?></h1>
		<ul class="wkLst open">
		<? foreach ( $pages as $page ) :?>
			<?
			global $wgExtensionsPath;
			$imgUrl = empty( $page['imgUrl'] ) ? $wgExtensionsPath. '/wikia/WikiaMobile/images/read_placeholder.png' : $page['imgUrl'] ;?>
			<li><a href="<?= $page['url'] ;?>"><img src="<?= wfBlankImgUrl() ;?>" width=100 height=50 data-src="<?= $imgUrl ;?>" class="imgPlcHld lazy"/><noscript><img src="<?= $page['imgUrl'] ;?>" width=100 height=50/></noscript><?= $page['title'] ?></a></li>
		<? endforeach ;?>
		</ul>
	</section>
<? endif ;?>