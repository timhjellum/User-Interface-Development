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
      <?php include ('includes/subnav_naturalgas.inc') ; ?>
      <?php /* Page/Body Content */ ?>
      <div class="pagecontent mr_temp2">
              <?php /*    <span class="blue_side"><em>March 23, 2012</em>:  Interactive graphing has been added to the natural gas data tables, complete with zooming and high quality downloads and printouts.</span> */ ?>

		<?php // test comment ?>		

        <?php /* Start of Main Column */ ?>
        <div class="main_col">

          <a name="weekly release"></a><div class="weeklies">
          <span>
            <h2>Regular Weekly Releases*</h2>
            <h3>Thursday</h3>
            <p><a href="http://ir.eia.gov/ngs/ngs.html">Weekly Natural Gas Storage Report &rsaquo;</a><br />
              <i>10:30 a.m. EST</i></p>
            <p><a href="/naturalgas/weekly/">Natural Gas Weekly Update &rsaquo;</a><br />
            <i>2:00 - 2:30 p.m. EST</i></p>
            <p class="no-border"><i>*No releases: Monday, Tuesday, Wednesday or Friday. Releases change on weeks with Federal holidays.</i></p>
            </span> </div>
          <?php /* Feature Example */ ?>
          <?php /* End of Main Column */ ?>
        </div>
        <div class="side_col right">
          <?php /* Start of Side Column */ ?>
          <?php include ('includes/side_data.inc') ; ?>
          <?php /* End of Side Column */ ?>
        </div>
      </div>
      <?php /*/ Page/Body Content */ ?>
      <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ End of Outer Wrapper */ ?>
</body>
</html>
