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
      <?php include ('includes/subnav_finance.inc') ; ?>
      <?php /* Page/Body Content */ ?>
      <div class="pagecontent mr_temp2"> 
        <?php /* Start of Main Column */ ?>
        <div class="main_col">
          <a name="mpurc" id="mpurc"></a><h1>Market Prices and Uncertainty Report Charts</h1>
          <table width="100%" class="zebra">
            <thead>
              <tr>
                <th><strong>Selected Charts</strong></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <tr><td><a href="/forecasts/steo/uncertainty/images/uncertainty_fig1.png" class="lightbox">Figure 1: Historical crude oil front month futures prices</a></td><td></td></tr>
            <tr>
              <td><a href="/forecasts/steo/uncertainty/images/uncertainty_fig7.png" class="lightbox">Figure 7: Probability of the January 2016 WTI contract expiring above  price levels</a></td><td></td></tr>
            <tr>
              <td><a href="/forecasts/steo/uncertainty/images/uncertainty_fig8.png" class="lightbox">Figure 8: Historical RBOB futures prices and crack spreads</a></td><td></td></tr>
            <tr>
              <td><a href="/forecasts/steo/uncertainty/images/uncertainty_fig12.png" class="lightbox">Figure 12: Probability of January 2016  retail gasoline exceeding different prices levels at expiration</a></td><td></td></tr>
            <tr>
              <td><a href="/forecasts/steo/uncertainty/images/uncertainty_fig14.png" class="lightbox">Figure 14:  U.S. natural gas prices and storage</a></td><td></td></tr>
            <tr>
              <td><a href="/forecasts/steo/uncertainty/images/uncertainty_fig16.png" class="lightbox">Figure 16: Probability of the January 2016 Henry Hub contract expiring above price levels</a></td><td></td></tr>
              <tr>
                <td><a href="/forecasts/steo/images/Fig1.png" class="lightbox">West Texas Intermediate (WTI) Crude Oil Price Confidence Intervals</a></td>
                <td><span class="right"><a href="/forecasts/steo/xls/Fig1.xls" class="ico_xls"><span hidden="West Texas Intermediate (WTI) Crude Oil Price Confidence Intervals "></span>
XLS</a></span></td>
              </tr>
              <tr>
                <td><a href="/forecasts/steo/images/Probability_WTI.png" class="lightbox">West Texas Intermediate (WTI) Crude Oil Price Probabilities</a></td>
                <td><span class="right"><a href="/forecasts/steo/xls/Probability_WTI.xls" class="ico_xls"><span hidden="West Texas Intermediate (WTI) Crude Oil Price Probabilities "></span>
XLS</a></span></td>
              </tr>
              <tr>
                <td><a href="/forecasts/steo/images/Fig4.png" class="lightbox">Henry Hub natural gas prices and confidence intervals</a></td>
                <td><span class="right"><a href="/forecasts/steo/xls/Fig4.xls" class="ico_xls"><span hidden="Henry Hub natural gas prices and confidence intervals "></span>
XLS</a></span></td>
              </tr>
              <tr>
                <td><a href="/forecasts/steo/images/Probability_HH.png" class="lightbox">Henry Hub natural gas price probabilities</a></td>
                <td><span class="right"><a href="/forecasts/steo/xls/Probability_HH.xls" class="ico_xls"><span hidden="Henry Hub natural gas price probabilities "></span>
XLS</a></span></td>
              </tr>
            </tbody>
          </table>
          <h1><a name="archive" id="archive"></a>Archive</h1>
        <h2><a name="frs"></a>Financial Reporting System (FRS) <span style="color:red; font-style:bold;" class="right">(suspended)</span></h2>
        <p>Find operating data and analysis for major U.S. energy companies.</p>
        <span class="condaterange"><a class="no-border expandall">+ EXPAND ALL</a></span>
        <table class="contable">
          <?php /* BEGIN Summary Content ////////////////*/ ?>
          <thead id="finance">
            <tr>
              <th><a name="finance"></a><strong>Finance</strong></th>
              <th width="30%"><span class="right">Additional Formats</span></th>
            </tr>
          </thead>
          <tr class="white_first">
            <td><strong>Selected financial items</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-1.xlsx" class="ico_xls"><span hidden="Selected financial items  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Consolidated income statement</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-2.xlsx" class="ico_xls"><span hidden="Consolidated income statement  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Consolidated balance sheet</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-3.xlsx" class="ico_xls"><span hidden="Consolidated balance sheet  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Statement of cash flows</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-4.xlsx" class="ico_xls"><span hidden="Statement of cash flows  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Statement of income for U.S. &amp; foreign petroleum</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-5.xlsx" class="ico_xls"><span hidden=" Statement of income for U.S. & foreign petroleum  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Statement of income for U.S. & foreign downstream natural gas</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-6.xlsx" class="ico_xls"><span hidden=" Statement of income for U.S. & foreign downstream natural gas  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Statement of income for U.S. & foreign electric power</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-7.xlsx" class="ico_xls"><span hidden=" Statement of income for U.S. & foreign electric power  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>PP&E and investments and advances, by lines of business</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-8.xlsx" class="ico_xls"><span hidden=" PP&E and investments and advances, by lines of business  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Return on investment for lines of business</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-9.xlsx" class="ico_xls"><span hidden=" Return on investment for lines of business  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Size distribution of net investment in place</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-10.xlsx" class="ico_xls"><span hidden=" Size distribution of net investment in place  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Research and development</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-11.xlsx" class="ico_xls"><span hidden="Research and development  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Income taxes</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-12.xlsx" class="ico_xls"><span hidden="Income taxes   "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>U.S. taxes other than income taxes </strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-13.xlsx" class="ico_xls"><span hidden="U.S. taxes other than income taxes  "></span>
XLS</a></span></td>
          </tr>
          <?php /* END Summary Content ////////////////*/ ?> 
          <?php /* BEGIN Oil and Natural Gas Costs/Expenditures Content ////////////////*/ ?>
          <thead id="oil">
            <tr>
              <th><a name="oil"></a><strong>Oil and natural gas costs/expenditures</strong></th>
              <th><span class="right">Additional Formats</span></th>
            </tr>
          </thead>
          <tr class="white_first">
            <td><strong>U.S. energy operating statistics</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-14.xlsx" class="ico_xls"><span hidden="U.S. energy operating statistics  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Exploration and development expenditures</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-15.xlsx" class="ico_xls"><span hidden="Exploration and development expenditures  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Exploration and development expenditures, U.S. &amp; foreign</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-16.xlsx" class="ico_xls"><span hidden="Exploration and development expenditures, U.S. & foreign  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Exploration and development expenditures by region</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-17.xlsx" class="ico_xls"><span hidden="Exploration and development expenditures by region  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Production (lifting) costs by region</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-18.xlsx" class="ico_xls"><span hidden=" Production (lifting) costs by region  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Oil and natural gas reserves</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-19.xlsx" class="ico_xls"><span hidden=" Oil and natural gas reserves  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Oil and natural gas reserve balances</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-20.xlsx" class="ico_xls"><span hidden=" Oil and natural gas reserve balances  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Exploration and development expenditures, reserves, and 
              production by region</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-21.xlsx" class="ico_xls"><span hidden=" Exploration and development expenditures, reserves, and production by region  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Oil and natural gas acreage</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-22.xlsx" class="ico_xls"><span hidden=" Oil and natural gas acreage  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>U.S. wells completed, and in-progress at year end</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-23.xlsx" class="ico_xls">X<span hidden=" U.S. wells completed, and in-progress at year end  "></span>
LS</a></span></td>
          </tr>
          <tr>
            <td><strong>U.S. drilling footage and producing wells</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-24.xlsx" class="ico_xls"><span hidden="U.S. drilling footage and producing wells  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>U.S. wells completed, and average depth</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-25.xlsx" class="ico_xls"><span hidden="U.S. wells completed, and average depth  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Foreign wells completed, in-progress, and producing, by region</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-26.xlsx" class="ico_xls"><span hidden="Foreign wells completed, in-progress, and producing, by region  "></span>
XLS</a></span></td>
          </tr>
          <?php /* END Oil and Natural Gas Costs/Expenditures Content ////////////////*/ ?> 
          <?php /* BEGIN Refining and Marketing Content ////////////////*/ ?>
          <thead id="refining">
            <tr>
              <th><a name="refining"></a><strong>Refining and marketing</strong></th>
              <th><span class="right">Additional Formats</span></th>
            </tr>
          </thead>
          <tr class="white_first">
            <td><strong>U.S. refining/marketing statement of income</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-27.xlsx" class="ico_xls"><span hidden="U.S. refining/marketing statement of income  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>U.S. petroleum refining/marketing general operating expenses</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-28.xlsx" class="ico_xls"><span hidden="U.S. petroleum refining/marketing general operating expenses  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>U.S. and foreign petroleum refining statistics</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-29.xlsx" class="ico_xls"><span hidden="U.S. and foreign petroleum refining statistics  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Refinery output and capacity, U.S. & foreign</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-30.xlsx" class="ico_xls"><span hidden="Refinery output and capacity, U.S. & foreign  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Sources and dispositions of raw materials, U.S. & foreign</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-31.xlsx" class="ico_xls"><span hidden=" Sources and dispositions of raw materials, U.S. & foreign  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>U.S. purchases and sales of raw materials, and refined products</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-32.xlsx" class="ico_xls"><span hidden=" U.S. purchases and sales of raw materials, and refined products  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>U.S. sales of refined products, by sales type</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-33.xlsx" class="ico_xls"><span hidden=" U.S. sales of refined products, by sales type  "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Sales of U.S. refined products, by volume and price</strong><br />
              <em class="hideme">Release Date: April 2011</em></td>
            <td><span class="right"><a href="/finance/archive/frsdata/T-34.xlsx" class="ico_xls"><span hidden=" Sales of U.S. refined products, by volume and price  "></span>
XLS</a></span></td>
          </tr>
          <?php /* END Refining and Marketing Content ////////////////*/ ?> 
          <?php /*/table>
          <hr />
          <h2>Time-Series Data</h2>
          <p>These files contain disclosure-free aggregate data  from the Energy Information Administration's Financial Reporting System (FRS) database. The data cover the years 1977 through 2009.</p> 
          <span class="condaterange"><a class="no-border expandall">+ EXPAND ALL</a></span>
          <table class="contable"*/ ?> 
          <?php /* BEGIN Consolidated Company Operations Content ////////////////*/ ?>
          <thead id="operations">
            <tr>
              <th><a name="operations"></a><strong>Consolidated company operations</strong></th>
              <th><span class="right">Additional Formats</span></th>
            </tr>
          </thead>
          <tr>
            <td colspan="2"><strong>Time-series data:</strong> These files contain disclosure-free aggregate data  from the Energy Information Administration's Financial Reporting System (FRS) database. The data cover the years 1977 through 2009.</td>
          </tr>
          <tr class="white_first">
            <td><strong>Consolidating statement if Income</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5110.xls" class="ico_xls"><span hidden="Consolidating statement if Income "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Research &amp; development funding &amp; expenditures</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5111.xls" class="ico_xls"><span hidden="Research & development funding & expenditures "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Analysis of income taxes</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5112.xls" class="ico_xls"><span hidden="Analysis of income taxes "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Selected consolidated data (balance sheet)</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5120.xls" class="ico_xls"><span hidden="Selected consolidated data (balance sheet) "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Statement of sources &amp; uses of funds</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5130.xls" class="ico_xls"><span hidden=" Statement of sources & uses of funds "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Consolidated statement of cash flows</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5131.xls" class="ico_xls"><span hidden=" Consolidated statement of cash flows "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Download all consolidated company operations data</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s51.xls" class="ico_xls"><span hidden=" Download all consolidated company operations data "></span>
XLS</a></span></td>
          </tr>
          <?php /* END Consolidated Company Operations Content ////////////////*/ ?> 
          <?php /* BEGIN Petroleum Operations Content ////////////////*/ ?>
          <thead id="petroleumops">
            <tr>
              <th><a name="petroleumops"></a><strong>Petroleum operations</strong></th>
              <th><span class="right">Additional Formats</span></th>
            </tr>
          </thead>
          <tr>
            <td colspan="2"><strong>Time-series data:</strong> These files contain disclosure-free aggregate data  from the Energy Information Administration's Financial Reporting System (FRS) database. The data cover the years 1977 through 2009.</td>
          </tr>
          <tr class="white_first">
            <td><strong>Statement of income</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5210.xls" class="ico_xls"><span hidden="Statement of income "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Refining, exploration &amp; production operations,  expenditures &amp; operating expense detail</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5211.xls" class="ico_xls"><span hidden="Refining, exploration & production operations, expenditures & operating expense detail "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Purchases &amp; sales of raw materials &amp; refined products</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5212.xls" class="ico_xls"><span hidden="Purchases & sales of raw materials & refined products "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Exploration, development, &amp; production statistics</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5241.xls" class="ico_xls"><span hidden="Exploration, development, & production statistics "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Refining statistics</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5242.xls" class="ico_xls"><span hidden=" Refining statistics "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Sources &amp; dispositions of crude &amp; NGL's</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5245.xls" class="ico_xls"><span hidden=" Sources & dispositions of crude & NGL's "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Proved petroleum reserves</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5246.xls" class="ico_xls"><span hidden=" Proved petroleum reserves "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Download all company petroleum operations data</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s52.xls" class="ico_xls"><span hidden=" Download all company petroleum operations data "></span>
XLS</a></span></td>
          </tr>
          <?php /* END Petroleum Operations Content ////////////////*/ ?> 
          <?php /* BEGIN Coal Operations Content ////////////////*/ ?>
          <thead id="coalops">
            <tr>
              <th><a name="coalops"></a><strong>Coal operations</strong></th>
              <th><span class="right">Additional Formats</span></th>
            </tr>
          </thead>
          <tr>
            <td colspan="2"><strong>Time-series data:</strong> These files contain disclosure-free aggregate data  from the Energy Information Administration's Financial Reporting System (FRS) database. The data cover the years 1977 through 2009.</td>
          </tr>
          <tr class="white_first">
            <td><strong>Coal - reserves &amp; production statistics</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5341.xls" class="ico_xls"><span hidden=" Coal - reserves & production statistics "></span>XLS</a></span></td>
          </tr>
          <?php /* END Coal Operations Content ////////////////*/ ?> 
          <?php /* BEGIN Downstream Natural Gas Operations Content ////////////////*/ ?>
          <thead id="natgasops">
            <tr>
              <th><a name="natgasops"></a><strong>Downstream natural gas operations</strong></th>
              <th><span class="right">Additional Formats</span></th>
            </tr>
          </thead>
          <tr>
            <td colspan="2"><strong>Time-series data:</strong> These files contain disclosure-free aggregate data  from the Energy Information Administration's Financial Reporting System (FRS) database. The data cover the years 1977 through 2009.</td>
          </tr>
          <tr class="white_first">
            <td><strong>Statement of income</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5710.xls" class="ico_xls"><span hidden="Downstream natural gas operations Statement of income "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>General operating expense detail</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5711.xls" class="ico_xls"><span hidden="Downstream natural gas operations General operating expense detail "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Purchases &amp; sales of natural gas and NGL's</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5712.xls" class="ico_xls"><span hidden="Downstream natural gas operations Purchases & sales of natural gas and NGL's "></span>
XLS</a></span></td>
          </tr>
          <tr>
            <td><strong>Download all company downstream natural gas operations data</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s57.xls" class="ico_xls"><span hidden="Downstream natural gas operations Download all company downstream natural gas operations data "></span>
XLS</a></span></td>
          </tr>
          <?php /* END Downstream Natural Gas Operations Content ////////////////*/ ?> 
          <?php /* BEGIN Electric Power Operations Content ////////////////*/ ?>
          <thead id="electricops">
            <tr>
              <th><a nam="electricops"></a><strong>Electric power operations</strong></th>
              <th><span class="right">Additional Formats</span></th>
            </tr>
          </thead>
          <tr>
            <td colspan="2"><strong>Time-series data:</strong> These files contain disclosure-free aggregate data  from the Energy Information Administration's Financial Reporting System (FRS) database. The data cover the years 1977 through 2009.</td>
          </tr>
          <tr class="white_first">
            <td><strong>Statement of Income</strong></td>
            <td><span class="right"><a href="/finance/archive/frsdata/s5810.xls" class="ico_xls"><span hidden="Electric power operations Statement of income "></span>
XLS</a></span></td>
          </tr>
          <?php /* END Electric Power Operations Content ////////////////*/ ?>
        </table>
        <h2>Financial News for Major Energy Producers<span style="color:red; font-style:bold;" class="right">(suspended)</span></h2>
        <p>The "Financial News for Major Energy Companies" is issued quarterly to report recent trends in the financial performance of the major energy companies. These include the respondents to Form EIA-28 (Financial Reporting System (FRS)), with the exception of the FRS companies that do not issue quarterly earnings releases or do not provide separate information for the company's U.S. operations.</p>
        <span class="condaterange"><a class="no-border expandall">+ EXPAND ALL</a></span>
        <table width="100%" class="contable">
          <thead id="2010">
            <tr>
              <th><a name="2010"></a>2010</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tr class="white_first">
            <td>Third quarter 2010 </td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q310.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Third quarter 2010 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Second quarter 2010</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q210.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Second quarter 2010 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>First quarter 2010</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q110.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers First quarter 2010 "></span>
PDF</a></span></td>
          </tr>
          <thead id="2009">
            <tr>
              <th><a name="2009"></a>2009</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tr class="white_first">
            <td>Fourth quarter 2009</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q409.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Fourth quarter 2009 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Third quarter 2009</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q309.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Third quarter 2009 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Second quarter 2009</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q209.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Second quarter 2009 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>First quarter 2009</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q109.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers First quarter 2009 "></span>
PDF</a></span></td>
          </tr>
          <thead>
            <tr id="2008">
              <th><a name="2008"></a>2008</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tr class="white_first">
            <td>Fourth quarter 2008</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q408.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Fourth quarter 2008 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Third quarter 2008</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q308.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Third quarter 2008 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Second quarter 2008</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q208.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Second quarter 2008 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>First quarter 2008</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q108.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers First quarter 2008 "></span>
PDF</a></span></td>
          </tr>
          <thead id="2007">
            <tr>
              <th><a name="2007"></a>2007</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tr class="white_first">
            <td>Fourth quarter 2007</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q407.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Fourth quarter 2007 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Third quarter 2007</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q307.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Third quarter 2007 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Second quarter 2007</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q207.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Second quarter 2007 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>First quarter 2007</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q107.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers First quarter 2007 "></span>
PDF</a></span></td>
          </tr>
          <thead id="2006">
            <tr>
              <th><a name="2006"></a>2006</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tr class="white_first">
            <td>Fourth quarter 2006</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q406.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Fourth quarter 2006 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Third quarter 2006</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q306.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Third quarter 2006 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Second quarter 2006</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q206.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Second quarter 2006 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>First quarter 2006</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q106.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers First quarter 2006 "></span>
PDF</a></span></td>
          </tr>
          <thead id="2005">
            <tr>
              <th><a name="2005"></a>2005</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tr class="white_first">
            <td>Fourth quarter 2005</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q405.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Fourth quarter 2005 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Third quarter 2005</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q305.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Third quarter 2005 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Second quarter 2005</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q205.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Second quarter 2005 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>First quarter 2005</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q105.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers First quarter 2005 "></span>
PDF</a></span></td>
          </tr>
          <thead id="2004">
            <tr>
              <th><a name="2004"></a>2004</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tr class="white_first">
            <td>Fourth quarter 2004</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q404.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Fourth quarter 2004 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Third quarter 2004</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q304.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Third quarter 2004 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Second quarter 2004</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q204.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Second quarter 2004 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>First quarter 2004</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q104.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers First quarter 2004 "></span>
PDF</a></span></td>
          </tr>
          <thead id="2003">
            <tr>
              <th><a name="2003"></a>2003</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tr class="white_first">
            <td>Fourth quarter 2003</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q403.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Fourth quarter 2003 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Third quarter 2003</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q303.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Third quarter 2003 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Second quarter 2003</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q203.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Second quarter 2003 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>First quarter 2003</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q103.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers First quarter 2003 "></span>
PDF</a></span></td>
          </tr>
          <thead id="2002">
            <tr>
              <th><a name="2002"></a>2002</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tr class="white_first">
            <td>Fourth quarter 2002</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q402.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Fourth quarter 2002 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Third quarter 2002</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q302.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Third quarter 2002 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Second quarter 2002</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q202.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Second quarter 2002 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>First quarter 2002</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q102.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers First quarter 2002 "></span>
PDF</a></span></td>
          </tr>
          <thead id="2001">
            <tr>
              <th><a name="2001"></a>2001</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tr class="white_first">
            <td>Fourth quarter 2001</td>
            <td><span class="right"><a href="/finance/performanceprofiles/news_m/q401.pdf" class="ico_pdf"><span hidden="Financial News for Major Energy Producers Fourth quarter 2001 "></span>
PDF</a></span></td>
          </tr>
          <tr>
            <td>Third quarter 2001</td>
            <td>missing</td>
          </tr>
          <tr>
            <td>Second quarter 2001</td>
            <td>missing</td>
          </tr>
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