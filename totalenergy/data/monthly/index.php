<!doctype html>
<?php
$pageTitle = "U.S. Energy Information Administration (EIA)";
$L2T = 'Total Energy Monthly Data';
$locale = 'data';
?>
    <html>

<head>
        <title>
            <?=$pageTitle?> -
                <?=$L2T?>
        </title>
        <?php include('css_rehab/archive/global/head/includes/head.inc') ?>
    </head>

<body>
        <?php include('css_rehab/archive/global/header/includes/header.inc') ?>
        <?php include('totalenergy/includes/sub-navigation.inc'); ?>
        <div class="l-row">
            <div class="l-main-col">
                <?php include('includes/data.inc'); ?>
      </div>
            <div class="l-narrow-col">
                <?php include('includes/data-side-content.inc') ?>
      </div>
    </div>
        <?php include('css_rehab/archive/global/footer/includes/footer.inc') ?>
</body>

</html>