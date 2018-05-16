<!doctype html>
<?php
$pageTitle = '';
$L2T = 'Markets & Finance';
$locale = 'overview';
$l2page = 'page_fin';
$l2id = 10;
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
</head>
<body>
<div id="outerX"><?php /* Outer Wrapper */ ?>
    <?php include ('global/includes/eia_header.inc') ; ?>
      <?php include ('includes/subnav_finance.inc') ; ?>
      <?php /* Page/Body Content */ ?>

      <div class="pagecontent eqcol_temp">
	  <?php include ('global/includes/l2-youtube.inc') ; ?>
          <?php include ('global/includes/carousel.inc') ; ?>
          <div class="main"><?php /*Left column*/ ?><span class="main_col">
<!---->
<!--        <div class="feature-section"> -->
<!--          --><?php ///* Main */ ?>
<!--          <h1>Current Issues & Trends <span class="right"><a  href="issuestrends/">See more &rsaquo;</a></span></h1>-->
<!--          <div>-->
<!--          --><?php ///* carousel */ ?>
<!--          --><?php //include ('global/includes/issuestrends/carousel.inc') ; ?>
<!--        --><?php ///* carousel */ ?><!-- -->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="main"> -->
<!--      --><?php ///*Left column*/ ?><!-- -->
<!--      <span class="main_col">-->
      <h1>Recent Data</h1>
      <?php /* Update annually based on STEO Table 1 : U.S. Energy Markets Summary (http://www.eia.gov/forecasts/steo/tables/?tableNumber=3#) */ ?>
      <?php include ('includes/data_table_excel.inc') ; ?>
      <p><a href="/finance/data.cfm"><b>See more data &rsaquo;</b></a></p>
      <?php /* <p><a href="/finance/markets/"><b>See "What drives crude oil prices" for additional analysis &rsaquo;</b></a></p> */ ?>

      <h2>Updated Data Series</h2>
      <ul class="updated_data">
        <li><span class="series_date">9/7/2016</span> <a class="ico_xls_right" href="/forecasts/steo/xls/Fig1.xlsx">West Texas Intermediate (WTI) Crude Oil Price Confidence Intervals</a></li>
        <li><span class="series_date">9/7/2016</span> <a class="ico_xls_right" href="/forecasts/steo/xls/Probability_WTI.xlsx">West Texas Intermediate (WTI) Crude Oil Price Probabilities</a></li>
        <li><span class="series_date">9/7/2016</span> <a class="ico_xls_right" href="/forecasts/steo/xls/Fig4.xlsx">Henry Hub Natural Gas Prices and Confidence Intervals</a></li>
        <li><span class="series_date">9/7/2016</span> <a class="ico_xls_right" href="/forecasts/steo/xls/Probability_HH.xlsx">Henry Hub Natural Gas Price Probabilities</a></li>
      </ul>
<?php /* Start: No survey/changes/annoucements for finacial */ ?>
<?php /*
      <h2>Survey Forms, Changes & Announcements</h2>
      <ul>
        <li><a href="XXXXXXXXXXXXXXXXXXXX">FUEL NAME surveys &rsaquo;</a></li>
        <li><a href="XXXXXXXXXXXXXXXXXXXX">ANNNOUNCMENT LINK &rsaquo;</a></li>
      </ul>
*/ ?>
<?php /* End: No survey/changes/annoucements for finacial */ ?>
      </span> 
      <?php /*End left column*/ ?> 

      <?php /*Right column*/ ?>

      <span id="ovHeadr" class="side_col right">
      <?php include ('global/includes/recent_highlighted_AP.inc') ; ?>
      <h2>Presentations & Working Papers</h2>
      <p><a href="/finance/workshops.php">Workshop presentations</a><br />
      <a href="/workingpapers/#finance">Financial working papers</a></p>
      <?php /* <p><em>*No releases: Monday, Tuesday, Wednesday or Friday.</p> */ ?>	  
      </span> 
      <?php /*end Right column*/ ?> 
      <?php /*Interactive visualizations section*/ ?>
      <h1>Interactive Visualizations, Data, & Multimedia</h1>
      <ul class="visualizations">
      <?php /*Start: Comment out the following Interactive visualization*/ ?> 
      <?php /*Start: Use disruption map during hurican season - June till December*/ ?> 
        <li><a title="U.S. Energy Disruptions Map" href="/special/disruptions/">
          <div class="circle_disruptions circle"></div>
          <b>U.S. Energy Disruptions Map</b></a></li>
      <?php /*End: Use disruption map during hurican season - June till December*/ ?> 

          <li><a title="STEO Data Browser" href="/forecasts/steo/query/">
            <div class="circle_steo circle"></div>
            <b>STEO<br />
            Data Browser</b></a></li>

          <li><a title="AEO Data Browser" href="/beta/aeo//">
          <div class="circle_aeo circle"></div>
          <b>AEO<br />
          Table Browser</b></a></li>

      <?php /*Start: Steo radio spot*/ ?> 
        <li><a title="Radio Spot" href="/radio/">
          <div class="circle_radio circle"></div>
          <b>Radio Spot</b></a></li>
      <?php /*End: Steo radio spot*/ ?> 
      </ul>
      <?php /*end Interactive visualizations section*/ ?> 
      <?php /*Energy education section*/ ?>
      <h1>Energy Education</h1>
      <div class="ed_section">
        <div>
          <div> <img src="/global/images/icons/education/petroleum.png"/> <span>
            <h2><a href="/finance/markets/">What drives crude oil prices</a></h2>
            <p><em><a href="/finance/markets/">An analysis of 7 factors that influence oil markets</a></em></p>
            <?php /* <p><a href="/energyexplained/index.cfm?page=XXXXXXXXXXXXXXXXXXXX"><b>See more INSERT_FUEL_HERE topics &rsaquo;</b></a></p> */ ?>
            </span> </div>
        </div>
        <div>
          <div> <img src="/global/includes/issuestrends/images/icon_faq.png"/> <span>
            <h2><a href="/tools/faqs/">FAQs</a></h2>
            <p><em><a href="/tools/faqs/faq.cfm?id=4&t=5">Does EIA have ethanol price data?</a></em></p>
            <p><a href="/tools/faqs/#prices"><b>See more price FAQs &rsaquo;</b></a></p>
            </span> </div>
        </div>
        <div>
          <div> <img src="/global/includes/issuestrends/images/icon_kids.png"/> <span>
            <h2><a href="/kids">Energy Kids</a></h2>
            <p><em><a href="/kids/energy.cfm?page=oil_home-basics">Oil (petroleum)</a><br /><a href="/kids/energy.cfm?page=nonrenewable_home-basics">Nonrenewable energy</a></em></p>
            <p><a href="/kids/"><b>See more energy kids &rsaquo;</b></a></p>
            </span> </div>
        </div>
      </div>
      <?php /*end Energy education section*/ ?>
       <?php /* Main */ ?>
    </div>
    <?php /* / Page/Body Content */ ?>
    <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /* / Outer Wrapper*/ ?>
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


