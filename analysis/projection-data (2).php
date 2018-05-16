<?php $locale = 'projectiondata'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>

<body>
<?php /* Start of Outer Wrapper */ ?>
<div id="outerX">
<?php /* EIA Header */ 
 include ('global/includes/eia_header.inc') ; 
 /* Navigation Menu */ 
 include ('includes/subnav_analysis.inc') ; 
 /* Page/Body Content */ ?>
    
    <div class="pagecontent mr_temp2">
	  <?php /* Start of Main Column */ ?>
      <div class="main_col">
	      <?php /* Start of MER */ 
           /* <p class="dat"><script type="text/javascript">PubReleaseTimeStamp()</script></p> */ ?>          </h2>
          <p>Find data from forecast models on crude oil and petroleum liquids, gasoline, diesel, natural gas, electricity, coal prices, supply, and demand projections and more.<br />
          <?php /* <a href="" class="ico_pdf">PDF</a> */ ?></p>
          <span class="condaterange"><a class="no-border expandall">+ EXPAND ALL</a></span>
          <table class="contable">
<?php /* Start of Energy Overview Content  */ ?>
            <thead id="forecasts">
              <tr>
                <th><a name="forecasts"></a><b>Monthly short-term forecasts through the next calender year</b></th>
                <th><?php /* <span class="right">additional formats</span> */ ?></th>
              </tr>
            </thead>
              <?php /*tr>
                <td>Data</td>
                <td></td>
              </tr*/ ?>
              <tr>
                <td><em><a href="/outlooks/steo/">Short-Term Energy Outlook</a></em> Released: the first Tuesday following the first Thursday of each month. </td>
               <td><span class="right">&nbsp;</span> </td> 
              </tr><tr class="white_first">
                <td><p>WF01. Average consumer prices and expenditures for heating fuels during the winter</td>
                <td><span class="right"><a href="/outlooks/steo/tables/pdf/wf-table.pdf" class="ico_pdf" title="Table  WF01. Average consumer prices and expenditures for heating fuels during the winter ">
PDF</a> </span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=3">1. U.S. energy market summary</a><br /></td>
                <td><span class="right">  <a href="/outlooks/steo/tables/pdf/1tab.pdf" class="ico_pdf" title="Table  1. U.S. energy market summary ">
PDF</a></span>				</td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=8">2. U.S. energy prices </a><br /></td>
                <td><span class="right">  <a href="/outlooks/steo/tables/pdf/2tab.pdf" class="ico_pdf" title="Table  2. U.S. energy prices  ">
PDF</a> </span>				</td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=6">3a. International crude oil and liquid fuels supply, consumption, and inventories</a></td>
                <td><span class="right">  <a href="/outlooks/steo/tables/pdf/3atab.pdf" class="ico_pdf" title="Table  3a. International crude oil and liquid fuels supply, consumption, and inventories ">
PDF</a></span>				</td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=29">3b. Non-OPEC crude oil and liquid fuels supply</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/3btab.pdf" class="ico_pdf" title="Table  3b. Non-OPEC crude oil and liquid fuels supply ">
PDF</a> </span>				</td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=7">3c. OPEC crude oil and liquid fuels supply</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/3ctab.pdf" class="ico_pdf" title="Table  3c. OPEC crude oil and liquid fuels supply ">
PDF</a> </span>				</td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=30">3d. World liquid fuels consumption</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/3dtab.pdf" class="ico_pdf" title="Table  3d. World liquid fuels consumption ">
PDF</a></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=9">4a. U.S. crude oil and liquid fuels supply, consumption, and inventories</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/4atab.pdf" class="ico_pdf" title="Table  4a. U.S. crude oil and liquid fuels supply, consumption, and inventories ">
PDF</a></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=27">4b. U.S. petroleum refinery balance</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/4btab.pdf" class="ico_pdf" title="Table  4b. U.S. petroleum refinery balance ">
PDF</a></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=10">4c. U.S. regional motor gasoline prices and inventories</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/4ctab.pdf" class="ico_pdf" title="Table  4c. U.S. regional motor gasoline prices and inventories ">
PDF</a></span></td>
              </tr>
              <?php /*<tr>
                <td><a href="/forecasts/steo/tables/?tableNumber=11">4d. U.S. regional heating oil prices and inventories</a></td>
                <td><span class="right"> <a href="/forecasts/steo/tables/pdf/4dtab.pdf" class="ico_pdf">PDF</a></span></td>
              </tr>
              <tr>
                <td><a href="/forecasts/steo/tables/?tableNumber=12">4e. U.S. regional propane prices and inventories</a></td>
                <td><span class="right"> <a href="/forecasts/steo/tables/pdf/4etab.pdf" class="ico_pdf">PDF</a></span></td>
              </tr> */ ?>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=15">5a. U.S. natural gas supply, consumption, and inventories</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/5atab.pdf" class="ico_pdf" title="Table  5a. U.S. natural gas supply, consumption, and inventories ">
PDF</a></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=16">5b. U.S. regional natural gas prices</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/5btab.pdf" class="ico_pdf" title="Table 5b. U.S. regional natural gas prices ">
PDF</a></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=18">6. &nbsp; U.S. coal supply, consumption, and inventories</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/6tab.pdf" class="ico_pdf" title="Table 6.   U.S. coal supply, consumption, and inventories ">
PDF</a></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=19">7a. U.S. electricity overview</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/7atab.pdf" class="ico_pdf" title="Table 7a. U.S. electricity overview ">
PDF</a></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=20">7b. U.S. regional electricity retail sales</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/7btab.pdf" class="ico_pdf" title="Table 7b. U.S. regional electricity retail sales ">
PDF</a></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=21">7c. U.S. regional electricity prices</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/7ctab.pdf" class="ico_pdf" title="Table 7c. U.S. regional electricity prices ">
PDF</a></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=22">7d. U.S.  electricity generation by fuel and sector</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/7dtab.pdf" class="ico_pdf" title="Table 7d. U.S. electricity generation by fuel and sector ">
PDF</a></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=23">7e. U.S. fuel consumption for electricity generation by sector</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/7etab.pdf" class="ico_pdf" title="Table 7e. U.S. fuel consumption for electricity generation by sector ">
PDF</a></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=24">8. U.S. renewable energy supply and consumption</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/8tab.pdf" class="ico_pdf" title="Table 8. U.S. renewable energy supply and consumption ">
PDF</a></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=5">9a. U.S. macroeconomic indicators and CO<sub>2</sub> emissions</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/9atab.pdf" class="ico_pdf" title="Table 9a. U.S. macroeconomic indicators and CO2 emissions ">
PDF</a></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=4">9b. U.S. regional macroeconomic data</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/9btab.pdf" class="ico_pdf" title="Table 9b. U.S. regional macroeconomic data ">
PDF</a></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/steo/tables/?tableNumber=28">9c. U.S. regional weather data</a></td>
                <td><span class="right"> <a href="/outlooks/steo/tables/pdf/9ctab.pdf" class="ico_pdf" title="Table 9c. U.S. regional weather data ">
PDF</a></span></td>
              </tr>
              
              <tr>
                <td><a href="/cfapps/ipdbproject/IEDIndex3.cfm">International petroleum supply, disposition</a><br />
                Query tool for detailed country and regional energy data (monthly, annual)</td>
                
              </tr>
<?php /* ***** End of Energy Overview Content  ******* -->
<!-- ***** Start of Energy Consumption by Sector Content  ******* */ ?>
            <thead id="annualproj">
              <tr>
                <th><a name="annualproj"></a><b>Annual projections to 2050</b></th>
                <th><?php /* <span class="right">additional formats</span> */ ?></th>
              </tr>
            </thead>
              <tr>
                <td><em><a href="/outlooks/aeo/">Annual Energy Outlook 2017</a></em> (released: January 5, 2017) -- Reference case main 21 tables<br />
                See complete table listing for <a href="/outlooks/aeo/tables_ref.cfm">reference case</a> and <a href="/outlooks/aeo/tables_side.cfm">side cases</a>. <a href="/outlooks/aeo/supplemental_case.cfm"> Supplemental case </a>(released June 26, 2017)</td>
               <td><span class="right">&nbsp;</span> </td> 
              </tr>
			  <?php /* <tr class="white_first">
                <td>Summary Reference Case Tables</td>
                <td><h2><span class="right"> <a href="/forecasts/aeo/pdf/appa.pdf" class="ico_pdf">PDF</a></span></h2></td>
              </tr>
              <tr class="white_first">
                <td>Year-by-Year Reference Case Tables</td>
                <td><h2><span class="right"> <a href="/forecasts/aeo/excel/yearbyyear.xls">XLS</a> </span></h2></td>
              </tr> */ ?>
               <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=1-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A1. Total energy supply and disposition demand</a> <br /></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_1.xlsx" class="ico_xls" title="Table  A1. Total energy supply and disposition demand ">
XLS</a>
                  <?php /* <a href="/outlooks/aeo/pdf/tbla1.pdf" class="ico_pdf">PDF</a> */ ?>
                </span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=2-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A2. Energy consumption by sector and source </a> <br /></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_2.xlsx" class="ico_xls" title="Table  A2. Energy consumption by sector and source  ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla2.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=3-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A3. Energy prices by sector and source</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_3.xlsx" class="ico_xls" title="Table  A3. Energy prices by sector and source ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla3.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=4-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A4. Residential sector key indicators and consumption</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_4.xlsx" class="ico_xls" title="Table  A4. Residential sector key indicators and consumption ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla4.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=5-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A5. Commercial sector key indicators and consumption</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_5.xlsx" class="ico_xls" title="Table  A5. Commercial sector key indicators and consumption ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla5.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=6-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A6. Industrial sector key indicators and consumption</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_6.xlsx" class="ico_xls" title="Table  A6. Industrial sector key indicators and consumption ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla6.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=7-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A7. Transportation sector key indicators and delivered energy consumption</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_7.xlsx" class="ico_xls" title="Table  A7. Transportation sector key indicators and delivered energy consumption ">
XLS</a> <?php /* <a href="/outlooks/aeo/er/pdf/tbla7.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=8-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A8. Electricity supply Disposition, prices, and emissions</a></td>
                <td><span class="right"><a href="/outlooks/aeo/excel/aeotab_8.xlsx" class="ico_xls" title="Table  A8. Electricity supply Disposition, prices, and emissions ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla8.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=9-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A9. Electricity generating capacity</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_9.xlsx" class="ico_xls" title="Table  A9. Electricity generating capacity ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla9.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=10-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A10. Electricity trade</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_10.xlsx" class="ico_xls" title="Table  A10. Electricity trade ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla10.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=11-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A11. Liquid fuels supply and disposition balance</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_11.xlsx" class="ico_xls" title="Table  A11. Liquid fuels supply and disposition balance ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla11.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=12-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A12. Petroleum product prices</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_12.xlsx" class="ico_xls" title="Table A12. Petroleum product prices ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla12.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=13-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A13. Natural gas supply, disposition, and prices</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_13.xlsx" class="ico_xls" title="Table A13. Natural gas supply, disposition, and prices ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla13.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=14-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A14. Oil and gas supply</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_14.xlsx" class="ico_xls" title="Table A14. Oil and gas supply ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla14.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=15-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A15. Coal supply, disposition, and price</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_15.xlsx" class="ico_xls" title="Table A15. Coal supply, disposition, and price ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla15.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=16-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A16. Renewable energy generating capacity and generation</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_16.xlsx" class="ico_xls" title="Table A16. Renewable energy generating capacity and generation ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla16.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=24-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A17. Renewable energy consumption by sector and source</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_17.xlsx" class="ico_xls" title="Table A17. Renewable energy consumption by sector and source ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla17.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=17-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A18. Carbon dioxide emissions by sector and source</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_18.xlsx" class="ico_xls" title="Table A18. Carbon dioxide emissions by sector and source ">
XLS</a> <?php /*<a href="/outlooks/aeo/pdf/tbla18.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=22-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A19. Energy-related carbon dioxide emissions by end-use</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_19.xlsx" class="ico_xls" title="Table A19. Energy-related carbon dioxide emissions by end-use ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla19.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=18-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A20. Macroeconomic indicators</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_20.xlsx" class="ico_xls" title="Table A20. Macroeconomic indicators ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla20.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
              <tr>
                <td><a href="/outlooks/aeo/data/browser/#/?id=19-aeo2017&amp;cases=ref2017~ref_no_cpp&amp;sourcekey=0">A21. International liquids supply disposition summary</a></td>
                <td><span class="right"> <a href="/outlooks/aeo/excel/aeotab_21.xlsx" class="ico_xls" title="Table A21. International liquids supply disposition summary ">
XLS</a> <?php /* <a href="/outlooks/aeo/pdf/tbla21.pdf" class="ico_pdf">PDF</a> */ ?></span></td>
              </tr>
                <?php /* <td><a href="/outlooks/aeo/tables_ref.cfm">Complete list of AEO tables for all projection scenarios</a></td>
                <td>&nbsp;</td>
              </tr> */ ?>
              
              
<?php /* ***** End of Energy Consumption by Sector Content  ******* -->
<!-- ***** Start of Petroleum Content  ******* */ ?>
            <thead id="intlproj">
              <tr>
                <th><a name="intlproj"></a><b>International projections to 2050</b></th>
                <th style="white-space: nowrap;"><strong><?php /*<span class="right">additional formats</span */ ?></strong></th>
              </tr>
            </thead>
             
<?php /* ***** End of Electricity Content  ******* -->
         </table>
          <table class="contable"> 
            <!-- ***** Start of Energy Overview Content  ******* --> */ ?>
            <?php /*tr>
                <td>Data</td>
                <td></td>
              </tr
            <!-- ***** End of Energy Overview Content  ******* -->
            <!-- ***** Start of Energy Consumption by Sector Content  ******* --> */ ?>
            
              <tr>
                <td><em><a href="/outlooks/ieo/">International Energy Outlook</a></em>-- Reference Case tables released: September 14, 2017</td>
                <td><a href="/outlooks/ieo/pdf/appa.pdf" class="pdf" title="International Energy Outlook ">
PDF (all tables)</a></td>
              <?php /*<td><span class="right">&nbsp;</span></td>*/ 
            
             /* <tr class="white_first">
                <td>Summary Reference Case Tables</td>
                <td><h2><span class="right"> <a href="/forecasts/aeo/pdf/appa.pdf" class="ico_pdf">PDF</a></span></h2></td>
              </tr>
              <tr class="white_first">
                <td>Year-by-Year Reference Case Tables</td>
                <td><h2><span class="right"> <a href="/forecasts/aeo/excel/yearbyyear.xls">XLS</a> </span></h2></td>
              </tr> */ ?>
            <tr class="white_first">
              <td><a href="/outlooks/aeo/data/browser/#/?id=1-IEO2017">A1. World total primary energy consumption by region</a></td>
              <td><span class="right"> <a href="/outlooks/ieo/pdf/ieotab_1.pdf" class="ico_pdf" title="Table  A1. World total primary energy consumption by region ">
PDF</a></span></td>
            </tr>
            <tr>
              <td><a href="/outlooks/aeo/data/browser/#/?id=2-IEO2017">A2. World total energy consumption by region and fuel</a><br /></td>
              <td><span class="right"> <a href="/outlooks/ieo/pdf/ieotab_2.pdf" class="ico_pdf" title="Table  A2. World total energy consumption by region and fuel ">
PDF</a></span></td>
            </tr>
            <tr>
              <td><a href="/outlooks/aeo/data/browser/#/?id=3-IEO2017">A3. World gross domestic product (GDP) by region expressed in purchasing power parity</a></td>
              <td><span class="right"> <a href="/outlooks/ieo/pdf/ieotab_3.pdf" class="ico_pdf" title="Table  A3. World gross domestic product (GDP) by region expressed in purchasing power parity ">
PDF</a></span></td>
            </tr>
            <tr>
              <td><a href="/outlooks/aeo/data/browser/#/?id=4-IEO2017">A4. World gross domestic product (GDP) by region expressed in market exchange rates</a></td>
              <td><span class="right"> <a href="/outlooks/ieo/pdf/ieotab_4.pdf" class="ico_pdf" title="Table  A4. World gross domestic product (GDP) by region expressed in market exchange rates ">
PDF</a></span></td>
            </tr>
            <tr>
              <td><a href="/outlooks/aeo/data/browser/#/?id=5-IEO2017">A5. World liquids consumption by region</a></td>
              <td><span class="right"> <a href="/outlooks/ieo/pdf/ieotab_5.pdf" class="ico_pdf" title="Table  A5. World liquids consumption by region ">
PDF</a></span></td>
            </tr>
             <tr>
              <td><a href="/outlooks/aeo/data/browser/#/?id=6-IEO2017">A6. World natural gas consumption by region</a></td>
              <td><span class="right"> <a href="/outlooks/ieo/pdf/ieotab_6.pdf" class="ico_pdf" title="Table  A6. World natural gas consumption by region ">
PDF</a></span></td>
            </tr>
             <tr>
              <td><a href="/outlooks/aeo/data/browser/#/?id=7-IEO2017">A7. World coal consumption by region</a></td>
              <td><span class="right"> <a href="/outlooks/ieo/pdf/ieotab_7.pdf" class="ico_pdf" title="Table  A7. World coal consumption by region ">
PDF</a></span></td>
            </tr>
             <tr>
              <td><a href="/outlooks/aeo/data/browser/#/?id=8-IEO2017">A8. World nuclear energy consumption by region</a></td>
              <td><span class="right"> <a href="/outlooks/ieo/pdf/ieotab_8.pdf" class="ico_pdf" title="Table  A8. World nuclear energy consumption by region ">
PDF</a></span></td>
            </tr>
             <tr>
              <td><a href="/outlooks/aeo/data/browser/#/?id=9-IEO2017">A9. World consumption of hydroelectricity and other renewable energy by region</a></td>
              <td><span class="right"> <a href="/outlooks/ieo/pdf/ieotab_9.pdf" class="ico_pdf" title="Table  A9. World consumption of hydroelectricity and other renewable energy by region ">
PDF</a></span></td>
            </tr>
            <tr>
              <td><a href="/outlooks/aeo/data/browser/#/?id=10-IEO2017">A10. World carbon dioxide emissions by region</a></td>
              <td><span class="right"> <a href="/outlooks/ieo/pdf/ieotab_10.pdf" class="ico_pdf" title="Table  A10. World carbon dioxide emissions by region ">
PDF</a></span></td>
            </tr>
           <tr>
              <td><a href="/outlooks/aeo/data/browser/#/?id=11-IEO2017">A11. World carbon dioxide emissions from liquids use by region</a></td>
              <td><span class="right"> <a href="/outlooks/ieo/pdf/ieotab_11.pdf" class="ico_pdf" title="Table  A11. World carbon dioxide emissions from liquids use by region ">
PDF</a></span></td>
            </tr>
            <tr>
              <td><a href="/outlooks/aeo/data/browser/#/?id=12-IEO2017">A12. World carbon dioxide emissions from natural gas use by region</a></td>
              <td><span class="right"> <a href="/outlooks/ieo/pdf/ieotab_12.pdf" class="ico_pdf" title="Table A12. World carbon dioxide emissions from natural gas use by region ">
PDF</a></span></td>
            </tr>
            <tr>
              <td><a href="/outlooks/aeo/data/browser/#/?id=13-IEO2017">A13. World carbon dioxide emissions from coal use by region</a></td>
              <td><span class="right"> <a href="/outlooks/ieo/pdf/ieotab_13.pdf" class="ico_pdf" title="Table A13. World carbon dioxide emissions from coal use by region ">
PDF</a></span></td>
            </tr>
            <tr>
              <td><a href="/outlooks/aeo/data/browser/#/?id=14-IEO2017">A14. World population by region</a></td>
              <td><span class="right"> <a href="/outlooks/ieo/pdf/ieotab_14.pdf" class="ico_pdf" title="Table A14. World population by region ">
PDF</a></span></td>
            </tr>
            <?php /*tr>
              <td>A7. <a href="/oiaf/aeo/tablebrowser/#release=IEO2013&amp;subject=0-IEO2013&amp;table=7-IEO2013&amp;region=0-0&amp;cases=Reference-d041117">World Coal Consumption by Region</a></td>
              <td><span class="right"> <a href="/forecasts/ieo/excel/ieotab_7.xls" class="ico_xls">XLS</a></span></td>
            </tr>
            <!--<tr>
              <td><ul>
                <li>World Coal Consumption by Region 
                  - (million short tons)</li>
              </ul></td>
              <td><span class="right"> <a href="/forecasts/ieo/excel/table7_mst.xls" class="ico_xls">XLS</a></span></t></td>
            </tr> -->
            <tr>
              <td>A8. <a href="/oiaf/aeo/tablebrowser/#release=IEO2013&amp;subject=0-IEO2013&amp;table=8-IEO2013&amp;region=0-0&amp;cases=Reference-d041117">World Nuclear Energy Consumption by Region</a></td>
              <td><span class="right"> <a href="/forecasts/ieo/excel/ieotab_8.xls" class="ico_xls">XLS</a></span></td>
            </tr>
            <tr>
              <td>A9. <a href="/oiaf/aeo/tablebrowser/#release=IEO2013&amp;subject=0-IEO2013&amp;table=9-IEO2013&amp;region=0-0&amp;cases=Reference-d041117">World Consumption of Hydroelectricity and Other Renewable Energy by Region</a></td>
              <td><span class="right"> <a href="/forecasts/ieo/excel/ieotab_9.xls" class="ico_xls">XLS</a></span></td>
            </tr>
            <tr>
              <td>A10. <a href="/oiaf/aeo/tablebrowser/#release=IEO2013&amp;subject=0-IEO2013&amp;table=10-IEO2013&amp;region=0-0&amp;cases=Reference-d041117">World Carbon Dioxide Emissions by Region</a></td>
              <td><span class="right"> <a href="/forecasts/ieo/excel/ieotab_10.xls" class="ico_xls">XLS</a></span></td>
            </tr>
            <tr>
              <td>A11. <a href="/oiaf/aeo/tablebrowser/#release=IEO2013&amp;subject=0-IEO2013&amp;table=11-IEO2013&amp;region=0-0&amp;cases=Reference-d041117">World Carbon Dioxide Emissions from Liquids Use by Region</a></td>
              <td><span class="right"> <a href="/forecasts/ieo/excel/ieotab_11.xls" class="ico_xls">XLS</a></span></td>
            </tr>
            <tr>
              <td>A12. <a href="/oiaf/aeo/tablebrowser/#release=IEO2013&amp;subject=0-IEO2013&amp;table=12-IEO2013&amp;region=0-0&amp;cases=Reference-d041117">World Carbon Dioxide Emissions from Natural Gas Use by Region</a></td>
              <td><span class="right"> <a href="/forecasts/ieo/excel/ieotab_12.xls" class="ico_xls">XLS</a></span></td>
            </tr>
            <tr>
              <td>A13. <a href="/oiaf/aeo/tablebrowser/#release=IEO2013&amp;subject=0-IEO2013&amp;table=13-IEO2013&amp;region=0-0&amp;cases=Reference-d041117">World Carbon Dioxide Emissions from Coal Use by Region</a></td>
              <td><span class="right"> <a href="/forecasts/ieo/excel/ieotab_13.xls" class="ico_xls">XLS</a></span></td>
            </tr>
            <tr>
              <td>A14. <a href="/oiaf/aeo/tablebrowser/#release=IEO2013&amp;subject=0-IEO2013&amp;table=14-IEO2013&amp;region=0-0&amp;cases=Reference-d041117">World Population by Region</a></td>
              <td><span class="right"> <a href="/forecasts/ieo/excel/ieotab_14.xls" class="ico_xls">XLS</a></span></td>
            </tr>
            
            <!-- ***** End of Energy Consumption by Sector Content  ******* -->
            <!-- ***** Start of Petroleum Content  ******* -->
            <!-- ***** End of Electricity Content  ******* --> */ ?>
          </table>
    <p>&nbsp;</p>          
	      <?php /* End of MER */ 
	   /* End of Main Column */ ?>
      </div>
      <div class="side_col right">
	  <?php /* Start of Side Column 
          <?php include ('includes/sidenav_pet_wkreleases.inc') ; ?>*/ 
           include ('includes/promo_tableviewer.inc') ; 
       /* End of Side Column */ ?>
      </div>
    </div>
<?php /*/ Page/Body Content */ 
 include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ End of Outer Wrapper */ ?>
</body>
</html>