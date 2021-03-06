<!doctype html>
<?php
$pageTitle = "U.S. Energy Information Administration (EIA)";
$L2T = 'Electricity Data';
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
    <?php include('includes/sub-navigation.inc') ?>
    <?php include('includes/notice.inc') ?>
    <div class="l-row l-two-col-right-narrow">
        <div class="l-main-col">
            <?php include('includes/data.inc') ?>
        </div>
        <div class="l-narrow-col">
            <div class="sidebar__inner">
                <?php include('includes/data-side-content.inc') ?>
            </div>
        </div>
    </div>
    <?php include('css_rehab/archive/global/footer/includes/footer.inc') ?>
</body>
</html>