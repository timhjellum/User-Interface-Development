
<!doctype html>
<?php
$pageTitle = 'Annual Energy Review - Energy Information Administration';
$locale = 'data';
?>
<html>
<head>
<title>Annual Energy Review - Energy Information Administration</title>

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
<?php include('./includes/sub-navigation.inc'); ?>
<?php include('./includes/energy-review-selector.inc'); ?>
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