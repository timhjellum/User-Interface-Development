<?php /* Set the HTML title (used by /global/includes/titling.php via eia_footer.php)  */  ?>
<?php
 $L2T = 'Analysis & Projections';
 $locale = 'overview';
 $l2page = 'page_ana';
 $l2id = 9;
?>
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

  <div id="outerX">
  <?php /* Outer Wrapper  */  ?>
  <?php include ('global/includes/eia_header.inc');
       include ('includes/subnav_analysis.inc') ; ?>
  <?php /* Page/Body Content  */  ?>

  <div class="pagecontent eqcol_temp">
      <?php include ('global/includes/l2-youtube.inc') ; ?>
      <?php include ('global/includes/carousel.inc') ; ?>
      <div class="main"><?php /*Left column*/ ?><span class="main_col">
     <h1>Recent Data</h1>
      <?php /* <?php include ('includes/data_table.inc') ; ?>  */  ?>
      <?php /* Update data table based on STEO Price Summary Table (http://wwwdev.eia.gov/forecasts/steo/tables/?tableNumber=8#startcode=2013)  */  ?>
      <?php /* UNCOMMENT WHEN YOU PUSH STEO  */  ?>
      <?php include ('includes/data_table_excel.inc') ; ?>
      <?php /* UNCOMMENT WHEN YOU PUSH STEO  */  ?>
      <p><a href="/analysis/projection-data.cfm"><b>See more projection data &rsaquo;</b></a></p>

      <h2>Updated Data Series</h2>
          <ul class="updated_data">
            <li>02/06/2018 <a href="projection-data.php#forecasts">Monthly short-term forecasts to 2018</a></li>
            <li><span class="series_date">02/06/2018</span> <a href="projection-data.php#annualproj">Annual projections to 2050</a></li>
            <li><span class="series_date">09/14/2017</span> <a href="projection-data.php#intlproj">International projections to 2050</a></li>
          </ul>
          </span> 
      <?php /* End left column */  ?>

      <?php /* Right column */  ?>
      <span id="ovHeadr" class="side_col right">
      <?php include ('global/includes/recent_highlighted_AP.inc') ; ?>

<!--          --><?php //include ('global/includes/issuestrends/recent_AP_schedule.inc') ; ?>
           <?php /* h2>Upcoming Releases</h2>
       <p><a href="/forecasts/steo/special/winter/2015_winter_fuels.pdf">Winter Fuels Outlook</a>, <em>10/06/2015</em></p */  ?>
        <?php /* p><a href="/forecasts/steo/">Short-Term Energy Outlook</a>, <em>11/10/2015</em></p
        <p><a href="/forecasts/ieo/">Annual Energy Outlook, Issues in Focus articles</a>, <em>June 2016</em></p */  ?>
        <?php /* p><a href="/petroleum/refinery/outage/">Refinery Outages</a>, <em>November 2015</em></p */  ?>

        <h2>Presentations</h2>
         <?php /*  <p><a href="/pressroom/presentations/sieminski_10072014.pdf" class="ico_pdf">EIA Winter Fuels Outlook</a><br>
            Adam Sieminski, Administrator<br>
            <em>October 7, 2014</em></p>  */  ?>
          <p><a href="/pressroom/presentations/Capuano_02052018.pdf" class="ico_pdf">Annual Energy Outlook 2018</a><br>
            Dr. Linda Capuano, Administrator<br>
            <em>February 6, 2018</em></p>
          <?php /* p><a href="/pressroom/presentations/sieminski_10062015.pdf" class="ico_pdf">How much will low prices stimulate oil demand?</a><br>
            Adam Sieminski, Administrator<br>
            <em>October 6, 2015</em></p */  ?>
      </span>
          <?php /* end Right column */  ?> 
          <?php /* Interactive visualizations section */  ?>
          <h1>Interactive Visualizations, Data, & Multimedia</h1>
          <ul class="visualizations">

            <li><a title="International Energy Outlook" href="/forecasts/ieo/">
              <div class="circle_disruptions circle"></div>
              <b>International Energy Outlook</b></a></li>

          <li><a title="STEO Data Browser" href="/outlooks/steo/query/">
            <div class="circle_steo circle"></div>
            <b>STEO<br />
            Data Browser</b></a></li>

          <li><a title="AEO Data Browser" href="/outlooks/aeo/data/browser/">
          <div class="circle_aeo circle"></div>
          <b>AEO<br />
          Table Browser</b></a></li>

           <li><a title="Radio Spots" href="/radio/">
             <div class="circle_radio circle"></div>
             <b>Radio Spots</b></a></li>
          </ul>
          <?php /* end Interactive visualizations section */  ?> 
          <?php /* Energy education section */  ?>
          <h1>Energy Education</h1>
          <div class="ed_section">
          
            <?php /* <div>
              <div> <img src="/global/includes/issuestrends/images/icon_eib.png"/> <span>
                <h2><a href="/energy_in_brief/">Energy in Brief</a></h2>
                <p><em><a href="/energy_in_brief/article/world_oil_market.php">Who are the major players supplying the world oil market?</a></em></p>
                <p><a href="/energy_in_brief/"><b>See more Energy in Brief articles &rsaquo;</b></a></p>
                </span> </div>
            </div> */  ?>
            <div>
              <div> <img src="/global/includes/issuestrends/images/icon_faq.png"/> <span>
                <h2><a href="/tools/faqs/">FAQs</a></h2>
                <p><em><a href="/tools/faqs/faq.php?id=31&t=5">What is the outlook for gasoline prices for 2015?</a></em></p>
                <p><a href="/tools/faqs/index.php"><b>See all Frequently asked questions &rsaquo;</b></a></p>
                </span> </div>
            </div>
          </div>
          <?php /* end Energy education section- */  ?> 
          <?php /*  Main  */  ?> 
        </div>
        <?php /* / Page/Body Content  */  ?>
        <?php include ('global/includes/eia_footer.inc') ; ?>
  </div>
  <?php /* / Outer Wrapper  */  ?> 
<?php /* script>
$("#youtube").fancybox({
	'scrolling'		: 'no',
	'titleShow'		: false,
	'onClosed'		: function() {
	    $("#login_error").hide();
	}
});
</script */  ?>
</body>


