<!doctype html>
<?php /* Set the HTML title (used by /global/includes/titling.cfm via eia_footer.cfm) */ ?>
<?php $L2T = 'Total Energy'; ?>


<?php $locale = 'overview'; ?>
<?php /* set this so that the carousel.cfm include query will pull the correct set of Issues and Trends for this page. */ ?>
<?php $l2page = 'page_tot';
$l2id = 6;
?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<?php include ('global/includes/eia_head_info.inc') ; ?>
    <script src="/global/vendor/bxslider/dist/jquery.bxslider.min.js"></script>
    <script src="/global/scripts/slider-multi-cards-init.min.js"></script>

    
    <link rel="stylesheet" type="text/css" href="/global/styles/L2_pages.css" />
    <link href="/global/styles/eia-multi-card-slider-styles.css" rel="stylesheet" />

    <?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<body>
<div id="outerX">
<?php /* Outer Wrapper */ ?>
<?php include ('global/includes/eia_header.inc') ; ?>
    <?php include ('includes/subnav_allsources.inc') ; ?>
    <?php /* Page/Body Content */ ?>

    <div class="pagecontent eqcol_temp">
	  <?php include ('global/includes/l2-youtube.inc') ; ?>
        <?php include ('global/includes/carousel.inc') ; ?>
        <div class="main"><?php /*Left column*/ ?><span class="main_col">
        <h1>Recent Data</h1>
        <?php /* display recent data from the MER */ ?>
        <?php /*
        <?php include ('includes/data_table_peo_ytd.inc') ; ?> //Table 1.1 //
        <?php include ('includes/data_table_pepbs.inc') ; ?>   //Table 1.2 //
        <?php include ('includes/data_table_pecbs.inc') ; ?>   //Table 1.3 //
        <?php include ('includes/data_table_peibs.inc') ; ?>   //Table 1.4a //
        <?php include ('includes/data_table_peebs.inc') ; ?>   //Table 1.4b //
        <?php include ('includes/data_table_pecrdgdp.inc') ; ?>//Table 1.7 //
 */ ?>
		<?php /* Display MER table 1.4b */ ?>
        <?php include ('includes/data_table_peebs.inc') ; ?>
        <?php /*		  <h3>This issue marks 40 years of continuous publication of the <i>Monthly Energy Review</i>, beginning with the <a href="/totalenergy/data/monthly/archive/00357410.pdf">October 1974 issue</a>.  See <a href="/totalenergy/data/monthly/pdf/mer40thnote.pdf" class="ico_pdf">Note to Readers</a> in the October 2014 issue.</h3><br /> */ ?>
        <p><a href="/totalenergy/data/monthly"><b>See more data &rsaquo;</b></a></p>
        <h2>Updated Data Series</h2>
        <ul class="updated_data">
           <li><span class="series_date">04/26/2018</span> <a href="/beta/MER/?tbl=T01.01#/?f=M">Primary energy overview</a></li>
           <li><span class="series_date">04/26/2018</span> <a href="/beta/MER/?tbl=T01.06#/?f=M">Cost of fuels to end users in real dollars</a></li>
           <li><span class="series_date">04/26/2018</span> <a href="/beta/MER/?tbl=T02.01#/?f=M">Energy consumption by sector</a></li>
           <li><span class="series_date">04/26/2018</span> <a href="/beta/MER/?tbl=T03.03C#/?f=M">Imports from OPEC Countries</a></li>
           <li><span class="series_date">04/26/2018</span> <a href="/beta/MER/?tbl=T03.03D#/?f=M">Imports from Non-OPEC Countries</a></li>
        </ul>
        <?php /*-h2>Survey Forms, Changes & Announcements</h2>
      <ul>
        <li><a href="XXXXXXXXXXXXXXXXXXXX">FUEL NAME surveys &rsaquo;</a></li>
        <li><a href="XXXXXXXXXXXXXXXXXXXX">ANNNOUNCMENT LINK &rsaquo;</a></li>
      </ul*/ ?> 
        </span> 
        <?php /*End of main column*/ ?> 

        <?php /*Start of right column*/ ?>
         <span id="ovHeadr" class="side_col right">
        <?php include ('global/includes/recent_highlighted_AP.inc') ; ?>
        <h2>Upcoming Releases</h2>
        <p><a href="/forecasts/steo/">Short-Term Energy Outlook</a>, <em>5/8/2018</em><br />
        	<a href="/totalenergy/data/monthly/">Monthly Energy Review</a>, <em>5/24/2018</em>
			<?php /* future release links for releated data series */ ?>
            <?php /* <a href="/forecasts/aeo/">Annual Energy Outlook (AEO)</a>, <em>June 2016</em><br />*/ ?>
            <?php /* <a href="/naturalgas/annual/">Natural Gas Annual</a>, <em>November 2016</em> */ ?>            
        </p>
      <?php /*p><em>Releases change on weeks with Federal holidays.</em></p>
      <p><a href="XXXXXXXXXXXXXXXXXXXX">WEEKLY STORAGE REPORT</a>: <em>10:30 a.m. ET, Thursday</em><br />
        <a href="XXXXXXXXXXXXXXXXXXXX">WEEKLY SUPPLY REPORT</a>: <em>2:00 - 2:30 p.m. ET, Thursday </em></p>
      <p><em>*No releases: Monday, Tuesday, Wednesday or Friday.</p>
      <p><a href="/todayinenergy/index.cfm?tg=INSERT_YOUR_TAG_HERE_FOR_TIE"><b>Recent Articles &rsaquo;</b></a></p*/ ?> <p><a href="/reports/upcoming.php"><b> See all upcoming &rsaquo;</b></a></p>
       </span>
        <?php /*End of right column*/ ?> 
        <?php /*Start of interactive visualizations section*/ ?>
        <h1>Interactive Visualizations, Data, & Multimedia</h1>
        <ul class="visualizations">
          <li><a title="U.S. Total Energy Data Browser" href="/totalenergy/data/browser/">
          <div class="circle_totalenergy_mer circle"></div>
            <b>Total Energy<br />Data Browser</b></a></li>

        <li><a title="U.S. Energy Disruptions Map" href="/special/disruptions/">
          <div class="circle_disruptions circle"></div>
          <b>U.S. Energy Disruptions Map</b></a></li>

          <li><a title="STEO Data Browser" href="/forecasts/steo/query/">
            <div class="circle_steo circle"></div>
            <b>STEO<br />
            Data Browser</b></a></li>

          <li><a title="AEO Data Browser" href="/beta/aeo/">
          <div class="circle_aeo circle"></div>
          <b>AEO<br />
          Table Browser</b></a></li>
        <?php /*Total Energy Podcast link*/ ?>
        <?php /*  <li><a href="/totalenergy/podcast/"><div class="circle_radio circle"></div><b>Podcasts</b></a></li> */ ?>
        </ul>
        <?php /*End of interactive visualizations section*/ ?> 
        <?php /*Start of energy education section*/ ?>
        <h1>Energy Education</h1>
        <div class="ed_section">
          
          <div>
            <div> <img src="/global/includes/issuestrends/images/icon_faq.png"/> <span>
              <h2><a href="/tools/faqs/">FAQs</a></h2>
              <p><em><a href="/tools/faqs/faq.cfm?id=85&t=1">How much energy does a person use in a year?</a></em></p>
              <p><a href="/tools/faqs/"><b>See more FAQs &rsaquo;</b></a></p>
              </span> </div>
            <?php /*div> <img src="/global/includes/issuestrends/images/icon_kids.png"/> <span>
            <h2><a href="/kids">Energy Kids</a></h2>
            <p><em><a href="/kids/energy.cfm?page=XXXXXXXXXXXXXXXXXXXX">PICK AN ENERGY KIDS ARTICLE AND UPDATE LINK</a></em></p>
            <p><a href="/kids/energy.cfm?page=XXXXXXXXXXXXXXXXXXXX"><b>See INSERT_FUEL_HERE on Energy Kids &rsaquo;</b></a></p>
            </span> </div*/ ?> 
          </div>
        </div>
        <?php /*End of energy education section*/?>

      </div>

      <?php include ('global/includes/eia_footer.inc') ; ?>
</div>

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


