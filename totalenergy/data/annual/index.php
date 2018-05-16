<?php $locale = 'data'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Annual Energy Review - Energy Information Administration</title>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<?php /* Start of user defined Javascript function */ ?>
<?php /* Purpose: display the correct data year value as shown in the table header */ ?>
<script language="javascript" type="text/javascript">
function DataEndYear(lngLagValue)
{
	var lngSetCalendarYear, lngDataYear;
	lngSetCalendarYear = 2012;
	lngDataYear = lngSetCalendarYear - lngLagValue;
	document.write(lngDataYear);
	return;
}
</script>
<style>
table tr td {
	vertical-align:middle;
}
table tr .no_bdr {
	border: #fff;
	margin-bottom:0;
	padding-bottom:5px;
	vertical-align:middle;
}
table tr .no_bdr2 {
	padding-top:0;
	margin-top:0;
}
.xls_cntr {
	margin-right: 30.5%;
}
.contable tbody tr:first-child, .contable tbody tr.summary {
	background:none;
}
</style>
<?php /* End of user defined Javascript function */ ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<?php /* ****************************************************************** */ ?>
<?php /* File Name:            index.cfm                                    */ ?>
<?php /* Purpose:              Display Annual Energy Review website         */ ?>
<?php /* Release date:         September 27, 2012                           */ ?>
<?php /* Revised date:         September 27, 2012                           */ ?>
<?php /* ****************************************************************** */ ?>
<body>
<?php /* Start of Outer Wrapper */ ?>
<div id="outerX">
<?php /* EIA Header */ ?>
<?php include ('global/includes/eia_header.inc') ; ?>
<?php /* Navigation Menu */ ?>
<?php include ('totalenergy/includes/subnav_allsources.inc') ; ?>
      <?php /* Report Title Treatment #1 */ ?>
      <?php include ('totalenergy/includes/aer_selector.inc') ; ?>
      <div class="l-row">
      <div class="l-main-col">
        
      <div class="tie_correction">
		    <p>EIA has expanded the <em>Monthly Energy Review</em> (MER) to include annual data as far back as 1949 for those data tables that are found in both the <em>Annual Energy Review</em> (AER) and the <a href="/totalenergy/data/monthly/">MER</a><?php /*allowing monthly <b>and</b> annual data to appear in the same place*/ ?>
	        . In the list of tables below, grayed-out table numbers now go to MER tables that contain data series for 1949 forward. New <a href="/totalenergy/data/browser/ - view in Total Energy Browser">INTERACTIVE tables and graphs</a> have also been added.</p>

        <?php include('includes/main-data.inc'); ?>
      </div>
      <div class="l-narrow-col">
        <?php include('includes/side-data.inc') ?>  <?php include ('includes/annual_content.inc') ; ?>
      </div>
    </div>
    <?php include('css_rehab/archive/global/footer/includes/footer.inc') ?>
    </body>
    </html>