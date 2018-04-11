<!doctype html>
<?php /* Set the HTML title (used by /global/includes/titling.cfm via eia_footer.cfm) */ ?>
<?php $L2T = 'Petroleum & Other Liquids'; ?>


<?php $locale = 'overview'; ?>
<?php /* set this so that the carousel.cfm include query will pull the correct set of Issues and Trends for this page. */ ?>
<?php $l2page = 'page_pet'; ?>
<?php $l2id = 0; ?>
<html>
<head>
<?php include('css_rehab/archive/global/head/includes/head.inc') ?>
<?php  if(!isset($no_titling)) include('global/includes/titling.inc') ?>
</head>
<body>
<?php include('css_rehab/archive/global/header/includes/header.inc') ?>
<span class="subnav">
	<?php include('./includes/sub-navigation.inc'); ?>
</div>
<span class="feature-section">
	<?php include('css_rehab/archive/global/sliders/multi-card-slider.inc') ?>
</div>
<?php /*<div class="alert"><p><strong>What's changed?</strong> &nbsp; See <a href="/about/eia_explained.cfm#l2_enhancements" id="enhance" style="background:none; padding-right:0; margin-right:0">highlights of new features</a> or <a href="#video" id="youtube" style="background:none; padding-right:0; margin-right:0">take a 60 second video tour</a>.</p></div>*/ ?>
<?php /*div class="alert"><p><strong>New data on the movements of crude oil by rail added.</strong> &nbsp;  <a href="transportation/webinar/" id="enhance" style="background:none; padding-right:0; margin-right:0">Webinar</a> discusses changes 11 a.m. Tuesday, March 31.</p></div*/ ?>
<?/* php include ('global/includes/l2-youtube.inc') ; */ ?>
<? /* php include ('global/includes/carousel.inc') ; */ ?>

   
<div class="l-row">
	<div class="l-two-col">
		<?php include('./includes/recent-data.inc') ?>
		<?php include('./includes/updated-data-series.inc') ?>
		<?php include('./includes/survey-forms-changes-announcements.inc') ?>
	</div>
	<div class="l-two-col">
		<?php /* require ('css_rehab/archive/global/includes/analysis-projections/analysis-projections.inc') */ ?>
		<?php include('css_rehab/archive/global/analysis-projections/analysis-projections.inc') ?>
		<?php include('./includes/upcoming-releases.inc') ?>
	</div>
</div>
<?php include('./includes/interactive-visualizations-data-multimedia.inc'); ?>
<span class="ed_section">
	<?php include('./includes/energy-education.inc'); ?>
</span>
<?php include'css_rehab/archive/global/footer/includes/footer.inc' ?>
</body>
</html>




