<!doctype html>
<?php  $pageTitle = "U.S. Energy Information Administration (EIA)";
<?php $L2T = 'Nuclear & Uranium'; ?>


<?php $locale = 'overview'; ?>
<?php /* set this for the carousel query to pull the correct set of tags */ ?>
<?php $l2page = 'page_nuc';
$l2id = 5;
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
  <?php include ('includes/subnav_nuclear.inc') ; ?>
  <?php /* Page/Body Content */ ?>

    <div class="pagecontent eqcol_temp">
	  <?php include ('global/includes/l2-youtube.inc') ; ?>
        <?php include ('global/includes/carousel.inc') ; ?>
        <div class="main"><?php /*Left column*/ ?><span class="main_col">
      <h1>Recent Data</h1>
      <?php include ('includes/data_table_dupq.inc') ; ?>
      <p>
      
      <a href="data.php"><b>See more data &rsaquo;</b></a></p>
      <h2>Updated Data Series</h2>
      <ul class="updated_data">
              <li><span class="series_date"><script language="JavaScript" type="text/JavaScript" src="/electricity/monthly/includes/elect_l2.txt"></script></span> <a href="/electricity/data/browser/#/topic/0?agg=1,0,2&fuel=08&geo=vvvvvvvvvvvvo&sec=o3g&linechart=ELEC.GEN.NUC-US-99.M~ELEC.GEN.NUC-PA-99.M~ELEC.GEN.NUC-IL-99.M&columnchart=ELEC.GEN.NUC-US-99.M~ELEC.GEN.NUC-PA-99.M~ELEC.GEN.NUC-IL-99.M&map=ELEC.GEN.NUC-US-99.M&freq=M">Net generation from nuclear, monthly</a></li>
       <li><span class="series_date"><script language="JavaScript" type="text/JavaScript" src="/nuclear/generation/nuc_l2.txt"></script></span> <a href="/nuclear/generation/">U.S. Nuclear Generation and Generating Capacity  </a></li>
        <?php /*<li><span class="series_date">05/05/2016</span> <a href="/uranium/production/annual/">Domestic Uranium Production Report</a></li>*/ ?>
       

      </ul>
      <h2>Survey Forms, Changes & Announcements</h2>
      <ul>
        <li><a href="/survey/#uranium">Uranium surveys &rsaquo;</a></li>
        <li><a href="/survey/#electricity">Electric power surveys &rsaquo;</a></li>
      </ul>
      </span> 
      <?php /*End left column*/ ?> 

      <?php /*Right column*/ ?>
      <span id="ovHeadr" class="side_col right">
      <?php include ('global/includes/recent_highlighted_AP.inc') ; ?>

  <h2>Released Daily</h2>   
 <p>BETA:  <a href="http://www.eia.gov/beta/outages/">Status of Nuclear Outages</a><br /></p>    
 <?php /*             <h2>Upcoming Releases</h2>
      <p><em>Releases change on weeks with Federal holidays.</em></p>
      <p><a href="/totalenergy/data/monthly/#nuclear">Monthly Energy Review</a>: <em>09/25/2014</em><br />
        <a href="/uranium/production/quarterly/">Domestic Uranium Production Report</a>: <em>February 2015</em></p> */ ?>
 <?php /*     <p><em>*No releases: Monday, Tuesday, Wednesday or Friday.</em></p> */ ?>
      <?php /*<p><a href="/todayinenergy/index.cfm?tg=INSERT_YOUR_TAG_HERE_FOR_TIE"><b>Recent Articles &rsaquo;</b></a></p>*/ ?>
      </span> 
      <?php /*end Right column*/ ?> 
      <?php /*Interactive visualizations section*/ ?>
      <h1>Interactive Visualizations, Data, & Multimedia</h1>
      <ul class="visualizations">

		<li><a title="Status of U.S. Nuclear Outages" href="/nuclear/outages/">
          <div class="circle_nuclear_outages circle"></div>
          <b>Status of U.S. Nuclear Outages</b></a></li>

        <li><a title="U.S. Electricity Infrastructure Map" href="/state/maps.cfm?v=electricity">
          <div class="circle_ng_map circle"></div>
          <b>U.S. Electricity Infrastructure Map</b></a></li>

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
        <?php /*<li><a href="/radio/">
          <div class="circle_radio circle"></div>
          <b>Radio Spot</b></a></li>*/ ?>
      </ul>
      <?php /*end Interactive visualizations section*/ ?> 
      <?php /*Energy education section*/ ?>
      <h1>Energy Education</h1>
      <div class="ed_section">
        <div>
          <div> <img src="/global/images/icons/education/nuclear.png"/> <span>
            <h2><a href="/energyexplained/index.cfm?page=nuclear_home">Nuclear Explained</a></h2>
            <p><em><a href="/energyexplained/index.cfm?page=nuclear_fuel_cycle">The nuclear fuel cycle</a></em></p>
            <p><em><a style="color:#333333;" href="/energyexplained/index.cfm?page=nuclear_where">Where our uranium comes from</a></em></p>
            <p><a href="/energyexplained/index.cfm?page=nuclear_home"><b>See more nuclear topics &rsaquo;</b></a></p>
            </span> </div>
        </div>
        <div>
          <div> <img src="/global/includes/issuestrends/images/icon_faq.png"/> <span>
            <h2><a href="/tools/faqs/">FAQs</a></h2>
            <p><em><a href="/tools/faqs/faq.cfm?id=207&t=21">How many nuclear power plants are in the U.S. and where are they located?</a></em></p>
            <p><a href="/tools/faqs/#nuclear"><b>See all nuclear FAQs &rsaquo;</b></a></p>
            </span> </div>
        </div>
        <div>
          <div> <img src="/global/includes/issuestrends/images/icon_kids.png"/> <span>
            <h2><a href="/kids">Energy Kids</a></h2>
            <p><em><a href="/kids/energy.cfm?page=nuclear_home-basics">Uranium (nuclear) basics</a></em></p>
            <p><a href="/kids/energy.cfm?page=nuclear_home-basics"><b>See Nuclear on Energy Kids &rsaquo;</b></a></p>
            </span> </div>
        </div>
      </div>
      <?php /*end Energy education section */ ?>
       <?php /* Main */ ?>
    </div>
    <?php /* / Page/Body Content */ ?>
    <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /* / Outer Wrapper */ ?>
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


