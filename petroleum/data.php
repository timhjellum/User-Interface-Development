<!doctype html>
<?php $locale = 'data'; ?>
<head>
<?php include('css_rehab/archive/global/head/includes/head.inc') ?>
<?php  if(!isset($no_titling)) include('global/includes/titling.inc') ?>
</head>
<body>
<?php include('css_rehab/archive/global/header/includes/header.inc') ?>
<?php include('./includes/sub-navigation.inc'); ?>
<div class="l-row">
	<div class="l-main-col">
		<?php include('includes/main-data.inc'); ?>
		<?php include('includes/weeklies.inc'); ?>
	</div>
	<div class="l-narrow-col">
		<?php include('includes/side-data.inc'); ?>
	</div>
</div>
<?php include('css_rehab/archive/global/footer/includes/footer.inc') ?>
</body>
</html>