<div class="l-body-wrapper">
<?php 
	if(strpos($_SERVER['HTTP_HOST'],'wwwdev')===false&&strpos($_SERVER['HTTP_HOST'],'wwwtest')===false){
		//Disable the social media icons on the 404 File Not Found page 
		isset($a40412) || $a40412 = '';
		if($a40412 != "y"){
?>
<?php include('css_rehab/archive/global/header/social-sticker/social-sticker.inc') ?>
<?php
	}
}
?>
<?php include('css_rehab/archive/global/header/includes/header-shared.inc') ?>
	<div class="l-outer-wrapper">
		<div class="l-inner-wrapper <?=$locale?>">
			<?php include('css_rehab/archive/global/announcements/includes/announcement-responsive.inc') ?>