<!doctype html>
<?php
$pageTitle = 'U.S. Energy Information Administration (EIA)';
$L2T = 'Markets & Finance Data';
$locale = 'data';
?>
<html>
<head>
<?php include('adaptive/global/head/includes/head.inc') ?>
<title><?=$pageTitle?> - <?=$L2T?></title>
</head>
<body>
<?php include('adaptive/global/header/includes/header.inc') ?>
<?php include('./includes/sub-navigation.inc'); ?>
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