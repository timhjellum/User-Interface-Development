<!doctype html>
<?php 
$pageTitle = "U.S. Energy Information Administration (EIA)";
$L2T = 'Electricity';
$locale = 'overview'; 
$l2page = 'page_ele';$l2id = 2;
?>

<html>

<head>
    <?php include('css_rehab/archive/global/head/includes/head.inc') ?>
    <title>
        <?=$pageTitle?> -
            <?=$L2T?>
    </title>
</head>
    
<body>
    <?php include('css_rehab/archive/global/header/includes/header.inc') ?>
    <?php include('includes/sub-navigation.inc'); ?>
    <?php include('global/sliders/multi-card-slider.inc') ?>
    <div class="l-row">
        <div class="l-two-col">
            <?php include('includes/recent-data.inc') ?>
            <?php include('includes/hourly-electric-data.inc') ?>
            <?php include('includes/updated-data-series.inc') ?>
            <?php include('includes/survey-forms-changes-announcements.inc') ?>
        </div>
        <div class="l-two-col">
            <?php include('global/analysis-projections/analysis-projections.inc') ?>
            <?php include('includes/beta.inc') ?>
            <?php include('includes/presentations.inc') ?>
            <?php include('includes/upcoming-releases.inc') ?>
        </div>
    </div>
    <?php include('includes/visualizations.inc') ?>
    <?php include('includes/energy-education.inc'); ?>
    <?php include('css_rehab/archive/global/footer/includes/footer.inc') ?>
</body>

</html>