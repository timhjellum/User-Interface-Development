<!doctype html>
<?php
$pageTitle = "U.S. Energy Information Administration (EIA)";
$locale = 'homepage';
?>
<html>
<head>
<title><?=$pageTitle?></title>
<?php include('global/head/includes/head.inc') ?>
</head>
<body>
    <?php include('css_rehab/archive/global/header/includes/header.inc') ?>
    <?php include('homepage/includes/slider.inc') ?>
        <div class="l-row l-3-col l-reorder">
            <div class="l-narrow-col l-second">
                <?php include('homepage/includes/whats-new.inc') ?>
            </div>
            <div class="l-two-col l-first">
                <div class="today-in-energy">
                    <?php include('todayinenergy/includes/file_scrub_live.inc') ?>
                </div>
            </div>
            <div class="l-narrow-col l-third">
                <div class="data-highlights">
                    <div class="accent">
                        <?php include('global/includes/homepage_data.html') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-row l-two-col-right-narrow"><!-- l-2-col-right header" -->
            <div class="l-main-col">
                <?php include('homepage/includes/features.inc') ?>
            </div>
            <div class="l-narrow-col">
                <?php include('homepage/includes/outlooks.inc') ?>
            </div>
            <div class="l-narrow-col">
                <?php include('homepage/includes/learn-about-energy.inc') ?>
            </div>
        </div>
        <div class="l-row l-4-col">
            <div class="l-narrow-col">
                <?php include('homepage/includes/our-experts-speak.inc') ?>
            </div>
            <div class="l-narrow-col">
                <?php include('homepage/includes/top-picks.inc') ?>
            </div>
            <div class="l-narrow-col">
                <?php include('homepage/includes/especially-for.inc') ?>
            </div>
            <div class="l-narrow-col">
                <?php include('homepage/includes/energy-kids.inc') ?>
            </div>
        </div>
    </div>
    <?php include('css_rehab/archive/global/footer/includes/footer.inc') ?>
</body>

</html>