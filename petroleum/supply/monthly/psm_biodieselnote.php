<?php $locale = 'overview'; ?>
<?php include_once('../../../config.php'); ?>
<!DOCTYPE html>
<html>
<head>
<?php include(ROOT.'global/includes/css_rehab_eia-head.inc'); ?>
<?php if(!isset($no_titling)) include(ROOT.'global/includes/titling.inc'); ?>
</head>
<body>
<?php include(ROOT.'global/includes/css_rehab_eia-header.inc'); ?>
<?php include(ROOT.'petroleum/includes/sub-navigation.inc'); ?>
<div class="l-row">
<div class="l-main-col">
<?php /* start main content */ ?>





<h3>Biodiesel Production Data</h3>
<p style="font-size:11px;margin:0px;padding:4px 0px;color:#7d7d7d;">
<strong>Released: January 29, 2015</strong></p>
<dl class="survey">
<p>
Biodiesel production data are reported as "Renewable Fuels and Oxygenate Plant Net Production" of "Renewable Fuels Except Fuel Ethanol" on supply and disposition tables of the <a href="/petroleum/supply/monthly/">Petroleum Supply Monthly (PSM)</a> and on supply and disposition tables available from Petroleum Navigator. The usual source for biodiesel production data is Form EIA-22M "Monthly Biodiesel Production Survey".  U.S. and regional aggregated data from Form EIA-22M are reported in the <a href="/biofuels/biodiesel/production/">Monthly Biodiesel Report</a> that is normally released on the same day as the PSM.  However, release of the Monthly Biodiesel Report with data for November 2014 is delayed while a review of the infrastructure used for the survey and any subsequent modifications takes place.  Therefore, biodiesel production data in PSM data for November 2014 were estimated by EIA.  Estimated biodiesel production will continue to be used in the PSM and on Petroleum Navigator until new survey data beome available from Form EIA-22M.
</dl>
</div>

</div>

<?php include(ROOT.'global/includes/css_rehab_eia-footer.inc'); ?>
</body>
</html>

