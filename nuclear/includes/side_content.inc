<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();

$what = 'nuclear';
include ('about/new/whatsnew_sitewide_noTIE.php') ;
?>
<?php /*/ Today in Energy Widget Top3 */
//hsh_sql:
//associated with query name tie_lookup
$bindVariables = array();
$neic->sql = " Select *
    from neic.today_in_energy
    Where active = :active
    AND tags like :tags
    ORDER BY ID DESC ";
$bindVariables[":active"] = "yes";
$bindVariables[":tags"] = "%nuclear%";
//print $neic->sql;
//print_r($bindVariables);
$tie_lookup = $neic->get($bindVariables);
?>
<?php if (!empty($tie_lookup)) {?>
<?php $tietopic = 'nuclear'; ?>
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
<div class="secondary">
<ul>
<li class="head"><h2>Survey Forms, Changes & Announcements</h2></li>
<p class="no-border"><a href="/survey/#uranium">Uranium Survey Forms and Instructions  &rsaquo;</a></p>
<?php /*p class="no-border"><a href="/survey/changes/uranium/">See proposed changes for 2012 &rsaquo; </a></p*/ ?>
</span> 

<?php /* FAQ Promo */ ?> 
<span class="blue_side">
<h4 class="q_side"><a href="/tools/faqs/faq.cfm?id=104&t=21">How much electricity does a typical nuclear power plant generate? &rsaquo;</a> </h2></li>
<p><a href="/tools/faqs/ ">See all FAQs &rsaquo;</a></p>
</span> 
<?php /*<span class="grey_side green_top">
<li class="head"><h2><a href="/nuclear/state/">State Nuclear Profiles</a></h2></li>
<p><a href="/nuclear/state/"><img src="/nuclear/images/state-nuclear-profiles.jpg " alt="State Nuclear Profiles"/></a><br/>
  <br/>
</p>
</span>*/ ?>

<?php /* Energy Explained Promo */ ?>

<p><a href="/energyexplained/index.cfm?page=nuclear_home"><img src="/energyexplained/images/section-banners/nuclear.jpg" alt="Energy Explained - Nuclear"  width="240"  /></a></p>
<?php /* Kids Promo */ ?>
<?php include ('global/includes/kids_dates.inc') ; ?>
