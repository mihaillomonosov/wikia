<section class="LatestPhotosModule">
	<h1>Latest Photos</h1>
	<?= View::specialPageLink('Upload', 'oasis-add-photo', 'wikia-button', 'blank.gif', 'oasis-add-photo', 'osprite icon-add'); ?>
	<details class="tally counter">
		<em><?= $total ?></em><?= wfMsg('oasis-latest-photos-header') ?>
	</details>

<?php
if ($enableEmptyGallery == true) { ?>
	<details class="empty-photos">
		<div class="temp-image">
			 <?= View::specialPageLink('Upload', 'oasis-latest-photos-empty'); ?>
		</div>
	</details>
<?php }
else {
	 ?>
	<?php
	$class = "";
	if ($enableScroll == false) {
		$class = " hidden";
	}
		?>
		<a href="#" class="previous<?= $class ?>"><img src="<?= $wgBlankImgUrl; ?>" class="latest-images-left"></a>
		<a href="#" class="next<?= $class ?>"><img src="<?= $wgBlankImgUrl; ?>" class="latest-images-right"></a>
	<div class="carousel-container">
		<div>
			<ul class="carousel">
	<?php
	$count = 1;
	foreach ($thumbUrls as $url) {?>
		<li class="thumbs"><a class="image" sref="<?= $url["file_url"] ?>" title="here is the title" href="<?= $url["file_url"] ?>">
			<img class="thumbimage" src="<?= $url["thumb_url"] ?>" />
		</a>
		<span class="thumbcaption"><a href=""></a><br/><?= $url["date"] ?>valuable information for the intelectual mind</span>
		</li>
	<?php
	}
	?>
	<?php
	if (count($thumbUrls) > 2) { ?>
		<li class="see-all"><?= View::specialPageLink('NewFiles', 'oasis-latest-photos-inner-message') ?></li>
	<?php
	}
	else {?>
		<li class="add-more single-photo"><?= View::specialPageLink('Upload', 'oasis-latest-photos-single') ?></li>
		<?php

	}?>

			</ul>
		</div>
	</div>
	<?= View::specialPageLink('NewFiles', 'oasis-latest-photos-more', array('class' => 'more')) ?>


<?php }
	?>
</section>