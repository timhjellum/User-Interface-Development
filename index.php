<!DOCTYPE html>
<html>
<head>
<?php isset($sect) || $sect = 'home'; include('adaptive/global/head/includes/head.inc') ?>
<?php  if(!isset($no_titling)) include('global/includes/titling.inc') ?>
</head>
<body>
<?php include('global/header/includes/header.inc') ?>
<?php include('homepage/includes/slider.inc') ?>
<div class="homepage">
	<div class="l-row l-3-col l-reorder">
		<div class="l-narrow-col l-second">
			<?php include('homepage/includes/whats-new.inc') ?>
		</div>
		<div class="l-middle-col l-first">
			<div class="content-container main-content-container">
				<?php include('todayinenergy/includes/file_scrub_live.inc') ?>
				<?php /* include('adaptive/homepage/includes/today-in-energy.inc') */ ?>
			</div>
		</div>
		<div class="l-narrow-col l-third">
			<div class="content-container content-container-border blue-background">
				<ul>
				<?php include('global/includes/homepage_data.html') ?>
			</ul>
			</div>
			<?php /* include('adaptive/homepage/includes/data-highlights.inc') */ ?>
		</div>
	</div>
	<div class="l-row l-2-col-right header">
		<div class="l-main-col">
			<?php include('adaptive/homepage/includes/features.inc') ?>
		</div>
		<div class="l-narrow-col">
			<?php include('adaptive/homepage/includes/outlooks.inc') ?>
		</div>
		<div class="l-narrow-col">
			<?php include('adaptive/homepage/includes/learn-about-energy.inc') ?>
		</div>
	</div>
	<div class="l-row l-4-col">
		<div class="l-narrow-col">
			<?php include('adaptive/homepage/includes/our-experts-speak.inc') ?>
		</div>
		<div class="l-narrow-col">
			<?php include('adaptive/homepage/includes/top-picks.inc') ?>
		</div>
		<div class="l-narrow-col">
			<?php include('adaptive/homepage/includes/especially-for.inc') ?>
		</div>
		<div class="l-narrow-col">
			<?php include('adaptive/homepage/includes/energy-kids.inc') ?>
		</div>
	</div>
</div>	
<?php include('adaptive/global/footer/includes/footer.inc') ?>
</body>
</html>
