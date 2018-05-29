<!doctype html>
<?php
/* Set the HTML title (used by /global/includes/titling.cfm via eia_footer.cfm) */
$L2T = 'Consumption & Efficiency';
$locale = 'overview';

/* set this so that the carousel.cfm include query will pull the correct set of Issues and Trends for this page. */
$l2page = 'page_con';
$l2id = 4;
$pageTitle = "";
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
   <?php include ('includes/subnav_consumption.inc') ; ?>
      <?php /* Page/Body Content */ ?>

      <div class="pagecontent eqcol_temp">
	  <?php include ('global/includes/l2-youtube.inc') ; ?>
      <?php include ('global/includes/carousel.inc') ; ?>
      <div class="main"><?php /*Left column*/ ?><span class="main_col">
      <h1>Recent Data</h1>
      <?php /* Consumption data table queries  */ ?>
      <?php /*
      <cfinclude template="includes/data_table_cbs_ytd.cfm">
      <cfinclude template="includes/data_table_rsec_ytd.cfm">
      <cfinclude template="includes/data_table_csec_ytd.cfm">
      <cfinclude template="includes/data_table_isec_ytd.cfm">
      <cfinclude template="includes/data_table_tsec_ytd.cfm">
      <cfinclude template="includes/data_table_epsec_ytd.cfm">
	   */ ?>
	  <?php /* Show MER table 2.1 */ ?>
	  <?php include ('includes/data_table_cbs_ytd.inc') ; ?>
      <p><a href="data.php"><b>See more data &rsaquo;</b></a></p>
      <h2>Updated Data Series</h2>
      <?php /*
		<li><span class="series_date">5/25/2015</span> <a href="/beta/MER/?tbl=T02.01#/?f=M">Energy consumption by sector</a></li>
        <li><span class="series_date">5/25/2015</span> <a href="/beta/MER/?tbl=T02.02#/?f=M">Residential sector energy consumption</a></li>
		<li><span class="series_date">5/25/2015</span> <a href="/beta/MER/?tbl=T02.03#/?f=M">Commercial sector energy consumption</a></li>
		<li><span class="series_date">5/25/2015</span> <a href="/beta/MER/?tbl=T02.04#/?f=M">Industrial sector energy consumption</a></li>
		<li><span class="series_date">5/25/2015</span> <a href="/beta/MER/?tbl=T02.05#/?f=M">Transportation sector energy consumption</a></li>
		<li><span class="series_date">5/25/2015</span> <a href="/beta/MER/?tbl=T02.06#/?f=M">Electric power sector energy consumption</a></li>
		*/ ?>
      <ul class="updated_data">
          <li><span class="series_date">4/25/2017</span> <a href="/totalenergy/data/browser/?tbl=T02.01#/?f=M">Energy consumption by sector</a></li>
      </ul>
      <?php /*h2>Survey Forms, Changes & Announcements</h2>
      </ul>
      
      <ul>
        <li><a href="../survey/#eia-457">Residential energy consumption  &rsaquo;</a></li>
         <li><a href="../survey/#eia-871  ">Commercial buildings energy consumption &rsaquo;</a></li>
        <li><a href="../survey/#eia-846">Manufacturing energy consumption  &rsaquo;</a></li>
        
      </ul*/ ?>
      </span> 
      <?php /*End left column*/ ?> 

      <?php /*Right column*/ ?>
      <span id="ovHeadr" class="side_col right">
      <?php include ('global/includes/recent_highlighted_AP.inc') ; ?>
      <h2>Upcoming Releases</h2>
      <p>
        <?php /*<em>Releases change on weeks with Federal holidays.</em></p>*/ ?>
       <?php /* <p><a href="/consumption/commercial/data/2012/index.cfm?view=consumption">CBECS 2012 Consumption and Expenditures preliminary estimates</a>: <br /> <em>September 2015</em><br />
        <?php /*a href="/consumption/commercial/data/2003/index.cfm?view=microdata">Building characteriscs public use microdata</a>: <em>Winter 2014</em><br />
   <a href="/consumption/commercial/reports/2012/preliminary/index.cfm">Consumption & expenditures (C&E) preliminary estimates</a>: <em>Spring 2015</em><br />
   <a href="/commercial/data/2003/index.cfm?view=microdata">Building characteriscs public use microdata</a>: <em>Winter 2014 </em><br />
   <a href="/commercial/data/2003/index.cfm?view=consumption">Consumption & expenditures detailed tables</a>: <em>Fall 2015</em><br />
  <a href="/commercial/data/2003/index.cfm?view=microdata">Consumption & expenditures public use microdata</a>: <em>Winter 2015</em>   </p*/ ?>     
     <?php /* <p><em>*No releases: Monday, Tuesday, Wednesday or Friday.</p>*/ ?>
      <p><a href="/consumption/commercial/"><b>See all upcoming &rsaquo;</b></a></p>
      </span> 
      <?php /*end Right column*/ ?> 

    <?php /*Energy consumption surveys section*/ ?>
      <h1>Consumption Surveys</h1>
      <div class="ed_section">
        <div>
          <div> <img src="/global/images/icons/consumption/residential.png" alt=""/> <span>
            <h2><a href="/consumption/residential/">Residential Energy Consumption Survey (RECS)</a></h2>
            <p>A  nationally representative sample of housing units that specially trained interviewers collect energy characteristics, usage patterns, and household demographics.</p>
            <p><a href="/consumption/residential/"><b>view the RECS &rsaquo;</b></a></p>
            </span> </div>
        </div>
        <div>
          <div> <img src="/global/images/icons/consumption/commercial.png" alt=""/> <span>
            <h2><a href="/consumption/commercial/">Commercial Building Energy Consumption Survey (CBECS)</a></h2>
            <p>A national sample survey that collects information on the stock of U.S. commercial buildings, including their energy-related building characteristics and energy usage data.</p>
            <p><a href="/consumption/commercial/"><b>view the CBECS &rsaquo;</b></a></p>
            </span> </div>
        </div>
        <div>
          <div> <img src="/global/images/icons/consumption/industrial.png" alt=""/> <span>
            <h2><a href="/consumption/manufacturing/">Manufacturing Energy Consumption Survey (MECS)</a></h2>
			<p>A national sample survey that collects information on the  U.S. manufacturing establishment, their energy-related building characteristics, and their energy usage and expenditures.</p>
            <p><a href="/consumption/manufacturing/"><b>view the MECS &rsaquo;</b></a></p>
            </span> </div>
        </div>
      </div>
      <?php /*end Energy consumption surveys section*/ ?>

      <?php /*Interactive visualizations section*/ ?>
      <h1 style="margin-top: 20px;">Interactive Visualizations, Data, & Multimedia</h1>
      <ul class="visualizations">
        <li><a title="U.S. States Map" href="/state/?sid=US">
            <div class="circle_ng_map circle"></div><br />
            <b>U.S. States Map</b></a></li>

        <li><a title="U.S. Energy Disruptions Map" href="/special/disruptions/">
            <div class="circle_disruptions circle"></div>
            <b>U.S. Energy Disruptions Map</b></a></li>

        <li><a title="STEO Data Browser" href="/forecasts/steo/query/">
            <div class="circle_steo circle"></div>
            <b>STEO<br />
              Data Browser</b></a></li>

        <li><a title="AEO Data Browser" href="/oiaf/aeo/tablebrowser/">
            <div class="circle_aeo circle"></div>
            <b>AEO<br />
              Table Browser</b></a></li>

        <?php /*       <li><a href="/radio/">
								 <div class="circle_radio circle"></div>
								 <b>Radio Spot</b></a></li> */ ?>
      </ul>
      <?php /*end Interactive visualizations section*/ ?>
      <?php /*Energy education section*/ ?>
      <h1>Energy Education</h1>
      <div class="ed_section">
        <div>
          <div> <img src="/global/images/icons/education/nat_gas.png"/> <span>
            <h2><a href="/energyexplained/index.cfm">Energy Explained</a></h2>
            <p><em><a href="/energyexplained/index.cfm?page=us_energy_use">Use of Energy</a></em></p>
            <p><a href="/energyexplained/index.cfm?page=us_energy_industry"><b>see more energy explained &rsaquo;</b></a></p>
            </span> </div>
        </div>
        <div>
          <div> <img src="/global/includes/issuestrends/images/icon_faq.png"/> <span>
            <h2><a href="/tools/faqs/faq.cfm?id=97&t=3">FAQs</a></h2>
            <p><em><a href="/tools/faqs/faq.cfm?id=97&t=3">How much electricity does an American home use?</a></em></p>
            <p><a href="/tools/faqs/"><b>See all  FAQs &rsaquo;</b></a></p>
            </span> </div>
        </div>
        <div>
          <div> <img src="/global/includes/issuestrends/images/icon_kids.png"/> <span>
            <h2><a href="/kids/energy.cfm?page=us_energy_use-basics">Energy Kids</a></h2>
            <p><em><a href="/kids/energy.cfm?page=XXXXXXXXXXXXXXXXXXXX">How we use energy</a></em></p>
            <p><a href="/kids/"><b>Using & Saving Energy &rsaquo;</b></a></p>
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
