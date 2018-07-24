<?php $locale = 'data'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<body>
<?php /* Start of Outer Wrapper */ ?>
<div id="outerX">
<?php /* EIA Header */ ?>
<?php include ('global/includes/eia_header.inc') ; ?>
<?php /* Navigation Menu */ ?>
<?php include ('totalenergy/includes/subnav_allsources.inc') ; ?>
<?php /* Page/Body Content */ ?>
    <div class="pagecontent mr_temp3">
	  <?php /* Start of Main Column */ ?>
      <div class="main_col">
	      <?php /* Start of  */ ?>
<h3>Data Precision in <i>Monthly Energy Review</i> Tables</h3>
<p>The spreadsheet files often provide data in greater precision than the published report tables, which present rounded values.</p>
	      <?php /* End of  */ ?>
	  <?php /* End of Main Column */ ?>
      </div>
      <div class="side_col right">
	  <?php /* Start of Side Column */ ?>
      <?php /* <?php include ('includes/monthly_content.inc') ; ?> */ ?>
      <?php /* End of Side Column */ ?>
      </div>
    </div>
<?php /*/ Page/Body Content */ ?>
<?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ End of Outer Wrapper */ ?>
</body>
</html>