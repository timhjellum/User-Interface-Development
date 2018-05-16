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
      <?php include ('includes/subnav_naturalgas.inc') ; ?>
      <?php /* Page/Body Content */ ?>
      <div class="pagecontent mr_temp2">
              <?php /*    <span class="blue_side"><em>March 23, 2012</em>:  Interactive graphing has been added to the natural gas data tables, complete with zooming and high quality downloads and printouts.</span> */ ?>

		<?php // test comment ?>		

        <?php /* Start of Main Column */ ?>
        <div class="main_col">
          <p>Find statistics on prices, exploration &amp; reserves, production, imports, exports, storage and consumption.</p>
          <span class="condaterange"><a class="no-border expandall">+ EXPAND ALL</a></span>
          <table class="contable">
            <?php /* BEGIN Summary Content ////////////////*/ ?>
            <thead id="summary">
              <tr>
                <th><a name="summary"></a><strong>Summary</strong></th>
                <th width="30%"><span class="right">Additional formats</span></th>
              </tr>
            </thead>
            <tr class="white_first">
              <td><strong><a href="/dnav/ng/ng_sum_lsum_dcu_nus_m.htm">Summary  &mdash; price, supply, disposition</a></strong><br />
<em>Monthly&nbsp;</em><script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

<em>Annual&nbsp;</em><script language="JavaScript" type="text/JavaScript" src="/naturalgas/annual/includes/rdate_nga.txt"></script>


                Key natural gas data for prices, exploration &amp; reserves, production, imports, exports, storage and consumption by U.S. and state. <br /></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_sum_sndm_s1_m.htm">U.S. monthly supply and disposition</a></strong><br />
                   <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>
                Includes production, imports, withdrawals and consumption <br />
                <em>monthly</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_sum_snd_a_EPG0_FPD_Mmcf_a.htm">Annual supply &amp; disposition by state</a></strong><br />
   <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>
                U.S. and state level statistics for production, deliveries and receipts, storage injections and withdrawals<br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/oil_gas/natural_gas/applications/eia176query.html">Annual company level data from Form EIA-176</a></strong><br />
                <em class="hideme">Release Date: September 2015</em> <br />
                Company level statistics for supply, disposition, and delivery volumes; end-use prices; and number of customers. <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr class="white_first">
              <td colspan="2"><strong>Natural gas overview </strong><br />
         <div>
              <script language="JavaScript" type="text/JavaScript" src="/totalenergy/data/monthly/txt/new_merheader.txt"></script>
         </div>
<!--                <em class="hideme">Monthly Release Date: December 21, 2012</em> <br /> -->
                <em>Annual  Release Date: September 27, 2012</em><br />
                Statistics on gross withdrawals, marketed production, dry gas production, supplemental gases, imports, exports, consumption, and storage withdrawals.

                 <ul>
             <li><span class="right"><a href="/totalenergy/data/monthly/pdf/sec4_3.pdf" class="ico_pdf">PDF</a> <a href="/totalenergy/data/browser/csv.cfm?tbl=T04.01" class="ico_csv">CSV</a> <a href="/totalenergy/data/browser/xls.cfm?tbl=T04.01&amp;freq=m" class="ico_xls">XLS</a> </span>Monthly (<a href="/totalenergy/data/monthly/#naturalgas">more on natural gas</a>)<br />
 			 &nbsp;</li>
             <li><span class="right"><a href="/totalenergy/data/annual/pdf/sec6_5.pdf" class="ico_pdf">PDF</a> <a href="/totalenergy/data/annual/xls/stb0601.xls" class="ico_xls">XLS</a></span>Annual (<a href="/totalenergy/data/annual/showtext.cfm?t=ptb0601">more on natural gas</a>)<br /></li>
             </ul></td>

            </tr>
            <tr>
              <td><a href="/cfapps/ipdbproject/IEDIndex3.cfm"><strong>Natural gas statistics by country </strong></a><br />
                <?php /*<em class="hideme">Release Date: Varies</em> <br />*/ ?>
                Query  detailed country and regional energy data supply, disposition<br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <?php /* END Summary Content ////////////////*/ ?>
            <?php /* BEGIN Prices Content ////////////////*/ ?>
            <thead id="prices">
              <tr>
                <th><a name="prices"></a><strong>Prices</strong></th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tr class="white_first">
              <td><strong><a href="/dnav/ng/ng_pri_sum_dcu_nus_m.htm">Prices</a></strong><br />
                <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>
                U.S. and state prices for wellhead, imports, exports, citygate, and end-use sectors. Percentages of total volume delivered by sector. <br />
                <em>monthly, annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <!--<tr>
              <td><strong><a href="/dnav/ng/ng_pri_rescom_dcu_SDC_a.htm">Residential and commercial prices by local distributors and marketers</a></strong><br />
      <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                Average price of natural gas delivered to residential and commercial consumers by local distribution companies and marketers, and the percent sold by local distribution companies in selected states and DC<br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr> -->
<tr>
              <td><strong><a href="/dnav/ng/ng_pri_sum_a_EPG0_PRS_DMcf_m.htm">Residential</a></strong><br />
      <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                Average price of natural gas delivered to residential   consumers by state<br />
          <em>monthly</em></td>
              <td>&nbsp;</td>
            </tr>            
            <tr>
              <td><strong><a href="/dnav/ng/ng_pri_sum_a_EPG0_PCS_DMcf_m.htm">Commercial</a></strong><br />
      <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                Average price of natural gas delivered to   commercial consumers by state<br />
                <em>monthly</em></td>
              <td>&nbsp;</td>
            </tr>
            
            <tr>
              <td><strong><a href="/dnav/ng/ng_pri_fut_s1_d.htm">Natural gas spot and futures prices </a></strong><br />
                 <script language="JavaScript" type="text/JavaScript" src="/petroleum/supply/weekly/includes/rdate_wpsr.txt"></script>
                New York Mercantile Exchange futures contracts for natural gas based on delivery at the Henry Hub in Louisiana <br />
                <em>daily, weekly, monthly, annual</em><br /><br />
				  <ul>
                  <li><a href="/dnav/ng/ng_pri_fut_s1_m.htm">Natural gas liquid composite</a></li>
				  <em>monthly, annual</em>
                </ul>

				</td>
              <td>&nbsp;</td>
            </tr>
            <?php /* tr>
              <td><strong>Natural gas prices for selected countries</strong><br />
                <em class="hideme">Release Date: June 10,    2010</em> <br />
                <ul>
                  <li><a href="/countries/prices/natgasprice_elecgen.cfm">Electricity generation</a></li>
                  <li><a href="/countries/prices/natgasprice_households.cfm">Households</a></li>
                  <li><a href="/countries/prices/natgasprice_industry.cfm">Industry</a></li>
                </ul></td>
              <td>&nbsp;</td>
            </tr>
            */ ?>
            <?php /* END Prices Content ////////////////*/ ?>
            <?php /* BEGIN Exploration & Reserves Content ////////////////*/ ?>
            <thead id="exploration">
              <tr>
                <th><a name="exploration"></a><strong>Exploration &amp; reserves</strong></th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tr class="white_first">
              <td><strong><a href="/dnav/ng/ng_enr_sum_a_EPG0_r21_BCF_a.htm">Reserves summary</a></strong><br />
                <em class="hideme">Release Date: February 13, 2018</em> <br />
                Proved reserves for natural gas and natural gas liquids by U.S., region, and state<br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr class="white_first">
              <td><strong>Proved reserves, reserves changes, and production</strong><br />
                <em class="hideme">Release Date: February 13, 2018</em> <br />
                by U.S., region, and state<br />
                <em>annual</em><br />
                <ul>
                  <li><a href="/dnav/ng/ng_enr_wals_a_EPG0_R21_Bcf_a.htm">Natural gas, wet after lease separation</a><a href="/dnav/ng/ng_enr_dry_dcu_NUS_a.htm"></a></li>
                  <li><a href="/dnav/ng/ng_enr_dry_a_EPG0_r11_bcf_a.htm">Natural gas, dry</a></li>
                  <li><a href="/dnav/ng/ng_enr_nang_a_EPG0_R31_Bcf_a.htm">Natural gas, nonassociated wet</a><a href="/dnav/ng/ng_enr_wals_dcu_NUS_a.htm"></a></li>
                  <li><a href="/dnav/ng/ng_enr_adng_a_EPG0_r41_Bcf_a.htm">Natural gas, associated-dissolved wet</a><a href="/dnav/ng/ng_enr_nang_dcu_NUS_a.htm"></a></li>
                  <li><a href="/dnav/ng/ng_enr_shalegas_a_EPG0_R5301_Bcf_a.htm">Shale gas</a><a href="/dnav/ng/ng_enr_adng_dcu_NUS_a.htm"></a></li>
                  <li><a href="/dnav/ng/ng_enr_coalbed_a_EPG0_R51_Bcf_a.htm">Coalbed methane</a></li>
                  <li><a href="/dnav/ng/ng_enr_cplc_a_EPCCOND_R01_MMbbl_a.htm">Crude oil plus lease   condensate</a><a href="/dnav/ng/ng_enr_ngl_dcu_NUS_a.htm"></a></li>
                  <li><a href="/dnav/ng/ng_enr_lc_a_EPL0_r56_MMbbl_a.htm">Lease condensate</a><br />
                  </li>
                </ul></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><a href="/dnav/ng/ng_enr_ngl_dcu_NUS_a.htm"><strong>Natural gas liquids proved reserves</strong></a><br />
                <em class="hideme">Release Date: February 13, 2018</em> <br />
                Proved reserves, reserves changes, and estimated production by U.S., region, and state<br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_enr_ngpl_s1_a.htm">Estimated Natural Gas Plant Liquids contained in Total Natural Gas Proved Reserves</a></strong><br />
                <em class="hideme">Release Date: February 13, 2018 </em><br />
                Proved reserves, reserves changes, and estimated production by U.S., region, and state <br />
                <em>annual </em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_enr_nprod_a_epc0_r9907_mmbbl_a.htm">Proved nonproducing reserves</a></strong><br />
                <em class="hideme">Release Date: February 13, 2018</em> <br />
                Reported proved reserves of crude oil, lease condensate, and wet natural gas, after lease separation by U.S., region, and state <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_enr_deep_s1_a.htm">Federal Offshore Gulf of Mexico Deepwater reserves</a></strong><br />
                <em class="hideme">Release Date: February 13, 2018</em> <br />
                Proved reserves of crude oil, natural gas wet after lease separation, natural gas liquids, dry natural gas, and lease condensate <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>

			 <tr>
              <td><strong><a href="/dnav/ng/ng_enr_drill_s1_m.htm">Crude oil and natural gas drilling activity</a></strong><br />
<script language="JavaScript" type="text/JavaScript" src="/dnav/ng/includes_ng/rdate_ngmer.txt"></script>

                Rotary rigs in operation, footage drilled, and active well service rig counts <br />
                <em>monthly, annual</em></td>
              <td>&nbsp;</td>
            </tr>



            <tr>
              <td><strong><a href="/dnav/ng/ng_enr_wellend_s1_m.htm">Crude oil and natural gas exploratory and development wells</a></strong><br />
<script language="JavaScript" type="text/JavaScript" src="/dnav/ng/includes_ng/rdate_ngmer.txt"></script>
                Exploratory and development wells drilled for crude oil, natural gas and dry holes; total footage drilled <br />
                <em>monthly, annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_enr_wellfoot_s1_a.htm">Footage drilled for crude oil and natural gas wells</a></strong><br />
<script language="JavaScript" type="text/JavaScript" src="/dnav/ng/includes_ng/rdate_ngmer.txt"></script>
                Footage drilled by exploratory and development wells and by crude oil, natural gas, and dry holes <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_enr_welldep_s1_a.htm">Average depth of crude oil and natural gas wells</a></strong><br />
<script language="JavaScript" type="text/JavaScript" src="/dnav/ng/includes_ng/rdate_ngmer.txt"></script>
                Average depth of wells drilled by exploratory and development wells and by crude oil, natural gas, and dry holes <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_enr_wellcost_s1_a.htm">Costs of crude oil and natural gas wells drilled</a></strong><br />
<script language="JavaScript" type="text/JavaScript" src="/dnav/ng/includes_ng/rdate_ngmer.txt"></script>
                Per well and per foot costs of crude oil, natural gas, and dry hole wells <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_enr_seis_s1_m.htm">Maximum U.S. active seismic crew counts</a></strong><br />
                <script language="javascript" type="text/javascript" src="/dnav/ng/includes_ng/rdate_ngmer.txt"></script>
                By onshore/offshore/Alaska and dimension (monthly)</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/naturalgas/crudeoilreserves/top100/">Top 100 U.S. Oil and Gas Fields</a></strong><br />
                <em>Release Date:  April 2, 2015 </em><br>
                Ranks the 100 largest U.S. oil and gas fields by their estimated 2013 proved reserves.</td>
              <td>&nbsp;</td>
            </tr>



            <?php /* END Exploration & Reserves Content ////////////////*/ ?>
            <?php /* BEGIN Production Content ////////////////*/ ?>
            <thead id="production">
              <tr>
                <th><a name="production"></a><strong>Production</strong></th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tr class="white_first">
              <td><strong><a href="/dnav/ng/ng_prod_sum_a_EPG0_FGW_mmcf_m.htm">Gross withdrawals and production</a></strong><br />
<script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                Components of natural gas production for the U.S., states and the Gulf of Mexico <br />
                <em>monthly, annual</em></td>
              <td>&nbsp;</td>
            </tr>
            
            <tr>
              <tr>
              <td><strong><a href="/naturalgas/weekly/img/201803_monthly_dry_shale.png" class="lightbox">Dry shale gas production estimates by play</a></strong><br />
                <em class="hideme">Release Date: April  19, 2018</em><br />
                Estimated monthly production derived from state administrative data<br />
                <em>monthly</em><br /></td>
              <td><span class="right"><a href="/naturalgas/weekly/img/shale_gas_201803.xlsx" class="ico_xls">XLS</a></span></td>
            </tr>
            </tr>            

            <tr>
              <td><strong><a href="/dnav/ng/ng_prod_wells_s1_a.htm">Number of producing gas wells</a></strong><br />
			  <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                U.S. and state level data <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>

	    <tr>
              <td><strong><a href="/dnav/ng/ng_prod_oilwells_s1_a.htm">Number of gas producing oil wells</a></strong><br />
			  <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                U.S. and state level data <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>



            <tr>
              <td><strong><a href="/dnav/ng/ng_prod_whv_dcu_nus_a.htm">Wellhead value &amp; marketed production</a></strong><br />
<script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                U.S. and state level natural gas wellhead values and prices of marketed production <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_prod_off_s1_a.htm">Offshore gross withdrawals</a></strong><br />
			  <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>
                 U.S., state, and Gulf of Mexico gross withdrawals from oil and gas wells <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_prod_ss_a_EPG0_ovi_mmcf_a.htm">Supplemental supplies</a></strong><br />

			  <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                U.S. and State supplies of synthetic natural gas, biomass, refinery gas, propane-air, etc. <br />
                <em>monthly, annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_prod_pp_a_EPG0_ygp_mmcf_a.htm">Natural gas plant processing</a></strong><br />
                <script language="JavaScript" type="text/javascript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>
                U.S. and state level statistics for natural gas processed, total liquids extracted, extraction loss.<br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/cfapps/ngqs/ngqs.cfm?f_report=RP9&amp;f_sortby=&amp;f_items=&amp;f_year_start=&amp;f_year_end=&amp;f_show_compid=&amp;f_fullscreen">Plant-level location and capacity</a></strong><br />
                <em>Release Date: November 27, 2013 </em><br />

                Plant-level location and capacity information for all natural gas processing plants in the United States.<br />
              <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_prod_deep_s1_a.htm">Gulf of Mexico Federal Offshore production</a></strong><br />
                <em class="hideme">Release Date: February 13, 2018</em> <br />
                Production of crude oil, natural gas wet after lease separation, natural gas liquids, dry natural gas, and lease condensate <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_prod_ngpl_s1_a.htm">Natural gas plant liquids production</a></strong><br />
                <em class="hideme">Release Date: February 13, 2018</em> <br />
                Production by U.S., region, and state <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_prod_lc_s1_a.htm">Lease condensate production</a></strong><br />
                <em class="hideme">Release Date: February 13, 2018</em> <br />
                Production by U.S., region, and state <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong>Unconventional dry natural gas production</strong><br />
                <em class="hideme">Release Date: February 13, 2018</em> <br />
                <ul>
                  <li><a href="/dnav/ng/ng_prod_coalbed_s1_a.htm">Coalbed methane</a></li>
                  <li><a href="/dnav/ng/ng_prod_shalegas_s1_a.htm" class="no-border">Shale gas</a></li>
                </ul></td>
              <td>&nbsp;</td>
            </tr>
            


			<tr>
          <td><a href="/naturalgas/fieldcode/"><strong>Oil and gas field code master list</strong></a><br />

<script language="JavaScript" type="text/JavaScript" src="/naturalgas/fieldcode/includes/rdate_fcml.txt"></script>
Comprehensive listing of U.S. oil and gas field names.<br />
<em>annual</em><br /></td>
          <td>&nbsp;</td>
        </tr>


            <tr>
              <td><strong><a href="archive/petrosystem/petrosysog.html">Distribution and production of oil &amp; gas wells</a></strong><br />                <em class="hideme">Release Date: January 7, 2011</em><br />
              State level tables and graphs<br />                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/cfapps/ngqs/ngqs.cfm?f_report=RP2&amp;f_sortby=ICA&amp;f_items=0110VL,0120VL,0210VL,0220VL,0230VL,0300VL,0400VL,0500VL,0600VL,0700VL,0800VL,&amp;f_year_start=2009&amp;f_year_end=2012&amp;f_show_compid=Name&amp;f_fullscreen=">Production by company</a></strong><br />
			  <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                Annual production volumes from data collected on Form EIA-176 (Annual Report of Natural and Supplemental Gas Supply and Disposition)<br />
              <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>


            <tr>
              <td><strong><a href="/petroleum/production/">Monthly Crude Oil and Natural Gas Production</a></strong><br />
                <script language="JavaScript" type="text/JavaScript" src="/petroleum/production/includes/rdate_914.txt"></script>
              Monthly crude oil and natural gas production data collected on Form EIA-914 (Monthly Crude Oil, Lease Condensate, and Natural Gas Production Report)<br />
              <em>monthly</em></td>
              <td>&nbsp;</td>
            </tr>
            <?php /* END Production Content ////////////////*/ ?>
              <?php /* BEGIN Imports/Exports Content ////////////////*/ ?>
            <thead id="imports">
              <tr>
                <th><a name="imports"></a><strong>Imports/exports</strong></th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tr class="white_first">
              <td><strong><a href="/dnav/ng/ng_move_impc_s1_m.htm">U.S. imports by country</a></strong><br />
			  <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                Prices and volumes <br />
                <em>monthly, annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_move_expc_s1_m.htm">U.S. exports by country</a></strong><br />
                <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>
                Prices and volumes <br />
                <em>monthly, annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_move_state_a_EPG0_IM0_Mmcf_a.htm">U.S. imports &amp; exports by state</a></strong><br />
                <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>
                Prices and volumes <br />
                <em>monthly, annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_move_poe1_a_EPG0_IRP_Mmcf_a.htm">U.S. imports by point of entry</a></strong><br />
                <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>
                Prices and volumes <br />
                <em>monthly, annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_move_poe2_a_EPG0_ENP_Mmcf_a.htm">U.S. exports by point of exit</a></strong><br />
                <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>
                Prices and volumes <br />
                <em>monthly, annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_move_ist_a2dcu_nus_a.htm">U.S. international &amp; interstate movements of natural gas by state</a></strong><br />
<script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                Includes International and Interstate receipts, deliveries and net receipts by state <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/cfapps/ipdbproject/IEDIndex3.cfm?tid=3&amp;pid=26&amp;aid=3">International imports data</a></strong><br />
                Imports by country, region and country groups</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/cfapps/ipdbproject/IEDIndex3.cfm?tid=3&amp;pid=26&amp;aid=4">International exports data</a></strong><br />
                Exports by country, region and country groups</td>
              <td>&nbsp;</td>
            </tr>
            <?php /* END Imports/Exports Content ////////////////*/ ?>


			 <?php /* BEGIN Pipelines Content ////////////////*/ ?>
            <thead id="pipelines">
              <tr>
                <th><a name="pipelines"></a><strong>Pipelines</strong></th>
                <th>&nbsp;</th>
              </tr>
            </thead>
			  <tr class="white_first">
              <td><strong><a href="/naturalgas/archive/analysis_publications/ngpipeline/index.html">About U.S. pipelines</a></strong><br />
Detailed information and maps showing pipelines, capacities, flows and network design, transportation corridors, and other relevant information for U.S. pipelines in the lower 48 states.
               </td>
              <td>&nbsp;</td>
            </tr>


            <tr>
              <td><strong><a href="/naturalgas/pipelines/EIA-StatetoStateCapacity.xlsx" class="ico_xls_right">U.S. state-to-state capacity</a></strong><br />
Information on capacity of existing natural gas pipelines crossing between states, international borders, and offshore Gulf of Mexico.
                </td>
              <td>&nbsp;</td>
            </tr>

            <tr>
              <td><strong><a href="/naturalgas/pipelines/EIA-NaturalGasPipelineProjects.xlsx" class="ico_xls_right">Pipeline projects</a></strong><br />
Detailed information on the size and location of pipeline projects announced or under construction.
                </td>
              <td>&nbsp;</td>
            </tr>
            <?php /* END Pipelines Content Content ////////////////*/ ?>




            <?php /* BEGIN Storage Content ////////////////*/ ?>
            <thead id="storage">
              <tr>
                <th><a name="storage"></a><strong>Storage</strong></th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tr class="white_first">
              <td><strong><a href="/dnav/ng/ng_stor_wkly_s1_w.htm">Weekly working gas in underground storage </a></strong><br />
<script language="JavaScript" type="text/JavaScript" src="/dnav/ng/includes_ng/rdate_wngsr.txt"></script>

                U.S. natural gas inventories held in underground storage facilities<br />
				<em>weekly</em>
				<br /><br />
			  <ul>
              <li><a href="/dnav/ng/ng_stor_wkly_s2_w.htm">Underground storage East, West, and Producing regions</a> <br />
			  (historical data 12/31/1993 - 11/06/2015)</li>
			  </ul>

				</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_stor_sum_a_EPG0_sat_mmcf_m.htm">Underground storage &mdash; all operators</a></strong><br />
			  <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>
                Total storage by base gas and working gas, and storage activity by state <br />
                <em>monthly, annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_stor_type_s1_m.htm">Underground storage by type</a></strong><br />
			  <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                U.S. storage and storage activity by all operators, salt cavern fields and nonsalt cavern <br />
                <em>monthly, annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_stor_cap_a_EPG0_SAC_Mmcf_a.htm">Underground storage capacity</a></strong><br />
			  <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                Storage capacity, working gas capacity, and number of active fields for salt caverns, aquifers, and depleted fields by state <br />
                <em>monthly, annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_stor_lng_a_EPG0_SAL_MMcf_a.htm">Liquefied natural gas additions to and withdrawals from storage</a></strong><br />
<script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                By state <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>

						   <tr>
              <td><strong><a href="/naturalgas/storagecapacity/">Underground natural gas working storage capacity</a></strong><br />
                <em>Release Date: April 3, 2017</em><br />
             This report provides estimates of aggregate peak working gas capacity and working gas design capacity for the U.S. underground natural gas storage as of November 2015. <br />
              <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>

            <tr>
              <td><strong><a  href="/cfapps/ngqs/ngqs.cfm?f_report=RP7&amp;f_sortby=&amp;f_items=&amp;f_year_start=&amp;f_year_end=&amp;f_show_compid=&amp;f_fullscreen">U.S. field level storage data</a></strong><br />
                <script language="JavaScript" type="text/JavaScript" src="/naturalgas/annual/includes/rdate_nga.txt"></script>
                Annual field-level storage capacity and field-type  data for all underground storage fields in the United States.<br />
              <em>annual</em></td>
           <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/naturalgas/storage/EIA-StoragePlan.xls" class="ico_xls_right">Planned storage projects</a></strong><br />
                Detailed information on the size and location of underground storage facilities announced or under construction. </td>
              <td>&nbsp;</td>
            </tr>


            <?php /* END Storage Content ////////////////*/ ?>
            <?php /* BEGIN Consumption Content ////////////////*/ ?>
            <thead id="consumption">
              <tr>
                <th><a name="consumption"></a><strong>Consumption</strong></th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tr class="white_first">
              <td><strong><a href="/dnav/ng/ng_cons_sum_dcu_nus_m.htm">Total consumption</a></strong><br />
                <em>Monthly&nbsp;</em>
                <script language="javascript" type="text/javascript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>
                <em>Annual&nbsp;</em>
                <script language="javascript" type="text/javascript" src="/naturalgas/annual/includes/rdate_nga.txt"></script>
              U.S. and State total consumption by lease and plant, pipeline, and end use consumers by sector <br /></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_cons_sum_a_EPG0_vgt_mmcf_m.htm">Delivered to consumers</a></strong><br />
<em>Monthly&nbsp;</em><script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

<em>Annual&nbsp;</em><script language="JavaScript" type="text/JavaScript" src="/naturalgas/annual/includes/rdate_nga.txt"></script>

U.S. and State volumes delivered to end use consumers by sector <br /></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_cons_num_a_EPG0_VN3_Count_a.htm">Number of consumers</a></strong><br />
			  <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                Number of sales and transported consumers for residential, commercial, and industrial sectors by state <br />
                <em> annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_cons_pns_a_EPG0_VRP_pct_a.htm">State shares of U.S. deliveries</a></strong><br />
				<script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>
                By sector and total consumption <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_cons_acct_a_EPG0_VF8_mmcf_a.htm">Delivered for the account of others</a></strong><br />
			  <script language="JavaScript" type="text/JavaScript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>

                Commercial, industrial and electric utility deliveries; percentage of total deliveries by state <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/dnav/ng/ng_cons_heat_a_EPG0_VGTH_btucf_a.htm">Heat content of natural gas consumed</a></strong><br />
                <script language="JavaScript" type="text/javascript" src="/naturalgas/monthly/includes/rdate_ngm.txt"></script>
                Btu per cubic foot of natural gas delivered to consumers by state <br />
                                and other components of consumption for U.S. <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong><a href="/cfapps/ngqs/ngqs.cfm?f_report=RP1&amp;CFID=3671337&amp;CFTOKEN=adecb824a353d3ce-2B0A52F6-237D-DA68-24A4616E47171EC2">Company-level supply and disposition</a></strong><br />
                <script language="JavaScript" type="text/JavaScript" src="/naturalgas/annual/includes/rdate_nga.txt"></script>
                Annual company-level supply and disposition data for all natural gas local distribution companies in the United States. <br />
                <em>annual</em></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><p><strong><a href="/cfapps/ipdbproject/IEDIndex3.cfm?tid=3&amp;pid=26&amp;aid=2">International natural gas consumption</a></strong><br />
                  Dry natural gas consumption, by country, region, and country groups<br />
                  <em><a href="/beta/international/data/browser/">International Energy Statistics</a><br />
                  annual </em></p></td>
              <td>&nbsp;</td>
            </tr>
            <?php /* END Consumption Content ////////////////*/ ?>
          </table>
          <div class="clear">&nbsp;</div>
          <?php /* Feature Example */ ?>
          <a name="weekly release"></a><div class="weeklies">
          <span>
            <h2>Regular Weekly Releases*</h2>
            <h3>Thursday</h3>
            <p><a href="http://ir.eia.gov/ngs/ngs.html">Weekly Natural Gas Storage Report &rsaquo;</a><br />
              <i>10:30 a.m. EST</i></p>
            <p><a href="/naturalgas/weekly/">Natural Gas Weekly Update &rsaquo;</a><br />
            <i>2:00 - 2:30 p.m. EST</i></p>
            <p class="no-border"><i>*No releases: Monday, Tuesday, Wednesday or Friday. Releases change on weeks with Federal holidays.</i></p>
            </span> </div>
          <?php /* Feature Example */ ?>
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
