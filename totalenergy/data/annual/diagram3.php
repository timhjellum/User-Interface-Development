<?php $locale = 'data'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
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
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<?php /* ****************************************************************** */ ?>
<?php /* File Name:  diagram3.php   */ ?>
<?php /* Purpose:    Display the Natural Gas Flow diagram*/ ?>
<?php /* Revision date:   September 27, 2012  */ ?>
<?php /* ****************************************************************** */ ?>
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
	  <?php /* Start of release date of AER */ ?>
	  <h1>Annual Energy Review</h1>
	  <?php include ('includes/release_date.inc') ; ?>
	  <?php /* End of release date of AER */ ?>
<p><h3><a href="/totalenergy/data/annual/pdf/sec6_3.pdf" class="ico_pdf">Natural Gas Flow,&nbsp;<script>DataEndYear(1)</script></a>&nbsp;(Trillion Cubic Feet)</h3></p>
<img src="images/nat_gas_flow_2011_med.png" alt="Natural Gas Flow diagram image">
<p align="left">
<strong>Footnotes:</strong><br />
<sup>1</sup>&nbsp;Includes natual gas gross withdrawls from coalbed wells and shale gas wells.
<sup>2</sup>&nbsp;Quantities lost and imbalances in data due to differences among data sources.<br />
<sup>3</sup>&nbsp;Lease and plant fuel, and other industrial.<br />
<sup>4</sup>&nbsp;Natural gas consumed in the operation of pipelines (primarily in compressors), and as fuel in
the delivery of natural gas to consumers; plus a small quantity used as vehicle fuel.<br />
<br />
<strong>Notes:</strong><br />
&bull;&nbsp;Data are preliminary.<br />
&bull;&nbsp;Values are derived from source data prior to rounding for publication.<br />
&bull;&nbsp;Totals may not equal sum of components due to independent rounding.<br />
<br />
<strong>Sources:</strong><br />
U.S. Energy Information Administration, <a href="/totalenergy/data/annual/pdf/aer.pdf">Annual Energy Review 2011</a>&nbsp;Tables 6.1, 6.2, and 6.5.
</p>
	      <?php /* End of  */ ?>
	  <?php /* End of Main Column */ ?>
      </div>
      <div class="side_col right">
	  <?php /* Start of Side Column */ ?>
      <?php include ('includes/annual_content.inc') ; ?>
      <?php /* End of Side Column */ ?>
      </div>
    </div>
<?php /*/ Page/Body Content */ ?>
<?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ End of Outer Wrapper */ ?>
</body>
</html>