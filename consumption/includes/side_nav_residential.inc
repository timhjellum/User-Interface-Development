 <span class="grey_side green_top">
  <li class="head"><h2>Background Information</h2></li>
  <p><a href="/consumption/residential/about.cfm">About the RECS</a></p>
 <p><a href="/survey/#eia-457">RECS Survey Forms</a></p>
<?php /* <p><a href="/consumption/residential/maps.cfm">RECS Maps</a></p>*/ ?>
  <p><a href="/consumption/residential/terminology.cfm">RECS Terminology</a></p>
  <p><a href="/consumption/residential/background-technical.php">Survey Background & Technical Information</a></p>
<p class="no-border"><a href="/consumption/residential/data/archive/">Archived Reports</a></p></span>

<div class="clear"></div>

  <?php /* FAQ Promo */ ?> 
  <?php /*
 <span class="blue_side">
  <h4 class="q_side"><a href="/consumption/residential/reports/2015/home-selected.cfm">Has your home been selected for the RECS?</a></h2></li> */ ?>
  <?php /*p><strong><a href="../residential/data/2015/home-selected.cfm">See all RECS FAQs &rsaquo;</a></strong></p*/ ?>
  <?php /*</span> */ ?>
  <?php /*<div class="content-container light-top-border-container grey-background">
<h4 class="announcement_side">RECS Status</h2></li>
<p><a href="status/">2015 RECS data coming soon ></a></p>
</span>*/ ?>
 
 <span class="lighter_blue_side">
<h4 class="announcement_side">RECS Status</h2></li>
<p><a href="/consumption/residential/status/" >More 2015 RECS estimates and reports now available!   ></a></p>
</span> 

 <?php /* Other Consumption Surveys */ ?> 
 <span>
  <p><a href="/consumption/residential/images/whf_longformat_0132018.pdf"> <img src="/consumption/residential/images/whf_webV5.jpg"  alt="RECS image"></a></p></span>

  <span><p><a href="/consumption/residential/images/recslongformatinfographic.pdf"><img src="/consumption/residential/images/recwebpageimage.jpg" alt="RECS image"  width="240"></a></p></span>
  <?php /*/ Side Content */ ?> 


  <?php /*span class="grey_side blue_top">
  <li class="head"><h2>State fact sheets</h2></li>
  
  <a href="/consumption/residential/reports/2009/state_briefs/"><img src= "/consumption/images/images_recs/state-promo.jpg" alt="Arizona household graph" height="85" border="0" /></a><p><a href="/consumption/residential/reports/2009/state_briefs/">See state fact sheets &rsaquo;</a> </p> </span> */ ?>


  
  <?php /* Featured Data */ ?>
  <?php /*
  if ( $page['year'] == 'home') {
      } else { ?>
    <div class="content-container light-top-border-container grey-background">
<ul>
<li class="head"><h2>2009 RECS Features</h2></li>
    <p><a href="/todayinenergy/detail.cfm?id=10271">Heating and cooling no longer majority of U.S. home energy use</a><br />
      <em>March 7, 2013</em>
    <p><a href="/todayinenergy/detail.cfm?id=9951">Newer U.S. homes are 30% larger but consume about as much energy as older homes</a><br />
      <em>February 12, 2013</em> </p>
    <p><a href="/consumption/residential/reports/2009/methodology-square-footage.cfm">Where does RECS square footage data come from?</a><br />
      <em>July 11, 2012</em>
    <p><a href="/consumption/residential/reports/2009/consumption-down.cfm">RECS data show decreased energy consumption per household</a><br />
      <em>June 6, 2012</em>
    <p><a href="/consumption/residential/reports/2009/square-footage.cfm">The impact of increasing home size on energy demand</a><br />
      <em>April 19, 2012</em>
    <p><a href="/consumption/residential/reports/2009/air-conditioning.cfm">Did you know that air conditioning is in nearly 100 million U.S. homes?</a><br />
      <em>August 19, 2011</em> </p>*/ ?>
    <?php /*p><a href="/consumption/residential/reports/2009/overview.cfm">What's new in our home energy use?</a><br />
      <em>March 28, 2011</em></p>
    <p><a href="/consumption/residential/reports/2009/16-states.cfm">EIA expands household energy use data series to include 16 states</a><br />
      <em>March 28, 2011</em></p>
    <p><a href="/consumption/residential/reports/2009/electronics.cfm">Share of energy used by appliances and consumer electronics increases in U.S. homes</a><br />
      <em>March 28, 2011</em> </p>
      <p><a href="/consumption/residential/reports/2009/methodology-end-use.cfm">How does EIA estimate energy consumption and end uses  in U.S.  homes?</a><br />
      <em>March 28, 2011</em> </p*/ ?>
    <?php /*<li class="sub-head"><strong><a href="/consumption/residential/reports.cfm">See more ></a></strong></li>
    </span>
  <?php  } // end if 
  */
  ?>
  
  
<?php /*/ Today in Energy Widget Top3 */ ?>
<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();
?>
 <?php
 //hsh_sql:
 $bindVariables = array();
 $neic->sql = " Select *
    from neic.today_in_energy
    Where active = :active
    AND tags like :tags
    ORDER BY ID DESC ";
 $bindVariables[":active"] = 'yes';
 $bindVariables[":tags"] = '%residential%';
 //print $neic->sql;
 //print_r($bindVariables);
 $tie_lookup = $neic->get($bindVariables);
?>
<?php if ( !empty($tie_lookup))  {?>
<?php $tietopic = 'Residential'; ?>
<span class="dblue_side_top blue_top ">
  <a href="/todayinenergy/"><img src="/global/images/sprites/tie_w_title.png"/></a>
</span>
<span class="white_box">
  <div id="eiatie">
    <?php include ('todayinenergy/outreach/file_scrub_tie_side_sm_top3.php') ; ?>
  </div>
</span>
<br />
<?php  } // end if ?>

<?php /*/ Today in Energy Widget Top3 */ ?>

  <?php /* Other Consumption Surveys */ ?> 
  <div class="content-container light-top-border-container grey-background">
<ul>
<li class="head"><h2>Other End Use Surveys</h2></li>
  <p><a href="/consumption/commercial/">Commercial Buildings - CBECS</a></p>
  <p><a href="/consumption/manufacturing/">Manufacturing - MECS</a> </p>
  <p class="no-border"><a href="/consumption/transportation/archive/rtecs/index.php">Transportation</a></p>
  </span> 
  <?php /*/ Side Content */ ?> 
