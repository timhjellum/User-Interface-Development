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
<?php /* File Name:  diagram5.cfm   */ ?>
<?php /* Purpose:    Display the Electricity Flow diagram*/ ?>
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
<p><h3><a href="/totalenergy/data/annual/pdf/sec8_3.pdf" class="ico_pdf">Electricity Flow,&nbsp;<script>DataEndYear(1)</script></a>&nbsp;(Quadrillion Btu)</h3></p>
<img src="images/elect_flow_2011_med.png" alt="Electricity Flow diagram image">
<p align="left">
<strong>Footnotes:</strong><br />
<sup>1</sup>&nbsp;Blast furnace gas, propane gas, and other manufactured and waste gases derived from
fossil fuels.<br />
<sup>2</sup>&nbsp;Batteries, chemicals, hydrogen, pitch, purchased steam, sulfur, miscellaneous technologies,
and non-renewable waste (municipal solid waste from non-biogenic sources, and tire-derived
fuels).<br />
<sup>3</sup>&nbsp;Data collection frame differences and nonsampling error. Derived for the diagram by
subtracting the "T&nbsp;&amp;&nbsp;D Losses" estimate from "T&nbsp;&amp;&nbsp;D Losses and Unaccounted for" derived from Table 8.1.<br />
<sup>4</sup>&nbsp;Electric energy used in the operation of power plants.<br />
<sup>5</sup>&nbsp;Transmission and distribution losses (electricity losses that occur between the point of
generation and delivery to the customer) are estimated as 7 percent of gross generation.<br />
<sup>6</sup>&nbsp;Use of electricity that is 1) self-generated, 2) produced by either the same entity that
consumes the power or an affiliate, and 3) used in direct support of a service or industrial
process located within the same facility or group of facilities that house the generating equipment.
  Direct use is exclusive of station use.<br />
<br />
<strong>Notes:</strong><br />
&bull;&nbsp;Data are preliminary.<br />
&bull;&nbsp;See Note, "Electrical System Energy Losses," at the end of Section 2.<br />
&bull;&nbsp;Net generation of electricity includes pumped storage facility production minus energy used for pumping.<br />
&bull;&nbsp;Values are derived from source data prior to rounding for publication.<br />
&bull;&nbsp;Totals may not equal sum of components due to independent rounding.<br />
<br />
<strong>Sources:</strong><br />
U.S. Energy Information Administration, <a href="/totalenergy/data/annual/pdf/aer.pdf">Annual Energy Review 2011</a>&nbsp;Tables 8.1, 8.4a, 8.9, A6 (column 7), and U.S. Energy Information
Administration, Form EIA-923, "Power Plant Operations Report."
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