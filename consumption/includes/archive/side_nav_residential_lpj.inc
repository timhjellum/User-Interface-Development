 <span class="grey_side green_top">
  <p><a href="/consumption/residential/about.php">About the RECS</a></p>
  <p><a href="/survey/#eia-457">RECS Survey Forms</a></p>
 <p><a href="/consumption/residential/maps.php">RECS Maps</a></p>
  <p><a href="/consumption/residential/terminology.php">RECS Terminology</a></p>
  <p class="no-border"><a href="/consumption/residential/data/archive/">Archived Reports</a></p></span>

<div class="clear"></div>

  <?php /* FAQ Promo */ ?> 
 <span class="blue_side">
  <h4 class="q_side"><a href="/consumption/residential/reports/2015/home-selected.php">Has your home been selected for the RECS?</a></h2></li>
  <?php /*p><strong><a href="../residential/data/2015/home-selected.php">See all RECS FAQs &rsaquo;</a></strong></p*/ ?>
  </span> 
 
  <div class="secondary">
<ul>
<li class="head"><h2>State fact sheets</h2></li>
  
  <a href="/consumption/residential/reports/2009/state_briefs/"><img src= "/consumption/images/images_recs/state-promo.jpg" alt="Arizona household graph" height="85" border="0" /></a><p><a href="/consumption/residential/reports/2009/state_briefs/">See state fact sheets &rsaquo;</a> </p> </span>

  <?php /* Featured Data */ ?>
  <?php if ( $page['year'] == 'home') {?>
    <?php  } else { ?>
    <div class="secondary">
<ul>
<li class="head"><h2>2009 RECS Features</h2></li>
    <p><a href="/todayinenergy/detail.php?id=10271">Heating and cooling no longer majority of U.S. home energy use</a><br />
      <em>March 7, 2013</em>
    <p><a href="/todayinenergy/detail.php?id=9951">Newer U.S. homes are 30% larger but consume about as much energy as older homes</a><br />
      <em>February 12, 2013</em> </p>
    <p><a href="/consumption/residential/reports/2009/methodology-square-footage.php">Where does RECS square footage data come from?</a><br />
      <em>July 11, 2012</em>
    <p><a href="/consumption/residential/reports/2009/consumption-down.php">RECS data show decreased energy consumption per household</a><br />
      <em>June 6, 2012</em>
    <p><a href="/consumption/residential/reports/2009/square-footage.php">The impact of increasing home size on energy demand</a><br />
      <em>April 19, 2012</em>
    <p><a href="/consumption/residential/reports/2009/air-conditioning.php">Did you know that air conditioning is in nearly 100 million U.S. homes?</a><br />
      <em>August 19, 2011</em> </p>
    <?php /*p><a href="/consumption/residential/reports/2009/overview.php">What's new in our home energy use?</a><br />
      <em>March 28, 2011</em></p>
    <p><a href="/consumption/residential/reports/2009/16-states.php">EIA expands household energy use data series to include 16 states</a><br />
      <em>March 28, 2011</em></p>
    <p><a href="/consumption/residential/reports/2009/electronics.php">Share of energy used by appliances and consumer electronics increases in U.S. homes</a><br />
      <em>March 28, 2011</em> </p>
      <p><a href="/consumption/residential/reports/2009/methodology-end-use.php">How does EIA estimate energy consumption and end uses  in U.S.  homes?</a><br />
      <em>March 28, 2011</em> </p*/ ?>
    <li class="sub-head"><strong><a href="/consumption/residential/reports.php">See more ></a></strong></li>
    </span>
  <?php  } // end if ?>
  
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
  <div class="secondary">
<ul>
<li class="head"><h2>Other End Use Surveys</h2></li>
  <p><a href="/consumption/commercial/">Commercial Buildings - CBECS</a></p>
  <p><a href="/consumption/manufacturing/">Manufacturing - MECS</a> </p>
  <p class="no-border"><a href="/emeu/rtecs/contents.html">Transportation</a></p>
  </span> 
  <?php /*/ Side Content */ ?> 
