<!doctype html>
<?php
$L2T = 'Consumption & Efficiency';
$locale = 'overview';
$l2page = 'page_con';
$l2id = 4;
$pageTitle = "U.S. Energy Information Administration (EIA)";
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
                <?php include('includes/updated-data-series.inc') ?>
                <?php include('includes/survey-forms-changes-announcements.inc') ?>
            </div>
            <div class="l-two-col">
                <?php include('global/analysis-projections/analysis-projections.inc') ?>
                <?php include('includes/presentations.inc') ?>
                <?php include('includes/upcoming-releases.inc') ?>
            </div>
        </div>
        <?php include('includes/consumption-survey.inc') ?>
        <?php include('includes/visualizations.inc') ?>
        <?php include('includes/energy-education.inc') ?>
        <?php include('css_rehab/archive/global/footer/includes/footer.inc') ?>
    </body>
        
    </html>