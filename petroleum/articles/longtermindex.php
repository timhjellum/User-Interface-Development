<?php
$pageTitle = "Long Term World Oil Supply";
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
<h1>Long Term World Oil Supply</h1>
<p class="date">August 1, 2000<br />
</p>
<p>These pages summarize a recent EIA presentation on when world convntional oil production will peak and the effect of different estimates of the world conventional oil resource base.  A version of this presentation was given by former EIA Administrator Jay Hakes to the April 18, 2000 meeting of the American Association of Petroleum Geologists in New Orleans, Louisiana. Specific information about this presentation may be obtained from John Wood (john.wood@eia.doe.gov), Gary Long (gary.long@eia.doe.gov) or David Morehouse (david.morehouse@eia.doe.gov).
</p>
<p><a href="/petroleum/archive/longterm.pdf"><i class="ico pdf"><span>PDF</span></i>See full report</a></p>
<?php /* end main content */ ?>
</div>l-narrow-col
<div class="l-side-column">
<?php include('./includes/side-nav_longterm.inc'); ?>
</div>
</div>
<?php include(ROOT.'global/includes/css_rehab_eia-footer.inc'); ?>
</body>
</html>
