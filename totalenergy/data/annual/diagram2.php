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
<?php /* End of user defined Javascript function */ ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<?php /* ****************************************************************** */ ?>
<?php /* File Name:  diagram2.cfm   */ ?>
<?php /* Purpose:    Display the Petroleum Energy Flow diagram*/ ?>
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
	  <?php /* Start of  */ ?>
<p><h3><a href="/totalenergy/data/annual/pdf/sec5_3.pdf" class="ico_pdf">Petroleum Flow,&nbsp;<script>DataEndYear(1)</script></a>&nbsp;(Million Barrels per Day)</h3></p>
<img src="images/petro_flow_2011_med.png" alt="Petroleum Energy Flow diagram image">
<p align="left">
<strong>Footnotes:</strong><br />
<sup>1</sup>&nbsp;Unfinished oils, hydrogen/oxygenates/renewables/other hydrocarbons, and motor gasoline
and aviation gasoline blending components.<br />
<sup>2</sup>&nbsp;Renewable fuels and oxygenate plant net production (0.972), net imports (1.164) and adjustments
(0.122) minus stock change (0.019) and product supplied (0.001).<br />
<sup>3</sup>&nbsp;Finished petroleum products, liquefied petroleum gases, and pentanes plus.<br />
<sup>4</sup>&nbsp;Natural gas plant liquids.<br />
<sup>5</sup>&nbsp;Field production (2.183) and renewable fuels and oxygenate plant net production (-.019) minus refinery and blender net imputs (0.489).<br />
<sup>6</sup>&nbsp;Production minus refinery input.<br />
(s)= Less than 0.005.<br />
<br />
<strong>Notes:</strong><br />
&bull;&nbsp;Data are preliminary.<br />
&bull;&nbsp;Values are derived from source data prior to rounding for publication.<br />
&bull;&nbsp;Totals may not equal sum of components due to independent rounding.<br />
<br />
<strong>Sources:</strong><br />
U.S. Energy Information Administration, <a href="/totalenergy/data/annual/pdf/aer.pdf">Annual Energy Review 2011</a>
&nbsp;Tables 5.1b, 5.3, 5.5, 5.8, 5.11, 5.13a-5.13d, 5.16;&nbsp;U.S. Energy Information Administration, <a href="/petroleum/supply/monthly/archive/2012/2012_02/psm_2012_02.cfm"><i>Petroleum Supply Monthly</i></a>, February 2012, Table 4; and revisions to crude oil production and adjustments (see sources for Table 5.1b).
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