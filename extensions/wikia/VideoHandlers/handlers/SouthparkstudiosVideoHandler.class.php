<?php

class SouthparkstudiosVideoHandler extends VideoHandler {
	protected $apiName = 'SouthparkstudiosApiWrapper';
	protected static $urlTemplate = 'http://media.mtvnservices.com/mgid:cms:item:southparkstudios.com:$1';
	protected static $providerDetailUrlTemplate = 'http://www.southparkstudios.com/clips/$1';
	protected static $providerHomeUrl = 'http://www.southparkstudios.com/';
	protected static $autoplayParam = "autoPlay=true";

	public function getEmbed($articleId, $width, $autoplay = false, $isAjax = false, $postOnload=false) {
		$height = $this->getHeight($width);
		$url = $this->getEmbedUrl();
		$autoplayStr = $autoplay ? 'true' : 'false';

		$html = <<<EOT
<embed src="$url" width="$width" height="$height" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" base="." flashVars="autoPlay=$autoplayStr"></embed>
EOT;
		
		return $html;
	}

}