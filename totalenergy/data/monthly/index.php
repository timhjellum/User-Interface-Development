<?php $locale = 'data'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<title>Monthly Energy Review - Energy Information Administration</title>
<style>
.contable td:empty {
	background-color: transparent!important;
}
</style>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>

<body>
<?php /* Start of Outer Wrapper */ ?>
<div id="outerX">
<?php /* EIA Header */ ?>
<?php include ('global/includes/eia_header.inc') ; ?>
<?php /* Navigation Menu */ ?>
<?php include ('totalenergy/includes/subnav_allsources.inc') ; ?>

          <div class="l-row">
          <div class="l-main-col">
          <h1>Monthly Energy Review</h1>
	   
          <?php include ('includes/release_date.inc') ; ?>

          <p>A publication of recent and historical energy statistics. This publication includes statistics on total energy production, consumption, and trade; energy prices; overviews of petroleum, natural gas, coal, electricity, nuclear energy, renewable energy, and international petroleum; carbon dioxide emissions; and data unit conversion values.</p>
          <div class="tie_correction">
<?php /*<p>EIA has expanded Sections 1 through 10 and Appendix A of the <em>Monthly Energy Review</em> (MER) to incorporate annual data as far back as 1949 in those data tables that are published in both the <em>Annual Energy Review</em> 2011 and MER. Similar revisions are pending for Section 12.</p>
<p>Where available, Excel and CSV files now include pre-1973 data. For tables containing monthly and annual data, the Excel files now have two worksheets, one for monthly data and one for annual data.
</p>*/ ?>
<p>The tables and graphs from the <em>Monthly Energy Review </em>are  available in an interactive format on <a href="/totalenergy/data/browser/">EIA's Total Energy Data Browser</a>.</p>
<p>Previous editions of the MER are available from January 1980 forward.</p>
<p>EIA periodically adds tables to the MER containing data previously published in the <em>Annual Energy Review</em>, which has been discontinued. For a record of the MER expansion, please see &quot;<a href="/totalenergy/data/monthly/whatsnew.cfm">What's New  in the Monthly Energy Review - Content Changes</a>."</p>
<?php /* <p><i>Note</i>: PDF files display selected annual and monthly data; Excel and CSV files display all available annual and monthly data, often at a greater level of precision than the PDF files.</p> */ ?>
            <?php include('includes/main-data.inc'); ?>
          </div>
          <div class="l-narrow-col">
            <?php include('includes/side-data.inc') ?><?php include ('includes/monthly_content.inc') ; ?>
          </div>
        </div>
        <?php include('css_rehab/archive/global/footer/includes/footer.inc') ?>
        </body>
        </html>