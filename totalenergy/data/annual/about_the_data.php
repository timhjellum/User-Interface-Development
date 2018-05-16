<?php $locale = 'data'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<?php /* ****************************************************************** */ ?>
<?php /*   File Name:            about_the_data.cfm                         */ ?>
<?php /*   Purpose:              A summary  on the type of data used        */ ?>
<?php /*   Revision date:        September 27, 2012                         */ ?>
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
	      <?php /* Start of Total Energy - Annual */ ?>
          <h1>Annual Energy Review</h1>
	      <?php /* Start of release date of AER */ ?>
          <p class="dat"><?php include ('includes/release_date.inc') ; ?></p>
	      <?php /* End of release date of AER */ ?>
			<h1>Important notes about the data</h1> <?php /* <hr /> */ ?>
			<p align="left"><b><i>Note:</i></b>&nbsp;&nbsp;The emphasis of the <b><i>Annual Energy Review (AER)</i></b> is on long-term trends.  Analysts may wish to use the data in this report in conjunction with EIA's monthly releases that offer updates to the most recent years' data.  In particular, see the <a href="/totalenergy/data/monthly/">Monthly Energy Review</a> for statistics that include updates to many of the annual series in this report.</p>
			<p align="left"><b><i>Data Years Displayed:</i></b>&nbsp;&nbsp;For tables beginning in 1949, some early years (usually 1951-1954, 1956-1959, 1961-1964, 1966-1969, and 1971-1974) are not shown on the tables in the printed report or the PDF formats; however, all years of data are shown in the Excel formats and the HTML formats.</p>
			<p align="left"><b><i>Comprehensive Changes:</i></b> Most <b><i>AER 2011</i></b> tables and figures carry a new year of data (usually 2011), which are often preliminary and likely to be revised next year, and revisions to much of the 2010 data, which are now final in many cases.</p>

	      <?php /* Start of Annual Total Energy Subject Matter Contact link */ ?>	
         <br /><br /><p><b><a href="/about/contact/totalenergy.cfm">Total Energy Experts</a></b></p>   
	      <?php /* End of Annual Total Energy Subject Matter Contact link */ ?>	

	      <?php /* End of Total Energy - Annual */ ?>
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