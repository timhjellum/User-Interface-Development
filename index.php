<!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" -->
<!-- html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" -->
<!DOCTYPE html>
<html>
<head>
<?php
	isset($sect) || $sect = 'home';
	include "css_rehab/archive/global/head/includes/head.inc";
?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?>

</head>
<body>
<?php include('css_rehab/archive/global/header/includes/header.inc') ?>
<?php include('css_rehab/archive/homepage/includes/slider.inc') ?>
<div class="homepage">
	<div class="l-row">
		<div class="l-side-column">
			<?php include('css_rehab/archive/homepage/includes/whats-new.inc') ?>
			<hr>
			<?php include('css_rehab/archive/homepage/includes/coming-up.inc') ?>
		</div>
		<div class="l-middle-column">
			<?php /* include "todayinenergy/includes/file_scrub_live.inc"; */ ?>
			<?php include('css_rehab/archive/homepage/includes/today-in-energy.inc') ?>
		</div>
		<div class="l-side-column">
			<?php
				/*
				if(file_exists("global/includes/homepage_data.html")){
				if(file_exists("css_rehab/archive/homepage/includes/data-highlights.inc")) {
					// $homepage_data_file = "global/includes/homepage_data.html";
					$homepage_data_file = "css_rehab/archive/homepage/includes/data-highlights.inc";
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
			<?php include('css_rehab/archive/homepage/includes/data-highlights.inc"') ?>
		</div>
	</div>
	<div class="l-row">
		<div class="l-main-column">
			<?php include('css_rehab/archive/homepage/includes/features.inc') ?>
		</div>
		<div class="l-side-column">
		<?php include('css_rehab/archive/homepage/includes/outlooks.inc') ?>
		<?php include('css_rehab/archive/homepage/includes/learn-about-energy.inc') ?>
		</div>
	</div>
	<div class="l-row">
		<div class="l-side-column">
			<?php include('css_rehab/archive/homepage/includes/our-experts-speak.inc') ?>
		</div>
		<div class="l-side-column">
			<?php include('css_rehab/archive/homepage/includes/top-picks.inc') ?>
		</div>
		<div class="l-side-column">
			<?php include('css_rehab/archive/homepage/includes/especially-for.inc') ?>
		</div>
		<div class="l-side-column">
			<?php include('css_rehab/archive/homepage/includes/energy-kids.inc') ?>
		</div>
	</div>
</div>	
<?php include'css_rehab/archive/global/footer/includes/footer.inc' ?>
</body>
<?php /* the script below appends a query string to the end of each image name in the homepage rotating banner forcing the browser to fetch a new, updated image
<script>
	(function(){
		$('.home_feature_banner ul li').each(function(){
			var newName = '.jpg?' + $.now();
			$(this).css('background-image',$(this).css('background-image').replace('.jpg',newName));
		})
	}());
</script>
*/ ?>
</html>
