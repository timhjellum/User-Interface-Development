<!doctype html>
<?php
$pageTitle = "U.S. Energy Information Administration (EIA)";
$L2T = 'Total Energy Annual Data';
$locale = 'data';
?>
<html>
<head>
<title><?=$pageTitle?> - <?=$L2T?></title>

<script language="javascript" type="text/javascript">
function DataEndYear(lngLagValue)
{
	var lngSetCalendarYear, lngDataYear;
	lngSetCalendarYear = 2012;
	lngDataYear = lngSetCalendarYear - lngLagValue;
	document.write(lngDataYear);
	return;
}
</script>

<?php include('adaptive/global/head/includes/head.inc') ?>
</head>
<body>
<?php include('adaptive/global/header/includes/header.inc') ?>
<?php include('adaptive/totalenergy/includes/sub-navigation.inc'); ?>
<?php include('./includes/report-header.inc'); ?>
<div class="l-row">
	<div class="l-main-col">
    	<?php include('./includes/data.inc'); ?>
	</div>
	<div class="l-narrow-col">
	  <?php include('./includes/data-side-content.inc') ?>
	</div>
</div>
<?php include('adaptive/global/footer/includes/footer.inc') ?>
</body>
</html>