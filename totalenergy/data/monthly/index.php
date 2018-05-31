<!doctype html>
<?php
$pageTitle = 'Monthly Energy Review - Energy Information Administration';
$locale = 'data';
?>
<html>
<head>
<title>Monthly Energy Review - Energy Information Administration</title>
<?php include('adaptive/global/head/includes/head.inc') ?>
<?php  if(!isset($no_titling)) include('global/includes/titling.inc') ?>
</head>
<body>
<?php include('adaptive/global/header/includes/header.inc') ?>
<?php include('./includes/sub-navigation.inc'); ?>
<div class="l-row">
	<div class="l-main-col">
    <?php include('./includes/data.inc'); ?>
	</div>
	<div class="l-narrow-col">
	  <? /* php include('./includes/data-side-content.inc') */ ?>
	</div>
</div>
<?php include('adaptive/global/footer/includes/footer.inc') ?>
</body>
</html>
