<!doctype html>
<?php  $pageTitle = "U.S. Energy Information Administration (EIA)";
<?php $L2T = 'Electricity';
?>


<?php $locale = 'overview'; ?>
<?php /* set this so that the carousel.cfm include query will pull the correct set of Issues and Trends for this page. */ ?>
<?php $l2page = 'page_ele';
$l2id = 2;
?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<?php include ('global/includes/eia_head_info.inc') ; ?>
    <script src="/global/vendor/bxslider/dist/jquery.bxslider.min.js"></script>
    <script src="/global/scripts/slider-multi-cards-init.min.js"></script>

    
    <link rel="stylesheet" type="text/css" href="/global/styles/L2_pages.css" />
    <link href="/global/styles/eia-multi-card-slider-styles.css" rel="stylesheet" />

    <?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?>
<body>
<div id="outerX"><?php /* Outer Wrapper */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
  <?php include ('includes/subnav_electricity.inc') ; ?>
  <?php /* Page/Body Content */ ?>

  <div class="pagecontent eqcol_temp">
      <?php /*<div class="alert"><p><strong>What's changed?</strong> &nbsp; See <a href="/about/eia_explained.cfm#l2_enhancements" id="enhance" style="background:none; padding-right:0; margin-right:0">highlights of new features</a> or <a href="#video" id="youtube" style="background:none; padding-right:0; margin-right:0">take a 60 second video tour</a>.</p></div>*/ ?>
      <?php include ('global/includes/l2-youtube.inc') ; ?>
    <?php include ('global/includes/carousel.inc') ; ?>
      <div class="main"><?php /*Left column*/ ?><span class="main_col">
      <h1>Recent Data</h1>
      <?php include ('includes/table_data.php') ;  ?>
       <p><a href="data.php"><strong>See more data &rsaquo;</strong></a></p>
       
                              <h2>Hourly Electricity Data </h2>
                <ul class="updated_data">
                  <li> <a href="/realtime_grid/?src=data#/summary/">Realtime electric system operating data</a></li>

                </ul>


                <h2>Updated Data Series</h2>
                <ul class="updated_data">
                  <li><span class="series_date"><script language="JavaScript" type="text/JavaScript" src="/electricity/monthly/includes/elect_l2.txt"></script></span> <a href="/electricity/data/browser/">Net generation</a></li>
                  <li><span class="series_date"><script language="JavaScript" type="text/JavaScript" src="/electricity/monthly/includes/elect_l2.txt"></script></span> <a href="/electricity/data/browser/#/topic/7?agg=2,0,1&geo=g&freq=M">Average retail price of electricity</a></li>
                  <li><span class="series_date"><script language="JavaScript" type="text/JavaScript" src="/electricity/monthly/includes/elect_l2.txt"></script></span> <a href="/electricity/data/browser/#/topic/11?agg=2,0,1&fuel=vtvo&geo=g&sec=g&linechart=ELEC.STOCKS.COL-US-98.M~ELEC.STOCKS.PEL-US-98.M~ELEC.STOCKS.PC-US-98.M&columnchart=ELEC.STOCKS.COL-US-98.M&map=ELEC.STOCKS.COL-US-98.M&freq=M">Fossil fuel stocks for electricity generation</a></li>
                  <li><span class="series_date"><script language="JavaScript" type="text/JavaScript" src="/electricity/monthly/includes/elect_l2.txt"></script></span> <a href="/electricity/data/browser/#/topic/2?agg=2,0,1&fuel=f&geo=g&sec=g&linechart=ELEC.CONS_TOT.COW-US-99.M~ELEC.CONS_TOT.NG-US-99.M~ELEC.CONS_TOT.PC-US-99.M~&columnchart=ELEC.CONS_TOT.COW-US-99.M&map=ELEC.CONS_TOT.COW-US-99.M&freq=M">Consumption for electricity generation</a></li>

                </ul>
                <h2>Survey Forms, Changes & Announcements</h2>
                <ul>
                  <li><a href="/survey/#electricity">Electric survey forms &rsaquo;</a></li>
                    <?php /* <li><a href="/survey/changes/electricity/solar/">Proposed survey form changes for 2017 &rsaquo;</a></li> */ ?>
                    <?php /*<li><a href="/survey/changes/electricity/">See Electricity Import and Export Survey (EIA-111) renewal 2015 &rsaquo;</a></li>*/ ?>
                    <?php /*<li><a href="/survey/changes/electricity/">See electricity and renewable (photovoltaic) form changes for 2014</a></li>*/ ?>

                </ul>
          </span>
          <?php /*End left column*/ ?>

          <?php /*Right column*/ ?>
          <span id="ovHeadr" class="side_col right">

          <?php include ('global/includes/recent_highlighted_AP.inc') ; ?>

            <h2>Beta: Water and Plant-Level Data</h2>
            <?php /*p><em>Releases change on weeks with Federal holidays.</em></p*/ ?>
            <p><a href="/beta/electricity/data/browser">Updated Electricity Data Browser</a>: Now includes water usage and new plant-level information.


            <h2>Upcoming Releases</h2>
            <?php /*p><em>Releases change on weeks with Federal holidays.</em></p*/ ?>
            <p><a href="/electricity/wholesale/">Wholesale Electricity and Natural Gas Market Data</a>: <em>Biweekly on  Thursday</em><br />
              <a href="/electricity/monthly/">Electric Power Monthly</a>: <em>between the 20th and the 25th  of the month</em><br />
              <a href="/electricity/monthly/update">Electricity Monthly Update</a>: <em>between the 20th and the 25th of the month</em></p>
            <?php /*p><em>*No releases: Monday, Tuesday, Wednesday or Friday.</p*/ ?>
            <?php /*p><a href="/todayinenergy/index.cfm?tg=INSERT_YOUR_TAG_HERE_FOR_TIE"><strong>Recent Articles &rsaquo;</strong></a></p*/ ?>
            <p><a href="/reports/upcoming.php"><strong> See all upcoming &rsaquo;</strong></a></p>
            </span>
            <?php /*end Right column*/ ?>
            <?php /*Interactive visualizations section*/ ?>
            <h1>Interactive Visualizations, Data, & Multimedia</h1>
            <ul class="visualizations">
              <li><a title="Electricity Data Browsers" href="/electricity/data/browser/">
                  <div class="circle_elec_data circle"></div>
                  <strong>Electricity<br />Data Browser</strong></a></li>

              <li><a title="U.S. Electricity Infrastructure Map" href="/state/maps.cfm?v=Electricity">
                  <div class="circle_ng_map circle"></div>
                  <strong>U.S. Electricity Infrastructure Map</strong></a></li>

              <li><a title="U.S. Energy Disruptions Map" href="/special/disruptions/">
                  <div class="circle_disruptions circle"></div>
                  <strong>U.S. Energy Disruptions Map</strong></a></li>

              <li><a title="STEO Data Browser" href="/forecasts/steo/query/">
                  <div class="circle_steo circle"></div>
                  <strong>STEO<br />
                    Data Browser</strong></a></li>

              <li><a title="AEO Data Browser" href="/beta/aeo/">
                  <div class="circle_aeo circle"></div>
                  <strong>AEO<br />
                    Table Browser</strong></a></li>

              <li><a title="Status of U.S. Nuclear Outages" href="/nuclear/outages/">
                  <div class="circle_nuclear_outages circle"></div>
                  <strong>Status of U.S. Nuclear Outages</strong></a></li>


              <?php /*<li><a href="/radio/">
								<div class="circle_radio circle"></div>
								<strong>Radio Spot</strong></a></li>*/ ?>
            </ul>
            <?php /*end Interactive visualizations section*/ ?>
            <?php /*Energy education section*/ ?>
            <h1>Energy Education</h1>
            <div class="ed_section">
              <div>
                <div> <img src="/global/images/icons/education/nat_gas.png"/> <span>
            <h2><a href="/energyexplained/index.cfm?page=electricity_home">Electricity Explained</a></h2>
            <p><em><a href="/energyexplained/index.cfm?page=electricity_in_the_united_states">Electricity in the United States</a></em></p>
			<p><a href="/energyexplained/index.cfm?page=electricity_home"><strong>See more electricity topics &rsaquo;</strong></a></p>
			</span> </div>
              </div>
              <div>
                <div> <img src="/global/includes/issuestrends/images/icon_faq.png"/> <span>
            <h2><a href="/tools/faqs/">FAQs</a></h2>
            <p><em><a href="/tools/faqs/faq.cfm?id=97&t=3">How much electricity does an American home use?</a></em></p>
            <p><a href="/tools/faqs/index.cfm#electricity"><strong>See all electricty FAQs &rsaquo;</strong></a></p>
            </span> </div>
              </div>
              <div>
                <div> <img src="/global/includes/issuestrends/images/icon_kids.png"/> <span>
            <h2><a href="/kids">Energy Kids</a></h2>
            <p><em><a href="/kids/energy.cfm?page=electricity_science-basics">Science of Electricity Basics</a></em></p>
            <p><a href="/kids/energy.cfm?page=electricity_home-basics"><strong>See electricity on Energy Kids &rsaquo;</strong></a></p>
            </span> </div>
              </div>
            </div>
            <?php /*end Energy education section-*/ ?>

            <?php /* Main */ ?>
    </div>
        <?php /*/ Page/Body Content */ ?>
        <?php include("global/includes/eia_footer.inc"); ?>
      </div>
  <?php /*/ Outer Wrapper */ ?>
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