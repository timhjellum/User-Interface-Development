<?php
$pageTitle = "Aspects of Exxon Mobil Corporation's Acquisition of XTO Energy Inc";
$L2Title = "Petroleum and Other Liquids";
?>
<?php include_once('../../config.php'); ?>
<!DOCTYPE html>
<html>
<head>
<?php
if(isset($pageTitle) && $pageTitle) {
print "<title>" . $pageTitle . "</title>"; print PHP_EOL;
$pageTitle = 'U.S. Energy Information Administration (EIA) - ';
}
?>
<?php include(ROOT.'global/includes/css_rehab_eia-head.inc'); ?>
<?php if(!isset($no_titling)) include(ROOT.'global/includes/titling.inc'); ?>
</head>
<body>
<?php include(ROOT.'global/includes/css_rehab_eia-header.inc'); ?>
<div class="l-row l-two-col-right-narrow">
<div class="l-main-col">
<?php /* start main content */ ?>
<h1>Aspects of Exxon Mobil Corporation's Acquisition of XTO Energy Inc</h1>
<p class="date">December 16, 2009<br />
</p>
<p>A summary presentation to inform discussion of the recently announced acquisition of XTO Energy Inc. by Exxon Mobil Corporation, a transaction which is reportedly $41 billion in value. "Aspects of Exxon Mobil Corporation's Acquisition of XTO Energy Inc" presents non-proprietary company-level oil and gas production and reserve data and the relevant U.S. aggregate data published by the Energy Information Administration.
</p>
<p><a href="/naturalgas/archive/xom_xto.pdf"><i class="ico pdf"><span>PDF</span></i>See full report</a></p>
<?php /* end main content */ ?>
</div>l-narrow-col
<div class="l-side-column"><?php include('./includes/side-nav_exxon.inc'); ?>
</div>
</div>
<?php include(ROOT.'global/includes/css_rehab_eia-footer.inc'); ?>
</body>
</html>
