<div class="page-wrapper">
	<?php 
		if(strpos($_SERVER['HTTP_HOST'],'wwwdev')===false&&strpos($_SERVER['HTTP_HOST'],'wwwtest')===false){
			//Disable the social media icons on the 404 File Not Found page 
			isset($a40412) || $a40412 = '';
			if($a40412 != "y"){
	?>
	<?php include('global/header/social-sticker/social-sticker.inc') ?>
	<?php
		}
	}
	?>
	<?php include('header-shared.inc') ?>
	<section>
		<div class="l-outer-wrapper">
			<div class="l-inner-wrapper">
				<?php include('global/announcements/includes/announcement-responsive.inc') ?>