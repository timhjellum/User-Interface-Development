<?php /* Set the HTML title (used by /global/includes/titling.cfm via eia_footer.cfm) */ ?>
<?php $L2T = 'Environment';
 $locale = 'overview';
 $l2page = 'page_env';
 $l2id = 8;
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
      <?php include ('includes/subnav_environment.inc') ; ?>
      <?php /* Page/Body Content */ ?>

      <div class="pagecontent eqcol_temp">
          <?php /*<div class="alert"><p><strong>What's changed?</strong> &nbsp; See <a href="/about/eia_explained.cfm#l2_enhancements" id="enhance" style="background:none; padding-right:0; margin-right:0">highlights of new features</a> or <a href="#video" id="youtube" style="background:none; padding-right:0; margin-right:0">take a 60 second video tour</a>.</p></div>*/ ?>
          <?php include ('global/includes/l2-youtube.inc') ; ?>
          <?php include ('global/includes/carousel.inc') ; ?>
          <div class="main"><?php /*Left column*/ ?><span class="main_col">
      <h1>Recent Data and Forecast</h1>
      <?php /* replace this with something local in the include directory, or with inline code*/ ?>
      <?php include ('includes/data_table.inc') ; ?>

      <p><a href="/environment/data.cfm"><b>See more data &rsaquo;</b></a></p>
      <?php /* <p><a href="/environment/data.cfm"><b>See additional data &rsaquo;</b></a></p> */ ?>

      <h2>Updated Data Series</h2>
      <ul class="updated_data">
        <li><span class="series_date">04/25/2017</span> <a href="/beta/MER/index.cfm?tbl=T12.01#/?f=M&start=200001">Carbon Dioxide Emissions From Energy Consumption, by source</a></li>
        <li><span class="series_date">04/25/2017</span> <a href="/beta/MER/index.cfm?tbl=T12.02#/?f=M&start=200001">Carbon Dioxide Emissions From Energy Consumption, Residential Sector</a></li>
        <?php /*<li><span class="series_date">09/09/2014</span> <a href="/beta/MER/index.cfm?tbl=T12.03#/?f=M&start=200001">Carbon Dioxide Emissions From Energy Consumption, Commercial Sector</a></li>*/ ?>
      </ul>
	  <?php /* Commented out by CA2 
      <h2>Survey Forms, Changes & Announcements</h2>
      <ul>
        <li><a href="XXXXXXXXXXXXXXXXXXXX">FUEL NAME surveys &rsaquo;</a></li>
        <li><a href="XXXXXXXXXXXXXXXXXXXX">ANNNOUNCMENT LINK &rsaquo;</a></li>
      </ul>
	   */ ?>
      </span> 
      <?php /*End left column*/ ?> 

      <?php /*Right column*/ ?>
      <span id="ovHeadr" class="side_col right">
      <?php include ('global/includes/recent_highlighted_AP.inc') ; ?>
      <h2>Upcoming Releases</h2>
      <?php /*<p><em>Releases change on weeks with Federal holidays.</em></p>*/ ?>
	  <p><a href="/totalenergy/data/monthly/#environment">Environment overview</a>: <em>1/26/2018 Monthly Energy Review</em><br />
        <a href="/outlooks/steo/report/renew_co2.cfm">Carbon dioxide emissions</a>: <em>1/9/2018 Short-Term Energy Outlook</em>
      </p>
      <?php /*<p><em>*No releases: Monday, Tuesday, Wednesday or Friday.</p>*/ ?>
      <p><a href="/reports/upcoming.php"><b>See all upcoming &rsaquo;</b></a></p>
      </span> 
      <?php /*end Right column*/ ?> 
      <?php /*Interactive visualizations section*/ ?>
      <h1>Interactive Visualizations, Data, & Multimedia</h1>
      <ul class="visualizations">
        <li><a title="U.S. Energy Disruptions Map" href="/special/disruptions/">
          <div class="circle_disruptions circle"></div>
          <b>U.S. Energy Disruptions Map</b></a></li>

          <li><a title="STEO Data Browser" href="/outlooks/steo/query/">
            <div class="circle_steo circle"></div>
            <b>STEO<br />
            Data Browser</b></a></li>

          <li><a title="AEO Data Browser" href="/beta/aeo/">
          <div class="circle_aeo circle"></div>
          <b>AEO<br />
          Table Browser</b></a></li>
      </ul>
      <?php /*end Interactive visualizations section*/ ?> 
      <?php /*Energy education section*/ ?>
      <h1>Energy Education</h1>
      <div class="ed_section">
        <div>
          <div> <img src="/global/images/icons/education/environment.png"/> <span>
            <h2><a href="/energyexplained/index.cfm?page=environment_home">Energy and the Environment Explained</a></h2>
            <p><em><a href="/energyexplained/index.cfm?page=environment_how_ghg_affect_climate">Greenhouse Gases' Effect on the Climate</a></em></p>
            <p><a href="/energyexplained/index.cfm?page=environment_home"><b>See more energy and the environment topics &rsaquo;</b></a></p>
            </span> </div>
        </div>
        <div>
          <div>  <img src="/global/includes/issuestrends/images/icon_faq.png"/> <span>
            <h2><a href="/tools/faqs/">FAQs</a></h2>
            <p><em><a href="/tools/faqs/faq.cfm?id=74&t=11">How much carbon dioxide (CO2) is produced per kilowatthour when generating electricity with fossil fuels?</a></em></p>
            <p><a href="/tools/faqs/#environment"><b>See more environmental FAQs &rsaquo;</b></a></p>
            </span> </div>
          <div> <img src="/global/includes/issuestrends/images/icon_kids.png"/> <span>
            <h2><a href="/kids">Energy Kids</a></h2>
            <p><em><a href="/kids/energy.cfm?page=environment_about_ghg-basics">What are the types of greenhouse gases?</a></em></p>
            <p><a href="/kids/energy.cfm?page=environment_home-basics"><b>See more Energy and the Environment&rsaquo;</b></a></p>
            </span> </div>
        </div>
      </div>
      <?php /*end Energy education section*/ ?>
       <?php /* Main */ ?>
    </div>

    



    <?php include('/global/footer/includes/footer.inc') ?>
</body>
</html>


