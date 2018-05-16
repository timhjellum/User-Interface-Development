<?php /* <?php $locale: 'data'; ?> */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

<?php /* ****************************************************************************  */ ?>
<?php /* File Name:  showtext.cfm                                                      */ ?>
<?php /* Purpose:    Display the AER html pages w/ EIA's header and footer information */ ?>
<?php /* Revision date:   September 27, 2012                                           */ ?>
<?php /* ****************************************************************************  */ ?>

<?php $hct = 'y'; ?><?php /*include highcharts eia-theme via eia_head_info.cfm */ ?>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<?php /* Start of Outer Wrapper */ ?>
<div id="outerX">
<?php /* EIA Header */ ?>
<?php include ('global/includes/eia_header.inc') ; ?>
<?php /* Navigation Menu */ ?>
<?php include ('totalenergy/includes/subnav_allsources.inc') ; ?>
<?php /* Page/Body Content */ ?>
    <div class="pagecontent mr_temp3">
	  <?php /* Start of Main Column */ ?>
      <div>
	      <?php /* Start of  */ ?>
				<?php /* I replace this code with a simple file scrub include that will strip all the extra html doc level info out before putting on the page ... (#1)*/ ?>
				<?php /* display date stamp info: add on 09/09/2011 by CA2 */ ?>
				<h2>Annual Energy Review</h2>
				  <?php /* Start of release date of AER */ ?>
				  <p class="dat"><?php include ('includes/release_date.inc') ; ?></p>
				  <?php /* End of release date of AER */ ?>
<?php /* 				<p class="dat">Release Date: September 20, 2012&nbsp; <br />Next Update: August 2013</p> */ ?>
				<?php /* display html content */ ?><?php /* #2 */ ?>
                <?php include ('includes/file_scrub.inc') ; ?>
	      <?php /* End of  */ ?>
	  <?php /* End of Main Column */ ?>
      </div>

    </div>
	</div>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>

<script type="text/javascript" src="/global/scripts/JQuery/autoChart/jquery.autochart.js"></script>
<script language="javascript" type="text/javascript" src="autochart_options.js"></script>

<body>
<style>
.autochart_container{height:500px;width:850px;} 
.table_title{
}
.table_units{
}
.group_header{
}
.row_header{
}
td, th{
  padding: 5px 5px 5px 5px; 	
}
</style>

<?php /*/ Page/Body Content */ ?>
<?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ End of Outer Wrapper */ ?>
</body>
</html>
