<?php include_once('../../config.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Gasoline and Diesel Fuel Update</title>
<?php include(ROOT.'global/includes/css_rehab_eia-head.inc'); ?>
<?php if(!isset($no_titling)) include(ROOT.'global/includes/titling.inc'); ?>
</head>
<body>
<?php include(ROOT.'global/includes/css_rehab_eia-header.inc'); ?>
<?php include('../includes/sub-navigation.inc'); ?>
<?php $headtitle = 'Gasoline and Diesel Fuel Update'; ?>
<?php include('./includes/report-details.inc'); ?>
<div class="l-row">
<div class="l-main-col">
<?php /* start main content */ ?>
                <h2>Definition of the Coefficient of Variation</h2>
<p>The Coefficient of Variation   (CV) of the mean, a measurement of variability of the mean price, is calculated   as the standard error divided by the mean. As a measure of precision reflecting   the error due to sampling, it can also be used to construct a confidence   interval for the population mean. For example, a mean price of $1.67 and a CV of   0.004 (.4%) indicates at the 95% confidence level that the population mean price   has an upper limit of $1.68 ($1.67 + 1.96*0.004*$1.67) and a lower limit of   $1.66 ($1.67 - 1.96*0.004*$1.67).
</p>
<p><a href="includes/Sampling_Error_report.rtf">On-Highway Diesel Fuel Prices & Coefficients of Variation Report</a></p>
<?php /* end main content */ ?>
</div>
<div class="l-narrow-col">
<?php include('./includes/gdu_side2.inc'); ?>
</div>
</div>
<?php include(ROOT.'global/includes/css_rehab_eia-footer.inc'); ?>
</body>
</html>
