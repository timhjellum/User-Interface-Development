<!doctype html>
<?php
//$pageTitle = 'U.S. Energy Information Administration (EIA)';
$L2T = "Nuclear & Uranium";
$l2id = 5;
?>
<html>
<head>
<?php include("global/includes/bookshelf/bookshelf_legacy_redirects.inc") ?>
<?php include('css_rehab/archive/global/head/includes/head.inc') ?>
<?php include("global/includes/bookshelf/bookshelf_head.inc") ?>
<title><?=$pageTitle?> - <?=$L2T?></title>
</head>
<body>
<?php include('css_rehab/archive/global/header/includes/header.inc') ?>
<?php include('includes/sub-navigation.inc'); ?>
<div class="l-row">
	<div class="l-full-width-col">
	<?php include("css_rehab/archive/global/includes/bookshelf/bookshelf-results.inc") ?>
	</div>
</div>
<?php include('css_rehab/archive/global/footer/includes/footer.inc') ?>
</body>
</html>
