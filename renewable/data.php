<?php $locale = 'data'; ?>
<?php  if(!isset($no_titling))include("global/includes/titling.inc"); ?>
<?php /*cfinclude template="/global/includes/no_cache_headers.cfm"*/ ?>

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

<link rel="stylesheet" type="text/css" href="/global/includes/issuestrends/css/gallery.prefixed.css" />
<link rel="stylesheet" type="text/css" href="/global/includes/issuestrends/css/gallery_fixes.css" />
<link rel="stylesheet" type="text/css" href="/global/includes/issuestrends/css/styles_mv.css" />

</head>
<body>
<?php /* Start of Outer Wrapper */ ?>
<div id="outerX">
  <?php /* EIA Header */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
      <?php /* Navigation Menu */ ?>
      <?php include ('includes/subnav_renewable.inc') ; ?>
      <?php /* Page/Body Content */ ?>
      <div class="pagecontent mr_temp2">
        <?php /* Start of Main Column */ ?>
        <div class="main_col">
          <p>Find statistics on renewable energy consumption by source type, electric capacity and electricity generation from renewable sources, biomass and alternative fuels.</p>
          <span class="condaterange"><a class="no-border expandall">+ EXPAND ALL</a></span>
          <table class="contable">
            <?php /* BEGIN Summary Content ////////////////*/ ?>
            <thead id="summary">
              <tr>
                <th><a name="summary"></a><strong>Summary</strong></th>
                <th width="30%">&nbsp;</th>
              </tr>
            </thead>
            <tr class="white_first">
              <td colspan="2"><strong>Production and consumption
                </strong><br />
                <div align="left"><script language="javascript" type="text/javascript" src="/totalenergy/data/monthly/txt/new_merheader.txt"></script>
                <em>Interactive data from: <a href="/totalenergy/data/browser/">Total Energy Data Browser</a></em></div>
                <ul>
                <li><span class="right"><a href="/totalenergy/data/monthly/pdf/sec10_3.pdf" class="ico_pdf"><span hidden="Renewable energy production and consumption by source "></span>
PDF</a> <a href="/totalenergy/data/browser/xls.cfm?tbl=T10.01&amp;freq=m" class="ico_xls"><span hidden="Renewable energy production and consumption by source "></span>
XLS</a> <span  class="beta"><a href="/totalenergy/data/browser/?tbl=T10.01#/?f=M&start=200001"><span hidden="Renewable energy production and consumption by source "></span>
INTERACTIVE&nbsp;</a></span></span>Renewable energy production and consumption by source</li>
                  <li><span class="right"><a href="/state/seds/sep_prod/SEDS_Production_Report.pdf" class="ico_pdf"><span hidden="Renewable energy production and total energy production by state "></span>
PDF</a></span>Renewable energy production and total energy production by state</li>
                  <li><span class="right"><a href="/totalenergy/data/monthly/pdf/sec1_7.pdf" class="ico_pdf"><span hidden="Total energy consumption of renewable and nonrenewable energy sources "></span>
PDF</a> <a href="/totalenergy/data/browser/xls.cfm?tbl=T01.03&amp;freq=m" class="ico_xls"><span hidden="Total energy consumption of renewable and nonrenewable energy sources "></span>
XLS</a> <span  class="beta"><a href="/totalenergy/data/browser/?tbl=T01.03#/?f=M&start=200001"><span hidden="Total energy consumption of renewable and nonrenewable energy sources "></span>
INTERACTIVE&nbsp;</a></span></span> Total energy consumption of renewable and nonrenewable energy sources</li>
                  <li><span class="right"><a href="/state/seds/sep_use/notes/use_print.pdf" class="ico_pdf"><span hidden="Renewable energy consumption and total energy consumption by state "></span>
PDF</a></span>Renewable energy consumption and total energy consumption by state</li>
                  
                  <li>Renewable energy consumption by sector
                    <ul>
                      <li><span class="right"><a href="/totalenergy/data/monthly/pdf/sec10_4.pdf" class="ico_pdf"><span hidden="Renewable energy consumption by sector   Residential and commercial "></span>
PDF</a> <a href="/totalenergy/data/browser/xls.cfm?tbl=T10.02A&amp;freq=m" class="ico_xls"><span hidden="Renewable energy consumption by sector   Residential and commercial "></span>
XLS</a> <span  class="beta"><a href="/totalenergy/data/browser/?tbl=T10.01#/?f=M&start=200001"><span hidden="Renewable energy consumption by sector   Residential and commercial "></span>
INTERACTIVE&nbsp;</a></span></span>Residential and commercial </li>
                      <li><span class="right"><a href="/totalenergy/data/monthly/pdf/sec10_5.pdf" class="ico_pdf"><span hidden="Renewable energy consumption by sector    Industrial and transportation "></span>
PDF</a> <a href="/totalenergy/data/browser/xls.cfm?tbl=T10.02B&amp;freq=m" class="ico_xls"><span hidden="Renewable energy consumption by sector    Industrial and transportation "></span>
XLS</a> <span  class="beta"><a href="/totalenergy/data/browser/?tbl=T10.01#/?f=M&start=200001"><span hidden="Renewable energy consumption by sector    Industrial and transportation "></span>
INTERACTIVE&nbsp;</a></span></span> Industrial and transportation </li>
                      <li><span class="right"><a href="/totalenergy/data/monthly/pdf/sec10_6.pdf" class="ico_pdf"><span hidden="Renewable energy consumption by sector    Electric power "></span>
PDF</a> <a href="/totalenergy/data/browser/xls.cfm?tbl=T10.02C&amp;freq=m" class="ico_xls"><span hidden="Renewable energy consumption by sector    Electric power "></span>
XLS</a> <span  class="beta"><a href="/totalenergy/data/browser/?tbl=T10.01#/?f=M&start=200001"><span hidden="Renewable energy consumption by sector    Electric power "></span>
INTERACTIVE&nbsp;</a></span></span> Electric power</li>
                    </ul>
                  </li>
                </ul></td>
            </tr>
            <tr class="white_first">
              <td colspan="2"><strong>Renewable electricity </strong><br />
                <div>
              <script language="JavaScript" type="text/javascript" src="/electricity/annual/epa_release_date.txt"></script>
            </div>                <ul>
              <li><span class="right"><a href="/electricity/annual/xls/epa_04_03.xlsx" class="ico_xls"><span hidden="Generation capacity "></span>
XLS</a></span> <a href="/electricity/annual/html/epa_04_03.html">Generation capacity</a><br />
                Capacity  by energy source showing renewables' share </li>
              <li><span class="right"><a href="/electricity/annual/xls/epa_03_01_b.xlsx" class="ico_xls"><span hidden="net generation from renewable sources "></span>
XLS</a></span> <a href="http://www.eia.gov/electricity/annual/html/epa_03_01_b.html">Net generation from renewable sources</a></li>
            </ul></td>
            </tr>
            <tr class="white_first">
              <td colspan="2"><strong>International renewable electricity</strong><br />
              <em>data from: <a href="/beta/international/data/browser/">International Energy Statistics</a></em>
              <ul>
              <li><a href="/beta/international/data/browser/#?ord=CR&amp;cy=2012&amp;v=H&amp;vo=0&amp;so=0&amp;io=0&amp;start=1980&amp;end=2012&amp;vs=INTL.29-7-AFG-MK.A~INTL.29-7-ALB-MK.A~INTL.29-7-DZA-MK.A~INTL.29-7-ASM-MK.A~INTL.29-7-AGO-MK.A~INTL.29-7-ATA-MK.A~INTL.29-7-ATG-MK.A~INTL.29-7-ARG-MK.A~INTL.29-7-ARM-MK.A~INTL.29-7-ABW-MK.A~INTL.29-7-AUS-MK.A~INTL.29-7-AUT-MK.A~INTL.29-7-AZE-MK.A~INTL.29-7-BHS-MK.A~INTL.29-7-BHR-MK.A~INTL.29-7-BGD-MK.A~INTL.29-7-BRB-MK.A~INTL.29-7-BLR-MK.A~INTL.29-7-BEL-MK.A~INTL.29-7-BLZ-MK.A~INTL.29-7-BEN-MK.A~INTL.29-7-BMU-MK.A~INTL.29-7-BTN-MK.A~INTL.29-7-BOL-MK.A~INTL.29-7-BIH-MK.A~INTL.29-7-BWA-MK.A~INTL.29-7-BRA-MK.A~INTL.29-7-BRN-MK.A~INTL.29-7-BGR-MK.A~INTL.29-7-BFA-MK.A~INTL.29-7-MMR-MK.A~INTL.29-7-BDI-MK.A~INTL.29-7-KHM-MK.A~INTL.29-7-CMR-MK.A~INTL.29-7-CAN-MK.A~INTL.29-7-CPV-MK.A~INTL.29-7-CYM-MK.A~INTL.29-7-CAF-MK.A~INTL.29-7-TCD-MK.A~INTL.29-7-CHL-MK.A~INTL.29-7-CHN-MK.A~INTL.29-7-COL-MK.A~INTL.29-7-COM-MK.A~INTL.29-7-COG-MK.A~INTL.29-7-COD-MK.A~INTL.29-7-COK-MK.A~INTL.29-7-CRI-MK.A~INTL.29-7-CIV-MK.A~INTL.29-7-HRV-MK.A~INTL.29-7-CUB-MK.A~INTL.29-7-CYP-MK.A~INTL.29-7-CZE-MK.A~INTL.29-7-DNK-MK.A~INTL.29-7-DJI-MK.A~INTL.29-7-DMA-MK.A~INTL.29-7-DOM-MK.A~INTL.29-7-ECU-MK.A~INTL.29-7-EGY-MK.A~INTL.29-7-SLV-MK.A~INTL.29-7-GNQ-MK.A~INTL.29-7-ERI-MK.A~INTL.29-7-EST-MK.A~INTL.29-7-ETH-MK.A~INTL.29-7-FLK-MK.A~INTL.29-7-FRO-MK.A~INTL.29-7-FJI-MK.A~INTL.29-7-FIN-MK.A~INTL.29-7-CSK-MK.A~INTL.29-7-SCG-MK.A~INTL.29-7-SUN-MK.A~INTL.29-7-YUG-MK.A~INTL.29-7-FRA-MK.A~INTL.29-7-GUF-MK.A~INTL.29-7-PYF-MK.A~INTL.29-7-GAB-MK.A~INTL.29-7-GMB-MK.A~INTL.29-7-GEO-MK.A~INTL.29-7-DEU-MK.A~INTL.29-7-DDR-MK.A~INTL.29-7-DEUW-MK.A~INTL.29-7-GHA-MK.A~INTL.29-7-GIB-MK.A~INTL.29-7-GRC-MK.A~INTL.29-7-GRL-MK.A~INTL.29-7-GRD-MK.A~INTL.29-7-GLP-MK.A~INTL.29-7-GUM-MK.A~INTL.29-7-GTM-MK.A~INTL.29-7-GIN-MK.A~INTL.29-7-GNB-MK.A~INTL.29-7-GUY-MK.A~INTL.29-7-HTI-MK.A~INTL.29-7-HITZ-MK.A~INTL.29-7-HND-MK.A~INTL.29-7-HKG-MK.A~INTL.29-7-HUN-MK.A~INTL.29-7-ISL-MK.A~INTL.29-7-IND-MK.A~INTL.29-7-IDN-MK.A~INTL.29-7-IRN-MK.A~INTL.29-7-IRQ-MK.A~INTL.29-7-IRL-MK.A~INTL.29-7-ISR-MK.A~INTL.29-7-ITA-MK.A~INTL.29-7-JAM-MK.A~INTL.29-7-JPN-MK.A~INTL.29-7-JOR-MK.A~INTL.29-7-KAZ-MK.A~INTL.29-7-KEN-MK.A~INTL.29-7-KIR-MK.A~INTL.29-7-PRK-MK.A~INTL.29-7-KOR-MK.A~INTL.29-7-UNK-MK.A~INTL.29-7-KWT-MK.A~INTL.29-7-KGZ-MK.A~INTL.29-7-LAO-MK.A~INTL.29-7-LVA-MK.A~INTL.29-7-LBN-MK.A~INTL.29-7-LSO-MK.A~INTL.29-7-LBR-MK.A~INTL.29-7-LBY-MK.A~INTL.29-7-LTU-MK.A~INTL.29-7-LUX-MK.A~INTL.29-7-MAC-MK.A~INTL.29-7-MKD-MK.A~INTL.29-7-MDG-MK.A~INTL.29-7-MWI-MK.A~INTL.29-7-MYS-MK.A~INTL.29-7-MDV-MK.A~INTL.29-7-MLI-MK.A~INTL.29-7-MLT-MK.A~INTL.29-7-MTQ-MK.A~INTL.29-7-MRT-MK.A~INTL.29-7-MUS-MK.A~INTL.29-7-MEX-MK.A~INTL.29-7-FSM-MK.A~INTL.29-7-MDA-MK.A~INTL.29-7-MNG-MK.A~INTL.29-7-MNE-MK.A~INTL.29-7-MSR-MK.A~INTL.29-7-MAR-MK.A~INTL.29-7-MOZ-MK.A~INTL.29-7-NAM-MK.A~INTL.29-7-NRU-MK.A~INTL.29-7-NPL-MK.A~INTL.29-7-NLD-MK.A~INTL.29-7-NLDA-MK.A~INTL.29-7-NCL-MK.A~INTL.29-7-NZL-MK.A~INTL.29-7-NIC-MK.A~INTL.29-7-NER-MK.A~INTL.29-7-NGA-MK.A~INTL.29-7-NIU-MK.A~INTL.29-7-MNP-MK.A~INTL.29-7-NOR-MK.A~INTL.29-7-OMN-MK.A~INTL.29-7-PAK-MK.A~INTL.29-7-PSE-MK.A~INTL.29-7-PAN-MK.A~INTL.29-7-PNG-MK.A~INTL.29-7-PRY-MK.A~INTL.29-7-PER-MK.A~INTL.29-7-PHL-MK.A~INTL.29-7-POL-MK.A~INTL.29-7-PRT-MK.A~INTL.29-7-PRI-MK.A~INTL.29-7-QAT-MK.A~INTL.29-7-REU-MK.A~INTL.29-7-ROU-MK.A~INTL.29-7-RUS-MK.A~INTL.29-7-RWA-MK.A~INTL.29-7-SHN-MK.A~INTL.29-7-KNA-MK.A~INTL.29-7-LCA-MK.A~INTL.29-7-SPM-MK.A~INTL.29-7-VCT-MK.A~INTL.29-7-WSM-MK.A~INTL.29-7-STP-MK.A~INTL.29-7-SAU-MK.A~INTL.29-7-SEN-MK.A~INTL.29-7-SRB-MK.A~INTL.29-7-SYC-MK.A~INTL.29-7-SLE-MK.A~INTL.29-7-SGP-MK.A~INTL.29-7-SVK-MK.A~INTL.29-7-SVN-MK.A~INTL.29-7-SLB-MK.A~INTL.29-7-SOM-MK.A~INTL.29-7-ZAF-MK.A~INTL.29-7-ESP-MK.A~INTL.29-7-LKA-MK.A~INTL.29-7-SDN-MK.A~INTL.29-7-SUR-MK.A~INTL.29-7-SWZ-MK.A~INTL.29-7-SWE-MK.A~INTL.29-7-CHE-MK.A~INTL.29-7-SYR-MK.A~INTL.29-7-TWN-MK.A~INTL.29-7-TJK-MK.A~INTL.29-7-TZA-MK.A~INTL.29-7-THA-MK.A~INTL.29-7-TLS-MK.A~INTL.29-7-TGO-MK.A~INTL.29-7-TON-MK.A~INTL.29-7-TTO-MK.A~INTL.29-7-TUN-MK.A~INTL.29-7-TUR-MK.A~INTL.29-7-TKM-MK.A~INTL.29-7-TCA-MK.A~INTL.29-7-TUV-MK.A~INTL.29-7-USIQ-MK.A~INTL.29-7-USOH-MK.A~INTL.29-7-UGA-MK.A~INTL.29-7-UKR-MK.A~INTL.29-7-ARE-MK.A~INTL.29-7-GBR-MK.A~INTL.29-7-USA-MK.A~INTL.29-7-URY-MK.A~INTL.29-7-UZB-MK.A~INTL.29-7-VUT-MK.A~INTL.29-7-VEN-MK.A~INTL.29-7-VNM-MK.A~INTL.29-7-VIR-MK.A~INTL.29-7-VGB-MK.A~INTL.29-7-WAK-MK.A~INTL.29-7-ESH-MK.A~INTL.29-7-YEM-MK.A~INTL.29-7-ZMB-MK.A~INTL.29-7-ZWE-MK.A&amp;c=ruvvvvvfvtvnvv1vrvvvvfvvvvvvfvvvou20evvvvvvvvvvvvuvo&amp;pa=0000000000000000000000vo3&amp;f=A&amp;ug=g&amp;ct=0&amp;tl_type=p&amp;tl_id=2-A&amp;s=">Renewable electricity installed capacity</a><br />
              </li>
              <li><a href="/beta/international/data/browser/#?ord=CR&amp;cy=2014&amp;v=H&amp;vo=0&amp;so=0&amp;io=0&amp;start=1980&amp;end=2014&amp;vs=INTL.29-12-AFG-BKWH.A~INTL.29-12-ALB-BKWH.A~INTL.29-12-DZA-BKWH.A~INTL.29-12-ASM-BKWH.A~INTL.29-12-AGO-BKWH.A~INTL.29-12-ATA-BKWH.A~INTL.29-12-ATG-BKWH.A~INTL.29-12-ARG-BKWH.A~INTL.29-12-ARM-BKWH.A~INTL.29-12-ABW-BKWH.A~INTL.29-12-AUS-BKWH.A~INTL.29-12-AUT-BKWH.A~INTL.29-12-AZE-BKWH.A~INTL.29-12-BHS-BKWH.A~INTL.29-12-BHR-BKWH.A~INTL.29-12-BGD-BKWH.A~INTL.29-12-BRB-BKWH.A~INTL.29-12-BLR-BKWH.A~INTL.29-12-BEL-BKWH.A~INTL.29-12-BLZ-BKWH.A~INTL.29-12-BEN-BKWH.A~INTL.29-12-BMU-BKWH.A~INTL.29-12-BTN-BKWH.A~INTL.29-12-BOL-BKWH.A~INTL.29-12-BIH-BKWH.A~INTL.29-12-BWA-BKWH.A~INTL.29-12-BRA-BKWH.A~INTL.29-12-BRN-BKWH.A~INTL.29-12-BGR-BKWH.A~INTL.29-12-BFA-BKWH.A~INTL.29-12-MMR-BKWH.A~INTL.29-12-BDI-BKWH.A~INTL.29-12-KHM-BKWH.A~INTL.29-12-CMR-BKWH.A~INTL.29-12-CAN-BKWH.A~INTL.29-12-CPV-BKWH.A~INTL.29-12-CYM-BKWH.A~INTL.29-12-CAF-BKWH.A~INTL.29-12-TCD-BKWH.A~INTL.29-12-CHL-BKWH.A~INTL.29-12-CHN-BKWH.A~INTL.29-12-COL-BKWH.A~INTL.29-12-COM-BKWH.A~INTL.29-12-COG-BKWH.A~INTL.29-12-COD-BKWH.A~INTL.29-12-COK-BKWH.A~INTL.29-12-CRI-BKWH.A~INTL.29-12-CIV-BKWH.A~INTL.29-12-HRV-BKWH.A~INTL.29-12-CUB-BKWH.A~INTL.29-12-CYP-BKWH.A~INTL.29-12-CZE-BKWH.A~INTL.29-12-DNK-BKWH.A~INTL.29-12-DJI-BKWH.A~INTL.29-12-DMA-BKWH.A~INTL.29-12-DOM-BKWH.A~INTL.29-12-ECU-BKWH.A~INTL.29-12-EGY-BKWH.A~INTL.29-12-SLV-BKWH.A~INTL.29-12-GNQ-BKWH.A~INTL.29-12-ERI-BKWH.A~INTL.29-12-EST-BKWH.A~INTL.29-12-ETH-BKWH.A~INTL.29-12-FLK-BKWH.A~INTL.29-12-FRO-BKWH.A~INTL.29-12-FJI-BKWH.A~INTL.29-12-FIN-BKWH.A~INTL.29-12-CSK-BKWH.A~INTL.29-12-SCG-BKWH.A~INTL.29-12-SUN-BKWH.A~INTL.29-12-YUG-BKWH.A~INTL.29-12-FRA-BKWH.A~INTL.29-12-GUF-BKWH.A~INTL.29-12-PYF-BKWH.A~INTL.29-12-GAB-BKWH.A~INTL.29-12-GMB-BKWH.A~INTL.29-12-GEO-BKWH.A~INTL.29-12-DEU-BKWH.A~INTL.29-12-DDR-BKWH.A~INTL.29-12-DEUW-BKWH.A~INTL.29-12-GHA-BKWH.A~INTL.29-12-GIB-BKWH.A~INTL.29-12-GRC-BKWH.A~INTL.29-12-GRL-BKWH.A~INTL.29-12-GRD-BKWH.A~INTL.29-12-GLP-BKWH.A~INTL.29-12-GUM-BKWH.A~INTL.29-12-GTM-BKWH.A~INTL.29-12-GIN-BKWH.A~INTL.29-12-GNB-BKWH.A~INTL.29-12-GUY-BKWH.A~INTL.29-12-HTI-BKWH.A~INTL.29-12-HITZ-BKWH.A~INTL.29-12-HND-BKWH.A~INTL.29-12-HKG-BKWH.A~INTL.29-12-HUN-BKWH.A~INTL.29-12-ISL-BKWH.A~INTL.29-12-IND-BKWH.A~INTL.29-12-IDN-BKWH.A~INTL.29-12-IRN-BKWH.A~INTL.29-12-IRQ-BKWH.A~INTL.29-12-IRL-BKWH.A~INTL.29-12-ISR-BKWH.A~INTL.29-12-ITA-BKWH.A~INTL.29-12-JAM-BKWH.A~INTL.29-12-JPN-BKWH.A~INTL.29-12-JOR-BKWH.A~INTL.29-12-KAZ-BKWH.A~INTL.29-12-KEN-BKWH.A~INTL.29-12-KIR-BKWH.A~INTL.29-12-PRK-BKWH.A~INTL.29-12-KOR-BKWH.A~INTL.29-12-UNK-BKWH.A~INTL.29-12-KWT-BKWH.A~INTL.29-12-KGZ-BKWH.A~INTL.29-12-LAO-BKWH.A~INTL.29-12-LVA-BKWH.A~INTL.29-12-LBN-BKWH.A~INTL.29-12-LSO-BKWH.A~INTL.29-12-LBR-BKWH.A~INTL.29-12-LBY-BKWH.A~INTL.29-12-LTU-BKWH.A~INTL.29-12-LUX-BKWH.A~INTL.29-12-MAC-BKWH.A~INTL.29-12-MKD-BKWH.A~INTL.29-12-MDG-BKWH.A~INTL.29-12-MWI-BKWH.A~INTL.29-12-MYS-BKWH.A~INTL.29-12-MDV-BKWH.A~INTL.29-12-MLI-BKWH.A~INTL.29-12-MLT-BKWH.A~INTL.29-12-MTQ-BKWH.A~INTL.29-12-MRT-BKWH.A~INTL.29-12-MUS-BKWH.A~INTL.29-12-MEX-BKWH.A~INTL.29-12-FSM-BKWH.A~INTL.29-12-MDA-BKWH.A~INTL.29-12-MNG-BKWH.A~INTL.29-12-MNE-BKWH.A~INTL.29-12-MSR-BKWH.A~INTL.29-12-MAR-BKWH.A~INTL.29-12-MOZ-BKWH.A~INTL.29-12-NAM-BKWH.A~INTL.29-12-NRU-BKWH.A~INTL.29-12-NPL-BKWH.A~INTL.29-12-NLD-BKWH.A~INTL.29-12-NLDA-BKWH.A~INTL.29-12-NCL-BKWH.A~INTL.29-12-NZL-BKWH.A~INTL.29-12-NIC-BKWH.A~INTL.29-12-NER-BKWH.A~INTL.29-12-NGA-BKWH.A~INTL.29-12-NIU-BKWH.A~INTL.29-12-MNP-BKWH.A~INTL.29-12-NOR-BKWH.A~INTL.29-12-OMN-BKWH.A~INTL.29-12-PAK-BKWH.A~INTL.29-12-PSE-BKWH.A~INTL.29-12-PAN-BKWH.A~INTL.29-12-PNG-BKWH.A~INTL.29-12-PRY-BKWH.A~INTL.29-12-PER-BKWH.A~INTL.29-12-PHL-BKWH.A~INTL.29-12-POL-BKWH.A~INTL.29-12-PRT-BKWH.A~INTL.29-12-PRI-BKWH.A~INTL.29-12-QAT-BKWH.A~INTL.29-12-REU-BKWH.A~INTL.29-12-ROU-BKWH.A~INTL.29-12-RUS-BKWH.A~INTL.29-12-RWA-BKWH.A~INTL.29-12-SHN-BKWH.A~INTL.29-12-KNA-BKWH.A~INTL.29-12-LCA-BKWH.A~INTL.29-12-SPM-BKWH.A~INTL.29-12-VCT-BKWH.A~INTL.29-12-WSM-BKWH.A~INTL.29-12-STP-BKWH.A~INTL.29-12-SAU-BKWH.A~INTL.29-12-SEN-BKWH.A~INTL.29-12-SRB-BKWH.A~INTL.29-12-SYC-BKWH.A~INTL.29-12-SLE-BKWH.A~INTL.29-12-SGP-BKWH.A~INTL.29-12-SVK-BKWH.A~INTL.29-12-SVN-BKWH.A~INTL.29-12-SLB-BKWH.A~INTL.29-12-SOM-BKWH.A~INTL.29-12-ZAF-BKWH.A~INTL.29-12-ESP-BKWH.A~INTL.29-12-LKA-BKWH.A~INTL.29-12-SDN-BKWH.A~INTL.29-12-SUR-BKWH.A~INTL.29-12-SWZ-BKWH.A~INTL.29-12-SWE-BKWH.A~INTL.29-12-CHE-BKWH.A~INTL.29-12-SYR-BKWH.A~INTL.29-12-TWN-BKWH.A~INTL.29-12-TJK-BKWH.A~INTL.29-12-TZA-BKWH.A~INTL.29-12-THA-BKWH.A~INTL.29-12-TLS-BKWH.A~INTL.29-12-TGO-BKWH.A~INTL.29-12-TON-BKWH.A~INTL.29-12-TTO-BKWH.A~INTL.29-12-TUN-BKWH.A~INTL.29-12-TUR-BKWH.A~INTL.29-12-TKM-BKWH.A~INTL.29-12-TCA-BKWH.A~INTL.29-12-TUV-BKWH.A~INTL.29-12-USIQ-BKWH.A~INTL.29-12-USOH-BKWH.A~INTL.29-12-UGA-BKWH.A~INTL.29-12-UKR-BKWH.A~INTL.29-12-ARE-BKWH.A~INTL.29-12-GBR-BKWH.A~INTL.29-12-USA-BKWH.A~INTL.29-12-URY-BKWH.A~INTL.29-12-UZB-BKWH.A~INTL.29-12-VUT-BKWH.A~INTL.29-12-VEN-BKWH.A~INTL.29-12-VNM-BKWH.A~INTL.29-12-VIR-BKWH.A~INTL.29-12-VGB-BKWH.A~INTL.29-12-WAK-BKWH.A~INTL.29-12-ESH-BKWH.A~INTL.29-12-YEM-BKWH.A~INTL.29-12-ZMB-BKWH.A~INTL.29-12-ZWE-BKWH.A&amp;c=ruvvvvvfvtvnvv1vrvvvvfvvvvvvfvvvou20evvvvvvvvvvvvuvo&amp;pa=000000000000000000000000000001vm&amp;f=A&amp;ug=g&amp;ct=0&amp;tl_type=p&amp;tl_id=2-A&amp;s=">Net generation from renewable sources</a><br />
              </li>
            </ul></td>
            </tr>
            <?php /* END Summary Content ////////////////*/ ?>
            <?php /* BEGIN Biomass Content ////////////////*/ ?>
            <thead id="biomass">
              <tr>
                <th><a name="biomass"></a><strong>Biofuels</strong></th>
                <th width="30%">&nbsp;</th>
              </tr>
            </thead>
            <tr class="white_first">
              <td colspan="2"><strong>Biofuels overview</strong><br />
                <div align="left">
                  <script language="javascript" type="text/javascript" src="/totalenergy/data/monthly/txt/new_merheader.txt"></script><em>Interactive data from: <a href="/totalenergy/data/browser/">Total Energy Data Browser</a></em>
                </div>
                <ul>
                  <li><span class="right"><a href="/totalenergy/data/monthly/pdf/sec10_7.pdf" class="ico_pdf"><span hidden="Fuel ethanol overview "></span>
PDF</a> <a href="/totalenergy/data/browser/xls.cfm?tbl=T10.03&amp;freq=m" class="ico_xls"><span hidden="Fuel ethanol overview "></span>
XLS</a> <span  class="beta"><a href="/totalenergy/data/browser/?tbl=T10.03#/?f=M&start=200001"><span hidden="Fuel ethanol overview "></span>
INTERACTIVE&nbsp;</a></span></span> Fuel ethanol overview</li>
                  <li><span class="right"><a href="/totalenergy/data/monthly/pdf/sec10_8.pdf" class="ico_pdf"><span hidden="Biodiesel and other renewable fuels overview "></span>
PDF</a> <a href="/totalenergy/data/browser/xls.cfm?tbl=T10.04&amp;freq=m" class="ico_xls"><span hidden="Biodiesel and other renewable fuels overview "></span>
XLS</a> <span  class="beta"><a href="/beta/MER/index.cfm?tbl=T10.04#/?f=M&amp;start=200001"><span hidden="Biodiesel and other renewable fuels overview "></span>
INTERACTIVE&nbsp;</a></span></span> Biodiesel and other renewable fuels  overview</li>
              </ul></td>
            </tr>
            <tr class="white-first">
            <td colspan="2"><a href="/biofuels/biomass/#table_data">Densified biomass fuel</a> <br />
                <script language="javascript" type="text/javascript" src="/biofuels/biomass/includes/rdate_biofuels.txt"></script>            
              Monthly densified biomass fuel (wood pellets, compressed bricks/logs) data on manufacturing facilities and capacity, production, inventories, feedstocks and cost, sales and price, exports and price, and product  characteristics </td>
            </tr>

            <tr class="white_first">
              <td colspan="2"><p><strong>Monthly biodiesel production
                </strong><br />
                <!--    <em>Monthly&nbsp;</em> -->
                <script language="javascript" type="text/javascript" src="/biofuels/biodiesel/production/includes/rdate_biodiesel.txt"></script> <em></em> </p>
              <ul>
                <li><span class="right"><a href="/biofuels/biodiesel/production/table1.pdf" class="ico_pdf"><span hidden="Production capacity and production "></span>
PDF</a> <a href="/biofuels/biodiesel/production/table1.xls" class="ico_xls"><span hidden="Production capacity and production "></span>
XLS</a></span>Production capacity and production</li>
                <li><span class="right"><a href="/biofuels/biodiesel/production/table2.pdf" class="ico_pdf"><span hidden="Production, sales, and stocks "></span>
PDF</a> <a href="/biofuels/biodiesel/production/table2.xls" class="ico_xls"><span hidden="Production, sales, and stocks "></span>
XLS</a></span>Production, sales, and stocks</li>
                <li><span class="right"><a href="/biofuels/biodiesel/production/table3.pdf" class="ico_pdf"><span hidden="Inputs to biodiesel production "></span>
PDF</a> <a href="/biofuels/biodiesel/production/table3.xls" class="ico_xls"><span hidden="Inputs to biodiesel production "></span>
XLS</a></span>Inputs to biodiesel production</li>
                <li><span class="right"><a href="/biofuels/biodiesel/production/table4.pdf" class="ico_pdf"><span hidden="Producers and production capacity, by state "></span>
PDF</a> <a href="/biofuels/biodiesel/production/table4.xls" class="ico_xls"><span hidden="Producers and production capacity, by state "></span>
XLS</a></span>Producers and production capacity, by state</li>
                <li><span class="right"><a href="/biofuels/biodiesel/production/table5.pdf" class="ico_pdf"><span hidden="Production by Petroleum Administration for Defense District "></span>
PDF</a> <a href="/biofuels/biodiesel/production/table5.xls" class="ico_xls"><span hidden="Production by Petroleum Administration for Defense District "></span>
XLS</a></span>Production by Petroleum Administration for Defense District              <br />
                </li>
                </ul></td>
            </tr>
            <tr class="white_first">
              <td colspan="2"><p><a href="/beta/international/data/browser/#?c=ruvvvvvfvtvnvv1vrvvvvfvvvvvvfvvvou20evvvvvvvvvvvvuvo&amp;pa=000003g0000e&amp;f=A&amp;ug=g&amp;ct=0&amp;tl_type=p&amp;tl_id=79-A&amp;s=&amp;cy=2012&amp;start=1980&amp;end=2012&amp;vs=INTL.79-1-AFG-TBPD.A~INTL.79-1-ALB-TBPD.A~INTL.79-1-DZA-TBPD.A~INTL.79-1-ASM-TBPD.A~INTL.79-1-AGO-TBPD.A~INTL.79-1-ATA-TBPD.A~INTL.79-1-ATG-TBPD.A~INTL.79-1-ARG-TBPD.A~INTL.79-1-ARM-TBPD.A~INTL.79-1-ABW-TBPD.A~INTL.79-1-AUS-TBPD.A~INTL.79-1-AUT-TBPD.A~INTL.79-1-AZE-TBPD.A~INTL.79-1-BHS-TBPD.A~INTL.79-1-BHR-TBPD.A~INTL.79-1-BGD-TBPD.A~INTL.79-1-BRB-TBPD.A~INTL.79-1-BLR-TBPD.A~INTL.79-1-BEL-TBPD.A~INTL.79-1-BLZ-TBPD.A~INTL.79-1-BEN-TBPD.A~INTL.79-1-BMU-TBPD.A~INTL.79-1-BTN-TBPD.A~INTL.79-1-BOL-TBPD.A~INTL.79-1-BIH-TBPD.A~INTL.79-1-BWA-TBPD.A~INTL.79-1-BRA-TBPD.A~INTL.79-1-BRN-TBPD.A~INTL.79-1-BGR-TBPD.A~INTL.79-1-BFA-TBPD.A~INTL.79-1-MMR-TBPD.A~INTL.79-1-BDI-TBPD.A~INTL.79-1-KHM-TBPD.A~INTL.79-1-CMR-TBPD.A~INTL.79-1-CAN-TBPD.A~INTL.79-1-CPV-TBPD.A~INTL.79-1-CYM-TBPD.A~INTL.79-1-CAF-TBPD.A~INTL.79-1-TCD-TBPD.A~INTL.79-1-CHL-TBPD.A~INTL.79-1-CHN-TBPD.A~INTL.79-1-COL-TBPD.A~INTL.79-1-COM-TBPD.A~INTL.79-1-COG-TBPD.A~INTL.79-1-COD-TBPD.A~INTL.79-1-COK-TBPD.A~INTL.79-1-CRI-TBPD.A~INTL.79-1-CIV-TBPD.A~INTL.79-1-HRV-TBPD.A~INTL.79-1-CUB-TBPD.A~INTL.79-1-CYP-TBPD.A~INTL.79-1-CZE-TBPD.A~INTL.79-1-DNK-TBPD.A~INTL.79-1-DJI-TBPD.A~INTL.79-1-DMA-TBPD.A~INTL.79-1-DOM-TBPD.A~INTL.79-1-ECU-TBPD.A~INTL.79-1-EGY-TBPD.A~INTL.79-1-SLV-TBPD.A~INTL.79-1-GNQ-TBPD.A~INTL.79-1-ERI-TBPD.A~INTL.79-1-EST-TBPD.A~INTL.79-1-ETH-TBPD.A~INTL.79-1-FLK-TBPD.A~INTL.79-1-FRO-TBPD.A~INTL.79-1-FJI-TBPD.A~INTL.79-1-FIN-TBPD.A~INTL.79-1-CSK-TBPD.A~INTL.79-1-SCG-TBPD.A~INTL.79-1-SUN-TBPD.A~INTL.79-1-YUG-TBPD.A~INTL.79-1-FRA-TBPD.A~INTL.79-1-GUF-TBPD.A~INTL.79-1-PYF-TBPD.A~INTL.79-1-GAB-TBPD.A~INTL.79-1-GMB-TBPD.A~INTL.79-1-GEO-TBPD.A~INTL.79-1-DEU-TBPD.A~INTL.79-1-DDR-TBPD.A~INTL.79-1-DEUW-TBPD.A~INTL.79-1-GHA-TBPD.A~INTL.79-1-GIB-TBPD.A~INTL.79-1-GRC-TBPD.A~INTL.79-1-GRL-TBPD.A~INTL.79-1-GRD-TBPD.A~INTL.79-1-GLP-TBPD.A~INTL.79-1-GUM-TBPD.A~INTL.79-1-GTM-TBPD.A~INTL.79-1-GIN-TBPD.A~INTL.79-1-GNB-TBPD.A~INTL.79-1-GUY-TBPD.A~INTL.79-1-HTI-TBPD.A~INTL.79-1-HITZ-TBPD.A~INTL.79-1-HND-TBPD.A~INTL.79-1-HKG-TBPD.A~INTL.79-1-HUN-TBPD.A~INTL.79-1-ISL-TBPD.A~INTL.79-1-IND-TBPD.A~INTL.79-1-IDN-TBPD.A~INTL.79-1-IRN-TBPD.A~INTL.79-1-IRQ-TBPD.A~INTL.79-1-IRL-TBPD.A~INTL.79-1-ISR-TBPD.A~INTL.79-1-ITA-TBPD.A~INTL.79-1-JAM-TBPD.A~INTL.79-1-JPN-TBPD.A~INTL.79-1-JOR-TBPD.A~INTL.79-1-KAZ-TBPD.A~INTL.79-1-KEN-TBPD.A~INTL.79-1-KIR-TBPD.A~INTL.79-1-PRK-TBPD.A~INTL.79-1-KOR-TBPD.A~INTL.79-1-UNK-TBPD.A~INTL.79-1-KWT-TBPD.A~INTL.79-1-KGZ-TBPD.A~INTL.79-1-LAO-TBPD.A~INTL.79-1-LVA-TBPD.A~INTL.79-1-LBN-TBPD.A~INTL.79-1-LSO-TBPD.A~INTL.79-1-LBR-TBPD.A~INTL.79-1-LBY-TBPD.A~INTL.79-1-LTU-TBPD.A~INTL.79-1-LUX-TBPD.A~INTL.79-1-MAC-TBPD.A~INTL.79-1-MKD-TBPD.A~INTL.79-1-MDG-TBPD.A~INTL.79-1-MWI-TBPD.A~INTL.79-1-MYS-TBPD.A~INTL.79-1-MDV-TBPD.A~INTL.79-1-MLI-TBPD.A~INTL.79-1-MLT-TBPD.A~INTL.79-1-MTQ-TBPD.A~INTL.79-1-MRT-TBPD.A~INTL.79-1-MUS-TBPD.A~INTL.79-1-MEX-TBPD.A~INTL.79-1-FSM-TBPD.A~INTL.79-1-MDA-TBPD.A~INTL.79-1-MNG-TBPD.A~INTL.79-1-MNE-TBPD.A~INTL.79-1-MSR-TBPD.A~INTL.79-1-MAR-TBPD.A~INTL.79-1-MOZ-TBPD.A~INTL.79-1-NAM-TBPD.A~INTL.79-1-NRU-TBPD.A~INTL.79-1-NPL-TBPD.A~INTL.79-1-NLD-TBPD.A~INTL.79-1-NLDA-TBPD.A~INTL.79-1-NCL-TBPD.A~INTL.79-1-NZL-TBPD.A~INTL.79-1-NIC-TBPD.A~INTL.79-1-NER-TBPD.A~INTL.79-1-NGA-TBPD.A~INTL.79-1-NIU-TBPD.A~INTL.79-1-MNP-TBPD.A~INTL.79-1-NOR-TBPD.A~INTL.79-1-OMN-TBPD.A~INTL.79-1-PAK-TBPD.A~INTL.79-1-PSE-TBPD.A~INTL.79-1-PAN-TBPD.A~INTL.79-1-PNG-TBPD.A~INTL.79-1-PRY-TBPD.A~INTL.79-1-PER-TBPD.A~INTL.79-1-PHL-TBPD.A~INTL.79-1-POL-TBPD.A~INTL.79-1-PRT-TBPD.A~INTL.79-1-PRI-TBPD.A~INTL.79-1-QAT-TBPD.A~INTL.79-1-REU-TBPD.A~INTL.79-1-ROU-TBPD.A~INTL.79-1-RUS-TBPD.A~INTL.79-1-RWA-TBPD.A~INTL.79-1-SHN-TBPD.A~INTL.79-1-KNA-TBPD.A~INTL.79-1-LCA-TBPD.A~INTL.79-1-SPM-TBPD.A~INTL.79-1-VCT-TBPD.A~INTL.79-1-WSM-TBPD.A~INTL.79-1-STP-TBPD.A~INTL.79-1-SAU-TBPD.A~INTL.79-1-SEN-TBPD.A~INTL.79-1-SRB-TBPD.A~INTL.79-1-SYC-TBPD.A~INTL.79-1-SLE-TBPD.A~INTL.79-1-SGP-TBPD.A~INTL.79-1-SVK-TBPD.A~INTL.79-1-SVN-TBPD.A~INTL.79-1-SLB-TBPD.A~INTL.79-1-SOM-TBPD.A~INTL.79-1-ZAF-TBPD.A~INTL.79-1-ESP-TBPD.A~INTL.79-1-LKA-TBPD.A~INTL.79-1-SDN-TBPD.A~INTL.79-1-SUR-TBPD.A~INTL.79-1-SWZ-TBPD.A~INTL.79-1-SWE-TBPD.A~INTL.79-1-CHE-TBPD.A~INTL.79-1-SYR-TBPD.A~INTL.79-1-TWN-TBPD.A~INTL.79-1-TJK-TBPD.A~INTL.79-1-TZA-TBPD.A~INTL.79-1-THA-TBPD.A~INTL.79-1-TLS-TBPD.A~INTL.79-1-TGO-TBPD.A~INTL.79-1-TON-TBPD.A~INTL.79-1-TTO-TBPD.A~INTL.79-1-TUN-TBPD.A~INTL.79-1-TUR-TBPD.A~INTL.79-1-TKM-TBPD.A~INTL.79-1-TCA-TBPD.A~INTL.79-1-TUV-TBPD.A~INTL.79-1-USIQ-TBPD.A~INTL.79-1-USOH-TBPD.A~INTL.79-1-UGA-TBPD.A~INTL.79-1-UKR-TBPD.A~INTL.79-1-ARE-TBPD.A~INTL.79-1-GBR-TBPD.A~INTL.79-1-USA-TBPD.A~INTL.79-1-URY-TBPD.A~INTL.79-1-UZB-TBPD.A~INTL.79-1-VUT-TBPD.A~INTL.79-1-VEN-TBPD.A~INTL.79-1-VNM-TBPD.A~INTL.79-1-VIR-TBPD.A~INTL.79-1-VGB-TBPD.A~INTL.79-1-WAK-TBPD.A~INTL.79-1-ESH-TBPD.A~INTL.79-1-YEM-TBPD.A~INTL.79-1-ZMB-TBPD.A~INTL.79-1-ZWE-TBPD.A">International biofuels production and consumption</a><br />
                <em>data from: <a href="/beta/international/data/browser/">International Energy Statistics</a></em> <br />
              </p></td>
            </tr>
            <?php /* END Biomass Content ////////////////*/ ?>
            <?php /* BEGIN Geothermal Content ////////////////*/ ?>
            <thead id="geothermal">
              <tr>
                <th><a name="geothermal"></a><strong>Geothermal</strong></th>
                <th width="30%"><span class="right">&nbsp;</span></th>
              </tr>
            </thead>
            <tr class="white_first">
              <td colspan="2"><span class="right"><a href="/totalenergy/data/monthly/pdf/sec10_3.pdf" class="ico_pdf"><span hidden="Geothermal energy consumption "></span>
PDF</a></span> <strong>Geothermal energy consumption</strong><br />
              <div>
              <script language="JavaScript" type="text/JavaScript" src="/totalenergy/data/monthly/txt/new_merheader.txt"></script>
              </div></td>
            </tr>
            <?php /* END Geothermal Content ////////////////*/ ?>
            <?php /* BEGIN Hydropower Content ////////////////*/ ?>
            <thead id="hydro">
              <tr>
                <th><a name="hydro"></a><strong>Hydropower</strong></th>
                <th width="30%">&nbsp;</th>
              </tr>
            </thead>
            <tr class="white_first">
              <td colspan="2"><span class="right"><a href="/electricity/annual/xls/epa_03_14.xlsx" class="ico_xls"><span hidden="Hydropower generation "></span>
XLS</a> </span><a href="/electricity/annual/html/epa_03_14.html"><span hidden="Hydropower "></span>
Generation</a><br />
                <div align="left">
                  <script src="/electricity/annual/epa_release_date.txt" type="text/javascript" language="JavaScript"></script>
                </div>
                Net generation from hydroelectric (conventional) power by state by sector<br /></td>
            </tr>
            <?php /* END Hydropower Content ////////////////*/ ?>
            <?php /* BEGIN Solar Content ////////////////*/ ?>
            <thead id="solar">
              <tr>
                <th><a name="solar"></a><strong>Solar/Photovoltaic</strong></th>
                <th width="30%"><span class="right">&nbsp;</span></th>
              </tr>
            </thead>
            <tr class="white_first">
              <td colspan="2"><strong>Photovoltaic industry overview and shipments</strong><br />
                 <em>Release Date: July 28, 2017 | data from: <a href="/renewable/annual/solar_photo/">Solar Photovoltaic Cell/Module Shipments Report</a></em>
                 <ul>
                   <li><span class="right"><a href="/renewable/annual/solar_photo/pdf/table1.pdf" class="ico_pdf"><span hidden="Number of companies involved in photovoltaic activities and number of employees "></span>
PDF</a></span> Number of companies involved in photovoltaic activities and number of employees</li>
                   <li><span class="right"><a href="/renewable/annual/solar_photo/pdf/table3.pdf" class="ico_pdf"><span hidden="Annual photovoltaic module shipments, back to 2006 "></span>
PDF</a></span> Annual photovoltaic module shipments, back to 2006</li>
                   <li><a href="/totalenergy/data/annual/showtext.cfm?t=ptb1008">Photovoltaic Cell and Module Shipments by Type, Trade, and Prices</a>, 1982-2010<br />
<div align="left"><script language="JavaScript" type="text/JavaScript" src="/totalenergy/data/annual/txt/new_aerheader.txt"></script></div>
                   </li>
                </ul>
                
                
                <p>Solar Photovoltaic Cell/Module Shipments Reports:</p>
                <ul>
                  <li><a href="/renewable/annual/solar_photo/">Annual Solar Photovoltaic Cell/Module Shipments Report</a></li>
                  <li><a href="/renewable/monthly/solar_photo/">Monthly Solar Photovoltaic Module Shipments Report</a><br />
<div align="left"><script language="JavaScript" type="text/JavaScript" src="/renewable/monthly/solar_photo/txt/renewheader.txt"></script></div>
                  
                  </li>
                </ul>
                
              </td>
            </tr>
            <?php /* END Solar Content ////////////////*/ ?>
            <?php /* BEGIN Wind Content ////////////////*/ ?>
            <thead id="wind">
              <tr>
                <th><a name="wind"></a><strong>Wind</strong></th>
                <th width="30%">&nbsp;</th>
              </tr>
            </thead>
            <tr class="white_first">
              <td colspan="2"><strong>Net generation from wind by state by sector</strong>
<div>
              <script language="javascript" type="text/javascript" src="/electricity/monthly/electricitydatabrowser.txt"></script>
                </div>
                <ul>
                  <li><span class="right"><span class="beta">
                  <a href="/electricity/data/browser/#/topic/0?agg=1,0,2&amp;fuel=008&amp;geo=vvvvvvvvvvvvo&amp;sec=o3g&amp;linechart=ELEC.GEN.WND-US-99.A~ELEC.GEN.WND-IA-99.A~ELEC.GEN.WND-TX-99.A&amp;columnchart=ELEC.GEN.WND-US-99.A~ELEC.GEN.WND-IA-99.A~ELEC.GEN.WND-TX-99.A&amp;map=ELEC.GEN.WND-US-99.A&amp;freq=A&amp;ctype=linechart&amp;ltype=pin&amp;rtype=s&amp;pin=&amp;rse=0&amp;maptype=0" ><span hidden="wind annual (back to 2001)  "></span>
INTERACTIVE</a></span></span> Annual (back to 2001)</li>
                  <li><span class="right"><span class="beta"> <a href="/electricity/data/browser/#/topic/0?agg=1,0,2&amp;fuel=008&amp;geo=vvvvvvvvvvvvo&amp;sec=o3g&amp;linechart=ELEC.GEN.WND-US-99.M~ELEC.GEN.WND-IA-99.M~ELEC.GEN.WND-TX-99.M&amp;columnchart=ELEC.GEN.WND-US-99.M~ELEC.GEN.WND-IA-99.M~ELEC.GEN.WND-TX-99.M&amp;map=ELEC.GEN.WND-US-99.M&amp;freq=M&amp;start=200101&amp;end=201407&amp;ctype=linechart&amp;ltype=pin&amp;rtype=s&amp;maptype=0&amp;rse=0&amp;pin=" ><span hidden="wind monthly (back to 2001)  "></span>
INTERACTIVE</a></span></span> Monthly (back to 2001)</li>
                </ul>
                <a href="/electricity/annual/html/epa_04_02_b.html">Electric net summer capacity by wind and other renewable sources</a>, annual (back to 2002)<br />
              <div align="left"><script language="JavaScript" type="text/JavaScript" src="/electricity/annual/epa_release_date.txt"></script></div>                </td>
            </tr>
           <!-- <tr>
              <td><strong>Wind land cover characteristics and weights</strong><br />
                <em class="hideme">Release Date: August 2010</em><br />
                This spreadsheet shows land cover characteristics and weights<br /></td>
              <td><span class="right"><a href="/cneaf/solar.renewables/page/fedland/table1.xls" class="ico_xls">XLS</a></span></td>
            </tr>
            <tr>
              <td><strong><a href="/cneaf/solar.renewables/ilands/fig13.html">Wind resource potential &rsaquo;</a></strong><br />
                <em class="hideme">Release Date: April 2003</em><br />
                Map of wind resource potential in the United States<br /></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/cneaf/solar.renewables/page/wind/wind.gif">Wind Resources on Federal Lands &rsaquo;</a></strong><br />
                <em class="hideme">Release Date: 1998</em><br />
                This map shows wind power resource potential on Federal Lands  and the lower 48 states.<br /></td>
              <td>&nbsp;</td>
            </tr> -->
            <?php /* END Wind Content ////////////////*/ ?>
            <?php /* BEGIN Alternative Transportation Fuels Content ////////////////*/ ?>
            <thead id="alternative">
              <tr>
                <th><a name="alternative"></a><strong>Alternative transportation fuels</strong></th>
                <th width="30%">&nbsp;</th>
              </tr>

            </thead>
            <tr class="white_first">
              <td colspan="2"><strong>Alternative fueled and hybrid vehicles (on-road)</strong><br />
                <div align="left"><script language="JavaScript" type="text/JavaScript" src="afv/afv_release_date.txt"></script></div> 
                Data on alternative fuel vehicle (AFV) supply and fuel use and number of vehicles for four types of vehicle fleets: federal government, state government, transit agencies, and fuel providers; fleet &amp; fuel data back to 2003, supplier data back to 1994 <br />

                <br />
                <ul>
                  <li><a href="/renewable/afv/users.cfm?fs=a">Fleet &amp; fuel data</a></li>
                  <li><a href="/renewable/afv/supply.cfm">Supplier data (includes hybrid vehicles)</a></li>
                </ul></td>
            </tr>
            <tr>
              <td colspan="2"><strong>Ethanol
              </strong>

                <ul>
                  <li><span class="right"><a href="/totalenergy/data/monthly/pdf/sec10_7.pdf" class="ico_pdf"><span hidden="Fuel ethanol overview "></span>
PDF</a> <a href="/totalenergy/data/browser/xls.cfm?tbl=T10.03&amp;freq=m" class="ico_xls"><span hidden="Fuel ethanol overview "></span>
XLS</a> <span  class="beta"><a href="/totalenergy/data/browser/?tbl=T10.03#/?f=M&start=200001"><span hidden="Fuel ethanol overview "></span>
INTERACTIVE&nbsp;</a></span></span> Fuel ethanol overview <br />
                  <div align="left">
                  <script language="javascript" type="text/javascript" src="/totalenergy/data/monthly/txt/new_merheader.txt"></script><em>Interactive data from: Total Energy Data Browser</em>
                </div>
                  </li>
                  <li><a href="/petroleum/ethanolcapacity/index.cfm">Plant production capacity </a><br />
                    <span> <em>Release date: June 20, 2017 | data from: <a href="/survey/#eia-819">Form EIA-819M Monthly Oxygenate Report</a></em></span><br />
                    Production capacity data for all operating U.S. fuel ethanol production plants </li>
                </ul></td>
            </tr>
            <tr>
              <td colspan="2"><strong>Monthly biodiesel production </strong><br />
                <script language="javascript" type="text/javascript" src="/biofuels/biodiesel/production/includes/rdate_biodiesel.txt"></script>
                <ul>
                  <li><span class="right"><a href="/biofuels/biodiesel/production/table1.pdf" class="ico_pdf"><span hidden="Production capacity and production "></span> PDF</a> <a href="/biofuels/biodiesel/production/table1.xls" class="ico_xls"><span hidden="Production capacity and production "></span> XLS</a></span>Production capacity and production</li>
                  <li><span class="right"><a href="/biofuels/biodiesel/production/table2.pdf" class="ico_pdf"><span hidden="Production, sales, and stocks "></span> PDF</a> <a href="/biofuels/biodiesel/production/table2.xls" class="ico_xls"><span hidden="Production, sales, and stocks "></span> XLS</a></span>Production, sales, and stocks</li>
                  <li><span class="right"><a href="/biofuels/biodiesel/production/table3.pdf" class="ico_pdf"><span hidden="Inputs to biodiesel production "></span> PDF</a> <a href="/biofuels/biodiesel/production/table3.xls" class="ico_xls"><span hidden="Inputs to biodiesel production "></span> XLS</a></span>Inputs to biodiesel production</li>
                  <li><span class="right"><a href="/biofuels/biodiesel/production/table4.pdf" class="ico_pdf"><span hidden="Producers and production capacity, by state "></span> PDF</a> <a href="/biofuels/biodiesel/production/table4.xls" class="ico_xls"><span hidden="Producers and production capacity, by state "></span> XLS</a></span>Producers and production capacity, by state</li>
                  <li><span class="right"><a href="/biofuels/biodiesel/production/table5.pdf" class="ico_pdf"><span hidden="Production by Petroleum Administration for Defense District "></span> PDF</a> <a href="/biofuels/biodiesel/production/table5.xls" class="ico_xls"><span hidden="Production by Petroleum Administration for Defense District "></span> XLS</a></span>Production by Petroleum Administration for Defense District <br />
                  </li>
                </ul></td>
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
