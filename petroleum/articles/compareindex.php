<?php
$pageTitle = "Comparisons of Independent Petroleum Supply Statistics ";
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
<h1>Comparisons of Independent Petroleum Supply Statistics </h1>
<p class="date">October 24, 2005<br />
</p>
<p>Compares final petroleum data published in the Petroleum Supply Annual with similar petroleum data obtained from other sources. Data comparisons are presented for 1994 through 2003.
</p>
<p><a href="/petroleum/archive/art0509.pdf"><i class="ico pdf"><span>PDF</span></i>See full report</a></p>
<?php /* end main content */ ?>
</div>l-narrow-col
<div class="l-side-column"><?php include('./includes/side-nav_compare.inc'); ?>
</div>
</div>
<?php include(ROOT.'global/includes/css_rehab_eia-footer.inc'); ?>
</body>
</html>
