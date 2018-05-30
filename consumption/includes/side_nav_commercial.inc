<?php /*cfif IsDefined("report")>
  <div class="side_col right"> <span class="grey_side_nav blue_top side_nav">
    <li class="head"><h2>2007 Large Hospital Report</h2></li>
<li>
<ul>
      <li><a href="/consumption/commercial/reports/2007/large-hospital.cfm">Main Report</a></li>
      <li><a href="/consumption/commercial/reports/2007/large-hospital-methodology.cfm">Methodology</a></li>
      <li><a href="/consumption/commercial/reports/2007/large-hospital-faq.cfm">FAQs</a></li>
      <li class="no-border"><a href="/consumption/commercial/reports/2007/large-hospital-list-of-tables.cfm">List of Tables</a></li>
			li class="no-border"><a href="/consumption/commercial/reports/2007/hospital-water-data-collection.cfm">Water Data Collection</a></li
    </ul>
    </span> </div>
</cfif*/ ?>
<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
require_once 'reports/DataService.inc';
$neic      = new NEIC();
$DataService = new DataService();

?>

<div class="side_col right"> <span class="grey_side green_top">
  <li class="head"><h2>Background Information</h2></li>
  <p><a href="/consumption/commercial/about.cfm">About the CBECS</a></p>
<?php /*   <p><a href="/consumption/commercial/about_ess.cfm">About the ESS</a></p> */ ?>
  
  
  <p><a href="/survey/#eia-871">CBECS Survey Forms</a></p>
  <p><a href="/consumption/commercial/maps.cfm">CBECS Maps</a></p>
  <p><a href="/consumption/commercial/terminology.cfm">CBECS Terminology</a></p>
  <p><a href="/consumption/commercial/survey-background-technical-information.cfm">Survey Background & Technical Information</a></p>
  <?php if ( $locale == 'data') {?>
<?php /*     (data Pages only) */ ?>
<!--    <p><a href="/consumption/commercial/data/2012/includes/rse_2012.cfm">What is an RSE?</a></p>-->
    <?php  } else { ?>
  <?php  } // end if ?>
  <p><a href="/consumption/commercial/building-type-definitions.cfm">Building Type Definitions</a></p>
  <p class="no-border"><a href="/consumption/commercial/data/archive.php">Archived Reports</a></p>
  </span> 
  
<?php /*    FAQ Promo */ ?>
  <span class="blue_side">
  <h4 class="q_side"> <a href="/consumption/commercial/faq.cfm#q9">Is it possible to obtain a list of all the buildings that participated in your survey?</a> </h2></li>
  <strong>
  <p><a href="/consumption/commercial/faq.cfm">See all CBECS FAQs &rsaquo;</a></p>
  </strong> </span> 
  
<?php /*   Featured Data */ ?>
  <span class="grey_side green_top side_list_nocolumn">
  <li class="head"><h2>Features</h2></li>
   <p><a href="/consumption/commercial/reports/2012/lighting/">
Trends in Lighting in Commercial Buildings</a> </p>
  <p><a href="/consumption/commercial/reports/2012/water/">
Water Consumption in Large Buildings Summary  (2012)</a> </p>
  <p><a href="/consumption/commercial/reports/2012/energyusage/">
Energy Usage Summary  (2012)</a> </p>
  <p><a href="/consumption/commercial/reports/2012/buildstock/index.cfm">
  A Look at the U.S. Commercial Building Stock (2012)</a> </p>
 <!-- <p><a href="/consumption/commercial/2012-cbecs-building-sampling.cfm">How Were Buildings Selected for the 2012 CBECS?</a></p>-->
 <!-- <p><a href="/consumption/commercial/reports/2007/large-hospital.cfm">Large Hospital Report (2007)</a></p>
  <p class="no-border"><a href="/consumption/commercial/reports/2007/hospital-water-data-collection.cfm">Water Data Collection (2007)</a></p>-->
  
  
  <?php /* <p class="no-border"><a href="/consumption/NAS.cfm">Assessment of EIA's Building Consumption Data</a></p> */ ?>
  
  <?php /* p class="no-border"><a href="#">Press Release</a></p */ ?>
  </span> 
  
   <?php /*/ Today in Energy Widget Top3 */ ?>
  <?php
  //hsh_sql:
  //associated with query name cntry
  $bindVariables = array();
  $neic->sql = "     Select *
    from neic.today_in_energy
    Where active = :active
    AND tags like :tags
    ORDER BY ID DESC ";
  $bindVariables[":active"] = 'yes';
  $bindVariables[":tags"] = '%commercial%';
  //print $neic->sql;
  //print_r($bindVariables);
  $tie_lookup = $neic->get($bindVariables);
  ?>
<?php if (!empty($tie_lookup)) {?>
<?php $tietopic = 'Commercial'; ?>
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
   <?php /*Other Consumption Surveys*/ ?>
  <div class="content-container light-top-border-container grey-background">
<ul>
<li class="head"><h2>Other End Use Surveys</h2></li>
  <p><a href="/consumption/manufacturing/">Manufacturing - MECS</a></p>
  <p><a href="/consumption/residential/">Residential - RECS</a>
  <p class="no-border"><a href="/consumption/transportation/archive/rtecs/index.php">Transportation</a></p>
  </span> </div>
