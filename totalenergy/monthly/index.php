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
<?php /* Page/Body Content */ ?>
    <div class="pagecontent mr_temp2">
	  <?php /* Start of Main Column */ ?>
      <div class="main_col">
	      <?php /* Start of MER */ ?>
          <h1>Monthly Energy Review</h1>
	      <?php /* Start of release date of MER */ ?>
          <?php include ('includes/release_date.inc') ; ?>
           <?php /* <div class="tie_correction">
    <p><strong>Correction notice for April 2017 release:</strong><br />
    Table E1a, "Noncombustible renewable primary energy consumption:  conventional hydroelectric power, geothermal, and wind," has been revised to show corrected values for 2015 and 2016 for geothermal direct consumption and geothermal total primary energy consumption. </p>
</div>*/ ?>
	      <?php /* End of release date of MER */ ?>
<?php /* Special 40th annivery annoucement for the MER */ ?>
<?php /*
<p>This issue marks 40 years of continuous publication of the <i>Monthly Energy Review</i>, beginning with the <a href="/totalenergy/data/monthly/archive/00357410.pdf" class="ico_pdf">October 1974 issue</a>. See <a href="pdf/mer40thnote.pdf" class="ico_pdf">Note to Readers</a> in the October 2014 issue.</p>
*/ ?>
          <p>A publication of recent and historical energy statistics. This publication includes statistics on total energy production, consumption, and trade; energy prices; overviews of petroleum, natural gas, coal, electricity, nuclear energy, renewable energy, and international petroleum; carbon dioxide emissions; and data unit conversion values.</p>
          <div class="tie_correction">
<?php /*<p>EIA has expanded Sections 1 through 10 and Appendix A of the <em>Monthly Energy Review</em> (MER) to incorporate annual data as far back as 1949 in those data tables that are published in both the <em>Annual Energy Review</em> 2011 and MER. Similar revisions are pending for Section 12.</p>
<p>Where available, Excel and CSV files now include pre-1973 data. For tables containing monthly and annual data, the Excel files now have two worksheets, one for monthly data and one for annual data.
</p>*/ ?>
<p>The tables and graphs from the <em>Monthly Energy Review </em>are  available in an interactive format on <a href="/totalenergy/data/browser/">EIA's Total Energy Data Browser</a>.</p>
<p>Previous editions of the MER are available from January 1980 forward.</p>
<p>EIA periodically adds tables to the MER containing data previously published in the <em>Annual Energy Review</em>, which has been discontinued. For a record of the MER expansion, please see &quot;<a href="/totalenergy/data/monthly/whatsnew.cfm">What's New  in the Monthly Energy Review - Content Changes</a>."</p>
<?php /* <p><i>Note</i>: PDF files display selected annual and monthly data; Excel and CSV files display all available annual and monthly data, often at a greater level of precision than the PDF files.</p> */ ?>
         </div>
    <h3>Data categories</h3></p>
          <span class="condaterange"><a class="no-border expandall">+ EXPAND ALL</a></span>
          <table class="contable">
	    <col><col><col style="background-color: #cccccc;">
<?php /* ***** Start of Energy Overview Content  ******* */ ?>
            <thead id="summary">
              <tr>
                <th style="width:280px;"><a name="summary"></a><strong>Energy overview</strong></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
              <tr>
                <td>Topic</td>
                <td><span class="right"><a href="pdf/sec1.pdf" class="pdf" title="entire section ">
PDF (entire section )</a></span></td>
                <td></td>
              </tr>
              <tr>
                <td>
                1.1&nbsp;&nbsp;Primary energy overview</a></td>
                <td><span class="right"> <a href="pdf/sec1_3.pdf" class="ico_pdf" title="Table 1.1  Primary energy overview ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T01.01&freq=m" class="ico_xls" title="Table 1.1  Primary energy overview ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T01.01" class="ico_csv" title="Table 1.1  Primary energy overview ">
CSV</a> <a href="pdf/sec1_2.pdf" class="ico_pdf" title="Table 1.1  Primary energy overview ">
GRAPH</a> 
                </span>
                </td>
                <td><span class="beta">
                <a href="/totalenergy/data/browser/index.php?tbl=T01.01#/?f=M&start=200001" title="Table 1.1  Primary energy overview  - View in Total Energy Browser">INTERACTIVE</a></span>
                </td>
              </tr>
              <tr>
                <td>
                1.2&nbsp;&nbsp;Primary energy production by source</td>
                <td><span class="right"> <a href="pdf/sec1_5.pdf" class="ico_pdf" title="Table 1.2  Primary energy production by source ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T01.02&freq=m" class="ico_xls" title="Table 1.2  Primary energy production by source ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T01.02" class="ico_csv" title="Table 1.2  Primary energy production by source ">
CSV</a> <a href="pdf/sec1_4.pdf" class="ico_pdf" title="Table 1.2  Primary energy production by source ">
GRAPH</a></span>
				</td>
                <td><span class="beta">
                <a href="/totalenergy/data/browser/index.php?tbl=T01.02#/?f=M&start=200001" title="Table 1.2  Primary energy production by source  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>1.3&nbsp;&nbsp;Primary energy consumption by source</td>
                <td><span class="right"> <a href="pdf/sec1_7.pdf" class="ico_pdf" title="Table 1.3  Primary energy consumption by source ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T01.03&freq=m" class="ico_xls" title="Table 1.3  Primary energy consumption by source ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T01.03" class="ico_csv" title="Table 1.3  Primary energy consumption by source ">
CSV</a> <a href="pdf/sec1_6.pdf" class="ico_pdf" title="Table 1.3  Primary energy consumption by source ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T01.03#/?f=M&start=200001" title="Table 1.3  Primary energy consumption by source  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>1.4a&nbsp;&nbsp;Primary energy imports by source</td>
                <td><span class="right"> <a href="pdf/sec1_10.pdf" class="ico_pdf" title="Table 1.4a  Primary energy imports by source ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T01.04A&freq=m" class="ico_xls" title="Table 1.4a  Primary energy imports by source ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T01.04A" class="ico_csv" title="Table 1.4a  Primary energy imports by source ">
CSV</a> <a href="pdf/sec1_8.pdf" class="ico_pdf" title="Table 1.4a  Primary energy imports by source ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T01.04A#/?f=M&start=200001" title="Table 1.4a  Primary energy imports by source  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>1.4b&nbsp;&nbsp;Primary energy exports<br />
                by source and total net imports</td>
                <td><span class="right"> <a href="pdf/sec1_11.pdf" class="ico_pdf" title="Table 1.4b  Primary energy exports ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T01.04B&freq=m" class="ico_xls" title="Table 1.4b  Primary energy exports ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T01.04B" class="ico_csv" title="Table 1.4b  Primary energy exports ">
CSV</a> <a href="pdf/sec1_9.pdf" class="ico_pdf" title="Table 1.4b  Primary energy exports ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T01.04B#/?f=M&start=200001" title="Table 1.4b  Primary energy exports  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>1.5&nbsp;&nbsp;Merchandise trade value</td>
                <td><span class="right"> <a href="pdf/sec1_13.pdf" class="ico_pdf" title="Table 1.5  Merchandise trade value ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T01.05&freq=m" class="ico_xls" title="Table 1.5  Merchandise trade value ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T01.05" class="ico_csv" title="Table 1.5  Merchandise trade value ">
CSV</a> <a href="pdf/sec1_12.pdf" class="ico_pdf" title="Table 1.5  Merchandise trade value ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T01.05#/?f=M&start=200001" title="Table 1.5  Merchandise trade value  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>1.6&nbsp;&nbsp;Cost of fuels to end users in real (1982-1984) dollars</td>
                <td><span class="right"> <a href="pdf/sec1_15.pdf" class="ico_pdf" title="Table 1.6  Cost of fuels to end users in real (1982-1984) dollars ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T01.06&freq=m" class="ico_xls" title="Table 1.6  Cost of fuels to end users in real (1982-1984) dollars ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T01.06" class="ico_csv" title="Table 1.6  Cost of fuels to end users in real (1982-1984) dollars ">
CSV</a> <a href="pdf/sec1_14.pdf" class="ico_pdf" title="Table 1.6  Cost of fuels to end users in real (1982-1984) dollars ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T01.06#/?f=M&start=200001" title="Table 1.6  Cost of fuels to end users in real (1982-1984) dollars  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>1.7&nbsp;&nbsp;Primary energy consumption, energy expenditures, and carbon dioxide emissions indicators</td>
                <td><span class="right"> <a href="pdf/sec1_17.pdf" class="ico_pdf" title="Table 1.7  Primary energy consumption, energy expenditures, and carbon dioxide emissions indicators ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T01.07&freq=m" class="ico_xls" title="Table 1.7  Primary energy consumption, energy expenditures, and carbon dioxide emissions indicators ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T01.07" class="ico_csv" title="Table 1.7  Primary energy consumption, energy expenditures, and carbon dioxide emissions indicators ">
CSV</a> <a href="pdf/sec1_16.pdf" class="ico_pdf" title="Table 1.7  Primary energy consumption, energy expenditures, and carbon dioxide emissions indicators ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T01.07#/?f=M&start=200001" title="Table 1.7  Primary energy consumption, energy expenditures, and carbon dioxide emissions indicators  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>1.8&nbsp;&nbsp;Motor vehicle mileage, fuel consumption, and fuel economy</td>
                <td><span class="right"> <a href="pdf/sec1_19.pdf" class="ico_pdf" title="Table 1.8  Motor vehicle mileage, fuel consumption, and fuel economy ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T01.08&freq=m" class="ico_xls" title="Table 1.8  Motor vehicle mileage, fuel consumption, and fuel economy ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T01.08" class="ico_csv" title="Table 1.8  Motor vehicle mileage, fuel consumption, and fuel economy ">
CSV</a> <a href="pdf/sec1_18.pdf" class="ico_pdf" title="Table 1.8  Motor vehicle mileage, fuel consumption, and fuel economy ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T01.08#/?f=M&start=200001" title="Table 1.8  Motor vehicle mileage, fuel consumption, and fuel economy  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>1.9&nbsp;&nbsp;Heating degree-days by Census division</td>
                <td><span class="right"><a href="pdf/sec1_20.pdf" class="ico_pdf" title="Table 1.9  Heating degree-days by Census division ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T01.09&amp;freq=m" class="ico_xls" title="Table 1.9  Heating degree-days by Census division ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T01.09" class="ico_csv" title="Table 1.9  Heating degree-days by Census division ">
CSV</a></span></td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T01.09#/?f=A&start=200001" title="Table 1.9  Heating degree-days by Census division  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>1.10&nbsp;&nbsp;Cooling degree-days by Census division</td>
                <td><span class="right"> <a href="pdf/sec1_21.pdf" class="ico_pdf" title="Table 1.10  Cooling degree-days by Census division ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T01.10&amp;freq=m" class="ico_xls" title="Table 1.10  Cooling degree-days by Census division ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T01.10" class="ico_csv" title="Table 1.10  Cooling degree-days by Census division ">
CSV</a></span></td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T01.10#/?f=A&amp;start=200001" title="Table 1.10  Cooling degree-days by Census division  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>1.11a&nbsp;&nbsp;Non-Combustion Use of Fossil Fuels in Physical Units</td>
                <td><span class="right"> <a href="pdf/sec1_22.pdf" class="ico_pdf" title="Table 1.11a  Non-Combustion Use of Fossil Fuels in Physical Units ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T01.11A&amp;freq=m" class="ico_xls" title="Table 1.11a  Non-Combustion Use of Fossil Fuels in Physical Units ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T01.11A" class="ico_csv" title="Table 1.11a  Non-Combustion Use of Fossil Fuels in Physical Units ">
CSV</a></span></td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T01.11A#/?f=A&amp;start=200001" title="Table 1.11a  Non-Combustion Use of Fossil Fuels in Physical Units  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>1.11b&nbsp;&nbsp;Heat Content of Non-Combustion Use of Fossil Fuels</td>
                <td><span class="right"> <a href="pdf/sec1_23.pdf" class="ico_pdf" title="Table 1.11b  Heat Content of Non-Combustion Use of Fossil Fuels ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T01.11B&amp;freq=m" class="ico_xls" title="Table 1.11b  Heat Content of Non-Combustion Use of Fossil Fuels ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T01.11B" class="ico_csv" title="Table 1.11b  Heat Content of Non-Combustion Use of Fossil Fuels ">
CSV</a></span></td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T01.11B#/?f=A&amp;start=200001" title="Table 1.11b  Heat Content of Non-Combustion Use of Fossil Fuels  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>Section notes</td>
                <td><span class="right"><a href="pdf/sec1_n.pdf" class="ico_pdf" title="Section 1 notes ">PDF</a></span>
				</td>
              <td></td>
              </tr>
<?php /* ***** End of Energy Overview Content  ******* */ ?>
<?php /* ***** Start of Energy Consumption by Sector Content  ******* */ ?>
            <thead id="consumption">
              <tr>
<?php /* *****                 <th><a name="consumption"></a><b>Energy Consumption</b></th>  ******* */ ?>
                <th><a name="consumption"></a><strong>Energy consumption by sector</strong></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
              <tr>
                <td>Topic</td>
                <td><span class="right"><a href="pdf/sec2.pdf" class="pdf" title="entire section 2  ">
PDF (entire section)</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>2.1&nbsp;&nbsp;Energy consumption by sector</td>
                <td><span class="right"> <a href="pdf/sec2_3.pdf" class="ico_pdf" title="Table 2.1  Energy consumption by sector ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T02.01&freq=m" class="ico_xls" title="Table 2.1  Energy consumption by sector ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T02.01" class="ico_csv" title="Table 2.1  Energy consumption by sector ">
CSV</a> <a href="pdf/sec2_2.pdf" class="ico_pdf" title="Table 2.1  Energy consumption by sector ">GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T02.01#/?f=M&start=200001" title="Table 2.1  Energy consumption by sector  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>2.2&nbsp;&nbsp;Residential sector energy consumption</td>
                <td><span class="right"> <a href="pdf/sec2_5.pdf" class="ico_pdf" title="Table 2.2  Residential sector energy consumption ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T02.02&freq=m" class="ico_xls" title="Table 2.2  Residential sector energy consumption ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T02.02" class="ico_csv" title="Table 2.2  Residential sector energy consumption ">
CSV</a> <a href="pdf/sec2_4.pdf" class="ico_pdf" title="Table 2.2  Residential sector energy consumption ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T02.02#/?f=M&start=200001" title="Table 2.2  Residential sector energy consumption  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>2.3&nbsp;&nbsp;Commercial sector energy consumption</td>
                <td><span class="right"> <a href="pdf/sec2_7.pdf" class="ico_pdf" title="Table 2.3  Commercial sector energy consumption ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T02.03&freq=m" class="ico_xls" title="Table 2.3  Commercial sector energy consumption ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T02.03" class="ico_csv" title="Table 2.3  Commercial sector energy consumption ">
CSV</a> <a href="pdf/sec2_6.pdf" class="ico_pdf" title="Table 2.3  Commercial sector energy consumption ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T02.03#/?f=M&start=200001" title="Table 2.3  Commercial sector energy consumption  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>2.4&nbsp;&nbsp;Industrial sector energy consumption</td>
                <td><span class="right"> <a href="pdf/sec2_9.pdf" class="ico_pdf" title="Table 2.4  Industrial sector energy consumption ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T02.04&freq=m" class="ico_xls" title="Table 2.4  Industrial sector energy consumption ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T02.04" class="ico_csv" title="Table 2.4  Industrial sector energy consumption ">
CSV</a> <a href="pdf/sec2_8.pdf" class="ico_pdf" title="Table 2.4  Industrial sector energy consumption ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T02.04#/?f=M&start=200001" title="Table 2.4  Industrial sector energy consumption  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>2.5&nbsp;&nbsp;Transportation sector energy consumption</td>
                <td><span class="right"> <a href="pdf/sec2_11.pdf" class="ico_pdf" title="Table 2.5  Transportation sector energy consumption ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T02.05&freq=m" class="ico_xls" title="Table 2.5  Transportation sector energy consumption ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T02.05" class="ico_csv" title="Table 2.5  Transportation sector energy consumption ">
CSV</a> <a href="pdf/sec2_10.pdf" class="ico_pdf" title="Table 2.5  Transportation sector energy consumption ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T02.05#/?f=M&start=200001" title="Table 2.5  Transportation sector energy consumption  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>2.6&nbsp;&nbsp;Electric power sector energy consumption</td>
                <td><span class="right"> <a href="pdf/sec2_13.pdf" class="ico_pdf" title="Table 2.6  Electric power sector energy consumption ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T02.06&freq=m" class="ico_xls" title="Table 2.6  Electric power sector energy consumption ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T02.06" class="ico_csv" title="Table 2.6  Electric power sector energy consumption ">
CSV</a> <a href="pdf/sec2_12.pdf" class="ico_pdf" title="Table 2.6  Electric power sector energy consumption ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T02.06#/?f=M&start=200001" title="Table 2.6  Electric power sector energy consumption  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>2.7&nbsp;&nbsp; U.S. government energy consumption by agency, fiscal years</td>
                <td><span class="right"> <a href="pdf/sec2_14.pdf" class="ico_pdf" title="Table 2.7   U.S. government energy consumption by agency, fiscal years ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T02.07&freq=m" class="ico_xls" title="Table 2.7   U.S. government energy consumption by agency, fiscal years ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T02.07" class="ico_csv" title="Table 2.7   U.S. government energy consumption by agency, fiscal years ">
CSV</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T02.07#/?f=M&start=200001" title="Table 2.7   U.S. government energy consumption by agency, fiscal years  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>2.8&nbsp;&nbsp; U.S. government energy consumption by source, fiscal years</td>
                <td><span class="right"> <a href="pdf/sec2_15.pdf" class="ico_pdf" title="Table 2.8   U.S. government energy consumption by source, fiscal years ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T02.08&freq=m" class="ico_xls" title="Table 2.8   U.S. government energy consumption by source, fiscal years ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T02.08" class="ico_csv" title="Table 2.8   U.S. government energy consumption by source, fiscal years ">
CSV</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T02.08#/?f=M&start=200001" title="Table 2.8   U.S. government energy consumption by source, fiscal years  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>Section notes</td>
                <td><span class="right"><a href="pdf/sec2_n.pdf" class="ico_pdf" title="Table 2 Section notes ">
PDF</a></span>
				</td>
              <td></td>
              </tr>
<?php /* ***** End of Energy Consumption by Sector Content  ******* */ ?>
<?php /* ***** Start of Petroleum Content  ******* */ ?>
            <thead id="petroleum">
              <tr>
                <th><a name="petroleum"></a><strong>Petroleum</strong></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
              <tr>
                <td>Topic</td>
                <td><span class="right"><a href="pdf/sec3.pdf" class="pdf" title="entire section 3  ">
PDF (entire section)</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>3.1&nbsp;&nbsp;Overview</td>
                <td><span class="right"> <a href="pdf/sec3_3.pdf" class="ico_pdf" title="Table 3.1  Overview ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T03.01&freq=m" class="ico_xls" title="Table 3.1  Overview ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T03.01" class="ico_csv" title="Table 3.1  Overview ">
CSV</a> <a href="pdf/sec3_2.pdf" class="ico_pdf" title="Table 3.1  Overview ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T03.01#/?f=M&start=200001" title="Table 3.1  Overview  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>3.2&nbsp;&nbsp;Refinery and blender net inputs and net production</td>
                <td><span class="right"> <a href="pdf/sec3_5.pdf" class="ico_pdf" title="Table 3.2  Refinery and blender net inputs and net production ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T03.02&freq=m" class="ico_xls" title="Table 3.2  Refinery and blender net inputs and net production ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T03.02" class="ico_csv" title="Table 3.2  Refinery and blender net inputs and net production ">
CSV</a> <a href="pdf/sec3_4.pdf" class="ico_pdf" title="Table 3.2  Refinery and blender net inputs and net production ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T03.02#/?f=M&start=200001" title="Table 3.2  Refinery and blender net inputs and net production  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>3.3&nbsp;&nbsp;<em>Trade</em>:</td>
                <td>&nbsp;</td>
              <td></td>
              </tr>
              <tr>
                <td>3.3a&nbsp;&nbsp;Overview</td>
                <td><span class="right"> <a href="pdf/sec3_7.pdf" class="ico_pdf" title="Table 3.3a  Trade Overview ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T03.03A&freq=m" class="ico_xls" title="Table 3.3a  Trade Overview ">XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T03.03A" class="ico_csv" title="Table 3.3a  Trade Overview ">CSV</a> <a href="pdf/sec3_6.pdf" class="ico_pdf" title="Table 3.3a  Trade Overview ">GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T03.03A#/?f=M&start=200001" title="Table 3.3a  Trade Overview  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>3.3b&nbsp;&nbsp;Imports and exports by type</td>
                <td><span class="right"> <a href="pdf/sec3_9.pdf" class="ico_pdf" title="Table 3.3b  Imports and exports by type ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T03.03B&freq=m" class="ico_xls" title="Table 3.3b  Imports and exports by type ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T03.03B" class="ico_csv" title="Table 3.3b  Imports and exports by type ">
CSV</a> <a href="pdf/sec3_8.pdf" class="ico_pdf" title="Table 3.3b  Imports and exports by type ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T03.03B#/?f=M&start=200001" title="Table 3.3b  Imports and exports by type  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>3.3c&nbsp;&nbsp;Imports from OPEC countries</td>
                <td><span class="right"> <a href="pdf/sec3_10.pdf" class="ico_pdf" title="Table 3.3c  Imports from OPEC countries ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T03.03C&freq=m" class="ico_xls" title="Table 3.3c  Imports from OPEC countries ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T03.03C" class="ico_csv" title="Table 3.3c  Imports from OPEC countries ">
CSV</a> <a href="pdf/sec3_8.pdf" class="ico_pdf" title="Table 3.3c  Imports from OPEC countries ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T03.03C#/?f=M&start=200001" title="Table 3.3c  Imports from OPEC countries  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>3.3d&nbsp;&nbsp;Imports from non-OPEC countries</td>
                <td><span class="right"> <a href="pdf/sec3_11.pdf" class="ico_pdf" title="Table 3.3d  Imports from non-OPEC countries ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T03.03D&freq=m" class="ico_xls" title="Table 3.3d  Imports from non-OPEC countries ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T03.03D" class="ico_csv" title="Table 3.3d  Imports from non-OPEC countries ">
CSV</a> <a href="pdf/sec3_8.pdf" class="ico_pdf" title="Table 3.3d  Imports from non-OPEC countries ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T03.03D#/?f=M&start=200001" title="Table 3.3d  Imports from non-OPEC countries  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>3.4&nbsp;&nbsp;Stocks</td>
                <td><span class="right"> <a href="pdf/sec3_13.pdf" class="ico_pdf" title="Table 3.4  Stocks ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T03.04&freq=m" class="ico_xls" title="Table 3.4  Stocks ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T03.04" class="ico_csv" title="Table 3.4  Stocks ">
CSV</a> <a href="pdf/sec3_12.pdf" class="ico_pdf" title="Table 3.4  Stocks ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T03.04#/?f=M&start=200001" title="Table 3.4  Stocks  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>3.5&nbsp;&nbsp;Products supplied by type</td>
                <td><span class="right"> <a href="pdf/sec3_15.pdf" class="ico_pdf" title="Table 3.5  Products supplied by type ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T03.05&freq=m" class="ico_xls" title="Table 3.5  Products supplied by type ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T03.05" class="ico_csv" title="Table 3.5  Products supplied by type ">
CSV</a> <a href="pdf/sec3_14.pdf" class="ico_pdf" title="Table 3.5  Products supplied by type ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T03.05#/?f=M&start=200001" title="Table 3.5  Products supplied by type  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>3.6&nbsp;&nbsp;Heat content of petroleum products supplied by type</td>
                <td><span class="right"> <a href="pdf/sec3_17.pdf" class="ico_pdf" title="Table 3.6  Heat content of petroleum products supplied by type ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T03.06&freq=m" class="ico_xls" title="Table 3.6  Heat content of petroleum products supplied by type ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T03.06" class="ico_csv" title="Table 3.6  Heat content of petroleum products supplied by type ">
CSV</a> <a href="pdf/sec3_16.pdf" class="ico_pdf" title="Table 3.6  Heat content of petroleum products supplied by type ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T03.06#/?f=M&start=200001" title="Table 3.6  Heat content of petroleum products supplied by type  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>3.7&nbsp;&nbsp;<em>Petroleum consumption by sector:</em></td>
                <td>&nbsp;</td>
              <td></td>
              </tr>
              <tr>
                <td>3.7a&nbsp;&nbsp;Residential and commercial sectors</td>
                <td><span class="right"> <a href="pdf/sec3_19.pdf" class="ico_pdf" title="Table 3.7a  Residential and commercial sectors ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T03.07A&freq=m" class="ico_xls" title="Table 3.7a  Residential and commercial sectors ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T03.07A" class="ico_csv" title="Table 3.7a  Residential and commercial sectors ">
CSV</a> <a href="pdf/sec3_18.pdf" class="ico_pdf" title="Table 3.7a  Residential and commercial sectors ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T03.07A#/?f=M&start=200001" title="Table 3.7a  Residential and commercial sectors  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>3.7b&nbsp;&nbsp;Industrial sector</td>
                <td><span class="right"> <a href="pdf/sec3_20.pdf" class="ico_pdf" title="Table 3.7b  Industrial sector ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T03.07B&freq=m" class="ico_xls" title="Table 3.7b  Industrial sector ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T03.07B" class="ico_csv" title="Table 3.7b  Industrial sector ">
CSV</a> <a href="pdf/sec3_18.pdf" class="ico_pdf" title="Table 3.7b  Industrial sector ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T03.07B#/?f=M&start=200001" title="Table 3.7b  Industrial sector  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>3.7c&nbsp;&nbsp;Transportation and electric power sectors</td>
                <td><span class="right"> <a href="pdf/sec3_21.pdf" class="ico_pdf" title="Table 3.7c  Transportation and electric power sectors ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T03.07C&freq=m" class="ico_xls" title="Table 3.7c  Transportation and electric power sectors ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T03.07C" class="ico_csv" title="Table 3.7c  Transportation and electric power sectors ">
CSV</a> <a href="pdf/sec3_18.pdf" class="ico_pdf" title="Table 3.7c  Transportation and electric power sectors ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T03.07C#/?f=M&start=200001" title="Table 3.7c  Transportation and electric power sectors  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>3.8&nbsp;&nbsp;<em>Heat content of petroleum consumption by sector:</em></td>
                <td>&nbsp;</td>
              <td></td>
              </tr>
              <tr>
                <td>3.8a&nbsp;&nbsp;Residential and commercial sectors</td>
                <td><span class="right"> <a href="pdf/sec3_24.pdf" class="ico_pdf" title="Table 3.8a  Residential and commercial sectors ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T03.08A&freq=m" class="ico_xls" title="Table 3.8a  Residential and commercial sectors ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T03.08A" class="ico_csv" title="Table 3.8a  Residential and commercial sectors ">
CSV</a> <a href="pdf/sec3_22.pdf" class="ico_pdf" title="Table 3.8a  Residential and commercial sectors ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T03.08A#/?f=M&start=200001" title="Table 3.8a  Residential and commercial sectors  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>3.8b&nbsp;&nbsp;Industrial sector</td>
                <td><span class="right"> <a href="pdf/sec3_25.pdf" class="ico_pdf" title="Table 3.8b  Industrial sector">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T03.08B&freq=m" class="ico_xls" title="Table 3.8b  Industrial sector">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T03.08B" class="ico_csv" title="Table 3.8b  Industrial sector">
CSV</a> <a href="pdf/sec3_22.pdf" class="ico_pdf" title="Table 3.8b  Industrial sector">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T03.08B#/?f=M&start=200001" title="Table 3.8b  Industrial sector - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>3.8c&nbsp;&nbsp;Transportation and electric power sectors</td>
                <td><span class="right"> <a href="pdf/sec3_26.pdf" class="ico_pdf" title="Table 3.8c  Transportation and electric power sectors">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T03.08C&freq=m" class="ico_xls" title="Table 3.8c  Transportation and electric power sectors">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T03.08C" class="ico_csv" title="Table 3.8c  Transportation and electric power sectors">
CSV</a> <a href="pdf/sec3_22.pdf" class="ico_pdf" title="Table 3.8c  Transportation and electric power sectors">
GRAPH</a></span></td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T03.08C#/?f=M&start=200001" title="Table 3.8c  Transportation and electric power sectors - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>Section notes</td>
                <td><span class="right"><a href="pdf/sec3_n.pdf" class="ico_pdf" title="section 3 notes ">
PDF</a></span>
				</td>
              <td></td>
              </tr>
<?php /* ***** End of Petroleum Content  ******* */ ?>
<?php /* ***** Start of Natural Gas Content  ******* */ ?>
            <thead id="naturalgas">
              <tr>
                <th><a name="naturalgas"></a><strong>Natural gas</strong></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
              <tr>
                <td>Topic</td>
                <td><span class="right"><a href="pdf/sec4.pdf" class="pdf" title="entire section 4 ">
PDF (entire section)</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>4.1&nbsp;&nbsp;Overview</td>
                <td><span class="right"> <a href="pdf/sec4_3.pdf" class="ico_pdf" title="Table 4.1  Overview ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T04.01&freq=m" class="ico_xls" title="Table 4.1  Overview ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T04.01" class="ico_csv" title="Table 4.1  Overview ">
CSV</a> <a href="pdf/sec4_2.pdf" class="ico_pdf" title="Table 4.1  Overview ">
GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T04.01#/?f=M&start=200001" title="Table 4.1  Overview  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>4.2&nbsp;&nbsp;Trade by country</td>
                <td><span class="right"> <a href="pdf/sec4_4.pdf" class="ico_pdf" title="Table 4.2  Trade by country ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T04.02&freq=m" class="ico_xls" title="Table 4.2  Trade by country ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T04.02" class="ico_csv" title="Table 4.2  Trade by country ">
CSV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T04.02#/?f=M&start=200001" title="Table 4.2  Trade by country  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>4.3&nbsp;&nbsp;Consumption by sector</td>
                <td><span class="right"> <a href="pdf/sec4_5.pdf" class="ico_pdf" title="Table 4.3  Consumption by sector ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T04.03&freq=m" class="ico_xls" title="Table 4.3  Consumption by sector ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T04.03" class="ico_csv" title="Table 4.3  Consumption by sector ">
CSV</a> <a href="pdf/sec4_2.pdf" class="ico_pdf">GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T04.03#/?f=M&start=200001" title="Table 4.3  Consumption by sector  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>4.4&nbsp;&nbsp;Underground storage</td>
                <td><span class="right"> <a href="pdf/sec4_6.pdf" class="ico_pdf" title="Underground storage ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T04.04&freq=m" class="ico_xls" title="Underground storage ">XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T04.04" class="ico_csv">CSV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php /* <a href="pdf/sec4_2.pdf" class="ico_pdf">GRAPH</a> */ ?></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T04.04#/?f=M&start=200001" title="Underground storage  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>Section notes</td>
                <td><span class="right"><a href="pdf/sec4_n.pdf" class="ico_pdf" title="Section 4 notes ">
PDF</a></span>
				</td>
              <td></td>
              </tr>
<?php /* ***** End of Natural Gas Content  ******* */ ?>
<?php /* ***** Start of Crude Oil and Natural Gas Resource Development Content  ******* */ ?>
            <thead id="crude">
              <tr>
                <th><a name="crude"></a><strong>Crude oil and natural gas resource development</strong></th>
                <th> </th>
                <th></th>
              </tr>
            </thead>
              <tr>
                <td>Topic</td>
                <td><span class="right"><a href="pdf/sec5.pdf" class="pdf" title="entire section 5 ">
PDF (entire section)</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>5.1&nbsp;&nbsp;Drilling activity measurements</td>
                <td><span class="right"> <a href="pdf/sec5_3.pdf" class="ico_pdf" title="Table 5.1  Drilling activity measurements ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T05.01&freq=m" class="ico_xls" title="Table 5.1  Drilling activity measurements ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T05.01" class="ico_csv" title="Table 5.1  Drilling activity measurements ">
CSV</a> <a href="pdf/sec5_2.pdf" class="ico_pdf">GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T05.01#/?f=M&start=200001" title="Table 5.1  Drilling activity measurements  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>5.2&nbsp;&nbsp;Exploratory and development wells</td>
                <td><span class="right"> <a href="pdf/sec5_4.pdf" class="ico_pdf" title="Table 5.2  Exploratory and development wells ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T05.02&freq=m" class="ico_xls" title="Table 5.2  Exploratory and development wells ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T05.02" class="ico_csv" title="Table 5.2  Exploratory and development wells ">
CSV</a> <a href="pdf/sec5_2.pdf" class="ico_pdf">GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T05.02#/?f=M&start=200001" title="Table 5.2  Exploratory and development wells  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
<?php /* ***** Table 5.3 discontinued due to buget cuts 11/2011 - table dropped from MER ******* */ ?>
<?php /* *****              <tr>
                <td>5.3&nbsp;&nbsp;Maximum U.S. Active Seismic Crew Counts</td>
                <td><span class="right"> <a href="pdf/sec5_5.pdf" class="ico_pdf">PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T05.03&freq=m" class="ico_xls">XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T05.03" class="ico_csv">CSV</a> <a href="pdf/sec5_2.pdf" class="ico_pdf">GRAPH</a></span>
				</td>
              <td></td>
              </tr>
******* */ ?>
              <tr>
                <td>Section notes</td>
                <td><span class="right"><a href="pdf/sec5_n.pdf" class="ico_pdf" title="Section 5 notes ">
PDF</a></span>
				</td>
              <td></td>
              </tr>
<?php /* ***** End of Crude Oil and Natural Gas Resource Development Content  ******* */ ?>
<?php /* ***** Start of Coal Content  ******* */ ?>
            <thead id="coal">
              <tr>
                <th><a name="coal"></a><strong>Coal</strong></th>
                <th> </th>
              	<th></th>
              </tr>
            </thead>
              <tr>
                <td>Topic</td>
                <td><span class="right"><a href="pdf/sec6.pdf" class="pdf" title="entire section 6 ">
PDF (entire section)</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>6.1&nbsp;&nbsp;Overview</td>
                <td><span class="right"> <a href="pdf/sec6_3.pdf" class="ico_pdf" title="Table 6.1 Overview ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T06.01&freq=m" class="ico_xls" title="Table 6.1 Overview ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T06.01" class="ico_csv" title="Table 6.1 Overview ">
CSV</a> <a href="pdf/sec6_2.pdf" class="ico_pdf">GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T06.01#/?f=M&start=200001" title="Table 6.1 Overview  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>6.2&nbsp;&nbsp;Consumption by sector</td>
                <td><span class="right"> <a href="pdf/sec6_4.pdf" class="ico_pdf" title="Table 6.2 Consumption by sector ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T06.02&freq=m" class="ico_xls" title="Table 6.2 Consumption by sector ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T06.02" class="ico_csv" title="Table 6.2 Consumption by sector ">
CSV</a> <a href="pdf/sec6_2.pdf" class="ico_pdf">GRAPH</a></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T06.02#/?f=M&start=200001" title="Table 6.2 Consumption by sector  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>6.3&nbsp;&nbsp;Stocks by sector</td>
                <td><span class="right"> <a href="pdf/sec6_5.pdf" class="ico_pdf" title="Table 6.3 Stocks by sector ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T06.03&freq=m" class="ico_xls" title="Table 6.3 Stocks by sector ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T06.03" class="ico_csv" title="Table 6.3 Stocks by sector ">
CSV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php /*<a href="pdf/sec6_2.pdf" class="ico_pdf">GRAPH</a>*/ ?></span>
				</td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T06.03#/?f=M&start=200001" title="Table 6.3 Stocks by sector  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>Section notes</td>
                <td><span class="right"><a href="pdf/sec6_n.pdf" class="ico_pdf" title="Section 6 notes ">
PDF</a></span>
				</td>
              <td></td>
              </tr>
<?php /* ***** End of Coal Content  ******* */ ?>
<?php /* ***** Start of Electricity Content  ******* */ ?>
            <thead id="electricity">
              <tr>
                <th><a name="electricity"></a><strong>Electricity</strong></th>
                <th> </th>
                <th></th>
              </tr>
            </thead>
              <tr>
                <td>Topic</td>
                <td><span class="right"><a href="pdf/sec7.pdf" class="pdf" title="entire section 7 ">
PDF (entire section)</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>7.1&nbsp;&nbsp;Overview</a></td>
                <td><span class="right"> <a href="pdf/sec7_3.pdf" class="ico_pdf" title="Table 7.1  Overview ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T07.01&freq=m" class="ico_xls" title="Table 7.1  Overview ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T07.01" class="ico_csv" title="Table 7.1  Overview ">
CSV</a> <a href="pdf/sec7_2.pdf" class="ico_pdf" title="Table 7.1  Overview ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T07.01#/?f=M&start=200001" title="Table 7.1  Overview  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>
                7.2&nbsp;&nbsp;<em>Electricity net generation:</em></td>
                <td>&nbsp;</td>
              <td></td>
              </tr>
              <tr>
                <td>7.2a&nbsp;&nbsp;Total (all sectors)</a></td>
                <td><span class="right"> <a href="pdf/sec7_5.pdf" class="ico_pdf" title="Table 7.2a  Electricity net generation: Total (all sectors) ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T07.02A&freq=m" class="ico_xls" title="Table 7.2a  Electricity net generation: Total (all sectors) ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T07.02A" class="ico_csv" title="Table 7.2a  Electricity net generation: Total (all sectors) ">
CSV</a> <a href="pdf/sec7_4.pdf" class="ico_pdf" title="Table 7.2a  Electricity net generation: Total (all sectors) ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T07.02A#/?f=M&start=200001" title="Table 7.2a  Electricity net generation: Total (all sectors)  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>7.2b&nbsp;&nbsp;Electric power sector</a></td>
                <td><span class="right"> <a href="pdf/sec7_6.pdf" class="ico_pdf" title="Table 7.2b  Electricity net generation: Electric power sector ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T07.02B&freq=m" class="ico_xls" title="Table 7.2b  Electricity net generation: Electric power sector ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T07.02B" class="ico_csv" title="Table 7.2b  Electricity net generation: Electric power sector ">
CSV</a> <a href="pdf/sec7_4.pdf" class="ico_pdf" title="Table 7.2b  Electricity net generation: Electric power sector ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T07.02B#/?f=M&start=200001" title="Table 7.2b  Electricity net generation: Electric power sector  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>7.2c&nbsp;&nbsp;Commercial and industrial sectors</a></td>
                <td><span class="right"> <a href="pdf/sec7_7.pdf" class="ico_pdf" title="Table 7.2c  Electricity net generation: Commercial and industrial sectors ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T07.02C&freq=m" class="ico_xls" title="Table 7.2c  Electricity net generation: Commercial and industrial sectors ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T07.02C" class="ico_csv" title="Table 7.2c  Electricity net generation: Commercial and industrial sectors ">
CSV</a> <a href="pdf/sec7_4.pdf" class="ico_pdf" title="Table 7.2c  Electricity net generation: Commercial and industrial sectors ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T07.02C#/?f=M&start=200001" title="Table 7.2c  Electricity net generation: Commercial and industrial sectors  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>
                7.3&nbsp;&nbsp;<em>Consumption of combustible fuels <br />
                for electricity generation:</em></td>
                <td>&nbsp;</td>
              <td></td>
              </tr>
              <tr>
                <td>
                7.3a&nbsp;&nbsp;Total (all sectors)</a></td>
                <td><span class="right"> <a href="pdf/sec7_9.pdf" class="ico_pdf" title="Table 7.3a  Consumption of combustible fuels for electricity generation: Total (all sectors) ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T07.03A&freq=m" class="ico_xls" title="Table 7.3a  Consumption of combustible fuels for electricity generation: Total (all sectors) ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T07.03A" class="ico_csv" title="Table 7.3a  Consumption of combustible fuels for electricity generation: Total (all sectors) ">
CSV</a> <a href="pdf/sec7_8.pdf" class="ico_pdf" title="Table 7.3a  Consumption of combustible fuels for electricity generation: Total (all sectors) ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T07.03A#/?f=M&start=200001" title="Table 7.3a  Consumption of combustible fuels for electricity generation: Total (all sectors)  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>7.3b&nbsp;&nbsp;Electric power sector</a></td>
                <td><span class="right"> <a href="pdf/sec7_10.pdf" class="ico_pdf" title="Table 7.3b  Consumption of combustible fuelsfor electricity generation: Electric power sector ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T07.03B&freq=m" class="ico_xls" title="Table 7.3b  Consumption of combustible fuelsfor electricity generation: Electric power sector ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T07.03B" class="ico_csv" title="Table 7.3b  Consumption of combustible fuelsfor electricity generation: Electric power sector ">
CSV</a> <a href="pdf/sec7_8.pdf" class="ico_pdf" title="Table 7.3b  Consumption of combustible fuelsfor electricity generation: Electric power sector ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T07.03B#/?f=M&start=200001" title="Table 7.3b  Consumption of combustible fuelsfor electricity generation: Electric power sector  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>7.3c&nbsp;&nbsp;Commercial and industrial sectors 
                (selected fuels)</a></td>
                <td><span class="right"> <a href="pdf/sec7_11.pdf" class="ico_pdf" title="Table 7.3c  Consumption of combustible fuelsfor electricity generation: Commercial and industrial sectors (selected fuels) ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T07.03C&freq=m" class="ico_xls" title="Table 7.3c  Consumption of combustible fuelsfor electricity generation: Commercial and industrial sectors (selected fuels) ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T07.03C" class="ico_csv" title="Table 7.3c  Consumption of combustible fuelsfor electricity generation: Commercial and industrial sectors (selected fuels) ">
CSV</a> <a href="pdf/sec7_8.pdf" class="ico_pdf" title="Table 7.3c  Consumption of combustible fuelsfor electricity generation: Commercial and industrial sectors (selected fuels) ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T07.03C#/?f=M&start=200001" title="Table 7.3c  Consumption of combustible fuelsfor electricity generation: Commercial and industrial sectors (selected fuels)  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>7.4&nbsp;&nbsp;<em>Consumption of combustible fuels <br />
                for electricity generation and useful thermal output:</em></td>
                <td>&nbsp;</td>
              <td></td>
              </tr>
              <tr>
                <td>7.4a&nbsp;&nbsp;Total (all sectors)</a></td>
                <td><span class="right"> <a href="pdf/sec7_13.pdf" class="ico_pdf" title="Table 7.4a  Consumption of combustible fuels for electricity generation and useful thermal output: Total (all sectors) ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T07.04A&freq=m" class="ico_xls" title="Table 7.4a  Consumption of combustible fuels for electricity generation and useful thermal output: Total (all sectors) ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T07.04A" class="ico_csv" title="Table 7.4a  Consumption of combustible fuels for electricity generation and useful thermal output: Total (all sectors) ">
CSV</a> <a href="pdf/sec7_12.pdf" class="ico_pdf" title="Table 7.4a  Consumption of combustible fuels for electricity generation and useful thermal output: Total (all sectors) ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T07.04A#/?f=M&start=200001" title="Table 7.4a  Consumption of combustible fuels for electricity generation and useful thermal output: Total (all sectors)  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>7.4b&nbsp;&nbsp;Electric power sector</a></td>
                <td><span class="right"> <a href="pdf/sec7_14.pdf" class="ico_pdf" title="Table 7.4b  Consumption of combustible fuels for electricity generation and useful thermal output: Electric power sector ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T07.04B&freq=m" class="ico_xls" title="Table 7.4b  Consumption of combustible fuels for electricity generation and useful thermal output: Electric power sector ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T07.04B" class="ico_csv" title="Table 7.4b  Consumption of combustible fuels for electricity generation and useful thermal output: Electric power sector ">
CSV</a> <a href="pdf/sec7_12.pdf" class="ico_pdf" title="Table 7.4b  Consumption of combustible fuels for electricity generation and useful thermal output: Electric power sector ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T07.04B#/?f=M&start=200001" title="Table 7.4b  Consumption of combustible fuels for electricity generation and useful thermal output: Electric power sector  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>7.4c&nbsp;&nbsp;Commercial and industrial sectors 
                (selected fuels)</a></td>
                <td><span class="right"> <a href="pdf/sec7_15.pdf" class="ico_pdf" title="Table 7.4c  Consumption of combustible fuels for electricity generation and useful thermal output: Commercial and industrial sectors (selected fuels) ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T07.04C&freq=m" class="ico_xls" title="Table 7.4c  Consumption of combustible fuels for electricity generation and useful thermal output: Commercial and industrial sectors (selected fuels) ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T07.04C" class="ico_csv" title="Table 7.4c  Consumption of combustible fuels for electricity generation and useful thermal output: Commercial and industrial sectors (selected fuels) ">
CSV</a> <a href="pdf/sec7_12.pdf" class="ico_pdf" title="Table 7.4c  Consumption of combustible fuels for electricity generation and useful thermal output: Commercial and industrial sectors (selected fuels) ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T07.04C#/?f=M&start=200001" title="Table 7.4c  Consumption of combustible fuels for electricity generation and useful thermal output: Commercial and industrial sectors (selected fuels)  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>7.5&nbsp;&nbsp;Stocks of coal and petroleum: electric power sector</a></td>
                <td><span class="right"> <a href="pdf/sec7_17.pdf" class="ico_pdf" title="Table 7.5  Stocks of coal and petroleum: electric power sector ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T07.05&freq=m" class="ico_xls" title="Table 7.5  Stocks of coal and petroleum: electric power sector ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T07.05" class="ico_csv" title="Table 7.5  Stocks of coal and petroleum: electric power sector ">
CSV</a> <a href="pdf/sec7_16.pdf" class="ico_pdf" title="Table 7.5  Stocks of coal and petroleum: electric power sector ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T07.05#/?f=M&start=200001" title="Table 7.5  Stocks of coal and petroleum: electric power sector  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>7.6&nbsp;&nbsp;Electricity end use</a></td>
                <td><span class="right"> <a href="pdf/sec7_19.pdf" class="ico_pdf" title="Table 7.6  Electricity end use ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T07.06&freq=m" class="ico_xls" title="Table 7.6  Electricity end use ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T07.06" class="ico_csv" title="Table 7.6  Electricity end use ">
CSV</a> <a href="pdf/sec7_18.pdf" class="ico_pdf" title="Table 7.6  Electricity end use ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T07.06#/?f=M&start=200001" title="Table 7.6  Electricity end use  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>Section notes</td>
                <td><span class="right"><a href="pdf/sec7_n.pdf" class="ico_pdf" title="Section 7 notes ">
PDF</a></span>
				</td>
              <td></td>
              </tr>
                <td><em>Other notes:</em></td>
                <td>&nbsp;</td>
              <td></td>
              </tr>
                <td>Notes on estimated monthly data 
                  (1989-2000)</td>
                <td><span class="right"><a href="pdf/historical/sec7_estimation.pdf" class="ico_pdf" title="Table Notes on estimated monthly data (1989-2000) ">
PDF</a></span>
				</td>
              <td></td>
              </tr>
                <td>Estimating power sector fuel use</td>
                <td><span class="right"><a href="pdf/historical/sec12_d.pdf" class="ico_pdf" title="Table Estimating power sector fuel use ">
PDF</a></span>
				</td>
              <td></td>
              </tr>
                <td>Allocating municipal solid waste to 
                  biogenic and <br />
                  nonbiogenic energy</td>
                <td><span class="right"><a href="pdf/historical/msw.pdf" class="ico_pdf" title="Table Allocating municipal solid waste to biogenic and nonbiogenic energy">
PDF</a></span>
				</td>
              <td></td>
              </tr>
<?php /* ***** End of Electricity Content  ******* */ ?>
<?php /* ***** Start of Nuclear Energy Content  ******* */ ?>
            <thead id="nuclear">
              <tr>
                <th><a name="nuclear"></a><strong>Nuclear energy</strong></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
              <tr>
                <td>Topic</td>
                <td><span class="right"><a href="pdf/sec8.pdf" class="pdf" title="entire section 8 ">
PDF (entire section)</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>8.1 Overview</a></td>
                <td><span class="right"> <a href="pdf/sec8_3.pdf" class="ico_pdf" title="Table 8.1 Overview ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T08.01&freq=m" class="ico_xls" title="Table 8.1 Overview ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T08.01" class="ico_csv" title="Table 8.1 Overview ">
CSV</a> <a href="pdf/sec8_2.pdf" class="ico_pdf" title="Table 8.1 Overview ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T08.01#/?f=M&start=200001" title="Table 8.1 Overview  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>Section notes</td>
                <td><span class="right"><a href="pdf/sec8_n.pdf" class="ico_pdf" title="Section 8 notes ">
PDF</a></span>
				</td>
              <td></td>
              </tr>
<?php /* ***** End of Nuclear Energy Content  ******* */ ?>
<?php /* ***** Start of Energy Prices Content  ******* */ ?>
            <thead id="prices">
              <tr>
                <th><a name="prices"></a><strong>Energy prices</strong></th>
                <th> </th>
                <th></th>
              </tr>
            </thead>
              <tr>
                <td>Topic</td>
                <td><span class="right"><a href="pdf/sec9.pdf" class="pdf" title="entire section 9 ">
PDF (entire section)</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>9.1&nbsp;&nbsp;Crude oil price summary</a></td>
                <td><span class="right"> <a href="pdf/sec9_3.pdf" class="ico_pdf" title="Table 9.1  Crude oil price summary ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T09.01&freq=m" class="ico_xls" title="Table 9.1  Crude oil price summary ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T09.01" class="ico_csv" title="Table 9.1  Crude oil price summary ">
CSV</a> <a href="pdf/sec9_2.pdf" class="ico_pdf" title="Table 9.1  Crude oil price summary ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T09.01#/?f=M&start=200001" title="Table 9.1  Crude oil price summary  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>9.2&nbsp;&nbsp;F.O.B. costs of crude oil imports from selected countries</a></td>
                <td><span class="right"> <a href="pdf/sec9_4.pdf" class="ico_pdf" title="Table 9.2  F.O.B. costs of crude oil imports from selected countries ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T09.02&freq=m" class="ico_xls" title="Table 9.2  F.O.B. costs of crude oil imports from selected countries ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T09.02" class="ico_csv" title="Table 9.2  F.O.B. costs of crude oil imports from selected countries ">
CSV</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T09.02#/?f=M&start=200001" title="Table 9.2  F.O.B. costs of crude oil imports from selected countries  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>9.3&nbsp;&nbsp;Landed costs of crude oil imports from selected countries</a></td>
                <td><span class="right"> <a href="pdf/sec9_5.pdf" class="ico_pdf" title="Table 9.3  Landed costs of crude oil imports from selected countries ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T09.03&freq=m" class="ico_xls" title="Table 9.3  Landed costs of crude oil imports from selected countries ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T09.03" class="ico_csv" title="Table 9.3  Landed costs of crude oil imports from selected countries ">
CSV</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T09.03#/?f=M&start=200001" title="Table 9.3  Landed costs of crude oil imports from selected countries  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>9.4&nbsp;&nbsp;Retail motor gasoline and on-highway diesel fuel prices</a></td>
                <td><span class="right"> <a href="pdf/sec9_6.pdf" class="ico_pdf" title="Table 9.4  Retail motor gasoline and on-highway diesel fuel prices ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T09.04&freq=m" class="ico_xls" title="Table 9.4  Retail motor gasoline and on-highway diesel fuel prices ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T09.04" class="ico_csv" title="Table 9.4  Retail motor gasoline and on-highway diesel fuel prices ">
CSV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T09.04#/?f=M&start=200001" title="Table 9.4  Retail motor gasoline and on-highway diesel fuel prices  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>9.5&nbsp;&nbsp;Refiner prices of residual fuel oil</a></td>
                <td><span class="right"> <a href="pdf/sec9_7.pdf" class="ico_pdf" title="Table 9.5  Refiner prices of residual fuel oil ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T09.05&freq=m" class="ico_xls" title="Table 9.5  Refiner prices of residual fuel oil ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T09.05" class="ico_csv" title="Table 9.5  Refiner prices of residual fuel oil ">
CSV</a> <a href="pdf/sec9_2.pdf" class="ico_pdf" title="Table 9.5  Refiner prices of residual fuel oil ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T09.05#/?f=M&start=200001" title="Table 9.5  Refiner prices of residual fuel oil  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>9.6&nbsp;&nbsp;Refiner prices of petroleum products for resale</a></td>
                <td><span class="right"> <a href="pdf/sec9_8.pdf" class="ico_pdf" title="Table 9.6  Refiner prices of petroleum products for resale ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T09.06&freq=m" class="ico_xls" title="Table 9.6  Refiner prices of petroleum products for resale ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T09.06" class="ico_csv" title="Table 9.6  Refiner prices of petroleum products for resale ">
CSV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T09.06#/?f=M&start=200001" title="Table 9.6  Refiner prices of petroleum products for resale  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>9.7&nbsp;&nbsp;Refiner prices of petroleum products to end users</a></td>
                <td><span class="right"> <a href="pdf/sec9_9.pdf" class="ico_pdf" title="Table 9.7  Refiner prices of petroleum products to end users ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T09.07&freq=m" class="ico_xls" title="Table 9.7  Refiner prices of petroleum products to end users ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T09.07" class="ico_csv" title="Table 9.7  Refiner prices of petroleum products to end users ">
CSV</a> <a href="pdf/sec9_2.pdf" class="ico_pdf">GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T09.07#/?f=M&start=200001" title="Table 9.7  Refiner prices of petroleum products to end users  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
<?php /* Commented out on 10/2012 by CA2 */ ?>
<?php /*
              <tr>
                <td><i>9.8&nbsp;&nbsp;No. 2 Distillate Prices to Residences</i></td>
                <td>&nbsp;</td>
              <td></td>
              </tr>
              <tr>
                <td>9.8a&nbsp;&nbsp;Northeastern States</td>
                <td><span class="right"> <a href="pdf/sec9_10.pdf" class="ico_pdf">PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T09.08A&freq=m" class="ico_xls">XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T09.08A" class="ico_csv">CSV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</td>
              <td></td>
              </tr>
              <tr>
                <td>9.8b&nbsp;&nbsp;Selected South Atlantic and Midwestern States</td>
                <td><span class="right"> <a href="pdf/sec9_11.pdf" class="ico_pdf">PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T09.08B&freq=m" class="ico_xls">XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T09.08B" class="ico_csv">CSV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</td>
              <td></td>
              </tr>
              <tr>
                <td>9.8c&nbsp;&nbsp;Selected Western States and U.S. Average</td>
                <td><span class="right"> <a href="pdf/sec9_12.pdf" class="ico_pdf">PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T09.08C&freq=m" class="ico_xls">XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T09.08C" class="ico_csv">CSV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</td>
              <td></td>
              </tr>
*/ ?>
              <tr>
                <td>9.8&nbsp;&nbsp;Average retail prices of electricity</a></td>
                <td><span class="right"> <a href="pdf/sec9_11.pdf" class="ico_pdf" title="Table 9.8  Average retail prices of electricity ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T09.08&freq=m" class="ico_xls" title="Table 9.8  Average retail prices of electricity ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T09.08" class="ico_csv" title="Table 9.8  Average retail prices of electricity ">
CSV</a> <a href="pdf/sec9_10.pdf" class="ico_pdf" title="Table 9.8  Average retail prices of electricity ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T09.08#/?f=M&start=200001" title="Table 9.8  Average retail prices of electricity  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>9.9&nbsp;&nbsp;Cost of fossil-fuel receipts at electric generating plants</a></td>
                <td><span class="right"> <a href="pdf/sec9_13.pdf" class="ico_pdf" title="Table 9.9  Cost of fossil-fuel receipts at electric generating plants ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T09.09&freq=m" class="ico_xls" title="Table 9.9  Cost of fossil-fuel receipts at electric generating plants ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T09.09" class="ico_csv" title="Table 9.9  Cost of fossil-fuel receipts at electric generating plants ">
CSV</a> <a href="pdf/sec9_12.pdf" class="ico_pdf" title="Table 9.9  Cost of fossil-fuel receipts at electric generating plants ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T09.09#/?f=M&start=200001" title="Table 9.9  Cost of fossil-fuel receipts at electric generating plants  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>9.10&nbsp;&nbsp;Natural gas prices</a></td>
                <td><span class="right"> <a href="pdf/sec9_15.pdf" class="ico_pdf" title="Table 9.10  Natural gas prices ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T09.10&freq=m" class="ico_xls" title="Table 9.10  Natural gas prices ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T09.10" class="ico_csv" title="Table 9.10  Natural gas prices ">
CSV</a> <a href="pdf/sec9_14.pdf" class="ico_pdf" title="Table 9.10  Natural gas prices ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T09.10#/?f=M&start=200001" title="Table 9.10  Natural gas prices  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>Section notes</td>
                <td><span class="right"><a href="pdf/sec9_n.pdf" class="ico_pdf" title="Section 9 notes ">
PDF</a>&nbsp;</span>
				</td>
              <td></td>
              </tr>
<?php /* ***** End of Energy Prices Content  ******* */ ?>
<?php /* ***** Start of Renewable Energy Content  ******* */ ?>
            <thead id="renewable">
              <tr>
                <th><a name="renewable"></a><strong>Renewable energy</strong></th>
                <th> </th>
                <th></th>
              </tr>
            </thead>
              <tr>
                <td>Topic</td>
                <td><span class="right"><a href="pdf/sec10.pdf" class="pdf" title="entire section 10 ">
PDF (entire section)</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>10.1&nbsp;&nbsp;Production and consumption by source</a></td>
                <td><span class="right"> <a href="pdf/sec10_3.pdf" class="ico_pdf" title="Table 10.1  Production and consumption by source ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T10.01&freq=m" class="ico_xls" title="Table 10.1  Production and consumption by source ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T10.01" class="ico_csv" title="Table 10.1  Production and consumption by source ">
CSV</a> <a href="pdf/sec10_2.pdf" class="ico_pdf" title="Table 10.1  Production and consumption by source ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T10.01#/?f=M&start=200001" title="Table 10.1  Production and consumption by source  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>10.2a&nbsp;&nbsp;Consumption:&nbsp;residential and commercial sectors</a></td>
                <td><span class="right"> <a href="pdf/sec10_4.pdf" class="ico_pdf" title="Table 10.2a  Consumption: residential and commercial sectors ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T10.02A&freq=m" class="ico_xls" title="Table 10.2a  Consumption: residential and commercial sectors ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T10.02A" class="ico_csv" title="Table 10.2a  Consumption: residential and commercial sectors ">
CSV</a> <a href="pdf/sec10_2.pdf" class="ico_pdf" title="Table 10.2a  Consumption: residential and commercial sectors ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T10.02A#/?f=M&start=200001" title="Table 10.2a  Consumption: residential and commercial sectors  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>10.2b&nbsp;&nbsp;Consumption:&nbsp;industrial and transportation sectors</a></td>
                <td><span class="right"> <a href="pdf/sec10_5.pdf" class="ico_pdf" title="Table 10.2b  Consumption: industrial and transportation sectors ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T10.02B&freq=m" class="ico_xls" title="Table 10.2b  Consumption: industrial and transportation sectors ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T10.02B" class="ico_csv" title="Table 10.2b  Consumption: industrial and transportation sectors ">
CSV</a> <a href="pdf/sec10_2.pdf" class="ico_pdf" title="Table 10.2b  Consumption: industrial and transportation sectors ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T10.02B#/?f=M&start=200001" title="Table 10.2b  Consumption: industrial and transportation sectors  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>10.2c&nbsp;&nbsp;Consumption:&nbsp;electric power sector</a></td>
                <td><span class="right"> <a href="pdf/sec10_6.pdf" class="ico_pdf" title="Table 10.2c  Consumption: electric power sector ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T10.02C&freq=m" class="ico_xls" title="Table 10.2c  Consumption: electric power sector ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T10.02C" class="ico_csv" title="Table 10.2c  Consumption: electric power sector ">
CSV</a> <a href="pdf/sec10_2.pdf" class="ico_pdf" title="Table 10.2c  Consumption: electric power sector ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T10.02C#/?f=M&start=200001" title="Table 10.2c  Consumption: electric power sector  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>10.3&nbsp;&nbsp;Fuel ethanol overview</a></td>
                <td><span class="right"> <a href="pdf/sec10_7.pdf" class="ico_pdf" title="Table 10.3  Fuel ethanol overview ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T10.03&freq=m" class="ico_xls" title="Table 10.3  Fuel ethanol overview ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T10.03" class="ico_csv" title="Table 10.3  Fuel ethanol overview ">
CSV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T10.03#/?f=M&start=200001" title="Table 10.3  Fuel ethanol overview  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>10.4&nbsp;&nbsp;Biodiesel and other renewable fuels overview</a></td>
                <td><span class="right"> <a href="pdf/sec10_8.pdf" class="ico_pdf" title="Table 10.4  Biodiesel and other renewable fuels overview ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T10.04&freq=m" class="ico_xls" title="Table 10.4  Biodiesel and other renewable fuels overview ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T10.04" class="ico_csv" title="Table 10.4  Biodiesel and other renewable fuels overview ">
CSV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T10.04#/?f=M&start=200001" title="Table 10.4  Biodiesel and other renewable fuels overview  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>10.5&nbsp;&nbsp;Solar Energy Consumption</a></td>
                <td><span class="right"> <a href="pdf/sec10_9.pdf" class="ico_pdf" title="Table 10.5  Solar Energy Consumption ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T10.05&amp;freq=m" class="ico_xls" title="Table 10.5  Solar Energy Consumption ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T10.05" class="ico_csv" title="Table 10.5  Solar Energy Consumption ">
CSV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T10.05#/?f=M&amp;start=200001" title="Table 10.5  Solar Energy Consumption  - View in Total Energy Browser">INTERACTIVE</a></span></td>
                <td></td>
              </tr>
              <tr>
                <td>10.6&nbsp;&nbsp; Solar Electricity Net Generation</a></td>
                <td><span class="right"> <a href="pdf/sec10_10.pdf" class="ico_pdf" title="Table 10.6   Solar Electricity Net Generation ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T10.06&amp;freq=m" class="ico_xls" title="Table 10.6   Solar Electricity Net Generation ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T10.06" class="ico_csv" title="Table 10.6   Solar Electricity Net Generation ">
CSV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T10.06#/?f=M&amp;start=200001" title="Table 10.6   Solar Electricity Net Generation  - View in Total Energy Browser">INTERACTIVE</a></span></td>
                <td></td>
              </tr>
              <tr>
                <td><em>Notes:</em></td>
                <td>&nbsp;</td>
              <td></td>
              </tr>
              <tr>
                <td>Section notes</td>
                <td><span class="right"><a href="pdf/sec10_n.pdf" class="ico_pdf" title="Section 10 notes ">
PDF</a></span>
				</td>
              <td></td>
              </tr>
              <tr>
                <td>Allocating municipal solid waste to biogenic and non-biogenic energy</td>
                <td><span class="right"><a href="pdf/historical/msw.pdf" class="ico_pdf" title="Table Allocating municipal solid waste to biogenic and non-biogenic energy ">
PDF</a></span>
				</td>
              <td></td>
              </tr>
<?php /* ***** End of Renewable Energy Content  ******* */ ?>
<?php /* ***** Start of International Petroleum Content  ******* */ ?>
            <thead id="international">
              <tr>
                <th><a name="international"></a><strong>International petroleum</strong></th>
                <th> </th>
                <th></th>
              </tr>
            </thead>
              <tr>
                <td>Topic</td>
                <td><span class="right"><a href="pdf/sec11.pdf" class="pdf" title="entire section 11 ">
PDF (entire section)</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>11.1&nbsp;&nbsp;<em>World crude oil production:</em></td>
                <td>&nbsp;</td>
              <td></td>
              </tr>
              <tr>
                <td>11.1a&nbsp;&nbsp;OPEC members</a></td>
                <td><span class="right"> <a href="pdf/sec11_4.pdf" class="ico_pdf" title="Table 11.1a  OPEC members ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T11.01A&freq=m" class="ico_xls" title="Table 11.1a  OPEC members ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T11.01A" class="ico_csv" title="Table 11.1a  OPEC members ">
CSV</a> <a href="pdf/sec11_2.pdf" class="ico_pdf" title="Table 11.1a  OPEC members ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T11.01A#/?f=M&start=200001" title="Table 11.1a  OPEC members  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>11.1b&nbsp;&nbsp;Persian Gulf nations, non-OPEC, and world</a></td>
                <td><span class="right"> <a href="pdf/sec11_5.pdf" class="ico_pdf" title="Table 11.1b  Persian Gulf nations, non-OPEC, and world ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T11.01B&freq=m" class="ico_xls" title="Table 11.1b  Persian Gulf nations, non-OPEC, and world ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T11.01B" class="ico_csv" title="Table 11.1b  Persian Gulf nations, non-OPEC, and world ">
CSV</a> <a href="pdf/sec11_3.pdf" class="ico_pdf" title="Table 11.1b  Persian Gulf nations, non-OPEC, and world ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T11.01B#/?f=M&start=200001" title="Table 11.1b  Persian Gulf nations, non-OPEC, and world  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>11.2&nbsp;&nbsp;Petroleum consumption in OECD countries</a></td>
                <td><span class="right"> <a href="pdf/sec11_7.pdf" class="ico_pdf" title="Table 11.2  Petroleum consumption in OECD countries ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T11.02&freq=m" class="ico_xls" title="Table 11.2  Petroleum consumption in OECD countries ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T11.02" class="ico_csv" title="Table 11.2  Petroleum consumption in OECD countries ">
CSV</a> <a href="pdf/sec11_6.pdf" class="ico_pdf" title="Table 11.2  Petroleum consumption in OECD countries ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T11.02#/?f=M&start=200001" title="Table 11.2  Petroleum consumption in OECD countries  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>

              <tr>
                <td>11.3&nbsp;&nbsp;Petroleum stocks in OECD countries</a></td>
                <td><span class="right"> <a href="pdf/sec11_9.pdf" class="ico_pdf" title="Table 1.3  Petroleum stocks in OECD countries ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T11.03&freq=m" class="ico_xls" title="Table 1.3  Petroleum stocks in OECD countries ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T11.03" class="ico_csv" title="Table 1.3  Petroleum stocks in OECD countries ">
CSV</a> <a href="pdf/sec11_8.pdf" class="ico_pdf" title="Table 1.3  Petroleum stocks in OECD countries ">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T11.03#/?f=M&start=200001" title="Table 1.3  Petroleum stocks in OECD countries  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>Section notes</td>
                <td><span class="right"><a href="pdf/sec11_n.pdf" class="ico_pdf" title="Section 11 notes ">
PDF</a></span>
				</td>
              <td></td>
              </tr>
<?php /* ***** End of International Petroleum Content  ******* */ ?>
<?php /* ***** Start of Environment Content  ******* */ ?>
            <thead id="environment">
              <tr>
                <th><a name="environment"></a><strong>Environment</strong></th>
                <th> </th>
              	<th></th>
              </tr>
            </thead>
              <tr>
                <td>Topic</td>
                <td><span class="right"><a href="pdf/sec12.pdf" class="pdf" title="entire section 12 ">
PDF (entire section)</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td><em>Carbon dioxide emissions from energy consumption:</em></td>
                <td>&nbsp;</td>
              <td></td>
              </tr>
              <tr>
                <td>12.1&nbsp;&nbsp;By source</a></td>
                <td><span class="right"> <a href="pdf/sec12_3.pdf" class="ico_pdf" title="Table 12.1 Carbon dioxide emissions from energy consumption: By source">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T12.01&freq=m" class="ico_xls" title="Table 12.1 Carbon dioxide emissions from energy consumption: By source">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T12.01" class="ico_csv" title="Table 12.1 Carbon dioxide emissions from energy consumption: By source">
CSV</a> <a href="pdf/sec12_2.pdf" class="ico_pdf" title="Table 12.1 Carbon dioxide emissions from energy consumption: By source">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T12.01#/?f=M&start=200001" title="Table 12.1 Carbon dioxide emissions from energy consumption: By source - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>12.2&nbsp;&nbsp;Residential sector</a></td>
                <td><span class="right"> <a href="pdf/sec12_5.pdf" class="ico_pdf" title="Table 12.2 Carbon dioxide emissions from energy consumption: Residential sector">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T12.02&freq=m" class="ico_xls" title="Table 12.2 Carbon dioxide emissions from energy consumption: Residential sector">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T12.02" class="ico_csv" title="Table 12.2 Carbon dioxide emissions from energy consumption: Residential sector">
CSV</a> <a href="pdf/sec12_4.pdf" class="ico_pdf" title="Table 12.2 Carbon dioxide emissions from energy consumption: Residential sector">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T12.02#/?f=M&start=200001" title="Table 12.2 Carbon dioxide emissions from energy consumption: Residential sector - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>12.3&nbsp;&nbsp;Commercial sector</a></td>
                <td><span class="right"> <a href="pdf/sec12_6.pdf" class="ico_pdf" title="Table 12.3 Carbon dioxide emissions from energy consumption:  Commercial sector">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T12.03&freq=m" class="ico_xls" title="Table 12.3 Carbon dioxide emissions from energy consumption:  Commercial sector">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T12.03" class="ico_csv" title="Table 12.3 Carbon dioxide emissions from energy consumption:  Commercial sector">
CSV</a> <a href="pdf/sec12_4.pdf" class="ico_pdf" title="Table 12.3 Carbon dioxide emissions from energy consumption:  Commercial sector">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T12.03#/?f=M&start=200001" title="Table 12.3 Carbon dioxide emissions from energy consumption:  Commercial sector - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>12.4&nbsp;&nbsp;Industrial sector</a></td>
                <td><span class="right"> <a href="pdf/sec12_7.pdf" class="ico_pdf" title="Table 12.4 Carbon dioxide emissions from energy consumption:  Industrial sector">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T12.04&freq=m" class="ico_xls" title="Table 12.4 Carbon dioxide emissions from energy consumption:  Industrial sector">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T12.04" class="ico_csv" title="Table 12.4 Carbon dioxide emissions from energy consumption:  Industrial sector">
CSV</a> <a href="pdf/sec12_4.pdf" class="ico_pdf" title="Table 12.4 Carbon dioxide emissions from energy consumption:  Industrial sector">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T12.04#/?f=M&start=200001" title="Table 12.4 Carbon dioxide emissions from energy consumption:  Industrial sector - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>12.5&nbsp;&nbsp;Transportation sector</a></td>
                <td><span class="right"> <a href="pdf/sec12_8.pdf" class="ico_pdf" title="Table 12.5 Carbon dioxide emissions from energy consumption:  Transportation sector">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T12.05&freq=m" class="ico_xls" title="Table 12.5 Carbon dioxide emissions from energy consumption:  Transportation sector">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T12.05" class="ico_csv" title="Table 12.5 Carbon dioxide emissions from energy consumption:  Transportation sector">
CSV</a> <a href="pdf/sec12_4.pdf" class="ico_pdf" title="Table 12.5 Carbon dioxide emissions from energy consumption:  Transportation sector">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T12.05#/?f=M&start=200001" title="Table 12.5 Carbon dioxide emissions from energy consumption:  Transportation sector - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>12.6&nbsp;&nbsp;Electric Power sector</a></td>
                <td><span class="right"> <a href="pdf/sec12_9.pdf" class="ico_pdf" title="Table 12.6 Carbon dioxide emissions from energy consumption:  Electric Power sector">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T12.06&freq=m" class="ico_xls" title="Table 12.6 Carbon dioxide emissions from energy consumption:  Electric Power sector">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T12.06" class="ico_csv" title="Table 12.6 Carbon dioxide emissions from energy consumption:  Electric Power sector">
CSV</a> <a href="pdf/sec12_4.pdf" class="ico_pdf" title="Table 12.6 Carbon dioxide emissions from energy consumption:  Electric Power sector">
GRAPH</a></span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T12.06#/?f=M&start=200001" title="Table 12.6 Carbon dioxide emissions from energy consumption:  Electric Power sector - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>
                12.7&nbsp;&nbsp;Biomass</a></td>
                <td><span class="right"> <a href="pdf/sec12_10.pdf" class="ico_pdf" title="Table 12.7 Carbon dioxide emissions from energy consumption:  Biomass">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=T12.07&freq=m" class="ico_xls" title="Table 12.7 Carbon dioxide emissions from energy consumption:  Biomass">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=T12.07" class="ico_csv" title="Table 12.7 Carbon dioxide emissions from energy consumption:  Biomass">
CSV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=T12.07#/?f=M&start=200001" title="Table 12.7 Carbon dioxide emissions from energy consumption:  Biomass - View in Total Energy Browser">INTERACTIVE</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>Section notes</td>
                <td><span class="right"><a href="pdf/sec12_n.pdf" class="ico_pdf" title="Section 12 notes ">
PDF</a></span>
				</td>
              <td></td>
              </tr>
<?php /* ***** End of Environment Content  ******* */ ?>
<?php /* ***** Start of Appendices Content  ******* */ ?>
<?php /* ***** Revised Appendices Content  ******* */ ?>
<?php /* ***** As of April 2013, the Appendices will only contain the PDF links. ******* */ ?>
<?php /* ***** All Excel and CSV links will be commented out  ******* */ ?>
            <thead id="appendices">
              <tr>
                <th><a name="appendices"></a><strong>Appendices (heat rates, conversion factors, and more)</strong></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
              <tr>
                <td>Topic</td>
                <td><span class="right"><a href="pdf/sec13.pdf" class="pdf" title="Appendices  ">
PDF (entire section)</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td><em>Approximate heat content of:</em></td>
                <td>&nbsp;</td>
              <td></td>
              </tr>
              <tr>
                <td>
                A1&nbsp;&nbsp;Petroleum and other liquids</td>
                <td><span class="right"> <a href="pdf/sec13_1.pdf" class="ico_pdf" title="Table A1  Petroleum and other liquids">
PDF</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>A2&nbsp;&nbsp;Petroleum production, imports, and exports</td>
                <td><span class="right"> <a href="pdf/sec13_2.pdf" class="ico_pdf" title="Table A2  Petroleum production, imports, and exports">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=TA2&freq=a" class="ico_xls" title="Table A2  Petroleum production, imports, and exports">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=TA2" class="ico_csv" title="Table A2  Petroleum production, imports, and exports">
CSV</a></span></td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=TA2#/?f=A&start=1991" title="Table A2  Petroleum production, imports, and exports - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>A3&nbsp;&nbsp;Petroleum consumption and fuel ethanol</td>
                <td><span class="right"> <a href="pdf/sec13_3.pdf" class="ico_pdf" title="Table A3  Petroleum consumption and fuel ethanol">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=TA3&freq=a" class="ico_xls" title="Table A3  Petroleum consumption and fuel ethanol">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=TA3" class="ico_csv" title="Table A3  Petroleum consumption and fuel ethanol">
CSV</a></span></td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=TA3#/?f=A&start=1991" title="Table A3  Petroleum consumption and fuel ethanol - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>A4&nbsp;&nbsp;Natural gas</td>
                <td><span class="right"> <a href="pdf/sec13_4.pdf" class="ico_pdf" title="Table A4  Natural gas">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=TA4&freq=a" class="ico_xls" title="Table A4  Natural gas">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=TA4" class="ico_csv" title="Table A4  Natural gas">
CSV</a></span></td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=TA4#/?f=A&start=1991" title="Table A4  Natural gas - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>A5&nbsp;&nbsp;Coal and coal coke</td>
                <td><span class="right"> <a href="pdf/sec13_5.pdf" class="ico_pdf" title="Table A5  Coal and coal coke">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=TA5&freq=a" class="ico_xls" title="Table A5  Coal and coal coke">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=TA5" class="ico_csv" title="Table A5  Coal and coal coke">
CSV</a></span></td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=TA5#/?f=A&start=1991" title="Table A5  Coal and coal coke - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>A6&nbsp;&nbsp;Approximate heat rates for electricity, <br />
                and heat content of electricity</td>
                <td><span class="right"> <a href="pdf/sec13_6.pdf" class="ico_pdf" title="Table A6  Approximate heat rates for electricity,">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=TA6&freq=a" class="ico_xls" title="Table A6  Approximate heat rates for electricity,">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=TA6" class="ico_csv" title="Table A6  Approximate heat rates for electricity,">
CSV</a></span></td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=TA6#/?f=A&start=1991" title="Table A6  Approximate heat rates for electricity, - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>Appendix A documentation</td>
                <td><span class="right">&nbsp;<a href="pdf/sec13_a_doc.pdf" class="ico_pdf" title="Appendix A documentation">
PDF</a></span>
				</td>
              <td></td>
              </tr>
              <tr>
                <td>B1&nbsp;&nbsp;Metric conversion factors</td>
                <td><span class="right">&nbsp;<a href="pdf/sec13_16.pdf" class="ico_pdf" title="Table B1  Metric conversion factors ">
PDF</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>B2&nbsp;&nbsp;Metric prefixes</td>
                <td><span class="right">&nbsp;<a href="pdf/sec13_17.pdf" class="ico_pdf" title="Table B2  Metric prefixes ">
PDF</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>B3&nbsp;&nbsp;Other physical conversion factors</td>
                <td><span class="right">&nbsp;<a href="pdf/sec13_17.pdf" class="ico_pdf" title="Table B3  Other physical conversion factors ">
PDF</a></span></td>
              <td></td>
              </tr>
              <td>C1&nbsp;&nbsp;Population, U.S. gross domestic product, and U.S. gross output</td>
                <td><span class="right"> <a href="pdf/sec13_19.pdf" class="ico_pdf" title="Table C1  Population, U.S. gross domestic product, and U.S. gross output ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=TC1&freq=a" class="ico_xls" title="Table C1  Population, U.S. gross domestic product, and U.S. gross output ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=TC1" class="ico_csv" title="Table C1  Population, U.S. gross domestic product, and U.S. gross output ">
CSV</a></span></td>
              <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=TC1#/?f=A&start=1991" title="Table C1  Population, U.S. gross domestic product, and U.S. gross output  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>D1&nbsp;&nbsp;Estimated primary energy consumption in the United States, selected years, 1635-1945</td>
                <td><span class="right">&nbsp;<a href="pdf/sec13_21.pdf" class="ico_pdf" title="Table D1  Estimated primary energy consumption in the United States, selected years, 1635-1945 ">
PDF</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>Appendix D section notes</td>
                <td><span class="right">&nbsp;<a href="pdf/sec13_22.pdf" class="ico_pdf" title="appendix D section  notes ">
PDF</a></span></td>
              <td></td>
              </tr>
              <tr>
                <td>Appendix E</td>
                <td><span class="right">&nbsp;<a href="pdf/sec13_23.pdf" class="ico_pdf" title="Appendix E ">
PDF</a></span></td>
                <td></td>
              </tr>
               <tr>
                <td>E1a&nbsp;&nbsp;Noncombustible renewable primary energy consumption: conventional hydroelectric power, geothermal, and wind</td>
                <td><span class="right"> <a href="pdf/sec13_24.pdf" class="ico_pdf" title="Table E1a  Noncombustible Renewable Primary Energy Consumption: Conventional Hydroelectric Power, Geothermal, and Wind ">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=TE1A&amp;freq=a" class="ico_xls" title="Table E1a  Noncombustible Renewable Primary Energy Consumption: Conventional Hydroelectric Power, Geothermal, and Wind ">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=TE1A" class="ico_csv" title="Table E1a  Noncombustible Renewable Primary Energy Consumption: Conventional Hydroelectric Power, Geothermal, and Wind ">
CSV</a></span></td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=TE1A#/?f=A&amp;start=1991" title="Table E1a  Noncombustible Renewable Primary Energy Consumption: Conventional Hydroelectric Power, Geothermal, and Wind  - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
              <tr>
                <td>E1b&nbsp;&nbsp;Noncombustible renewable primary energy consumption: solar and total</td>
                <td><span class="right"> <a href="pdf/sec13_25.pdf" class="ico_pdf" title="Table E1b  Noncombustible Renewable Primary Energy Consumption: Solar and Total">
PDF</a> <a href="/totalenergy/data/browser/xls.php?tbl=TE1B&amp;freq=a" class="ico_xls" title="Table E1b  Noncombustible Renewable Primary Energy Consumption: Solar and Total">
XLS</a> <a href="/totalenergy/data/browser/csv.php?tbl=TE1B" class="ico_csv" title="Table E1b  Noncombustible Renewable Primary Energy Consumption: Solar and Total">
CSV</a></span></td>
                <td><span class="beta"><a href="/totalenergy/data/browser/index.php?tbl=TE1B#/?f=A&amp;start=1991" title="Table E1b  Noncombustible Renewable Primary Energy Consumption: Solar and Total - View in Total Energy Browser">INTERACTIVE</a></span></td>
              </tr>
            <thead id="Glossary">
              <tr>
                <th><a name="Glossary"></a><strong>Glossary</strong></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
              <tr>
                <td>&nbsp;&nbsp;Glossary</td>
                <td><span class="right">&nbsp;<a href="pdf/sec14.pdf" class="ico_pdf" title="Glossary ">
PDF</a></span></td>
              <td></td>
              </tr>
<?php /* ***** End of Appendices Content  ******* */ ?>
          </table>    
<?php /* ***** Start of data experts contant  ******* */ ?>
         <br /><br /><p><b><a href="/about/contact/totalenergy.cfm">Total Energy Experts</a></b></p>   
<?php /* ***** End of data experts contant  ******* */ ?>
         <?php /* End of Total Energy : Monthly */ ?>
	  <?php /* End of Main Column */ ?>
      </div>
      <div class="side_col right">
	  <?php /* Start of Side Column */ ?>
          <?php include ('includes/monthly_content.inc') ; ?>
      <?php /* End of Side Column */ ?>
      </div>
    </div>
<?php /*/ Page/Body Content */ ?>
<?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ End of Outer Wrapper */ ?>

<script type="text/javascript">
// jQuery ready
$(function() {
	// Use an IFRAME so Fancybox 2 will display non-image (HTML) content
	$(".lightbox").fancybox({
		type: "iframe",
		fitToView: true,
		autoSize: true
	});
});
</script>
</body>
</html>