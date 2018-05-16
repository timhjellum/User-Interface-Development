<!doctype html>
<?php $L2T = 'Renewable & Alternative Fuels'; ?>
<?php $locale = 'overview'; ?>
<?php $l2page = 'page_ren';
$l2id = 7;
?>
<?php  if(!isset($no_titling))include("global/includes/titling.inc"); ?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<?php include ('global/includes/eia_head_info.inc') ; ?>
    <script src="/global/vendor/bxslider/dist/jquery.bxslider.min.js"></script>
    <script src="/global/scripts/slider-multi-cards-init.min.js"></script>

    
    <link rel="stylesheet" type="text/css" href="/global/styles/L2_pages.css" />
    <link href="/global/styles/eia-multi-card-slider-styles.css" rel="stylesheet" />

    <?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?>
</head>
<body>
<div id="outerX"><?php /* Outer Wrapper */?>
  <?php include ('global/includes/eia_header.inc') ; ?>
  <?php include ('includes/subnav_renewable.inc') ; ?>
  <?php /* Page/Body Content */?>

  <div class="pagecontent eqcol_temp">
  <?php include ('global/includes/l2-youtube.inc') ; ?>
      <?php include ('global/includes/carousel.inc') ; ?>
      <div class="main"><?php /*Left column*/ ?><span class="main_col">
      <h1>Recent Data</h1><?php
        if(file_exists("renewable/includes/data_table.html")){
          $homepage_data_file = "renewable/includes/data_table.html";
        } else{
          $homepage_data_file = "renewable/includes/data_table.inc";
        }
        if(!$homepageData = file_get_contents($homepage_data_file, FILE_USE_INCLUDE_PATH)) {
          echo "Data not currently available. Check back soon.";
        } else {
          echo $homepageData;
        }
      ?>
      <p><a href="/renewable/data.cfm"><b>See more data &rsaquo;</b></a></p>
      <h2>Updated Data Series</h2>
      <ul class="updated_data">

        <li><span class="series_date"><script language="JavaScript" type="text/JavaScript" src="/electricity/monthly/includes/elect_l2.txt"></script></span> <a href="/totalenergy/data/browser/?tbl=T10.01#/?f=M&start=200001">Renewable energy production and consumption by source </a></li>
        <li><span class="series_date"><script language="JavaScript" type="text/JavaScript" src="/electricity/monthly/includes/elect_l2.txt"></script></span> <a href="/electricity/data/browser/#/topic/0?agg=1,0,2&fuel=04&geo=vvvvvvvvvvvvo&sec=o3g&linechart=ELEC.GEN.HYC-US-99.M~ELEC.GEN.HYC-CA-99.M~ELEC.GEN.HYC-OR-99.M~ELEC.GEN.HYC-WA-99.M&columnchart=ELEC.GEN.HYC-US-99.M~ELEC.GEN.HYC-CA-99.M~ELEC.GEN.HYC-OR-99.M~ELEC.GEN.HYC-WA-99.M&map=ELEC.GEN.HYC-US-99.M&freq=M&start=200101&end=201406&ctype=linechart&ltype=pin&rtype=s&maptype=0&rse=0&pin=">Net generation for conventional hydroelectric</a></li>
        <li><span class="series_date"><script language="JavaScript" type="text/JavaScript" src="/electricity/monthly/includes/elect_l2.txt"></script></span> <a href="/electricity/data/browser/#/topic/0?agg=1,0,2&fuel=02&geo=vvvvvvvvvvvvo&sec=o3g&linechart=ELEC.GEN.AOR-US-99.M~ELEC.GEN.AOR-US-1.M~ELEC.GEN.AOR-US-94.M~ELEC.GEN.AOR-US-96.M~ELEC.GEN.AOR-US-97.M&columnchart=ELEC.GEN.AOR-US-99.M~ELEC.GEN.AOR-US-1.M~ELEC.GEN.AOR-US-94.M~ELEC.GEN.AOR-US-96.M~ELEC.GEN.AOR-US-97.M&map=ELEC.GEN.AOR-US-99.M&freq=M&start=200101&end=201406&ctype=linechart&ltype=pin&rtype=s&pin=&rse=0&maptype=0">Net generation for other renewables</a></li>
          <?php /*li><span class="series_date">04/08/2014</span> <a href="/renewable/afv/">Alternative Fuel Vehicle Data</a></li*/?>

      </ul>
      <h2>Survey Forms, Changes & Announcements</h2>
      <ul>
        <li><a href="/survey/#renewables">Annual Photovoltaic Cell/Module Shipments Report &rsaquo;</a></li>
        <?php /*li><a href="/survey/changes/electricity/">See electricity and renewable (photovoltaic) form changes for 2014</a></li*/?>

      </ul>
      </span>
      <?php /*End left column*/?>

      <?php /*Right column*/?>
      <span id="ovHeadr" class="side_col right">
      <?php include ('global/includes/recent_highlighted_AP.inc') ; ?>
      <h2>Upcoming Releases</h2>
          <?php /*p><em>Releases change on weeks with Federal holidays.</em></p*/?>
          <p> <span class="series_date"></span> <a href="/petroleum/ethanolcapacity/index.cfm">U.S. Fuel Ethanol Plant Production Capacity</a>: <em>June 2018</em><br />
              <?php /*span class="series_date"></span><a href="/forecasts/steo/report/?src=renewable-f2">Short-Term Energy Outlook</a>: <em>Tuesday, November 10, 2015</em></p*/?>
       <p><a href="/reports/upcoming.cfm"><b> See all upcoming &rsaquo;</b></a></p>
          <?php /*<p><em>*No releases: Monday, Tuesday, Wednesday or Friday.</p>
      <p><a href="/todayinenergy/index.cfm?tg=INSERT_YOUR_TAG_HERE_FOR_TIE"><b>Recent Articles &rsaquo;</b></a></p>*/?>
      </span>
      <?php /*end Right column*/?>
      <?php /*Interactive visualizations section*/?>
      <h1>Interactive Visualizations, Data, & Multimedia</h1>
      <ul class="visualizations">
        <li><a title="Alternative Fuel Vehicle Data Browser" href="/renewable/afv/">
          <div class="circle_afv circle"></div>
          <b>Alternative Fuel Vehicle Data Browser</b></a></li>

        <li><a title="U.S. Renewable Infrastructure Map" href="/state/maps.cfm?v=Renewable">
          <div class="circle_ng_map circle"></div>
          <b>U.S. Renewable Infrastructure Map</b></a></li>

        <li><a title="U.S. Renewable Resource Map" href="/state/maps.cfm?v=Renewable">
          <div class="circle_fossil_fuel circle"></div>
          <b>U.S. Renewable Resource Map</b></a></li>

        <li><a title="U.S. Energy Disruptions Map" href="/special/disruptions/">
          <div class="circle_disruptions circle"></div>
          <b>U.S. Energy Disruptions Map</b></a></li>

          <li><a title="STEO Data Browser" href="/outlooks/steo/query/">
            <div class="circle_steo circle"></div>
            <b>STEO<br />
            Data Browser</b></a></li>

          <li><a title="AEO Data Browser" href="/beta/aeo//">
          <div class="circle_aeo circle"></div>
          <b>AEO<br />
          Table Browser</b></a></li>
          <?php /* <li><a href="/radio/">
          <div class="circle_radio circle"></div>
          <b>Radio Spot</b></a></li>*/?>
      </ul>
      <?php /*end Interactive visualizations section*/?>
      <?php /*Energy education section*/?>
      <h1>Energy Education</h1>
      <div class="ed_section">
        <div>
          <div> <img src="/global/images/icons/education/renewable.png"/> <span>
            <h2><a href="/energyexplained/index.cfm?page=renewable_home">What is renewable energy?</a></h2>
            <p><em><a href="/energyexplained/index.cfm?page=renewable_home#tab3">Renewable energy incentives </a></em></p>
            <p><a href="/energyexplained/index.cfm?page=renewable_home"><b>See more Renewable energy topics &rsaquo;</b></a></p>
            </span> </div>
        </div>
        <div>
          <div> <img src="/global/includes/issuestrends/images/icon_faq.png"/> <span>
            <h2><a href="/tools/faqs/">FAQs</a></h2>
            <p><em><a href="/tools/faqs/faq.cfm?id=93&t=4">How many alternative fuel and hybrid vehicles are there in the U.S.?</a></em></p>
            <p><a href="/tools/faqs/#renewables"><b>See all Renewable FAQs &rsaquo;</b></a></p>
            </span> </div>
        </div>
        <div>
          <div> <img src="/global/includes/issuestrends/images/icon_kids.png"/> <span>
            <h2><a href="/kids">Energy Kids</a></h2>
            <p><em><a href="/kids/energy.cfm?page=renewable_home-basics">Renewable</a></em></p>
            <p><a href="/kids/energy.cfm?page=renewable_home-basics"><b>See more Renewable topics &rsaquo;</b></a></p>
            </span> </div>
        </div>
      </div>
      <?php /*end Energy education section-*/?>
      <?php /* Main */?>
    </div>
    <?php /*/ Page/Body Content */?>
    <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ Outer Wrapper */?>
<script>
$("#youtube").fancybox({
	'scrolling'		: 'no',
	'titleShow'		: false,
	'onClosed'		: function() {
	    $("#login_error").hide();
	}
});
</script>
</body>
</html>
