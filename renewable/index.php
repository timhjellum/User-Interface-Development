<!doctype html>
<?php
$pageTitle = "U.S. Energy Information Administration (EIA)";
$L2T = 'Renewable & Alternative Fuels';
$locale = 'overview';
$l2page = 'page_ren';
$l2id = 7;
?>
<html>
<head>
<?php include('adaptive/global/head/includes/head.inc') ?>
<title>
	<?=$pageTitle?> -
		<?=$L2T?>
</title>
</head>
<body>
<?php include('adaptive/global/header/includes/header.inc') ?>
<?php include('./includes/sub-navigation.inc'); ?>
<?php include('adaptive/global/sliders/multi-card-slider.inc') ?>
<div class="l-row">
	<div class="l-two-col">
		<?php include('./includes/recent-data.inc') ?>
		<?php include('./includes/updated-data-series.inc') ?>
		<?php include('./includes/survey-forms-changes-announcements.inc') ?>
	</div>
	<div class="l-two-col">
		<?php include('adaptive/global/analysis-projections/analysis-projections.inc') ?>
		<?php include('./includes/presentations.inc') ?>
		<?php include('./includes/upcoming-releases.inc') ?>
	</div>
</div>
<?php include('./includes/visualizations.inc') ?>
<?php include('./includes/energy-education.inc'); ?>
<?php include('adaptive/global/footer/includes/footer.inc') ?> 
</body>
</html>
