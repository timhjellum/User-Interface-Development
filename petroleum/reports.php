<head>

	<?php
	$L2T = "Petroleum & Other Liquids";
	$l2id = 0;

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
  <?php include ('includes/subnav_petroleum.inc') ; ?>

	<?php
	/* Page/Body Content */
	$l2id = 0;
	include("global/includes/bookshelf/bookshelf_results.inc");
	/* End Page/Body Content */
	include("global/includes/eia_footer.inc");
	?>

</div>
<?php /* End Outer Wrapper */ ?>
</body>
