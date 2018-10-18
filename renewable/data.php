<!doctype html>
<?php
$pageTitle = "U.S. Energy Information Administration (EIA)";
$L2T = 'Renewable & Alternative Fuels';
$locale = 'data';
?>
    <html>

<head>
        <?php include('css_rehab/archive/global/head/includes/head.inc') ?>
        <title>
            <?=$pageTitle?> -
                <?=$L2T?>
        </title>
</head>
                
    <body>
        <?php include('css_rehab/archive/global/header/includes/header.inc') ?>
        <?php include('includes/sub-navigation.inc'); ?>
        <div class="l-row">
            <div class="l-main-col">
                <?php include('includes/data.inc'); ?>
                <?php include('includes/weeklies.inc'); ?>
        </div>
            <div class="l-narrow-col">
                <?php include('includes/data-side-content.inc') ?>
      </div>
</div>
        <?php include('css_rehab/archive/global/footer/includes/footer.inc') ?>
</body>

    </html>