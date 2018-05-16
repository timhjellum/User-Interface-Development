<!doctype html>
<?php
$pageTitle = '';
$L2T = 'Coal';
$locale = 'overview';
$l2page = 'page_coa';
$l2id = 3; ?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<?php include ('global/includes/eia_head_info.inc') ; ?>

    
    <link rel="stylesheet" type="text/css" href="/global/styles/L2_pages.css" />
    <link href="/global/styles/eia-multi-card-slider-styles.css" rel="stylesheet" />

    <?php if(!isset($no_titling)) include"global/includes/titling.inc"; ?>
</head>
<body>
<div id="outerX"><?php /* Outer Wrapper */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
  <?php include ('includes/subnav_coal.inc') ; ?>
  <?php /* Page/Body Content */ ?>

  <div class="pagecontent eqcol_temp">
  <?php include ('global/includes/l2-youtube.inc') ; ?>
    <?php include ('global/includes/carousel.inc') ; ?>
    <div class="main"><?php /*Left column*/ ?><span class="main_col">
      <h1>Recent Data</h1>
            <?php /*<?php include ('includes/data_table_electric_test.inc') ; ?>*/ ?>
            <?php include ('includes/data_table1.inc') ; ?>
            <?php /* <?php include ('includes/data_table2.inc') ; ?>*/ ?>
      <p><a href="/coal/data.cfm"><b>See more data &rsaquo;</b></a></p>
      <h2>Updated Data Series</h2>
      <ul class="updated_data">
        <li><span class="series_date"><script language="JavaScript" type="text/JavaScript" src="/electricity/monthly/includes/elect_l2.txt"></script></span>&nbsp;&nbsp; <a href="/beta/MER/index.cfm?tbl=T06.01#/?f=M&start=200001">Overview of consumption, production, and exports</a></li>
        <li><span class="series_date"><script language="JavaScript" type="text/JavaScript" src="/electricity/monthly/includes/elect_l2.txt"></script></span> &nbsp;&nbsp;<a href="/electricity/data/browser/#/topic/0?agg=1,0,2&fuel=8&geo=vvvvvvvvvvvvo&sec=o3g&linechart=ELEC.GEN.COW-US-99.M~ELEC.GEN.COW-US-1.M~ELEC.GEN.COW-US-94.M&columnchart=ELEC.GEN.COW-US-99.M~ELEC.GEN.COW-US-1.M~ELEC.GEN.COW-US-94.M&map=ELEC.GEN.COW-US-99.M&freq=M&start=200101&end=201406&ctype=linechart&ltype=pin&rtype=s&maptype=0&rse=0&pin=">Net generation for coal, monthly</a> </li>
         <li><span class="series_date"><script language="JavaScript" type="text/JavaScript" src="/electricity/monthly/includes/elect_l2.txt"></script></span>&nbsp;&nbsp; <a href= "/electricity/data/browser/#/topic/3?agg=1,0,2&fuel=8&geo=g&sec=o3g&linechart=ELEC.CONS_EG.COW-US-99.M~ELEC.CONS_EG.COW-US-1.M~ELEC.CONS_EG.COW-US-94.M~ELEC.CONS_EG.COW-US-96.M~ELEC.CONS_EG.COW-US-97.M&columnchart=ELEC.CONS_EG.COW-US-99.M~ELEC.CONS_EG.COW-US-1.M~ELEC.CONS_EG.COW-US-94.M~ELEC.CONS_EG.COW-US-96.M~ELEC.CONS_EG.COW-US-97.M&map=ELEC.CONS_EG.COW-US-99.M&freq=M&start=200101&end=201406&ctype=linechart&ltype=pin&rtype=s&pin=&rse=0&maptype=0">Consumption of coal for electricity generation by sector</a></li>
          <?php /*li><span class="series_date">06/19/2014</span> &nbsp;&nbsp;<a href="/coal/distribution/quarterly/">Quarterly Coal Distribution Report</a></li*/ ?>

      </ul>
      <h2>Survey Forms, Changes & Announcements</h2>
      <ul>
        <li><a href="/survey/#coal">Coal surveys &rsaquo;</a></li>
        <li><a href="/survey/changes/coal/2017/">See upcoming survey changes &rsaquo;</a></li>
      </ul>
      </span>
      <?php /*End left column*/ ?> 
      
      <?php /*Right column*/ ?>

      <span id="ovHeadr" class="side_col right">
      <?php include ('global/includes/recent_highlighted_AP.inc') ; ?>
      <h2>Upcoming Releases</h2>
      <p><em>Release days may change on weeks with Federal holidays.</em></p>
      <p>*<a href="/coal/markets/">Coal Markets</a>:<em> 5:00 p.m. ET, Monday</em> (* Formerly  <em>Weekly NYMEX Coal Futures</em> and <em>Coal News & Markets</em>)<br />
		<?php /** Formerly the <em>Weekly NYMEX Coal Futures</em> and <em>Coal News $ Markets</em><br />*/ ?>
<?php /*</a>:<em> 5:00 p.m. ET, Monday</em><br />
        <a href="/coal/news_markets/">Coal News & Markets</a>:<em> 5:00 p.m. ET, Monday</em>*/ ?>
        <a href="/coal/production/weekly/">Weekly Coal Production</a>:<em> 5:00 p.m. ET, Thursday</em></p> 
      <p><a href="/reports/upcoming.php"><b> See all upcoming &rsaquo;</b></a></p>
      </span>
      <?php /*end Right column*/ ?> 
      <?php /*Interactive visualizations section*/ ?>
      <h1>Interactive Visualizations, Data, & Multimedia</h1>
      <ul class="visualizations">
        <li><a title="Coal Data Browser" href="/beta/coal/data/browser/">
          <div class="circle_coal_data circle"></div>
          <b> Coal Data Browser</b></a></li>

        <li><a title="U.S. Coal Infrastructure Map" href="/state/maps.cfm?v=Coal">
          <div class="circle_ng_map circle"></div>
          <b>U.S. Coal Infrastructure Map</b></a></li>
        <li><a title="U.S. Fossil Fuel Resource Map" href="/state/maps.cfm?v=Fossil%20Fuel%20Resources">
          <div class="circle_fossil_fuel circle"></div>
          <b>U.S. Fossil Fuel Resource Map</b></a></li>
        
        <li><a title="U.S. Energy Disruptions Map" href="/special/disruptions/">
          <div class="circle_disruptions circle"></div>
          <b>U.S. Energy Disruptions Map</b></a></li>

          <li><a title="STEO Data Browser" href="/forecasts/steo/query/">
            <div class="circle_steo circle"></div>
            <b>STEO<br />
            Data Browser</b></a></li>

          <li><a title="AEO Data Browser" href="/beta/aeo//">
          <div class="circle_aeo circle"></div>
          <b>AEO<br />
          Table Browser</b></a></li>
        <?php /*li><a href="/radio/"><div class="circle_radio circle"></div> <b>Radio Spot</b></a></li*/ ?>
      </ul>
      <?php /*end Interactive visualizations section*/ ?> 
      
      <?php /*Energy education section*/ ?>
      <h1>Energy Education</h1>
      <div class="ed_section">
        <div>
          <div> <img src="/global/images/icons/education/coal.png"/> <span>
            <h2><a href="/energyexplained/index.cfm?page=coal_home">Coal Explained</a></h2>
            <p><em><a href="/energyexplained/index.cfm?page=coal_where">Where our coal comes from</a></em></p>
            <p><a href="/energyexplained/index.cfm?page=coal_home"><b>See more coal topics &rsaquo;</b></a></p>
            </span> </div>
        </div>
        <div>
          <div> <img src="/global/includes/issuestrends/images/icon_faq.png"/> <span>
            <h2><a href="/tools/faqs/">FAQs</a></h2>
            <p><em><a href="/tools/faqs/faq.cfm?id=527&t=2">How much coal, natural gas, or petroleum is used to generate a kilowatt-hour of electricity?</a></em></p>
            <p><a href="/tools/faqs/#coal"><b>See all coal FAQs &rsaquo;</b></a></p>
            </span> </div>
        </div>
        <div>
          <div> <img src="/global/includes/issuestrends/images/icon_kids.png"/> <span>
            <h2><a href="/kids">Energy Kids</a></h2>
            <p><em><a href="/kids/energy.cfm?page=coal_home-basics#coal_environment-basics">Coal & the Environment</a></em></p>
            <p><a href="/kids/energy.cfm?page=coal_home-basics"><b>See coal on Energy Kids &rsaquo;</b></a></p>
            </span> </div>
        </div>
      </div>





      <?php include('/global/footer/includes/footer.inc') ?>
      </body>
      </html>


