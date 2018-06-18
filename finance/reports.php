<!doctype html>
<?php
$pageTitle = 'U.S. Energy Information Administration (EIA)';
$L2T = 'Finance';
$l2page = 'page_fin';
$L2T = "finance";
$l2id = 10;
$locale = 'ap';
include("global/includes/bookshelf/bookshelf_legacy_redirects.inc");

?>
    <!--
    include("global/includes/eia_head_info.inc");
include("global/includes/bookshelf/bookshelf_head.inc");
-->
    <html>

    <head>
        <?php include('adaptive/global/head/includes/head.inc') ?>
        <title>
            <?=$pageTitle?> -
                <?=$L2T?>
        </title>
    </head>

    <body>
        <?php include('adaptive/global/header/includes/header.inc') ?>
        <?php include('./includes/sub-navigation.inc'); ?>
        <div class="l-row">
            <div class="l-full-width-col">
                <?php include("global/includes/bookshelf/bookshelf_results.inc") ?>
            </div>
        </div>
        <?php include('adaptive/global/footer/includes/footer.inc') ?>
    </body>

    </html>