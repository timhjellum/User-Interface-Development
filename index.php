<!DOCTYPE html>
<html>

<head>
    <?php include('adaptive/global/head/includes/head.inc') ?>
    <title></title>
</head>

<body>
    <?php include('adaptive/global/header/includes/header.inc') ?>
    <?php include('homepage/includes/slider.inc') ?>
    <div class="homepage">
        <div class="l-row l-3-col l-reorder">
            <div class="l-narrow-col l-second">
                <?php include('homepage/includes/whats-new.inc') ?>
            </div>
            <div class="l-middle-col l-first">
                <div class="main-content-container">
                    <?php include('todayinenergy/includes/file_scrub_live.inc') ?>
                </div>
            </div>
            <div class="l-narrow-col l-third">
                <div class="content-container-border primary-alt">
                    <ul>
                        <?php include('global/includes/homepage_data.html') ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="l-row l-2-col-right header">
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
    <?php include('adaptive/global/footer/includes/footer.inc') ?>
</body>

</html>