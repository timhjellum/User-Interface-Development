<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php
	isset($sect) || $sect = 'home';
	include "css_rehab/archive/global/includes/eia_head_info.inc";
?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>

<body>
<?php include('css_rehab/archive/global/includes/eia_header.inc') ?>
<div class="l-row header">
	<div class="l-full-width-header">
		<!-- start module -->
		<!-- start module -->
		<!-- start module -->
		<div class="slider-home-top"></div>
			<?php /*ul id="slider1"*/ ?>
			<ul id="slider3">
			<?php
				if(!$homepageFeatures = file_get_contents("global/includes/homepage_features.html", FILE_USE_INCLUDE_PATH)) {
			} else {
				echo $homepageFeatures;
			}
			?>
			</ul>
			<div class="thumbs3"></div>
		<div class="slider-home-bottom"></div>
		<!-- end module -->
		<!-- end module -->
		<!-- end module -->
	</div>
</div>
<div class="l-row">
	<div class="l-side-column">
		<?php include('css_rehab/archive/global/includes/eia-home-whats-new.inc') ?>
		<hr>
		<?php include('css_rehab/archive/global/includes/eia-home-coming-up.inc') ?>
	</div>
	<div class="l-middle-column">
		<?php /* include "todayinenergy/includes/file_scrub_live.inc"; */ ?>
		<?php include('css_rehab/archive/global/includes/eia-home-today-in-energy.inc') ?>
	</div>
	<div class="l-side-column">
		<?php
			/*
			if(file_exists("global/includes/homepage_data.html")){
			if(file_exists("css_rehab/archive/global/includes/eia-home-data-highlights.inc")) {
				// $homepage_data_file = "global/includes/homepage_data.html";
				$homepage_data_file = "css_rehab/archive/global/includes/eia-home-data-highlights.inc";
			} else{
				$homepage_data_file = "global/includes/homepage_data.cfm";
			}
			if(!$homepageData = file_get_contents($homepage_data_file, FILE_USE_INCLUDE_PATH)) {
				echo "Data highlights not currently available. Check back soon.";
			} else {
				echo $homepageData;
			}
			*/
		?>
		<?php include('css_rehab/archive/global/includes/eia-home-data-highlights.inc"') ?>
	</div>
</div>
<div class="l-row">
	<div class="l-main-column">
		<?php include('css_rehab/archive/global/includes/eia-home-features.inc') ?>
	</div>
	<div class="l-side-column">
	<?php include('css_rehab/archive/global/includes/eia-home-outlooks.inc') ?>
	<?php include('css_rehab/archive/global/includes/eia-home-learn-about-energy.inc') ?>
	</div>
</div>
<div class="l-row">
	<div class="l-side-column">
		<?php include('css_rehab/archive/global/includes/eia-home-our-experts-speak.inc') ?>
	</div>
	<div class="l-side-column">
		<?php include('css_rehab/archive/global/includes/eia-home-top-picks.inc') ?>
	</div>
	<div class="l-side-column">
		<?php include('css_rehab/archive/global/includes/eia-home-especially-for.inc') ?>
	</div>
	<div class="l-side-column">
		<?php include('css_rehab/archive/global/includes/eia-home-energy-kids.inc') ?>
	</div>
</div>
<?php include'css_rehab/archive/global/includes/eia_footer.inc' ?>
</body>
<?php /* the script below appends a query string to the end of each image name in the homepage rotating banner
			forcing the browser to fetch a new, updated image*/ ?>
<script>
	(function(){
		$('.home_feature_banner ul li').each(function(){
			var newName = '.jpg?' + $.now();
			$(this).css('background-image',$(this).css('background-image').replace('.jpg',newName));
		})
	}());
</script>
</html>
