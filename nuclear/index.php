<!doctype html>
<?php /* Set the HTML title (used by /global/includes/titling.cfm via eia_footer.cfm) */ ?>
<?php $L2T = 'Nuclear & Uranium'; ?>


<?php $locale = 'overview'; ?>
<?php /* set this for the carousel query to pull the correct set of tags */ ?>
<?php $l2page = 'page_nuc';
$l2id = 5;
?>

<html>
<head>
<?php include('adaptive/global/head/includes/head.inc') ?>
<title>U.S. Energy Information Administration (EIA) - </title>
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
		<?php include('./includes/released-daily.inc') ?>
		<?php include('./includes/presentations.inc') ?>
		<?php include('./includes/upcoming-releases.inc') ?>
	</div>
</div>
<?php include('./includes/visualizations.inc') ?>
<?php include('./includes/energy-education.inc'); ?>
<?php include('/global/footer/includes/footer.inc') ?>
</body>
</html>

