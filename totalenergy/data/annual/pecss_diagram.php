<?php $locale = 'data'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<?php /* ******************************************* */ ?>
<?php /* File Name:  pecss_diagram.cfm               */ ?>
<?php /* Purpose:    Display the Energy Flow diagram */ ?>
<?php /* Revision date:   September 27, 2012         */ ?>
<?php /* ******************************************* */ ?>
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
<p><h3><a href="/totalenergy/data/annual/pdf/sec2_3.pdf" class="ico_pdf">Primary Energy Consumption by Source and Sector, 2011</a>&nbsp;(Quadrillion Btu)</h3></p>
<img src="images/pecss_btu_2011_med.jpg" alt="Primary Energy Consumption by Source and Sector diagram image" border="0">
<?php /* Start of old Primary Energy Consumption by Source and Sector by Percentage diagram - Commented out by CA2 on 8/30/2012  */ ?>
<?php /*
<img src="images/pecss_btu_2011_med.jpg" alt="Primary Energy Consumption by Source and Sector diagram image" border="0" usemap="#Map">
<map name="Map" id="Map">
  <area shape="rect" coords="117,3,229,19" href="pecss_diagram2.cfm" alt="see also by percent" />
</map>
*/ ?>
<?php /* End of old Primary Energy Consumption by Source and Sector by Percentage diagram - Commented out by CA2 on 8/30/2012 */ ?>
<p align="left">
  <strong>Footnotes:</strong><br />
<sup>1</sup>&nbsp;Does not include biofuels that have been blended with petroleum&ndash;biofuels are included in
"Renewable Energy."<br />
<sup>2</sup>&nbsp;Excludes supplemental gaseous fuels.<br />
<sup>3</sup>&nbsp;Includes less than 0.1 quadrillion Btu of coal coke net exports.<br />
<sup>4</sup>&nbsp;Conventional hydroelectric power, geothermal, solar/PV, wind, and biomass.<br />
<sup>5</sup>&nbsp;Includes industrial combined-heat-and-power (CHP) and industrial electricity-only plants.<br />
<sup>6</sup>&nbsp;Includes commercial combined-heat-and-power (CHP) and commercial electricity-only plants.<br />
<sup>7</sup>&nbsp;Electricity-only and combined-heat-and-power (CHP) plants whose primary business is to
sell electricity, or electricity and heat, to the public.  Includes 0.1 quadrillion Btu of electricity net imports not shown under "Source."<br />
<br />
<strong>Notes:</strong><br />
Primary energy in the form that it is first accounted for in a statistical energy balance, before any transformation to secondary or tertiary forms of energy (for example, coal is used to generate electricity).&nbsp;&nbsp;&bull;&nbsp;Sum of components may not equal total due to independent rounding.<br />
<br />
<strong>Sources:</strong><br />
U.S. Energy Information Administration, <a href="/totalenergy/data/annual/pdf/aer.pdf">Annual Energy Review 2011</a>, Tables 1.3, 2.1b-2.1f , 10.3, and 10.4.<br />
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