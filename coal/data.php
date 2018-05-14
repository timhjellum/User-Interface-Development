<?php
$pageTitle = '';
$locale = 'data';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
  <script type="text/javascript">
    function MM_jumpMenuGo(objId,targ,restore){ //v9.0
      var selObj = null;  with (document) {
        if (getElementById) selObj = getElementById(objId);
        if (selObj) eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
        if (restore) selObj.selectedIndex=0; }
    }
  </script>

<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<body>
<?php /* Start of Outer Wrapper */ ?>
<div id="outerX"> 
  <?php /* EIA Header */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
  <?php /* Navigation Menu */ ?>
  <?php include ('includes/subnav_coal.inc') ; ?>
  <?php /* Page/Body Content */ ?>

  <div class="pagecontent mr_temp2">

    <?php /* Start of Main Column */ ?>
    <div class="main_col">
      <p>Find statistics on coal production, consumption, exports, imports, stocks, mining, and prices.</p>
      <span class="condaterange"><a class="no-border expandall">+ EXPAND ALL</a></span>
      <table class="contable">
        <?php /* BEGIN Summary Content ////////////////*/ ?>
        <thead id="summary">
          <tr>
            <th><a name="summary"></a>Summary</th>
            <th width="30%"><span class="right"></span></th>
          </tr>
        </thead>
        <tr class="white_first">
          <td colspan="2"><p><strong>Coal overview</strong></p>
            <ul>
              <li><span class="right"><a href="/totalenergy/data/monthly/pdf/sec6_3.pdf" class="ico_pdf" title="Coal overview monthly ">
PDF</a> <a href="/totalenergy/data/browser/csv.cfm?tbl=T06.01" class="ico_csv" title="Coal overview monthly ">
CSV</a> <a href="/totalenergy/data/browser/xls.cfm?tbl=T06.01&amp;freq=m" class="ico_xls" title="Coal overview monthly ">
XLS</a>&nbsp;<span class="beta right"><a title="View Coal overview monthly in Total Energy Browser" href="/beta/MER/index.cfm?tbl=T06.01#/?f=M&start=200001" >
INTERACTIVE</a></span></span>Monthly<br />
                <div>
                  <script language="javascript" type="text/javascript" src="/totalenergy/data/monthly/txt/new_merheader.txt"></script>
                </div>
                <em>Interactive data from: <a href="/totalenergy/data/browser/">Total Energy Browser</a></em> <br />
              </li>
              <li><span class="right"><a href="/totalenergy/data/annual/pdf/sec7_5.pdf" class="ico_pdf" title="Coal overview annual ">
PDF</a> <a href="/totalenergy/data/annual/xls/stb0701.xls" class="ico_xls" title="Coal overview annual ">
XLS</a></span> <a href="/totalenergy/data/annual/showtext.cfm?t=ptb0701">Annual</a>
                <div>
                  <script language="javascript" type="text/javascript" src="/totalenergy/data/annual/txt/new_aerheader.txt"></script>
                </div>
              </li>
            </ul></td>
        </tr>
        <?php /* END Summary Content ////////////////*/ ?>
        <?php /* BEGIN Coal Prices Content ////////////////*/ ?> 
          
        <thead id="prices">
          <tr>
            <th><a name="prices"></a><strong>Prices</strong></th>
            <th width="30%"><span class="right"></span></th>
          </tr>
        </thead>
        <tr class="white_first">
          <td colspan="2">
          <ul>
          <li><a href="/coal/markets/">Spot prices</a> (regional)
          <div> 
              <em>Released: Weekly (on Mondays) from <a href="/coal/markets/">Coal Market Report</a></em> </div></li>
          
          <li><a href="/coal/markets/#nymex">Futures prices</a> (NYMEX near-month contract final settlement price)
                  <div> 
              <em>Released: Weekly (on Mondays) from <a href="/coal/markets/">Coal Market Report</a></em> </div></li>

          <li><strong>Average  sales price</strong>
            <div> 
              <script language="JavaScript" type="text/JavaScript" src="/coal/annual/acr_releasedate.txt"></script> 
            </div>
            <em>Interactive data from <a href="/beta/coal/data/browser/" title="Average sales price Interactive data from ">
Coal Data Browser</a></em><br />
            <ul>
              <li><span class="right"><a href="/coal/annual/pdf/table28.pdf" class="ico_pdf" title="Average sales price By state and mine type ">
PDF</a> <a href="/coal/annual/xls/table28.xls" class="ico_xls" title="Average sales price By state and mine type ">
XLS</a></span>By state and mine type<br />
              </li>
              <li><span class="right"><a href="/coal/annual/pdf/table33.pdf" class="ico_pdf" title="Average sales price Open market and captive sales price by state ">
PDF</a> <a href="/coal/annual/xls/table33.xls" class="ico_xls" title="Average sales price Open market and captive sales price by state ">
XLS</a> <span class="beta right"> <a href="/beta/coal/data/browser/#/topic/28?agg=0,2,1&amp;geo=vvvvvvvvvvvvo&amp;freq=A&amp;start=2001&amp;ctype=map&amp;ltype=pin&amp;rtype=s&amp;maptype=0&amp;rse=0&amp;pin=" title="Average sales price Open market and captive sales price by state ">
INTERACTIVE</a></span></span>Open market and captive sales price by state</li>
              <li><span class="right"><a href="/coal/annual/pdf/table29.pdf" class="ico_pdf" title="Average sales price By state and underground mining method ">
PDF</a> <a href="/coal/annual/xls/table29.xls" class="ico_xls" title="Average sales price By state and underground mining method ">
XLS</a></span>By state and underground mining method<br />
              </li>
              <li><span class="right"><a href="/coal/annual/pdf/table30.pdf" class="ico_pdf" title="Average sales price By state and county, with number of mines ">
PDF</a> <a href="/coal/annual/xls/table30.xls" class="ico_xls" title="Average sales price By state and county, with number of mines ">
XLS</a></span>By state and county, with number of mines<br />
              </li>
              <li><span class="right"><a href="/coal/annual/pdf/table31.pdf" class="ico_pdf" title="Average sales price By state and coal rank ">
PDF</a> <a href="/coal/annual/xls/table31.xls" class="ico_xls" title="Average sales price By state and coal rank ">
XLS</a> <span class="beta right"> <a href="/beta/coal/data/browser/#/topic/29?agg=1,0&amp;geo=vvvvvvvvvvvvo&amp;freq=A&amp;start=2001&amp;ctype=map&amp;ltype=pin&amp;rtype=s&amp;pin=&amp;rse=0&amp;maptype=0" title="Average sales price By state and coal rank ">
INTERACTIVE</a></span></span>By state and coal rank<br />
              </li>
              <li><span class="right"><a href="/coal/annual/pdf/table32.pdf" class="ico_pdf" title="Average sales price By mine production range and mine type ">
PDF</a> <a href="/coal/annual/xls/table32.xls" class="ico_xls" title="Average sales price By mine production range and mine type ">
XLS</a></span>By mine production range and mine type </li>
              <li><span class="right"><a href="/totalenergy/data/annual/pdf/sec7_21.pdf" class="ico_pdf" title="Average sales price By coal rank ">
PDF</a> <a href="/totalenergy/data/annual/xls/stb0709.xls" class="ico_xls" title="Average sales price By coal rank ">
XLS</a></span>By coal rank<br />
                <div>
                  <script language="javascript" type="text/javascript" src="/totalenergy/data/annual/txt/new_aerheader.txt"></script>
                </div>
              </li>
            </ul>
            <br />
          <li>  <span class="right"><a href="/coal/annual/pdf/table34.pdf" class="ico_pdf">PDF</a> <a href="/coal/annual/xls/table34.xls" class="ico_xls">XLS</a></span>Average delivered prices to end use sector by Census division and state<br />
          <div> 
              <script language="JavaScript" type="text/JavaScript" src="/coal/annual/acr_releasedate.txt"></script> 
            </div></li>
            <li> <span class="beta right"> <a href="/beta/coal/data/browser/#/topic/45?agg=1,0&amp;geo=vvvvvvvvvvvvo&amp;freq=A&amp;start=2008&amp;ctype=linechart&amp;ltype=pin&amp;rtype=s&amp;pin=&amp;rse=0&amp;maptype=0" title="Price of coal shipments to the electric power sector, by Census division, and state ">
INTERACTIVE</a></span>Price of coal shipments to the electric power sector, by Census division, and state </li>
            </ul>
            
            </td>
        </tr>
        <thead id="reserves">
          <tr>
            <th><a name="reserves"></a><strong>Reserves</strong></th>
            <th width="30%">&nbsp;</th>
          </tr>
        </thead>
        <tr class="white_first">
          <td colspan="2"><a href="/coal/reserves/">  Demonstrated Reserve Base</a><br />
              <div> 
              <em>Release date: November 15, 2017 | data from: <a href="/coal/reserves/">U.S. Coal Reserves </a></em> </div><br />
            <strong>Recoverable reserves</strong>
            <div> 
              <script language="JavaScript" type="text/javascript" src="/coal/annual/acr_releasedate.txt"></script> <em>Interactive data from <a href="/coal/data/browser/" title="Recoverable reserves Interactive data from ">
Coal Data Browser</a></em> </div>
            <ul>
              <li><span class="right"><a href="/coal/annual/pdf/table15.pdf" class="ico_pdf" title="Recoverable reserves At producing mines, estimated recoverable, and Demonstrated Reserve Base; by mine type ">
PDF</a> <a href="/coal/annual/xls/table15.xls" class="ico_xls" title="Recoverable reserves At producing mines, estimated recoverable, and Demonstrated Reserve Base; by mine type ">
XLS</a></span>At producing mines,  estimated recoverable, and Demonstrated Reserve Base; by mine type<br />
              </li>
              <li><span class="right"><a href="/coal/annual/pdf/table16.pdf" class="ico_pdf" title="Recoverable reserves At producing underground coal mines by state and mining method ">
PDF</a> <a href="/coal/annual/xls/table14.xls" class="ico_xls" title="Recoverable reserves At producing underground coal mines by state and mining method ">
XLS</a></span>At producing underground coal mines by state and mining method<br />
              </li>
              <li><span class="right"><a href="/coal/annual/pdf/table17.pdf" class="ico_pdf" title="Recoverable reserves At producing mines by mine production range and mine type ">
PDF</a> <a href="/coal/annual/xls/table17.xls" class="ico_xls" title="Recoverable reserves At producing mines by mine production range and mine type ">
XLS</a></span>At producing  mines by mine production range and mine type<br />
              </li>
              <li><span class="right"><a href="/coal/annual/pdf/table14.pdf" class="ico_pdf" title="Recoverable reserves At producing mines by state ">
PDF</a> <a href="/coal/annual/xls/table14.xls" class="ico_xls" title="Recoverable reserves At producing mines by state ">
XLS</a> <span class="beta right"><a title="View Recoverable reserves At producing mines by state in Total Energy Browser" href="/beta/coal/data/browser/#/topic/31?agg=1,0&amp;geo=vvvvvvvvvvvvo&amp;freq=A&amp;start=2008&amp;ctype=linechart&amp;ltype=pin&amp;rtype=s&amp;maptype=0&amp;rse=0&amp;pin=" >
INTERACTIVE</a></span></span>At producing mines by state</li>
            </ul></td>
        </tr>
        <tr>
          <td><a href="/beta/international/data/browser/#/?pa=0000000000000000000000000000000000000000000000000003101&amp;c=ruvvvvvfvtvnvv1urvvvvfvvvvvvfvvvou20evvvvvvvvvnvvuvo&amp;ct=0&amp;tl_id=1-A&amp;vs=INTL.1-6-AFG-MST.A&amp;vo=0&amp;v=H&amp;start=2014&amp;end=2014">International coal reserves</a><br />
          <em>Data from: <a href="/beta/international/data/browser/">International Energy Statistics</a></em></td>
        </tr>
        <thead id="consumption">
          <tr>
            <th><a name="consumption"></a><strong>Consumption</strong></th>
            <th width="30%"><span class="right">  </span></th>
          </tr>
        </thead>
        <tr class="white_first">
          <td colspan="2">
             <strong>Monthly</strong><span class="right"><a href="/totalenergy/data/monthly/pdf/sec6_4.pdf" class="ico_pdf" title="Consumption Monthly ">
PDF</a> <a href="/totalenergy/data/browser/csv.cfm?tbl=T06.02" class="ico_csv" title="Consumption Monthly ">
CSV</a> <a href="/totalenergy/data/browser/xls.cfm?tbl=T06.02&amp;freq=m" class="ico_xls" title="Consumption Monthly ">
XLS</a> <span class="beta right"><a href="/beta/MER/index.cfm?tbl=T06.02#/?f=M&amp;start=200001" title="Consumption Monthly ">
INTERACTIVE</a></span></span> 
                <div> 
                  <script language="javascript" type="text/javascript" src="/totalenergy/data/monthly/txt/new_merheader.txt"></script> 
                </div>
                <em>Interactive data from 
            <a href="/coal/data/browser/" title="Consumption Monthly Interactive data from ">
Coal Data Browser</a></em>
              <br />
              <br />
              <strong>Quarterly</strong><br />
                <div> 
                  <script language="javascript" type="text/javascript" src="/coal/production/quarterly/qcr_releasedate.txt"></script> 
                </div>
                <ul>
                  <li><span class="right"><a href="/coal/production/quarterly/pdf/t32p01p1.pdf" class="ico_pdf" title="Consumption Quarterly By sector ">
PDF</a> <a href="/coal/production/quarterly/xls/t32p01p1.xls" class="ico_xls" title="Consumption Quarterly By sector ">
XLS</a></span>By   sector <br />
                  </li>
                  <li><span class="right"><a href="/coal/production/quarterly/pdf/t35p01p1.pdf" class="ico_pdf" title="Consumption Quarterly At manufacturing plants by North American Industry Classification System (NAICS) code  ">
PDF</a> <a href="/coal/production/quarterly/xls/t35p01p1.xls" class="ico_xls" title="Consumption Quarterly At manufacturing plants by North American Industry Classification System (NAICS) code  ">
XLS</a></span> At  manufacturing plants by North American Industry Classification System (NAICS) code </li>
                </ul>

              <strong>Annual</strong><br />
                <em>Interactive data from <a href="/coal/data/browser/" title="Consumption Annual Interactive data from ">
Coal Data Browser</a></em>
                <ul>
                  <li><span class="right"><a href="/coal/annual/pdf/table26.pdf" class="ico_pdf" title="Consumption Annual By sector (latest year), Census division and state ">
PDF</a> <a href="/coal/annual/xls/table26.xls" class="ico_xls" title="Consumption Annual By sector (latest year), Census division and state ">
XLS</a></span> By  sector (latest year), Census division and state
                    <div> 
                      <script language="JavaScript" type="text/javascript" src="/coal/annual/acr_releasedate.txt"></script> </div>
                  </li>
                  <li><span class="right"><a href="/totalenergy/data/annual/pdf/sec7_9.pdf" class="ico_pdf" title="Consumption Annual By sector (1949-2011) ">
PDF</a> <a href="/totalenergy/data/annual/xls/stb0703.xls" class="ico_xls" title="Consumption Annual By sector (1949-2011) ">
XLS</a> <span class="beta right"><a href="/beta/MER/index.cfm?tbl=T06.02#/?f=A&amp;start=1949&amp;end=2014&amp;charted=1-5-12-13-14" title="Consumption Annual By sector (1949-2011) ">
INTERACTIVE</a></span></span>By sector (1949-2011) </li>
                  <div> 
                    <script language="JavaScript" type="text/javascript" src="/totalenergy/data/annual/txt/new_aerheader.txt"></script> 
                  </div>
                  <li><span class="beta right"><a href="/beta/coal/data/browser/#/topic/20?agg=1,0&amp;geo=vvvvvvvvvvvvo&amp;sec=g&amp;freq=A&amp;start=2008&amp;ctype=linechart&amp;ltype=pin&amp;rtype=s&amp;pin=&amp;rse=0&amp;maptype=0" class="beta" title="Consumption Annual  By electric power sector, Census division, and state ">
INTERACTIVE</a></span> By electric power sector,  Census division, and state</li>
                  <li><span class="beta right"><a href="/beta/coal/data/browser/#/topic/20?agg=1,0&amp;geo=vvvvvvvvvvvvo&amp;sec=0s&amp;freq=A&amp;start=2008&amp;ctype=linechart&amp;ltype=pin&amp;rtype=s&amp;maptype=0&amp;rse=0&amp;pin=" class="beta" title="Consumption Annual  By commercial, coke plants, and other industrial, Census division, and state ">
INTERACTIVE</a></span> By commercial, coke plants, and other industrial,  Census division, and state</li>
                </ul>
            </td>
        </tr>
        <tr>
          <td><a href="/beta/international/data/browser/#?ord=CR&amp;cy=2013&amp;v=H&amp;vo=0&amp;so=0&amp;io=0&amp;start=1980&amp;end=2013&amp;vs=INTL.7-2-AFG-TST.A~INTL.7-2-ALB-TST.A~INTL.7-2-DZA-TST.A~INTL.7-2-ASM-TST.A~INTL.7-2-AGO-TST.A~INTL.7-2-ATA-TST.A~INTL.7-2-ATG-TST.A~INTL.7-2-ARG-TST.A~INTL.7-2-ARM-TST.A~INTL.7-2-ABW-TST.A~INTL.7-2-AUS-TST.A~INTL.7-2-AUT-TST.A~INTL.7-2-AZE-TST.A~INTL.7-2-BHS-TST.A~INTL.7-2-BHR-TST.A~INTL.7-2-BGD-TST.A~INTL.7-2-BRB-TST.A~INTL.7-2-BLR-TST.A~INTL.7-2-BEL-TST.A~INTL.7-2-BLZ-TST.A~INTL.7-2-BEN-TST.A~INTL.7-2-BMU-TST.A~INTL.7-2-BTN-TST.A~INTL.7-2-BOL-TST.A~INTL.7-2-BIH-TST.A~INTL.7-2-BWA-TST.A~INTL.7-2-BRA-TST.A~INTL.7-2-BRN-TST.A~INTL.7-2-BGR-TST.A~INTL.7-2-BFA-TST.A~INTL.7-2-MMR-TST.A~INTL.7-2-BDI-TST.A~INTL.7-2-KHM-TST.A~INTL.7-2-CMR-TST.A~INTL.7-2-CAN-TST.A~INTL.7-2-CPV-TST.A~INTL.7-2-CYM-TST.A~INTL.7-2-CAF-TST.A~INTL.7-2-TCD-TST.A~INTL.7-2-CHL-TST.A~INTL.7-2-CHN-TST.A~INTL.7-2-COL-TST.A~INTL.7-2-COM-TST.A~INTL.7-2-COG-TST.A~INTL.7-2-COD-TST.A~INTL.7-2-COK-TST.A~INTL.7-2-CRI-TST.A~INTL.7-2-CIV-TST.A~INTL.7-2-HRV-TST.A~INTL.7-2-CUB-TST.A~INTL.7-2-CYP-TST.A~INTL.7-2-CZE-TST.A~INTL.7-2-DNK-TST.A~INTL.7-2-DJI-TST.A~INTL.7-2-DMA-TST.A~INTL.7-2-DOM-TST.A~INTL.7-2-ECU-TST.A~INTL.7-2-EGY-TST.A~INTL.7-2-SLV-TST.A~INTL.7-2-GNQ-TST.A~INTL.7-2-ERI-TST.A~INTL.7-2-EST-TST.A~INTL.7-2-ETH-TST.A~INTL.7-2-FLK-TST.A~INTL.7-2-FRO-TST.A~INTL.7-2-FJI-TST.A~INTL.7-2-FIN-TST.A~INTL.7-2-CSK-TST.A~INTL.7-2-SCG-TST.A~INTL.7-2-SUN-TST.A~INTL.7-2-YUG-TST.A~INTL.7-2-FRA-TST.A~INTL.7-2-GUF-TST.A~INTL.7-2-PYF-TST.A~INTL.7-2-GAB-TST.A~INTL.7-2-GMB-TST.A~INTL.7-2-GEO-TST.A~INTL.7-2-DEU-TST.A~INTL.7-2-DDR-TST.A~INTL.7-2-DEUW-TST.A~INTL.7-2-GHA-TST.A~INTL.7-2-GIB-TST.A~INTL.7-2-GRC-TST.A~INTL.7-2-GRL-TST.A~INTL.7-2-GRD-TST.A~INTL.7-2-GLP-TST.A~INTL.7-2-GUM-TST.A~INTL.7-2-GTM-TST.A~INTL.7-2-GIN-TST.A~INTL.7-2-GNB-TST.A~INTL.7-2-GUY-TST.A~INTL.7-2-HTI-TST.A~INTL.7-2-HITZ-TST.A~INTL.7-2-HND-TST.A~INTL.7-2-HKG-TST.A~INTL.7-2-HUN-TST.A~INTL.7-2-ISL-TST.A~INTL.7-2-IND-TST.A~INTL.7-2-IDN-TST.A~INTL.7-2-IRN-TST.A~INTL.7-2-IRQ-TST.A~INTL.7-2-IRL-TST.A~INTL.7-2-ISR-TST.A~INTL.7-2-ITA-TST.A~INTL.7-2-JAM-TST.A~INTL.7-2-JPN-TST.A~INTL.7-2-JOR-TST.A~INTL.7-2-KAZ-TST.A~INTL.7-2-KEN-TST.A~INTL.7-2-KIR-TST.A~INTL.7-2-PRK-TST.A~INTL.7-2-KOR-TST.A~INTL.7-2-UNK-TST.A~INTL.7-2-KWT-TST.A~INTL.7-2-KGZ-TST.A~INTL.7-2-LAO-TST.A~INTL.7-2-LVA-TST.A~INTL.7-2-LBN-TST.A~INTL.7-2-LSO-TST.A~INTL.7-2-LBR-TST.A~INTL.7-2-LBY-TST.A~INTL.7-2-LTU-TST.A~INTL.7-2-LUX-TST.A~INTL.7-2-MAC-TST.A~INTL.7-2-MKD-TST.A~INTL.7-2-MDG-TST.A~INTL.7-2-MWI-TST.A~INTL.7-2-MYS-TST.A~INTL.7-2-MDV-TST.A~INTL.7-2-MLI-TST.A~INTL.7-2-MLT-TST.A~INTL.7-2-MTQ-TST.A~INTL.7-2-MRT-TST.A~INTL.7-2-MUS-TST.A~INTL.7-2-MEX-TST.A~INTL.7-2-FSM-TST.A~INTL.7-2-MDA-TST.A~INTL.7-2-MNG-TST.A~INTL.7-2-MNE-TST.A~INTL.7-2-MSR-TST.A~INTL.7-2-MAR-TST.A~INTL.7-2-MOZ-TST.A~INTL.7-2-NAM-TST.A~INTL.7-2-NRU-TST.A~INTL.7-2-NPL-TST.A~INTL.7-2-NLD-TST.A~INTL.7-2-NLDA-TST.A~INTL.7-2-NCL-TST.A~INTL.7-2-NZL-TST.A~INTL.7-2-NIC-TST.A~INTL.7-2-NER-TST.A~INTL.7-2-NGA-TST.A~INTL.7-2-NIU-TST.A~INTL.7-2-MNP-TST.A~INTL.7-2-NOR-TST.A~INTL.7-2-OMN-TST.A~INTL.7-2-PAK-TST.A~INTL.7-2-PSE-TST.A~INTL.7-2-PAN-TST.A~INTL.7-2-PNG-TST.A~INTL.7-2-PRY-TST.A~INTL.7-2-PER-TST.A~INTL.7-2-PHL-TST.A~INTL.7-2-POL-TST.A~INTL.7-2-PRT-TST.A~INTL.7-2-PRI-TST.A~INTL.7-2-QAT-TST.A~INTL.7-2-REU-TST.A~INTL.7-2-ROU-TST.A~INTL.7-2-RUS-TST.A~INTL.7-2-RWA-TST.A~INTL.7-2-SHN-TST.A~INTL.7-2-KNA-TST.A~INTL.7-2-LCA-TST.A~INTL.7-2-SPM-TST.A~INTL.7-2-VCT-TST.A~INTL.7-2-WSM-TST.A~INTL.7-2-STP-TST.A~INTL.7-2-SAU-TST.A~INTL.7-2-SEN-TST.A~INTL.7-2-SRB-TST.A~INTL.7-2-SYC-TST.A~INTL.7-2-SLE-TST.A~INTL.7-2-SGP-TST.A~INTL.7-2-SVK-TST.A~INTL.7-2-SVN-TST.A~INTL.7-2-SLB-TST.A~INTL.7-2-SOM-TST.A~INTL.7-2-ZAF-TST.A~INTL.7-2-ESP-TST.A~INTL.7-2-LKA-TST.A~INTL.7-2-SDN-TST.A~INTL.7-2-SUR-TST.A~INTL.7-2-SWZ-TST.A~INTL.7-2-SWE-TST.A~INTL.7-2-CHE-TST.A~INTL.7-2-SYR-TST.A~INTL.7-2-TWN-TST.A~INTL.7-2-TJK-TST.A~INTL.7-2-TZA-TST.A~INTL.7-2-THA-TST.A~INTL.7-2-TLS-TST.A~INTL.7-2-TGO-TST.A~INTL.7-2-TON-TST.A~INTL.7-2-TTO-TST.A~INTL.7-2-TUN-TST.A~INTL.7-2-TUR-TST.A~INTL.7-2-TKM-TST.A~INTL.7-2-TCA-TST.A~INTL.7-2-TUV-TST.A~INTL.7-2-USIQ-TST.A~INTL.7-2-USOH-TST.A~INTL.7-2-UGA-TST.A~INTL.7-2-UKR-TST.A~INTL.7-2-ARE-TST.A~INTL.7-2-GBR-TST.A~INTL.7-2-USA-TST.A~INTL.7-2-URY-TST.A~INTL.7-2-UZB-TST.A~INTL.7-2-VUT-TST.A~INTL.7-2-VEN-TST.A~INTL.7-2-VNM-TST.A~INTL.7-2-VIR-TST.A~INTL.7-2-VGB-TST.A~INTL.7-2-WAK-TST.A~INTL.7-2-ESH-TST.A~INTL.7-2-YEM-TST.A~INTL.7-2-ZMB-TST.A~INTL.7-2-ZWE-TST.A&amp;c=ruvvvvvfvtvnvv1vrvvvvfvvvvvvfvvvou20evvvvvvvvvvvvuvo&amp;pa=00000000000000000000000000000000000000ng08o&amp;f=A&amp;ug=g&amp;ct=0&amp;tl_type=p&amp;tl_id=1-A&amp;s="> International coal consumption</a><br />
          <em>Data from: <a href="/beta/international/data/browser/">International Energy Statistics</a></em><br /><br /></td>
        </tr>
        
         
        
        
        <thead id="production">
          <tr>
            <th><a name="production"></a><strong>Production</strong></th>
            <th width="30%"><span class="right">  </span></th>
          </tr>
        </thead>
        <tr>
          <td colspan="2"><span class="right ico_xls">
            <form name="form"  id="form" >
              <strong>
              <select name="jumpMenu" id="jumpMenu" >
                <option value="/coal/data/public/xls/coalpublic2016.xls"selected="selected">2016</option>
                <option value="/coal/data/public/xls/coalpublic2015.xls">2015</option>
                <option value="/coal/data/public/xls/coalpublic2014.xls">2014</option>
                <option value="/coal/data/public/xls/coalpublic2013.xls">2013</option>
                <option value="/coal/data/public/xls/coalpublic2012.xls">2012</option>
                <option value="/coal/data/public/xls/coalpublic2011.xls">2011</option>
                <option value="/coal/data/public/xls/coalpublic2010.xls">2010</option>
                <option value="/coal/data/public/xls/coalpublic2009.xls">2009</option>
                <option value="/coal/data/public/xls/coalpublic2008.xls">2008</option>
                <option value="/coal/data/public/xls/coalpublic2007.xls">2007</option>
                <option value="/coal/data/public/xls/coalpublic2006.xls">2006</option>
                <option value="/coal/data/public/xls/coalpublic2005.xls">2005</option>
                <option value="/coal/data/public/xls/coalpublic2004.xls">2004</option>
                <option value="/coal/data/public/xls/coalpublic2003.xls">2003</option>
                <option value="/coal/data/public/xls/coalpublic2002.xls">2002</option>
                <option value="/coal/data/public/xls/coalpublic2001.xls">2001</option>
                <option value="/coal/data/public/xls/coalpublic2000.xls">2000</option>
                <option value="/coal/data/public/xls/coalpublic1999.xls">1999</option>
                <option value="/coal/data/public/xls/coalpublic1998.xls">1998</option>
                <option value="/coal/data/public/xls/coalpublic1997.xls">1997</option>
                <option value="/coal/data/public/xls/coalpublic1996.xls">1996</option>
                <option value="/coal/data/public/xls/coalpublic1995.xls">1995</option>
                <option value="/coal/data/public/xls/coalpublic1994.xls">1994</option>
                <option value="/coal/data/public/xls/coalpublic1993.xls">1993</option>
                <option value="/coal/data/public/xls/coalpublic1992.xls">1992</option>
                <option value="/coal/data/public/xls/coalpublic1991.xls">1991</option>
                <option value="/coal/data/public/xls/coalpublic1990.xls">1990</option>
                <option value="/coal/data/public/xls/coalpublic1989.xls">1989</option>
                <option value="/coal/data/public/xls/coalpublic1988.xls">1988</option>
                <option value="/coal/data/public/xls/coalpublic1987.xls">1987</option>
                <option value="/coal/data/public/xls/coalpublic1986.xls">1986</option>
                <option value="/coal/data/public/xls/coalpublic1985.xls">1985</option>
                <option value="/coal/data/public/xls/coalpublic1984.xls">1984</option>
                <option value="/coal/data/public/xls/coalpublic1983.xls">1983</option>
              </select>
              <input type="button" name="go_button" class="arrow_go" align="right"  id= "go_button" value="Go" onclick="MM_jumpMenuGo('jumpMenu','parent',1)" />
              </strong>
            </form>
            </span> <strong>Detailed data from the <a href="/survey/form/eia_7a/form.pdf">EIA-7A</a> and the U.S. Mine Safety and Health Administration </strong>(back to 1983)<br />
            Production,  company and mine information, operation type, union status, labor hours, and number of 
            employees </td>
        </tr>
        <tr class="white_first">
          <td colspan="2">
          <p>
          <a href="/coal/production/weekly/"><strong>Weekly </strong></a>estimates <br />
            <em>Released:  Weekly (on Thursday) from <a href="/coal/production/weekly/">Weekly Coal Production Report</a></em>
            </p>
            <strong>Quarterly</strong><span class="right">
         <a href="/coal/production/quarterly/pdf/t1p01p1.pdf" class="ico_pdf" title="Consumption quarterly ">
PDF</a> <a href="/coal/production/quarterly/xls/t1p01p1.xls" class="ico_xls" title="Consumption quarterly ">XLS</a></span>
                          <div align="left"> 
              <script language="JavaScript" type="text/JavaScript" src="/coal/production/quarterly/qcr_releasedate.txt"></script> </div>
            <br />
            <strong>Annual</strong>
            <div align="left"> 
              <script language="JavaScript" type="text/JavaScript" src="/coal/annual/acr_releasedate.txt"></script> 
            </div>
            <div><em>Interactive data from <a href="/coal/data/browser/">Coal Data Browser</a></em></div>
            <ul>
              <li><span class="right"><a href="/coal/annual/pdf/table1.pdf" class="ico_pdf" title="production Annual By state and mine type ">
PDF</a> <a href="/coal/annual/xls/table1.xls" class="ico_xls" title="production Annual By state and mine type ">
XLS</a> <span class="beta right"><a href="/beta/coal/data/browser/#/topic/33?agg=1,0&amp;geo=vvvvvvvvvvvvo&amp;freq=A&amp;start=2008&amp;ctype=linechart&amp;ltype=pin&amp;rtype=s&amp;pin=&amp;rse=0&amp;maptype=0" class="beta" title="production Annual By state and mine type ">
INTERACTIVE</a></span></span> By state and mine type</li>
              <li><span class="right"><a href="/coal/annual/pdf/table2.pdf" class="ico_pdf" title="production Annual  By state, county, and mine type ">
PDF</a> <a href="/coal/annual/xls/table2.xls" class="ico_xls" title="production Annual  By state, county, and mine type ">
XLS</a></span> By state, county, and mine type<br />
              </li>
              <li><span class="right"><a href="/coal/annual/pdf/table6.pdf" class="ico_pdf" title="production Annual  By state and coal rank ">
PDF</a> <a href="/coal/annual/xls/table6.xls" class="ico_xls" title="production Annual  By state and coal rank ">
XLS</a></span> By state and coal rank<br />
              </li>
              <li><span class="right"><a href="/coal/annual/pdf/table21.pdf" class="ico_pdf" title="Annual  Coal mining productivity & employees by state and mine type ">
PDF</a> <a href="/coal/annual/xls/table21.xls" class="ico_xls" title="Annual  Coal mining productivity & employees by state and mine type ">
XLS</a></span> Coal mining productivity &amp; employees by state and mine type<br />
              </li>
              <li><span class="beta right"><a href="/beta/coal/data/browser/#/topic/38?agg=0,2,1&amp;rank=g&amp;geo=vvvvvvvvvvvvo&amp;mntp=g&amp;freq=A&amp;start=2001&amp;ctype=map&amp;ltype=pin&amp;rtype=s&amp;maptype=0&amp;rse=0&amp;pin=" class="beta" title="production Annual, Detailed mine level production data ">
INTERACTIVE</a></span> Detailed mine level production data </li>
              <li><span class="right"><a href="/totalenergy/data/annual/pdf/sec7_7.pdf" class="ico_pdf" title="production Annual By coal rank and mining method, 1949-2011 ">
PDF</a> <a href="/totalenergy/data/annual/xls/stb0702.xls" class="ico_xls" title="production Annual By coal rank and mining method, 1949-2011 ">
XLS</a></span>By coal rank and mining method, 1949-2011
                <div> 
                  <script language="javascript" type="text/javascript" src="/totalenergy/data/annual/txt/new_aerheader.txt"></script> 
                </div>
              </li>
            </ul></td>
        </tr>
        <tr>
          <td><a href="/beta/international/data/browser/#?ord=CR&amp;cy=2013&amp;start=1980&amp;v=H&amp;vo=0&amp;so=0&amp;io=0&amp;vs=INTL.7-1-AFG-TST.A~INTL.7-1-ALB-TST.A~INTL.7-1-DZA-TST.A~INTL.7-1-ASM-TST.A~INTL.7-1-AGO-TST.A~INTL.7-1-ATA-TST.A~INTL.7-1-ATG-TST.A~INTL.7-1-ARG-TST.A~INTL.7-1-ARM-TST.A~INTL.7-1-ABW-TST.A~INTL.7-1-AUS-TST.A~INTL.7-1-AUT-TST.A~INTL.7-1-AZE-TST.A~INTL.7-1-BHS-TST.A~INTL.7-1-BHR-TST.A~INTL.7-1-BGD-TST.A~INTL.7-1-BRB-TST.A~INTL.7-1-BLR-TST.A~INTL.7-1-BEL-TST.A~INTL.7-1-BLZ-TST.A~INTL.7-1-BEN-TST.A~INTL.7-1-BMU-TST.A~INTL.7-1-BTN-TST.A~INTL.7-1-BOL-TST.A~INTL.7-1-BIH-TST.A~INTL.7-1-BWA-TST.A~INTL.7-1-BRA-TST.A~INTL.7-1-BRN-TST.A~INTL.7-1-BGR-TST.A~INTL.7-1-BFA-TST.A~INTL.7-1-MMR-TST.A~INTL.7-1-BDI-TST.A~INTL.7-1-KHM-TST.A~INTL.7-1-CMR-TST.A~INTL.7-1-CAN-TST.A~INTL.7-1-CPV-TST.A~INTL.7-1-CYM-TST.A~INTL.7-1-CAF-TST.A~INTL.7-1-TCD-TST.A~INTL.7-1-CHL-TST.A~INTL.7-1-CHN-TST.A~INTL.7-1-COL-TST.A~INTL.7-1-COM-TST.A~INTL.7-1-COG-TST.A~INTL.7-1-COD-TST.A~INTL.7-1-COK-TST.A~INTL.7-1-CRI-TST.A~INTL.7-1-CIV-TST.A~INTL.7-1-HRV-TST.A~INTL.7-1-CUB-TST.A~INTL.7-1-CYP-TST.A~INTL.7-1-CZE-TST.A~INTL.7-1-DNK-TST.A~INTL.7-1-DJI-TST.A~INTL.7-1-DMA-TST.A~INTL.7-1-DOM-TST.A~INTL.7-1-ECU-TST.A~INTL.7-1-EGY-TST.A~INTL.7-1-SLV-TST.A~INTL.7-1-GNQ-TST.A~INTL.7-1-ERI-TST.A~INTL.7-1-EST-TST.A~INTL.7-1-ETH-TST.A~INTL.7-1-FLK-TST.A~INTL.7-1-FRO-TST.A~INTL.7-1-FJI-TST.A~INTL.7-1-FIN-TST.A~INTL.7-1-CSK-TST.A~INTL.7-1-SCG-TST.A~INTL.7-1-SUN-TST.A~INTL.7-1-YUG-TST.A~INTL.7-1-FRA-TST.A~INTL.7-1-GUF-TST.A~INTL.7-1-PYF-TST.A~INTL.7-1-GAB-TST.A~INTL.7-1-GMB-TST.A~INTL.7-1-GEO-TST.A~INTL.7-1-DEU-TST.A~INTL.7-1-DDR-TST.A~INTL.7-1-DEUW-TST.A~INTL.7-1-GHA-TST.A~INTL.7-1-GIB-TST.A~INTL.7-1-GRC-TST.A~INTL.7-1-GRL-TST.A~INTL.7-1-GRD-TST.A~INTL.7-1-GLP-TST.A~INTL.7-1-GUM-TST.A~INTL.7-1-GTM-TST.A~INTL.7-1-GIN-TST.A~INTL.7-1-GNB-TST.A~INTL.7-1-GUY-TST.A~INTL.7-1-HTI-TST.A~INTL.7-1-HITZ-TST.A~INTL.7-1-HND-TST.A~INTL.7-1-HKG-TST.A~INTL.7-1-HUN-TST.A~INTL.7-1-ISL-TST.A~INTL.7-1-IND-TST.A~INTL.7-1-IDN-TST.A~INTL.7-1-IRN-TST.A~INTL.7-1-IRQ-TST.A~INTL.7-1-IRL-TST.A~INTL.7-1-ISR-TST.A~INTL.7-1-ITA-TST.A~INTL.7-1-JAM-TST.A~INTL.7-1-JPN-TST.A~INTL.7-1-JOR-TST.A~INTL.7-1-KAZ-TST.A~INTL.7-1-KEN-TST.A~INTL.7-1-KIR-TST.A~INTL.7-1-PRK-TST.A~INTL.7-1-KOR-TST.A~INTL.7-1-UNK-TST.A~INTL.7-1-KWT-TST.A~INTL.7-1-KGZ-TST.A~INTL.7-1-LAO-TST.A~INTL.7-1-LVA-TST.A~INTL.7-1-LBN-TST.A~INTL.7-1-LSO-TST.A~INTL.7-1-LBR-TST.A~INTL.7-1-LBY-TST.A~INTL.7-1-LTU-TST.A~INTL.7-1-LUX-TST.A~INTL.7-1-MAC-TST.A~INTL.7-1-MKD-TST.A~INTL.7-1-MDG-TST.A~INTL.7-1-MWI-TST.A~INTL.7-1-MYS-TST.A~INTL.7-1-MDV-TST.A~INTL.7-1-MLI-TST.A~INTL.7-1-MLT-TST.A~INTL.7-1-MTQ-TST.A~INTL.7-1-MRT-TST.A~INTL.7-1-MUS-TST.A~INTL.7-1-MEX-TST.A~INTL.7-1-FSM-TST.A~INTL.7-1-MDA-TST.A~INTL.7-1-MNG-TST.A~INTL.7-1-MNE-TST.A~INTL.7-1-MSR-TST.A~INTL.7-1-MAR-TST.A~INTL.7-1-MOZ-TST.A~INTL.7-1-NAM-TST.A~INTL.7-1-NRU-TST.A~INTL.7-1-NPL-TST.A~INTL.7-1-NLD-TST.A~INTL.7-1-NLDA-TST.A~INTL.7-1-NCL-TST.A~INTL.7-1-NZL-TST.A~INTL.7-1-NIC-TST.A~INTL.7-1-NER-TST.A~INTL.7-1-NGA-TST.A~INTL.7-1-NIU-TST.A~INTL.7-1-MNP-TST.A~INTL.7-1-NOR-TST.A~INTL.7-1-OMN-TST.A~INTL.7-1-PAK-TST.A~INTL.7-1-PSE-TST.A~INTL.7-1-PAN-TST.A~INTL.7-1-PNG-TST.A~INTL.7-1-PRY-TST.A~INTL.7-1-PER-TST.A~INTL.7-1-PHL-TST.A~INTL.7-1-POL-TST.A~INTL.7-1-PRT-TST.A~INTL.7-1-PRI-TST.A~INTL.7-1-QAT-TST.A~INTL.7-1-REU-TST.A~INTL.7-1-ROU-TST.A~INTL.7-1-RUS-TST.A~INTL.7-1-RWA-TST.A~INTL.7-1-SHN-TST.A~INTL.7-1-KNA-TST.A~INTL.7-1-LCA-TST.A~INTL.7-1-SPM-TST.A~INTL.7-1-VCT-TST.A~INTL.7-1-WSM-TST.A~INTL.7-1-STP-TST.A~INTL.7-1-SAU-TST.A~INTL.7-1-SEN-TST.A~INTL.7-1-SRB-TST.A~INTL.7-1-SYC-TST.A~INTL.7-1-SLE-TST.A~INTL.7-1-SGP-TST.A~INTL.7-1-SVK-TST.A~INTL.7-1-SVN-TST.A~INTL.7-1-SLB-TST.A~INTL.7-1-SOM-TST.A~INTL.7-1-ZAF-TST.A~INTL.7-1-ESP-TST.A~INTL.7-1-LKA-TST.A~INTL.7-1-SDN-TST.A~INTL.7-1-SUR-TST.A~INTL.7-1-SWZ-TST.A~INTL.7-1-SWE-TST.A~INTL.7-1-CHE-TST.A~INTL.7-1-SYR-TST.A~INTL.7-1-TWN-TST.A~INTL.7-1-TJK-TST.A~INTL.7-1-TZA-TST.A~INTL.7-1-THA-TST.A~INTL.7-1-TLS-TST.A~INTL.7-1-TGO-TST.A~INTL.7-1-TON-TST.A~INTL.7-1-TTO-TST.A~INTL.7-1-TUN-TST.A~INTL.7-1-TUR-TST.A~INTL.7-1-TKM-TST.A~INTL.7-1-TCA-TST.A~INTL.7-1-TUV-TST.A~INTL.7-1-USIQ-TST.A~INTL.7-1-USOH-TST.A~INTL.7-1-UGA-TST.A~INTL.7-1-UKR-TST.A~INTL.7-1-ARE-TST.A~INTL.7-1-GBR-TST.A~INTL.7-1-USA-TST.A~INTL.7-1-URY-TST.A~INTL.7-1-UZB-TST.A~INTL.7-1-VUT-TST.A~INTL.7-1-VEN-TST.A~INTL.7-1-VNM-TST.A~INTL.7-1-VIR-TST.A~INTL.7-1-VGB-TST.A~INTL.7-1-WAK-TST.A~INTL.7-1-ESH-TST.A~INTL.7-1-YEM-TST.A~INTL.7-1-ZMB-TST.A~INTL.7-1-ZWE-TST.A&amp;c=ruvvvvvfvtvnvv1vrvvvvfvvvvvvfvvvou20evvvvvvvvvvvvuvo&amp;pa=bi0000000000000000000000000000000000018001&amp;f=A&amp;ug=g&amp;ct=0&amp;tl_type=p&amp;tl_id=1-A&amp;s=">International  production</a><br />
          <em>Data from: <a href="/beta/international/data/browser/">International Energy Statistics</a></em><br /><br /></td>
        </tr>
        <thead id="stocks">
          <tr>
            <th><a name="stocks"></a><strong>Stocks</strong></th>
            <th width="30%"><span class="right">  </span></th>
          </tr>
        </thead>
        <tr class="white_first">
          <td colspan="2"><strong>Quarterly</strong><br />
                           <div> 
              <script language="JavaScript" type="text/javascript" src="/coal/production/quarterlyqcr_releasedate.txt"></script> 
            </div>
 <ul>
                  <li><span class="right"><a href="/coal/production/quarterly/pdf/t37p01p1.pdf" class="ico_pdf" title="Quarterly stocks By consuming sector and by producers ">
PDF</a> <a href="/coal/production/quarterly/xls/t37p01p1.xls" class="ico_xls" title="Quarterly stocks By consuming sector and by producers ">
XLS</a></span> By consuming sector and by producers<br />
                  </li>
                  <li><span class="right"><a href="/coal/production/quarterly/pdf/t38p01p1.pdf" class="ico_pdf" title="Quarterly stocks At coke plants by Census division ">
PDF</a> <a href="/coal/production/quarterly/xls/t38p01p1.xls" class="ico_xls" title="Quarterly stocks At coke plants by Census division ">
XLS</a></span> At coke plants by Census division<br />
                  </li>
                  <li><span class="right"><a href="/coal/production/quarterly/pdf/t39p01p1.pdf" class="ico_pdf" title="Quarterly stocks At other industrial plants by Census division and state ">
PDF</a> <a href="/coal/production/quarterly/xls/t39p01p1.xls" class="ico_xls" title="Quarterly stocks At other industrial plants by Census division and state ">
XLS</a></span> At other industrial plants by Census division and state<br />
                  </li>
                  <li><span class="right"><a href="/coal/production/quarterly/pdf/t40p01p1.pdf" class="ico_pdf" title="Quarterly stocks At manufacturing plants by North American Industry Classification System (NAICS) code ">
PDF</a> <a href="/coal/production/quarterly/xls/t40p01p1.xls" class="ico_xls" title="Quarterly stocks At manufacturing plants by North American Industry Classification System (NAICS) code ">
XLS</a></span> At manufacturing plants by North American Industry Classification System (NAICS) code<br />
                  </li>
                  <li><span class="right"><a href="/coal/production/quarterly/pdf/t42p01p1.pdf" class="ico_pdf" title="Quarterly stocks At commercial and institutional users by Census division and state ">
PDF</a> <a href="/coal/production/quarterly/xls/t42p01p1.xls" class="ico_xls" title="Quarterly stocks At commercial and institutional users by Census division and state ">
XLS</a></span> At commercial and institutional users by Census division and state<br />
                  </li>
                  <li><span class="right"><a href="/coal/production/quarterly/pdf/t41p01p1.pdf" class="ico_pdf" title="Quarterly stocks Coke and breeze stocks at coke plants by Census division ">
PDF</a> <a href="/coal/production/quarterly/xls/t41p01p1.xls" class="ico_xls" title="Quarterly stocks Coke and breeze stocks at coke plants by Census division ">
XLS</a></span> Coke and breeze stocks at coke plants by Census division<br />
                  </li>
                </ul>
              <span class="right"><a href="/totalenergy/data/monthly/pdf/sec6_5.pdf" class="ico_pdf" title="Monthly by sector ">
PDF</a> <a href="/totalenergy/data/browser/csv.cfm?tbl=T06.03" class="ico_csv" title="Monthly by sector ">
CSV</a> <a href="/totalenergy/data/browser/xls.cfm?tbl=T06.03&amp;freq=m" class="ico_xls" title="Monthly by sector ">
XLS</a>&nbsp; <span class="beta right"><a href="/beta/MER/index.cfm?tbl=T06.03#/?f=M&amp;start=200001" title="Monthly by sector ">
INTERACTIVE</a></span></span> <strong>Monthly</strong> by sector<br />
                <div> 
                  <script language="javascript" type="text/javascript" src="/totalenergy/data/monthly/txt/new_merheader.txt"></script> 
                </div>
                <em> Interactive data from <a href="/totalenergy/data/browser/" title="Interactive data from ">
Total Energy Browser</a></em><br /><br />
             <span class="right"><a href="/totalenergy/data/annual/pdf/sec7_15.pdf" class="ico_pdf" title="Annual by sector ">
PDF</a> <a href="/totalenergy/data/annual/xls/stb0706.xls" class="ico_xls" title="Annual by sector ">
XLS</a></span><a href="/totalenergy/data/annual/showtext.cfm?t=ptb0706"><strong title="By sector html">
Annual</strong> </a>by sector<br />
                <div> 
                  <script language="javascript" type="text/javascript" src="/totalenergy/data/annual/txt/new_aerheader.txt"></script> 
                </div>
            </td>
        </tr>
        
         
        
        
        <thead id="imports">
          <tr>
            <th><a name="imports"></a><strong>Imports,  exports &amp; distribution</strong></th>
            <th width="30%"><span class="right">  </span></th>
          </tr>
        </thead>
        <tr class="white_first">
          <td colspan="2"><strong>Imports by country of origin</strong><br />
            <div><em>Interactive data from <a href="/coal/data/browser/" title="Imports by country of origin Interactive data from ">
Coal Data Browser</a></em></div>
<ul>
<li><strong>Quarterly</strong><br />
              <div align="left"> 
                <script language="JavaScript" type="text/javascript" src="/coal/production/quarterly/qcr_releasedate.txt"></script> 
              </div>
              <ul>
<li><span class="right"><a href="/coal/production/quarterly/pdf/t18p01p1.pdf" class="ico_pdf" title="Imports by country of origin Latest two quarters ">
PDF</a> <a href="/coal/production/quarterly/xls/t18p01p1.xls" class="ico_xls" title="Imports by country of origin Latest two quarters ">
XLS</a></span>Latest two quarters<br />
                
                
                  <li><span class="beta right"><a href="/beta/coal/data/browser/#/topic/39?agg=2,1,0&amp;rank=ok&amp;linechart=COAL.IMPORT_QTY.TOT-TOT-TOT.Q&amp;columnchart=COAL.IMPORT_QTY.TOT-TOT-TOT.Q&amp;map=COAL.EXPORT_QTY.TOT-TOT-TOT.Q&amp;freq=Q&amp;ctype=map&amp;ltype=pin&amp;rtype=s&amp;maptype=0&amp;rse=0&amp;pin=" title="Imports by country of origin Quarterly ">
INTERACTIVE</a></span>Quarterly</li>
                </ul>
</li><br />
<li><strong>Quarterly</strong>
<br /> <em>Data from Bureau of the Census, 'Monthly Report IM 145.'</em><ul>
  <li><span class="right"> <span class="beta right"><a href="/beta/coal/data/browser/#/topic/39?agg=2,1,0&amp;rank=ok&amp;linechart=COAL.IMPORT_QTY.TOT-TOT-TOT.A&amp;columnchart=COAL.IMPORT_QTY.TOT-TOT-TOT.A&amp;map=COAL.EXPORT_QTY.TOT-TOT-TOT.A&amp;freq=A&amp;ctype=map&amp;ltype=pin&amp;rtype=s&amp;pin=&amp;rse=0&amp;maptype=0" title="Imports by country of origin Quarterly Back to 2000  ">
INTERACTIVE</a></span><a href="archive/coal_historical_imports.xlsx" class="ico_xls" title="Imports by country of origin Quarterly Back to 2000  ">
XLS</a></span>
  Back to 2000
    </li>
  </ul>
</li>
              </ul>
                        </td>
        </tr>
        <tr class="white_first">
          <td colspan="2"><strong>Exports by country of destination</strong>
            <div><em>Interactive data from <a href="/coal/data/browser/" title="Exports by country of destination Interactive data from ">
Coal Data Browser</a></em></div>
            <ul>
              <li> <strong>Quarterly</strong><br />
              <div align="left"> 
                <script language="JavaScript" type="text/javascript" src="/coal/production/quarterly/qcr_releasedate.txt"></script> 
              </div>

              <ul>
              <li><span class="right"><a href="/coal/production/quarterly/pdf/t7p01p1.pdf" class="ico_pdf" title="Exports by country of destination Latest two quarters ">
PDF</a> <a href="/coal/production/quarterly/xls/t7p01p1.xls" class="ico_xls" title="Exports by country of destination Latest two quarters ">
XLS</a></span>Latest two quarters
                
                
                  <li><span class="beta right"><a href="/beta/coal/data/browser/#/topic/41?agg=2,1,0&rank=ok&map=COAL.EXPORT_QTY.TOT-TOT-TOT.Q&freq=Q&start=200001&end=201403&ctype=map&ltype=pin&rtype=s&pin=&rse=0&maptype=0 "class="beta" title="Exports by country of destination Quarterly ">
INTERACTIVE</a></span> Quarterly</li>
                </ul><br />
              <li> <strong>Quarterly</strong>
                <br />
                    <em>Data from Bureau of the Census, 'Monthly Report EM 545.'</em>
                    <ul>
                  <li><span class="right"><span class="beta right"><a href="/beta/coal/data/browser/#/topic/41?agg=2,1,0&amp;rank=ok&amp;linechart=COAL.EXPORT_QTY.TOT-TOT-TOT.A&amp;columnchart=COAL.EXPORT_QTY.TOT-TOT-TOT.A&amp;map=COAL.EXPORT_QTY.TOT-TOT-TOT.A&amp;freq=A&amp;ctype=map&amp;ltype=pin&amp;rtype=s&amp;pin=&amp;rse=0&amp;maptype=0 "class="beta" title="Exports by country of destination Quarterly Back to 2000  ">
INTERACTIVE</a></span> <a href="archive/coal_historical_exports.xlsx" class="ico_xls" title="Exports by country of destination Quarterly Back to 2000  ">
XLS</a></span>Back to 2000
                  </li>
                </ul>
              </li>
            </ul></td>
        </tr>
        <tr class="white_first">
          <td colspan="2"><p><strong>Distribution</strong><br />
          By origin/destination state, consuming sector, and method of transportation</p>
            <ul>
              <li><a href="/coal/distribution/quarterly/" title="Distribution Quarterly ">
Quarterly</a><br />
              <div align="left"> 
                <script language="JavaScript" type="text/javascript" src="/coal/distribution/quarterly/releasedate.txt"></script> 
              </div>
                <br />
              </li>
              <li><a href="/coal/distribution/annual/" title="Distribution Annual ">
Annual</a><br />
              <div align="left"> 
                <script language="JavaScript" type="text/javascript" src="/coal/distribution/annual/releasedate.txt"></script> 
              </div>
            </ul></td>
        </tr>
        
         
      
        
    <thead id="coalplants">
          <tr>
            <th><a name=""></a>Coal-fired electric power plants</th>
            <th>&nbsp;</th>
          </tr>
        </thead>  
        <tr class="white_first">
          <td valign="top"><strong>Detailed <a href="/survey/form/eia_860/form.pdf">EIA-860</a>  data back to 2003</strong> <br />
            Capacity, energy source, date of first operation, and planned retirement date for coal-fired generating units</td>
          <td valign="top"><span class="right ico_xls">
            <form name="form3"  id="form3" >
              <select name="jumpMenu3" id="jumpMenu3" >
                <option value="/electricity/archive/capacity/xls/existing_gen_units_2016.xlsx">2016</option>
                <option value="/electricity/archive/capacity/xls/existing_gen_units_2015.xlsx">2015</option>
                <option value="/electricity/archive/capacity/xls/existing_gen_units_2014.xls">2014</option>
                <option value="/electricity/archive/capacity/xls/existing_gen_units_2013.xls">2013</option>
                <option value="/electricity/archive/capacity/xls/existing_gen_units_2012.xls">2012</option>
                <option value="/electricity/archive/capacity/xls/existing_gen_units_2011.xls">2011</option>
                <option value="/electricity/archive/capacity/xls/existing_gen_units_2010.xls">2010</option>
                <option value="/electricity/archive/capacity/xls/existing_gen_units_2009.xls">2009</option>
                <option value="/electricity/archive/capacity/xls/existing_gen_units_2008.xls">2008</option>
                <option value="/electricity/archive/capacity/xls/existing_gen_units_2007.xls">2007</option>
                <option value="/electricity/archive/capacity/xls/existing_gen_units_2006.xls">2006</option>
                <option value="/electricity/archive/capacity/xls/existing_gen_units_2005.xls">2005</option>
                <option value="/electricity/archive/capacity/xls/existing_gen_units_2004.xls">2004</option>
                <option value="/electricity/archive/capacity/xls/existing_gen_units_2003.xls">2003</option>
              </select>
              <input type="button" name="go_button3" class="arrow_go" align="right"  id= "go_button3" value="Go" onclick="MM_jumpMenuGo('jumpMenu3','parent',1)" />
            </form>
            </span></td>
        </tr>      
         
        
        
        <thead id="transrate">
          <tr>
            <th><a name="transrate"></a>Transportation costs to electric power sector</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tr class="white_first">
          <td colspan="2"><p><strong>Real and nominal average transportation costs</strong> (back to 2008) - <a href="/coal/transportationrates/">methodology</a><br />
              <em>Release date: May 5, 2017 | data from <a href="/electricity/data/eia923/">Form EIA-923, &quot;Power Plant Operations Report</a>&quot; </em></p>
            <ul>
              <li><strong> Delivered costs</strong>
                <ul>
                  <li><span class="right">Real <a href="/coal/transportationrates/excel/table1r.xlsx" class="ico_xls" title="Real Transportation costs to electric power sector Delivered costs By year and primary transport mode  ">
XLS</a>&nbsp;&nbsp; Nominal <a href="/coal/transportationrates/excel/table1n.xlsx" class="ico_xls" title="Nominal Transportation costs to electric power sector Delivered costs By year and primary transport mode  ">
XLS</a></span> By year and primary transport mode <br />
                  </li>
                  <li><span class="right">Real <a href="/coal/transportationrates/excel/table2r.xlsx" class="ico_xls" title="Real Transportation costs to electric power sector Delivered costs By primary transport mode and supply region ">
XLS</a>&nbsp;&nbsp; Nominal <a href="/coal/transportationrates/excel/table2n.xlsx" class="ico_xls" title="Nominal Transportation costs to electric power sector Delivered costs By primary transport mode and supply region ">
XLS</a></span>By primary transport mode and supply region</li>
                </ul>
              </li>
            </ul>
            <ul>
              <li><strong>From coal basin to state</strong>
                <ul>
                  <li><span class="right">Real <a href="/coal/transportationrates/excel/table3ar.xlsx" class="ico_xls" title="Real Transportation costs to electric power sector From coal basin to state By truck ">
XLS</a>&nbsp;&nbsp; Nominal <a href="/coal/transportationrates/excel/table3an.xlsx" class="ico_xls" title="Nominal Transportation costs to electric power sector From coal basin to state By truck ">
XLS</a></span> By truck<br />
                  </li>
                  <li><span class="right">Real <a href="/coal/transportationrates/excel/table3br.xlsx" class="ico_xls" title="Real Transportation costs to electric power sector From coal basin to state By waterway ">
XLS</a>&nbsp;&nbsp; Nominal <a href="/coal/transportationrates/excel/table3bn.xlsx" class="ico_xls" title="Nominal Transportation costs to electric power sector From coal basin to state By waterway ">
XLS</a></span> By waterway<br />
                  </li>
                  <li><span class="right">Real <a href="/coal/transportationrates/excel/table3cr.xlsx" class="ico_xls" title="Real Transportation costs to electric power sector From coal basin to state By railroad ">
XLS</a>&nbsp;&nbsp; Nominal <a href="/coal/transportationrates/excel/table3cn.xlsx" class="ico_xls" title="Nominal Transportation costs to electric power sector From coal basin to state By railroad ">
XLS</a></span> By railroad</li>
                </ul>
              </li>
            </ul>
            <ul>
              <li><strong>From state to state</strong>
                <ul>
                  <li><span class="right">Real <a href="/coal/transportationrates/excel/table4ar.xlsx" class="ico_xls" title="Real Transportation costs to electric power sector From state to state By truck ">
XLS</a>&nbsp;&nbsp; Nominal <a href="/coal/transportationrates/excel/table4an.xlsx" class="ico_xls" title="Nominal Transportation costs to electric power sector From state to state By truck ">
XLS</a></span>By truck <br />
                  </li>
                  <li><span class="right">Real <a href="/coal/transportationrates/excel/table4br.xlsx" class="ico_xls" title="Real Transportation costs to electric power sector From state to state By waterway ">
XLS</a>&nbsp;&nbsp; Nominal <a href="/coal/transportationrates/excel/table4bn.xlsx" class="ico_xls" title="Nominal Transportation costs to electric power sector From state to state By waterway ">
XLS</a></span> By waterway <br />
                  </li>
                  <li><span class="right">Real <a href="/coal/transportationrates/excel/table4cr.xlsx" class="ico_xls" title="Real Transportation costs to electric power sector From state to state By railroad ">
XLS</a>&nbsp;&nbsp; Nominal <a href="/coal/transportationrates/excel/table4cn.xlsx" class="ico_xls" title="Nominal Transportation costs to electric power sector From state to state By railroad ">
XLS</a></span>By railroad</li>
                </ul>
              </li>
            </ul></td>
        </tr>

        <?php /* END International Content ////////////////*/ ?> 
        <?php /* BEGIN Data Files Content ////////////////*/ ?> 
        <?php /*<tr>
              <td><strong><a href="/coal/reserves/database.html">Coal Reserves Data Files (CRDB) for 1997</a></strong><br />
                <em>Release Date: 1997</em> <br />
                The Coal Reserves Database (CRDB) files for 1997 contain data on the quantities and quality of resources and recoverable coal in the United States that meet specific criteria of reliability and minability.  This public CRDB includes files representing two classes of coal quantities remaining as of the first day of 1997: the demonstrated reserve base (DRB) and the estimated recoverable reserves of U.S. coal.</td>
              <td>&nbsp;</td>
            </tr> */ ?> 
        <?php /* END Data Files Content ////////////////*/ ?>
      </table>
      <?php /* End of Main Column */ ?>
      <div class="clear">&nbsp;</div>
      <?php /* Feature Example */ ?>
      <div class="weeklies"> <span>
        <h2>Regular Weekly Releases*</h2>
        <h3>Monday</h3>
        <p><a href="/coal/markets/">Coal Markets</a> (*Formerly Weekly NYMEX Coal Futures and Coal News & Markets)</p>
        <?php /* Commented out by CA2 on 10/27/2012
            <p><a href="/coal/page/coalnews/coalmar.html">Coal News &amp; Markets &rsaquo;</a></p>
*/ ?>
        <h3>Thursday</h3>
        <p><a href="/coal/production/weekly/">Weekly Coal Production</a></p>
        <p class="no-border"><i>*No releases: Tuesday, Wednesday, or Friday. Releases change on weeks with federal holidays.</i></p>
        </span> </div>
      <?php /* Feature Example */ ?> 
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