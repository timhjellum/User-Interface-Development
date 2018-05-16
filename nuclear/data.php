<?php $locale = 'data'; ?>
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
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
</head>
<body>
<?php /* Start of Outer Wrapper */ ?>
<div id="outerX">
  <?php /* EIA Header */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
  <?php /* Navigation Menu */ ?>
  <?php include ('includes/subnav_nuclear.inc') ; ?>
  <?php /* Page/Body Content */ ?>
  <div class="pagecontent mr_temp2">
    <?php /* Start of Main Column */ ?>
    <div class="main_col">
    <p>Find statistics on nuclear operable units, nuclear electricity net generation, nuclear share of electricity net generation, and capacity factor.</p>
    <span class="condaterange"><a class="no-border expandall">+ EXPAND ALL</a></span>
    <table class="contable">
      <?php /* BEGIN Summary Content ////////////////*/ ?>
      <thead id="nuclear">
        <tr>
          <th><a name="nuclear"></a><strong>Nuclear power plants</strong></th>
          <th><span class="right">&nbsp;</span></th>
        </tr>
      </thead>
      <tr class="white_first">
        <td colspan="2"><span class="right"><span class="beta right"> <a href="/nuclear/outages/" title="Daily nuclear status/outages ">
Interactive</a></span></span> <strong>Daily nuclear status/outages</strong> (with annual capacity)<br />
          Daily status of U.S. nuclear plants with summary and plant-specific data on percentage output, outage amount, and capacity</td>
      </tr>
      <tr>
        <td colspan="2"><a href="/nuclear/generation/index.html">Nuclear  electricity  generation and capacity</a><br />
          <em class="hideme">Release date: May 26, 2016 | data from: survey forms <a href="/electricity/data/eia923/">EIA-923</a> and <a href="/electricity/data/eia860/">EIA-860</a>.</em><br />
          State and reactor-specific nuclear generation (monthly back to 2003)</td>
      </tr>
      <tr>
        <td colspan="2"><br />
          <span class="right"><a href="/totalenergy/data/monthly/pdf/sec8_3.pdf" class="ico_pdf" title="Nuclear generation, capacity summary data  ">
PDF</a> <a href="/totalenergy/data/browser/csv.cfm?tbl=T08.01" class="ico_csv" title="Nuclear generation, capacity summary data  ">
CSV</a> <a href="/totalenergy/data/browser/xls.cfm?tbl=T08.01&amp;freq=m" class="ico_xls" title="Nuclear generation, capacity summary data  ">
XLS</a> <span class="beta right"> <a href="/beta/MER/index.cfm?tbl=T08.01#/?f=M&amp;start=200001" title="Nuclear generation, capacity summary data  ">
Interactive</a></span></span><strong> Nuclear generation, capacity summary data</strong> (monthly back to 1973,  annual back to 1957)<br />
          <div> 
            <script language="javascript" type="text/javascript" src="/totalenergy/data/monthly/txt/new_merheader.txt"></script></script></div></td>
      </tr>
      <tr>
        <td colspan="2"><a href="/nuclear/reactors/reactorcapacity.php">Reactor capacity and ownership</a><br />
          <em class="hideme">Release date: November 2017 | data from: survey form <a href="/electricity/data/eia860/">EIA-860, Annual Electric Generator Report</a><br />
          </em></td>
      </tr>
      <tr>
        <td colspan="2"><a href="/totalenergy/data/annual/showtext.cfm?t=ptb0901">Nuclear generator licensing data</a> <span class="right"><a href="/totalenergy/data/annual/pdf/sec9_3.pdf" class="ico_pdf" title="Nuclear generator licensing data  ">
PDF</a> <a href="/totalenergy/data/annual/xls/stb0901.xls" class="ico_xls" title="Nuclear generator licensing data  ">
XLS</a></span><br />
          <div align="left">
		   <script language="javascript" type="text/javascript" src="/totalenergy/data/annual/txt/new_aerheader.txt"></script></div></td>
      </tr>
      <tr>
        <td colspan="2"><a href="/beta/international/data/browser/#?ord=CR&amp;cy=2014&amp;v=H&amp;vo=0&amp;so=0&amp;io=0&amp;start=1980&amp;end=2014&amp;vs=INTL.27-7-AFG-MK.A~INTL.27-7-ALB-MK.A~INTL.27-7-DZA-MK.A~INTL.27-7-ASM-MK.A~INTL.27-7-AGO-MK.A~INTL.27-7-ATA-MK.A~INTL.27-7-ATG-MK.A~INTL.27-7-ARG-MK.A~INTL.27-7-ARM-MK.A~INTL.27-7-ABW-MK.A~INTL.27-7-AUS-MK.A~INTL.27-7-AUT-MK.A~INTL.27-7-AZE-MK.A~INTL.27-7-BHS-MK.A~INTL.27-7-BHR-MK.A~INTL.27-7-BGD-MK.A~INTL.27-7-BRB-MK.A~INTL.27-7-BLR-MK.A~INTL.27-7-BEL-MK.A~INTL.27-7-BLZ-MK.A~INTL.27-7-BEN-MK.A~INTL.27-7-BMU-MK.A~INTL.27-7-BTN-MK.A~INTL.27-7-BOL-MK.A~INTL.27-7-BIH-MK.A~INTL.27-7-BWA-MK.A~INTL.27-7-BRA-MK.A~INTL.27-7-BRN-MK.A~INTL.27-7-BGR-MK.A~INTL.27-7-BFA-MK.A~INTL.27-7-MMR-MK.A~INTL.27-7-BDI-MK.A~INTL.27-7-KHM-MK.A~INTL.27-7-CMR-MK.A~INTL.27-7-CAN-MK.A~INTL.27-7-CPV-MK.A~INTL.27-7-CYM-MK.A~INTL.27-7-CAF-MK.A~INTL.27-7-TCD-MK.A~INTL.27-7-CHL-MK.A~INTL.27-7-CHN-MK.A~INTL.27-7-COL-MK.A~INTL.27-7-COM-MK.A~INTL.27-7-COG-MK.A~INTL.27-7-COD-MK.A~INTL.27-7-COK-MK.A~INTL.27-7-CRI-MK.A~INTL.27-7-CIV-MK.A~INTL.27-7-HRV-MK.A~INTL.27-7-CUB-MK.A~INTL.27-7-CYP-MK.A~INTL.27-7-CZE-MK.A~INTL.27-7-DNK-MK.A~INTL.27-7-DJI-MK.A~INTL.27-7-DMA-MK.A~INTL.27-7-DOM-MK.A~INTL.27-7-ECU-MK.A~INTL.27-7-EGY-MK.A~INTL.27-7-SLV-MK.A~INTL.27-7-GNQ-MK.A~INTL.27-7-ERI-MK.A~INTL.27-7-EST-MK.A~INTL.27-7-ETH-MK.A~INTL.27-7-FLK-MK.A~INTL.27-7-FRO-MK.A~INTL.27-7-FJI-MK.A~INTL.27-7-FIN-MK.A~INTL.27-7-CSK-MK.A~INTL.27-7-SCG-MK.A~INTL.27-7-SUN-MK.A~INTL.27-7-YUG-MK.A~INTL.27-7-FRA-MK.A~INTL.27-7-GUF-MK.A~INTL.27-7-PYF-MK.A~INTL.27-7-GAB-MK.A~INTL.27-7-GMB-MK.A~INTL.27-7-GEO-MK.A~INTL.27-7-DEU-MK.A~INTL.27-7-DDR-MK.A~INTL.27-7-DEUW-MK.A~INTL.27-7-GHA-MK.A~INTL.27-7-GIB-MK.A~INTL.27-7-GRC-MK.A~INTL.27-7-GRL-MK.A~INTL.27-7-GRD-MK.A~INTL.27-7-GLP-MK.A~INTL.27-7-GUM-MK.A~INTL.27-7-GTM-MK.A~INTL.27-7-GIN-MK.A~INTL.27-7-GNB-MK.A~INTL.27-7-GUY-MK.A~INTL.27-7-HTI-MK.A~INTL.27-7-HITZ-MK.A~INTL.27-7-HND-MK.A~INTL.27-7-HKG-MK.A~INTL.27-7-HUN-MK.A~INTL.27-7-ISL-MK.A~INTL.27-7-IND-MK.A~INTL.27-7-IDN-MK.A~INTL.27-7-IRN-MK.A~INTL.27-7-IRQ-MK.A~INTL.27-7-IRL-MK.A~INTL.27-7-ISR-MK.A~INTL.27-7-ITA-MK.A~INTL.27-7-JAM-MK.A~INTL.27-7-JPN-MK.A~INTL.27-7-JOR-MK.A~INTL.27-7-KAZ-MK.A~INTL.27-7-KEN-MK.A~INTL.27-7-KIR-MK.A~INTL.27-7-PRK-MK.A~INTL.27-7-KOR-MK.A~INTL.27-7-UNK-MK.A~INTL.27-7-KWT-MK.A~INTL.27-7-KGZ-MK.A~INTL.27-7-LAO-MK.A~INTL.27-7-LVA-MK.A~INTL.27-7-LBN-MK.A~INTL.27-7-LSO-MK.A~INTL.27-7-LBR-MK.A~INTL.27-7-LBY-MK.A~INTL.27-7-LTU-MK.A~INTL.27-7-LUX-MK.A~INTL.27-7-MAC-MK.A~INTL.27-7-MKD-MK.A~INTL.27-7-MDG-MK.A~INTL.27-7-MWI-MK.A~INTL.27-7-MYS-MK.A~INTL.27-7-MDV-MK.A~INTL.27-7-MLI-MK.A~INTL.27-7-MLT-MK.A~INTL.27-7-MTQ-MK.A~INTL.27-7-MRT-MK.A~INTL.27-7-MUS-MK.A~INTL.27-7-MEX-MK.A~INTL.27-7-FSM-MK.A~INTL.27-7-MDA-MK.A~INTL.27-7-MNG-MK.A~INTL.27-7-MNE-MK.A~INTL.27-7-MSR-MK.A~INTL.27-7-MAR-MK.A~INTL.27-7-MOZ-MK.A~INTL.27-7-NAM-MK.A~INTL.27-7-NRU-MK.A~INTL.27-7-NPL-MK.A~INTL.27-7-NLD-MK.A~INTL.27-7-NLDA-MK.A~INTL.27-7-NCL-MK.A~INTL.27-7-NZL-MK.A~INTL.27-7-NIC-MK.A~INTL.27-7-NER-MK.A~INTL.27-7-NGA-MK.A~INTL.27-7-NIU-MK.A~INTL.27-7-MNP-MK.A~INTL.27-7-NOR-MK.A~INTL.27-7-OMN-MK.A~INTL.27-7-PAK-MK.A~INTL.27-7-PSE-MK.A~INTL.27-7-PAN-MK.A~INTL.27-7-PNG-MK.A~INTL.27-7-PRY-MK.A~INTL.27-7-PER-MK.A~INTL.27-7-PHL-MK.A~INTL.27-7-POL-MK.A~INTL.27-7-PRT-MK.A~INTL.27-7-PRI-MK.A~INTL.27-7-QAT-MK.A~INTL.27-7-REU-MK.A~INTL.27-7-ROU-MK.A~INTL.27-7-RUS-MK.A~INTL.27-7-RWA-MK.A~INTL.27-7-SHN-MK.A~INTL.27-7-KNA-MK.A~INTL.27-7-LCA-MK.A~INTL.27-7-SPM-MK.A~INTL.27-7-VCT-MK.A~INTL.27-7-WSM-MK.A~INTL.27-7-STP-MK.A~INTL.27-7-SAU-MK.A~INTL.27-7-SEN-MK.A~INTL.27-7-SRB-MK.A~INTL.27-7-SYC-MK.A~INTL.27-7-SLE-MK.A~INTL.27-7-SGP-MK.A~INTL.27-7-SVK-MK.A~INTL.27-7-SVN-MK.A~INTL.27-7-SLB-MK.A~INTL.27-7-SOM-MK.A~INTL.27-7-ZAF-MK.A~INTL.27-7-ESP-MK.A~INTL.27-7-LKA-MK.A~INTL.27-7-SDN-MK.A~INTL.27-7-SUR-MK.A~INTL.27-7-SWZ-MK.A~INTL.27-7-SWE-MK.A~INTL.27-7-CHE-MK.A~INTL.27-7-SYR-MK.A~INTL.27-7-TWN-MK.A~INTL.27-7-TJK-MK.A~INTL.27-7-TZA-MK.A~INTL.27-7-THA-MK.A~INTL.27-7-TLS-MK.A~INTL.27-7-TGO-MK.A~INTL.27-7-TON-MK.A~INTL.27-7-TTO-MK.A~INTL.27-7-TUN-MK.A~INTL.27-7-TUR-MK.A~INTL.27-7-TKM-MK.A~INTL.27-7-TCA-MK.A~INTL.27-7-TUV-MK.A~INTL.27-7-USIQ-MK.A~INTL.27-7-USOH-MK.A~INTL.27-7-UGA-MK.A~INTL.27-7-UKR-MK.A~INTL.27-7-ARE-MK.A~INTL.27-7-GBR-MK.A~INTL.27-7-USA-MK.A~INTL.27-7-URY-MK.A~INTL.27-7-UZB-MK.A~INTL.27-7-VUT-MK.A~INTL.27-7-VEN-MK.A~INTL.27-7-VNM-MK.A~INTL.27-7-VIR-MK.A~INTL.27-7-VGB-MK.A~INTL.27-7-WAK-MK.A~INTL.27-7-ESH-MK.A~INTL.27-7-YEM-MK.A~INTL.27-7-ZMB-MK.A~INTL.27-7-ZWE-MK.A&amp;c=ruvvvvvfvtvnvv1vrvvvvfvvvvvvfvvvou20evvvvvvvvvvvvuvo&amp;pa=000000000000000000000200000004&amp;f=A&amp;ug=g&amp;ct=0&amp;tl_type=p&amp;tl_id=2-A&amp;s=">International nuclear capacity and generation </a><br />
          <em>data from: International Energy Portal</em><br /></td>
      </tr>
      <?php /* END Summary Content ////////////////*/ ?>
      <?php /* BEGIN Uranium & Nuclear Fuel Content ////////////////*/ ?>
      <thead id="uranium">
        <tr>
          <th><a name="uranium"></a><strong>Uranium (nuclear fuel)</strong></th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tr class="white_first">
        <td colspan="2"><a href="/uranium/production/annual/ureserve.cfm">Uranium reserves estimates</a><br />
          <em>Release date: May 24, 2017 | data from: <a href="/uranium/production/annual/">Domestic Uranium Production Report - Annual</a></em> <br />
          Estimates of uranium reserves as of end of year</td>
      </tr>
      <tr>
        <td colspan="2"><p><strong>Uranium production</strong></p>
          <ul>
            <li> Annual<br />
              <em>Release date: May 24, 2017 | data from: <a href="/uranium/production/annual/">Domestic Uranium Production Report - Annual</a></em>
              <ul>
                <li><span class="right"><a href="/uranium/production/annual/pdf/usummarytbl9.pdf" class="ico_pdf" title="Summary uranium production data, back to 1993  ">
PDF</a> <a href="/uranium/production/annual/xls/usummarytbl9.xls" class="ico_xls" title="Summary uranium production data, back to 1993  ">
XLS</a></span> <a href="/uranium/production/annual/usummary.cfm">Summary uranium production data</a>, back to 1993</li>
                <li><span class="right"><a href="/uranium/production/annual/pdf/umillstbl4.pdf" class="ico_pdf" title="U.S. uranium mills by owner, capacity, and operating status  ">
PDF</a> <a href="/uranium/production/annual/xls/umillstbl4.xls" class="ico_xls" title="U.S. uranium mills by owner, capacity, and operating status  ">
XLS</a></span> <a href="/uranium/production/annual/umills.cfm">U.S. uranium mills by owner, capacity, and operating status</a></li>
                <li><span class="right"><a href="/uranium/production/annual/pdf/uisltbl5.pdf" class="ico_pdf" title="U.S. uranium in-situ-leach plants by owner, capacity, and operating status  ">
PDF</a> <a href="/uranium/production/annual/xls/uisltbl5.xls" class="ico_xls" title="U.S. uranium in-situ-leach plants by owner, capacity, and operating status  ">
XLS</a></span> <a href="/uranium/production/annual/uisl.cfm">U.S. uranium in-situ-leach plants by owner, capacity, and operating status</a></li>
                <br />
              </ul>
            </li>
            <li>Quarterly<br />
              <script language="javascript" type="text/javascript" src="/uranium/production/quarterly/html/qpdheader.txt"></script>
            <ul>
              <li><span class="right"><a href="/uranium/production/quarterly/pdf/qupd_tbl1.pdf" class="ico_pdf" title="Total production of uranium concentrate  ">
PDF</a> <a href="/uranium/production/quarterly/xls/qupd_tbl1.xls" class="ico_xls" title="Total production of uranium concentrate  ">
XLS</a></span> <a href="/uranium/production/quarterly/qupdtable1.cfm">Total production of uranium concentrate</a> </li>
              <li><span class="right"><a href="http://www.eia.gov/uranium/production/quarterly/pdf/qupd_tbl2.pdf" class="ico_pdf" title="Number of uranium mills and plants producing uranium concentrate in the United States  ">
PDF</a> <a href="/uranium/production/quarterly/xls/qupd_tbl2.xls" class="ico_xls" title="Number of uranium mills and plants producing uranium concentrate in the United States  ">
XLS</a></span> <a href="/uranium/production/quarterly/qupdtable2.cfm"> Number of uranium mills and plants producing uranium concentrate in the United States</a> </li>
              <li><span class="right"><a href="/uranium/production/quarterly/pdf/qupd_tbl3.pdf" class="ico_pdf" title="U.S. uranium mills by owner, capacity, and operating status  ">
PDF</a> <a href="/uranium/production/quarterly/xls/qupd_tbl3.xls" class="ico_xls" title="U.S. uranium mills by owner, capacity, and operating status  ">
XLS</a></span> <a href="/uranium/production/quarterly/qupdtable3.cfm">U.S. uranium mills by owner, capacity, and operating status</a> </li>
              <li><span class="right"><a href="/uranium/production/quarterly/pdf/qupd_tbl4.pdf" class="ico_pdf" title="U.S. uranium in-situ-leach plants by owner, capacity, and operating status  ">
PDF</a> <a href="/uranium/production/quarterly/xls/qupd_tbl4.xls" class="ico_xls" title="U.S. uranium in-situ-leach plants by owner, capacity, and operating status  ">
XLS</a></span> <a href="/uranium/production/quarterly/qupdtable4.cfm" class="no-border">U.S. uranium in-situ-leach plants by owner, capacity, and operating status</a> </li>
            </ul>
            </li>
          </ul></td>
      </tr>
      <tr>
        <td colspan="2"><span class="right"><a href="/uranium/marketing/pdf/umartable1figures1n2.pdf" class="ico_pdf">PDF</a> <a href="/uranium/marketing/xls/umartable1figures1n2.xls" class="ico_xls">XLS</a></span> <a href="/uranium/marketing/html/table1.cfm">Uranium purchases</a><br />
          Quantity of uranium purchased by owners and operators of U.S. civilian nuclear power reactors<br />
          <div align="left"><script language="JavaScript" type="text/JavaScript" src="/uranium/marketing/html/uma_newheader.txt"></script></div></td>
      </tr>
      <tr>
        <td colspan="2"><span class="right"><a href="/uranium/marketing/pdf/umartableS1bfigureS2.pdf" class="ico_pdf">PDF</a> <a href="/uranium/marketing/xls/umartableS1bfigureS2.xls" class="ico_xls">XLS</a></span> <a href="/uranium/marketing/html/summarytable1b.cfm">Uranium price</a> <br />
          Weighted-average price of uranium purchased by owners and operators of U.S. civilian nuclear power reactors<br />
          <?php /* END Uranium & Nuclear Fuel Content ////////////////*/ ?>
          <?php /* BEGIN Nuclear Power Plants Content ////////////////*/ ?>
          <div align="left"><script language="JavaScript" type="text/JavaScript" src="/uranium/marketing/html/uma_newheader.txt"></script></div>
          <br />
          ...more uranium data from: <a href="/totalenergy/data/annual/showtext.cfm?t=ptb0903">Annual Energy Review</a>, 1949-2011 (no longer updated)</td>
      </tr>
      <?php /* END Nuclear Power Plants Content ////////////////*/ ?>
      <?php /* BEGIN Radioactive Waste Content ////////////////*/ ?>
      <thead id="radioactive">
        <tr>
          <th><a name="spentfuel"></a><strong>Spent nuclear fuel (radioactive waste)</strong></th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tr class="white_first">
        <td colspan="2"><a href="/nuclear/spent_fuel/">Spent nuclear fuel discharged and stored at commercial sites &rsaquo;</a><br />
          <em class="hideme">Release Date: December 7, 2015 | data from: form <a href="/survey/#gc-859">GC-859, Nuclear Fuel Data Survey</a></em> <br />
          Data cover all spent nuclear fuel discharged from and stored at commercial sites through June 30, 2013</td>
      </tr>
      <tr>
        <td colspan="2"><a href="/nuclear/spent_fuel/ussnftab3.cfm">Annual commercial spent fuel discharges and burnup, 1968 - June 30, 2013 </a><br />
          <em class="hideme">Release Date: December 7, 2015 | data from: form <a href="/survey/#gc-859">GC-859, Nuclear Fuel Data Survey</a></em><br />
          Number of assemblies, initial uranium content, and average burnup, 1968 - June 30, 2013</td>
      </tr>
      <tr>
        <td colspan="2"><a href="/nuclear/spent_fuel/ussnftab2.cfm">Detailed  spent nuclear fuel data</a><br />
          <em class="hideme">Release Date: December 7, 2015 | data from: form <a href="/survey/#gc-859">GC-859, Nuclear Fuel Data Survey</a></em><br /></td>
      </tr>
      <thead id="intl">
<!--        <tr>
          <th><a name="intl"></a><strong>International</strong></th>
          <th>&nbsp;</th>
        </tr>
 -->      </thead>
      <?php /* <tr>
          <td><strong><a href="/cneaf/nuclear/page/nuc_reactors/reactsum2.html">World Nuclear Reactors &rsaquo;</a></strong><br />
            <em class="hideme">Release Date: November 2010</em> <br />
            All the commercial reactors in the world.</td>
          <td>&nbsp;</td>
        </tr>*/ ?>
      <?php /* END International Content ////////////////*/ ?>
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