<head>
    <?php
    $L2T = "Environment";
    $l2id = 8;
    include("global/includes/bookshelf/bookshelf_legacy_redirects.inc");
    include("global/includes/eia_head_info.inc");
    include("global/includes/bookshelf/bookshelf_head.inc");
    ?>
</head>

<body>
<div id="outerX"><?php /* Outer Wrapper */ ?>
    <?php
    include("global/includes/eia_header.inc");
    ?>

    <?php /* Navigation Menu */ ?>
    <?php include ('includes/subnav_environment.inc') ; ?>

    <?php
    /* Page/Body Content */
    include("global/includes/bookshelf/bookshelf_results.inc");

    /* End Page/Body Content */
    include("global/includes/eia_footer.inc");
    ?>

</div><?php /*/ Outer Wrapper */ ?>
</body>
