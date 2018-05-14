<?php $locale = 'data'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>

<body>
<div id="outerX"><?php /* Outer Wrapper */ ?>
<?php include ('global/includes/eia_header.inc') ; ?>
<?php include ('includes/subnav_environment.inc') ; ?>
<?php /* Page/Body Content */ ?>
    <div class="pagecontent mr_temp2">
      <div class="main_col">
	  <?php /* Main Column */ ?>
        <p>Find environmental data on carbon dioxide emissions from energy and industry,  by consuming sector (residential, commercial, industrial, transportation,  electric power), and other emissions.</p>
        <span class="condaterange"><a class="no-border expandall">+ EXPAND ALL</a></span>
      <table class="contable">
        <?php /* BEGIN Summary Content ////////////////*/ ?>
        <thead id="summary">
          <tr>
            <th><a name="summary"></a><strong>Summary</strong></th>
            <th width="20%"><span class="right">additional formats</span></th>
          </tr>
        </thead>
        <tr class="white_first">
          <td><strong>U.S. Carbon dioxide emissions from energy consumption (from 1973) </strong><em class="hideme"><br />
            <div> <em>
              <script language="JavaScript" type="text/JavaScript" src="/totalenergy/data/monthly/txt/new_merheader.txt"></script></em> 
            </div></td>
          <td>&nbsp;</td>
        </tr>
        
         <tr>
           <td><strong>By source</strong></td>
           <td><span class="right"><a href="/totalenergy/data/monthly/pdf/sec12_3.pdf" class="ico_pdf" title="U.S. Carbon dioxide emissions By source ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T12.01&amp;freq=m" class="ico_xls" title="U.S. Carbon dioxide emissions By source ">
XLS</a></span></td>
         </tr>
         <tr>
           <td><strong>By residential sector</strong></td>
           <td><span class="right"><a href="/totalenergy/data/monthly/pdf/sec12_5.pdf" class="ico_pdf" title="U.S. Carbon dioxide emissions By residential sector ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T12.02&amp;freq=m" class="ico_xls" title="U.S. Carbon dioxide emissions By residential sector ">
XLS</a></span></td>
         </tr>
         <tr>
          <td><strong>By commercial sector </strong></td>
           <td><span class="right"><a href="/totalenergy/data/monthly/pdf/sec12_6.pdf" class="ico_pdf" title="U.S. Carbon dioxide emissions By commercial sector  ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T12.03&amp;freq=m" class="ico_xls" title="U.S. Carbon dioxide emissions By commercial sector  ">
XLS</a></span></td>
         </tr>
         <tr>
           <td><strong>By industrial sector</strong></td>
           <td><span class="right"><a href="/totalenergy/data/monthly/pdf/sec12_7.pdf" class="ico_pdf" title="U.S. Carbon dioxide emissions By industrial sector ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T12.04&amp;freq=m" class="ico_xls" title="U.S. Carbon dioxide emissions By industrial sector ">
XLS</a></span></td>
         </tr>
         <tr>
           <td><strong>By transportation sector</strong></td>
           <td><span class="right"><a href="/totalenergy/data/monthly/pdf/sec12_8.pdf" class="ico_pdf" title="U.S. Carbon dioxide emissions By transportation sector ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T12.05&amp;freq=m" class="ico_xls" title="U.S. Carbon dioxide emissions By transportation sector ">
XLS</a></span></td>
         </tr>
         <tr>
           <td><strong>By electric power</strong></td>
           <td><span class="right"><a href="/totalenergy/data/monthly/pdf/sec12_9.pdf" class="ico_pdf" title="U.S. Carbon dioxide emissions By electric power ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T12.06&amp;freq=m" class="ico_xls" title="U.S. Carbon dioxide emissions By electric power ">
XLS</a></span></td>
         </tr>
         <tr>
          <td><strong>From biomass</strong></td>
           <td><span class="right"><a href="/totalenergy/data/monthly/pdf/sec12_10.pdf" class="ico_pdf" title="U.S. Carbon dioxide emissions From biomass ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T12.07&amp;freq=m" class="ico_xls" title="U.S. Carbon dioxide emissions From biomass ">
XLS</a></span></td>
         </tr>
         <tr>
          <td><strong><a href="/environment/emissions/state/state_emissions.cfm">State CO<sub>2</sub> emissions &rsaquo;</a></strong><br />
            <em class="hideme">Release Date: October 24, 2017  </em></td>
          <td>&nbsp;</td>
        </tr>
         <tr>
          <td><p><strong><a href="/environment/emissions/co2_vol_mass.cfm">Fuel carbon dioxide emission coefficients &rsaquo;</a></strong><br />
           <em class="hideme">Release Date: February 2, 2016</em> </p></td>
          <td>&nbsp;</td>
        </tr>
        <?php /* <tr>
          <td><strong>CO<sub>2</sub> Emissions Coefficients - Quadrillion (10<sup>15</sup>) BTU</strong></td>
          <td><span class="right">XLS</span></td>
        </tr>*/ ?>
         <tr>
           <td><em class="hideme"><strong>Annual Energy Review carbon data &rsaquo;</strong><br />
Release Date: September 27, 2012</em> | data from: <em> <a href="/totalenergy/data/annual/">Annual Energy Review</a></em></td>
           <td><span class="right"><a href="/totalenergy/data/annual/pdf/sec11.pdf" class="ico_pdf" title="Annual Energy Review carbon data  ">
PDF</a></span></td>
         </tr>          
        <?php /*<tr>
          <td><strong><a href="/environment/emissions/ghg_report/ghg_gwp.cfm">High-Global Warning Potential Gasses &rsaquo;</a></strong><em class="hideme"></em><em></em></td>
          <td>&nbsp;</td>
        </tr>*/ ?>
        <?php /* END Summary Content ////////////////*/ ?>
        <?php /* BEGIN Electric Power Plant Environmental Content ////////////////*/ ?>
        <thead id="electric">
          <tr>
            <th><a name="electric"></a><strong>Electric power plant environmental</strong></th>
            <th><span class="right">&nbsp;</span></th>
          </tr>
        </thead>
        <tr class="white_first">
          <td><strong><a href="/electricity/annual/html/epa_04_01.html">Number of generators &amp; capacity &rsaquo;</a></strong><br />
            <em class="hideme">Release Date: December 7, 2017</em> | data from: <em> <a href="/electricity/annual/">Electric Power Annual</a></em></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong><a href="/electricity/annual/html/epa_09_04.html">Average flue gas desulfurization (scrubber) costs &rsaquo;</a></strong><br />
          <em class="hideme">Release Date: December 7, 2017</em> | data from:<em><a href="/electricity/annual/">Electric Power Annual</a></em><br /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong><a href="/electricity/annual/html/epa_09_01.html">Emissions from energy consumption at conventional power plants and combined-heat-and-power &rsaquo;</a></strong><br />
          <em class="hideme">Release Date: December 7, 2017</em>| data from:<em><a href="/electricity/annual/">Electric Power Annual</a></em></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong><a href="/electricity/annual/html/epa_09_02.html">Quality and net summer capacity of operable environmental equipment &rsaquo;</a></strong><br />
          <em class="hideme">Release Date: December 7, 2017</em>| data from:<em><a href="/electricity/annual/">Electric Power Annual</a></em></td>
          <td>&nbsp;</td>
        </tr>
        <?php /* END Electric Power Plant Environmental Content ////////////////*/ ?>
        <?php /* BEGIN International Emissions Content ////////////////*/ ?>
        
        <thead id="intl">
          <tr>
            <th><a name="intl"></a><strong>International emissions</strong></th>
            <th><span class="right">&nbsp;</span></th>
          </tr>
        </thead>
        <tr class="white_first">
          <td><strong><a href="/cfapps/ipdbproject/IEDIndex3.cfm?tid=90&pid=44&aid=8">Total emissions &rsaquo;</a></strong><br />            Data from: <em> <a href="/beta/international/data/browser/">International Energy Statistics </a></em></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong><a href="/cfapps/ipdbproject/iedindex3.cfm?tid=90&amp;pid=45&amp;aid=8&amp;cid=&amp;syid=2004&amp;eyid=2010&amp;unit=MTCDPP">Per capita emissions &rsaquo;</a></strong><br />
          Data from: <em><a href="/beta/international/data/browser/">International Energy Statistics </a></em></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong><a href="/cfapps/ipdbproject/iedindex3.cfm?tid=90&amp;pid=5&amp;aid=8&amp;cid=&amp;syid=2004&amp;eyid=2010&amp;unit=MMTCD">Emissions from petroleum consumption &rsaquo;</a></strong><br />
          Data from: :<em><a href="/beta/international/data/browser/">International Energy Statistics </a></em></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong><a href="/cfapps/ipdbproject/iedindex3.cfm?tid=90&amp;pid=3&amp;aid=8&amp;cid=&amp;syid=2004&amp;eyid=2010&amp;unit=MMTCD">Emissions from natural gas consumption &rsaquo;</a></strong><br />
          Data from: <em><a href="/beta/international/data/browser/">International Energy Statistics </a></em></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong><a href="/cfapps/ipdbproject/iedindex3.cfm?tid=90&amp;pid=1&amp;aid=8&amp;cid=&amp;syid=2004&amp;eyid=2010&amp;unit=MMTCD">Emissions from coal consumption &rsaquo;</a></strong><br />
          Data from: <em><a href="/beta/international/data/browser/">International Energy Statistics </a></em></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong><a href="/cfapps/ipdbproject/IEDIndex3.cfm?tid=91&pid=46&aid=31">Energy related carbon intensity &rsaquo;</a></strong><br />
          Data from: <em><a href="/beta/international/data/browser/">International Energy Statistics </a></em></td>
          <td>&nbsp;</td>
        </tr>
        <?php /* END International Emissions Content ////////////////*/ ?>
        
      </table>
            
	  <?php /* Main Column */ ?>
      </div>
      <div class="side_col right">
	  <?php /* Side Column */ ?>
          <?php include ('includes/side_data.inc') ; ?>
      <?php /* Side Column */ ?>
      </div>
    </div>
<?php /*/ Page/Body Content */ ?>
<?php include ('global/includes/eia_footer.inc') ; ?>
</div><?php /*/ Outer Wrapper */ ?>
</body>
</html>