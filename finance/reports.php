<head>
    <?php
    $L2T = "finance";
    $l2id = 10;
    $locale = 'ap';
    include("global/includes/bookshelf/bookshelf_legacy_redirects.inc");
    include("global/includes/eia_head_info.inc");
    include("global/includes/bookshelf/bookshelf_head.inc");
    ?>
</head>

<body>
<?php /* Outer Wrapper */ ?>
<div id="outerX">

    <?php
    include("global/includes/eia_header.inc");
    ?>

    <?php /* Navigation Menu */ ?>
    <?php include ('includes/subnav_finance.inc') ; ?>

    <?php
    /* Page/Body Content */
    include("global/includes/bookshelf/bookshelf_results.inc");

    /* End Page/Body Content */
    include("global/includes/eia_footer.inc");
    ?>

</div>
<?php /* End Outer Wrapper */ ?>
</body>
