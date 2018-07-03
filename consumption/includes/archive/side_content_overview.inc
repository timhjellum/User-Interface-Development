<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();
?>
<span class="grey_side blue_top ">
  <h4>End-use consumption<br />
    data &amp; surveys</h4>
  <p><a href="/consumption/residential/">Residential Energy Consumption (RECS)</a></p>
  <p><a href="/consumption/commercial/">Commercial Building Energy Consumption (CBECS)</a></p>
  <p><a href="/consumption/manufacturing/">Manufacturing Energy Consumption (MECS)</a></p>
  <p class="no_btm_border"><a href="/consumption/archive/rtecs/">Transportation (RTECS)</a></p>
</span>

<span class="grey_side blue_top side_list_nocolumn">
  <h4>Sector totals:</h4>
<ul>
      <li><a href="/totalenergy/data/annual/showtext.php?t=ptb0201a">annual</a> &mdash; 1949-2011</li>
      <li><a href="/totalenergy/data/monthly/index.php#consumption">monthly</a></li>
    </ul>
</span>

<?php /*cfinclude template="/about/new/whatsnew_sitewide_noTIE.php"*/ ?>

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
$bindVariables[":tags"] = '%nuclear%';
//print $neic->sql;
//print_r($bindVariables);
$tie_lookup = $neic->get($bindVariables);
?>
<?php if (!empty($tie_lookup)) {?>
<?php $tietopic = 'consumption'; ?>
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

<span class="grey_side green_top side_list_nocolumn">
  <h4>Consumption and efficiency<br />
    analysis & projections </h4>
  <p class="no-border"><strong>Annual Energy Outlook 2013<br/>
  Reference Case:</strong></p>
    <ul>
    <li> <a href="/forecasts/aeo/er/early_consumption.php">consumption by sector projections</a></li>
    <li> <a href="/forecasts/aeo/er/early_intensity.php">energy intensity projections</a></li>
    <?php /*  <li> <a href="/analysis/projection-data.php#annualproj">Reference case   projections</a></li>
      <li> <a href="/forecasts/aeo/chapter_market_trends.php">Market trends discussions</a></li> */ ?>
    </ul>
<?php /* <p><a href="/analysis/reports.php?t=128">More analysis &rsaquo;</a></p>*/ ?>
</span>
<?php include ('global/includes/kids_dates.inc') ; ?>

