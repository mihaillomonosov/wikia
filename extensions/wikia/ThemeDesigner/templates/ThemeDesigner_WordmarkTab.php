<section id="WordmarkTab" class="WordmarkTab">
	<fieldset class="text">
        <span id="or">or</span>
		<h1><?= wfMsg('themedesigner-text-wordmark') ?></h1>

		<ul class="controls">
			<li>
				<h2><?= wfMsg('themedesigner-font') ?></h2>
				<select id="wordmark-font">
					<option value="default"><?= wfMsg('themedesigner-default') ?></option>
					<option value="cpmono">CP Mono</option>
					<option value="fontin">Fontin</option>
					<option value="garton">Garton</option>
					<option value="idolwild">Idolwild</option>
					<option value="imfell">IM Fell</option>
					<option value="josefin">Josefin</option>
					<option value="megalopolis">Megalopolis</option>
					<option value="orbitron">Orbitron</option>
					<option value="pixiefont">Pixiefont</option>
					<option value="prociono">Prociono</option>
					<option value="tangerine">Tangerine</option>
					<option value="titillium">Titillium</option>
					<option value="veggieburger">Veggieburger</option>
					<option value="yanone">Yanone</option>
				</select>
			</li>
			<li>
				<h2><?= wfMsg('themedesigner-size') ?></h2>
				<select id="wordmark-size">
					<option value="small"><?= wfMsg('themedesigner-small') ?></option>
					<option value="medium"><?= wfMsg('themedesigner-medium') ?></option>
					<option value="large"><?= wfMsg('themedesigner-large') ?></option>
				</select>
			</li>
		</ul>

		<div id="wordmark-edit">
			<input type="text">
			<button><?= wfMsg('themedesigner-button-change-text') ?></button>
		</div>

		<div id="wordmark-shield"></div>

	</fieldset>
	<fieldset class="graphic">
		<h1><?= wfMsg('themedesigner-graphic-wordmark') ?></h1>
		<h2><?= wfMsg('themedesigner-upload-a-graphic') ?> <span class="form-questionmark" data-tooltip="<?= wfMsg('themedesigner-rules-wordmark') ?>"></span></h2>

		<form id="WordMarkUploadForm" onsubmit="return AIM.submit(this, ThemeDesigner.wordmarkUploadCallback)" action="<?= $wgScriptPath ?>/index.php?action=ajax&rs=moduleProxy&moduleName=ThemeDesigner&actionName=WordmarkUpload&outputType=html" method="POST" enctype="multipart/form-data">
			<input id="WordMarkUploadFile" name="wpUploadFile" type="file" />
			<br />
			<input type="submit" value="<?= wfMsg( 'themedesigner-button-upload-wordmark' ) ?>" onclick="return ThemeDesigner.wordmarkUpload(event);"/>
		</form>

		<div class="preview">
			<span>Preview</span>
			<img src="<?= $wgBlankImgUrl ?>" class="wordmark">
			<a href="#"><?= wfMsg('themedesigner-dont-use-a-graphic') ?></a>
		</div>

	</fieldset>
	<fieldset class="favicon">
		<h1><?= wfMsg('themedesigner-favicon-heading') ?></h1>
		<h2>
			<?= wfMsg('themedesigner-upload-a-graphic') ?>
			<span class="form-questionmark" data-tooltip="<?= wfMsg('themedesigner-rules-favicon') ?> &lt;a href='http://community.wikia.com/wiki/Help:Favicon' &gt; <?= wfMsg('themedesigner-rules-favicon-learn-more-link') ?>&lt;/a&gt;"></span>
		</h2>
		<form id="FaviconUploadForm" onsubmit="return AIM.submit(this, ThemeDesigner.faviconUploadCallback)" action="<?= $wgScriptPath ?>/index.php?action=ajax&rs=moduleProxy&moduleName=ThemeDesigner&actionName=FaviconUpload&outputType=html" method="POST" enctype="multipart/form-data">
			<input id="FaviconUploadFile" name="wpUploadFile" type="file" />
			<input type="submit" value="<?= wfMsg( 'themedesigner-button-upload-wordmark' ) ?>" />
		</form>
		
		<div class="preview">
			<img src="<?= $faviconUrl ?>">
			<a href="#"><?= wfMsg('themedesigner-dont-use-a-graphic') ?></a>
		</div>
	</fieldset>
</section>
