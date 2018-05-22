<!doctype html>
<?php
 $L2T = 'Analysis & Projections';
 $locale = 'overview';
 $l2page = 'page_ana';
 $l2id = 9;
?>
<html>
<head>
<?php include('adaptive/global/head/includes/head.inc') ?>
<?php  if(!isset($no_titling)) include('global/includes/titling.inc') ?>
</head>
<body>
<?php include('adaptive/global/header/includes/header.inc') ?>
<?php include('./includes/sub-navigation.inc'); ?>
<?php // include('adaptive/global/sliders/multi-card-slider.inc') // ?>
<div class="l-row">
	<div class="l-two-col">
		<?php include('./includes/recent-data.inc') ?>
		<?php include('./includes/updated-data-series.inc') ?>
	</div>
	<div class="l-two-col">
		<?php include('adaptive/global/analysis-projections/analysis-projections.inc') ?>
		<?php include('./includes/presentations.inc') ?>
	</div>
</div>
<?php include('./includes/visualizations.inc') ?>
<?php include('./includes/energy-education.inc'); ?>
<?php include('/global/footer/includes/footer.inc') ?>
</body>
</html>


