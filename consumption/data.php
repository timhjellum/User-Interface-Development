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
  <?php include ('includes/subnav_consumption.inc') ; ?>
  <?php /* Page/Body Content */ ?>

  <div class="pagecontent mr_temp2">
    <?php /* Start of Main Column */ ?>
    <div class="main_col">
      <p>Find statistics on energy consumption and efficiency  across all fuel sources.</p>
      <span class="condaterange"><a class="no-border expandall">+ EXPAND ALL</a></span>

      <table class="contable">
        <thead id="rec">
        	<tr>
        	  <th><a name="rec"></a><strong>Residential Energy Consumption Survey data</strong></th>
        	  <th width="30%">&nbsp;</th>
          </tr>
        </thead>
        <tr class="white_first">
          <td>
          	<?php /* Data Info */ ?>
       	<strong><a href="/consumption/residential/data/2015/index.php?view=characteristics">Household characteristics</a></strong><br />
          		<em class="hideme">Release Date: February 27, 2017</em><br />
          		 Characteristics data (including structural features, appliance stock, electronics stock, and square footage) for occupied primary housing units.
            </em>
          </td>
          <td><span class="right">
          	 <?php /* Alternate Formats */ ?>

          </span></td>
        </tr>      
        <tr>
          <td>
          	<?php /* Data Info */ ?>
<strong><a href="/consumption/residential/data/2015/index.php?view=consumption">Home energy use &amp; costs</a></strong><br />
          		<em class="hideme">Release Date: Anticipated Spring 2018</em><br />
          		Energy consumption and expenditures for occupied primary housing units by end uses and by fuel.

          </td>
          <td><span class="right">
          	 <?php /* Alternate Formats 
          	 <a href="#" class="ico_pdf">PDF</a>*/ ?>
          </span></td>
        </tr>      
        <tr>
          <td>
          	<?php /* Data Info */ ?>
   	<strong><a href="/consumption/residential/data/2015/index.php?view=microdata">Detailed household microdata</a></strong><br />
          		<em class="hideme">Release Date: October 2017</em><br />
   		   Data are available in two formats: CSV (a comma delimited file) and a SAS data file.
          </td>
          <td><span class="right">
          	 <?php /* Alternate Formats 
          	 <a href="#" class="ico_pdf">PDF</a>*/ ?>
          </span></td>
        </tr>      


        <thead id="cec">
        	<tr>
        	  <th><a name="cec"></a><strong>Commercial Buildings Energy Consumption Survey data</strong></th>
        	  <th width="30%">&nbsp;</th>
          </tr>
        </thead> 
        <tr class="white_first">
          <td>
          	<?php /* Data Info */ ?>
       	<strong><a href="/consumption/commercial/data/2012/">Building characteristics</a></strong><br />
          		<em class="hideme">March 2015</em><br />
          		 Detailed tabulated data providing number of buildings and floorspace by characteristics such as geographic region, building activity, size and age, employment and occupancy, energy sources used, and energy-related equipment.<br />
            </em>
          </td>
          <td><span class="right">
          	<?php /* Alternate Formats */ ?>
          </span></td>
        </tr>      
        <tr>
          <td>
          	<?php /* Data Info */ ?>
       	<strong><a href="/consumption/commercial/data/2012/index.cfm?view=consumption">Consumption and Expenditures</a></strong><br />
          		<em class="hideme">Release Date: May, 2016</em><br />
          		 Detailed tabulated data providing total energy, electricity, natural gas, fuel oil and district heat consumption figures and data by end use (heating, cooling, lighting, etc.).  <br />
            </em>
          </td>
          <td><span class="right">
          	<?php /* Alternate Formats */ ?>
          </span></td>
        </tr>     
        <tr>
          <td>
          	<?php /* Data Info */ ?>
       	<strong><a href="/consumption/commercial/data/2012/index.cfm?view=microdata">Detailed building microdata</a></strong><br />
          		<em class="hideme">Release Date: May, 2016</em><br />
          		Raw data for 6,720 buildings for data users to create custom tables that are not available through the tabulated information. The data represent commercial buildings from the 50 States and the District of Columbia. Each record corresponds to a single responding, in-scope sampled building. Data are available in two formats: a comma delimited file (CSV) and a SAS data file. <br />
            </em>
          </td>
          <td><span class="right">
          	<?php /* Alternate Formats */ ?>
          </span></td>
        </tr>     
              
        <thead id="mfg">
        	<tr>
        	  <th><a name="mfg"></a><strong>Manufacturing Energy Consumption Survey data</strong></th>
        	  <th width="30%">&nbsp;</th>
          </tr>
        </thead>
        <tr class="white_first">
          <td>
          	<?php /* Data Info */ ?>
       	<strong>Consumption of energy for all purposes, by industry & region</strong><br />
          		<em class="hideme">Release Date: October 2017</em><br />
          </td>
          <td><span class="right"><a href="manufacturing/data/2014/XLS/Table1_1.xlsx" class="ico_xls" title="Consumption of energy for all purposes, by industry & region ">
XLS</a>&nbsp;<a href="manufacturing/data/2014/pdf/Table1_1.pdf" class="ico_pdf" title="Consumption of energy for all purposes, by industry & region ">
PDF</a></span></td>
        </tr>      
        <tr>
          <td>
          	<?php /* Data Info */ ?>
          	<strong>Energy Used as a Nonfuel (Feedstock)</strong><strong></strong><br />
<em class="hideme">Release Date: October 2017</em><br />
          </td>
          <td class="white_first"><span class="right"><a href="manufacturing/data/2014/xls/Table2_1.xlsx" class="ico_xls" title="Energy Used as a Nonfuel (Feedstock) ">
XLS</a>&nbsp;<a href="manufacturing/data/2014/pdf/Table2_1.pdf" class="ico_pdf" title="Energy Used as a Nonfuel (Feedstock) ">
PDF</a></span></td>
        </tr>      
        <tr>
          <td>
          	<?php /* Data Info */ ?>
       	<strong>Energy consumption as a fuel</strong><strong>, by industry &amp; region</strong><br />
<em class="hideme">Release Date: October 2017</em><br />
          </td>
          <td class="white_first"><span class="right"><a href="manufacturing/data/2014/xls/Table3_1.xlsx" class="ico_xls" title="Energy consumption as a fuel, by industry & region ">
XLS</a>&nbsp;<a href="manufacturing/data/2014/pdf/Table3_1.pdf" class="ico_pdf" title="Energy consumption as a fuel, by industry & region ">
PDF</a></span></td>
        </tr>      
        <tr>
          <td>
          	<?php /* Data Info */ ?>
   	<strong>Offsite-produced fuel consumption, by industry </strong><br />
<em class="hideme">Release Date: October 2017</em><br /></td>
          <td class="white_first"><span class="right"><a href="manufacturing/data/2014/xls/Table4_1.xlsx" class="ico_xls" title="Offsite-produced fuel consumption, by industry  ">
XLS</a>&nbsp;<a href="manufacturing/data/2014/pdf/Table4_1.pdf" class="ico_pdf" title="Offsite-produced fuel consumption, by industry  ">
PDF</a></span></td>
        </tr>      
        <tr>
          <td>
          	<?php /* Data Info */ ?>
   	<strong>Total consumption of electricity</strong><strong>, by industry &amp; region</strong><br />
<em class="hideme">Release Date: October 2017</em><br />
          </td>
          <td class="white_first"><span class="right"><a href="manufacturing/data/2014/xls/Table11_1.xlsx" class="ico_xls" title="Total consumption of electricity, by industry & region ">
XLS</a>&nbsp;<a href="manufacturing/data/2014/pdf/Table11_1.pdf" class="ico_pdf" title="Total consumption of electricity, by industry & region ">
PDF</a></span></td>
        </tr>   
<!--        <tr>
          <td><strong><a href="../consumption/manufacturing/reports/archive/mecs_trend_9802/mecs_trend9802.html">Manufacturing industry trend data</a></strong><br />
Years 1998, 2002, and 2006 </td></tr>  -->  
        
        <!--
        <thead id="vehicles">
        	<tr>
        	  <th><a name="vehicles"></a><strong>Vehicle Energy Consumption Survey data</strong></th>
        	  <th width="30%">&nbsp;</th>
          </tr>
        </thead>
        <tr class="white_first">
          <td>
          	<?php /* Data Info */ ?>
          	<strong><a href="/consumption/archive/rtecs/nhts_survey/2001/tablefiles/page_a01.html">Vehicle characteristics</a></strong><br />
          		<em class="hideme">Release Date: November, 2005</em><br />
            </em>
          </td>
          <td><span class="right">
          	<?php /* Alternate Formats */ ?>
          </span></td>
        </tr>      
        <tr>
          <td>
          	<?php /* Data Info */ ?>
          	<strong><a href="/consumption/archive/rtecs/nhts_survey/2001/tablefiles/page_a04.html">Vehicle stock</a></strong><br />
          		<em class="hideme">Release Date: November, 2005</em><br />
            </em>
          </td>
          <td><span class="right">
          	<?php /* Alternate Formats */ ?>
          </span></td>
        </tr>      
        <tr>
          <td>
          	<?php /* Data Info */ ?>
          	<strong><a href="/consumption/archive/rtecs/nhts_survey/2001/tablefiles/page_a02.html">Fuel consumption</a></strong><br />
          		<em class="hideme">Release Date: November, 2005</em><br />
            </em>
          </td>
          <td><span class="right">
          	<?php /* Alternate Formats */ ?>
          </span></td>
        </tr>      


        <thead id="intensity">
        	<tr>
        	  <th><a name="intensity"></a><strong>Energy intensity</strong></th>
        	  <th width="30%">&nbsp;</th>
          </tr>
        </thead> 
        <tr class="white_first">
          <td>
          	<?php /* Data Info */ ?>
       	<strong><a href="/consumption/residential/data/2009/index.cfm?view=consumption#summary">Residential</a></strong><br />
          		<em class="hideme">Release Date: August, 2004</em><br />
            </em>
          </td>
          <td><span class="right">
          	<?php /* Alternate Formats */ ?>
          </span></td>
        </tr>      
        <tr>
          <td>
          	<?php /* Data Info */ ?>
   	<strong><a href="/consumption/commercial/data/2003/index.cfm?view=consumption">Commercial buildings</a></strong><br />
          		<em class="hideme">Release Date: December, 2004</em><br />
          		
            </em>
          </td>
          <td><span class="right">
          	<?php /* Alternate Formats */ ?>
          </span></td>
        </tr>      
        <tr>
          <td>
          	<?php /* Data Info */ ?>
       	<strong><a href="manufacturing/reports/archive/iron_steel_9802/steel_9802_data.html">Manufacturing industries</a></strong><br />
          		<?php /* <em class="hideme">No Release Date Given</em><br /> */ ?>
          		 Data for iron and steel industry<br />
          		 1998, 2002, and 2006 Manufacturing Energy Consumption Survey (MECS)<br />
            </em>
          </td>
          <td><span class="right">
          	<?php /* Alternate Formats */ ?>
          </span></td>
        </tr>      

        <thead id="consumption">
        	<tr>
        	  <th><a name="consumption"></a><strong>Consumption summaries</strong></th>
        	  <th width="30%">&nbsp;</th>
          </tr>
        </thead>
        <tr class="white_first">
          <td>
          	<?php /* Data Info */ ?>
       	<strong><a href="/totalenergy/data/monthly/#consumption">Monthly</a></strong><br />
   		   <em class="hideme">Release Date: September 26, 2012</em><br />
          		 The latest energy statistics all in one place.<br />
          		 Monthly Energy Review (MER)<br />
            </em>
          </td>
          <td><span class="right">
          	<?php /* Alternate Formats */ ?>
          </span></td>
        </tr>      
        <tr>
          <td>
          	<?php /* Data Info */ ?>
       	<strong><a href="/totalenergy/data/annual/#consumption">Annual</a></strong><br />
   		   <em class="hideme">Release Date: September 27, 2012</em><br />
          		 Long-term historical statistics all in one place.<br />
          		 Annual Energy Review (AER)<br />
            </em>
          </td>
          <td><span class="right">
          	<a href="/totalenergy/data/annual/pdf/sec2.pdf" class="ico_pdf">PDF</a>
          	<?php /* Alternate Formats */ ?>
          </span></td>
        </tr>
        -->     

      
      
      </table>
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