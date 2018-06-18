<?php $what = 'financial'; ?>
<?php include ('about/new/whatsnew_sitewide_noTIE.php') ; ?>

<?php /*/ Today in Energy Widget Top3 */ ?>
<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();
?>
<?php
//hsh_sql:
//associated with query name tie_lookup
$bindVariables = array();
$neic->sql = " Select *
    from neic.today_in_energy
    Where active = :active
    AND tags like :tags
    ORDER BY ID DESC";
$bindVariables[":active"] = "yes";
$bindVariables[":tags"] = "%financial%";
//print $neic->sql;
//print_r($bindVariables);
$tie_lookup = $neic->get($bindVariables);
?>
<?php if (!empty($tie_lookup)) {?>
<?php $tietopic = 'financial'; ?>
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
<span class="grey_side green_top">
<h4>Related Information</h4>
<p><a href="/finance/workshops.cfm">Workshops</a></p>
<p><a href="/discussionpapers/#finance">Working papers</a></p>
<p class="no-border">From IEA - <a href="http://omrpublic.iea.org/special_sup_apr11.pdf" class="ico_pdf">The Mechanics of the Derivatives Markets: What They Are and How they Function </a></p>
</span> <span class="grey_side green_top">
<h4>What Drives Crude Oil Prices</h4>
<a href="/finance/markets/"><img src="/finance/images/EMFI_side-bar.png" alt="An analysis of 7 factors that influence oil markets, with chart data updated monthly and quarterly."></a>
<p><a href="/maps#oilandgas" title="An analysis of 7 factors that influence oil markets, with chart data updated monthly and quarterly.">See more &raquo;</a></p>
</span> 
</p>

<?php /* Kids Promo */ ?>
<?php include ('global/includes/kids_dates.inc') ; ?>
