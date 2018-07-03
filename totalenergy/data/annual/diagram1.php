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
<?php /* File Name:  diagram1.php   */ ?>
<?php /* Purpose:    Display the Energy Flow diagram*/ ?>
<?php /* Revision date:  September 27, 2012  */ ?>
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
<p><h3><a href="/totalenergy/data/annual/pdf/sec1_3.pdf" class="ico_pdf">Total Energy Flow,&nbsp;<script>DataEndYear(1)</script></a>&nbsp;(Quadrillion Btu)</h3></p>
<img src="images/overview_flow_2011_med.png" alt="Total Energy Flow diagram image">
<p align="left">
<strong>Footnotes:</strong><br />
<sup>1</sup>&nbsp;Includes lease condensate.<br />
<sup>2</sup>&nbsp;Natural gas plant liquids.<br />
<sup>3</sup>&nbsp;Conventional hydroelectric power, biomass, geothermal, solar/photovoltaic, and wind.<br />
<sup>4</sup>&nbsp;Crude oil and petroleum products. Includes imports into the Strategic Petroleum Reserve.<br />
<sup>5</sup>&nbsp;Natural gas, coal, coal coke, biofuels, and electricity.<br />
<sup>6</sup>&nbsp;Adjustments, losses, and unaccounted for.<br />
<sup>7</sup>&nbsp;Natural gas only; excludes supplemental gaseous fuels.<br />
<sup>8</sup>&nbsp;Petroleum products, including natural gas plant liquids, and crude oil burned as fuel.<br />
<sup>9</sup>&nbsp;Includes 0.01 quadrillion Btu of coal coke net exports.<br />
<sup>10</sup>&nbsp;Includes 0.13 quadrillion Btu of electricity net imports.<br />
<sup>11</sup>&nbsp;Total energy consumption, which is the sum of primary energy consumption,
electricity retail sales, and electrical system energy losses. Losses are allocated to the
end-use sectors in proportion to each sector's share of total electricity retail sales. See
Note, "Electrical Systems Energy Losses," at end of Section 2.<br />
<br />
<strong>Notes:</strong><br />
&bull;&nbsp;Data are preliminary.<br />
&bull;&nbsp;Values are derived from source data prior to rounding for publication.<br />
&bull;&nbsp;Totals may not equal sum of components due to independent rounding.<br />
<br />
<strong>Sources:</strong><br />
U.S. Energy Information Administration, <a href="/totalenergy/data/annual/pdf/aer.pdf">Annual Energy Review 2011</a>&nbsp;Tables 1.1, 1.2, 1.3, 1.4, and 2.1a.
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