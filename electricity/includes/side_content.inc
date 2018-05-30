<?php /* New in electricity */
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();

$what = 'electricity';
include ('about/new/whatsnew_sitewide_noTIE.php') ;
?>
<?php /*/ Today in Energy Widget Top3 */
//hsh_sql:
//associated with query name tie_lookup
$bindVariables = array();
$neic->sql = "     Select *
    from neic.today_in_energy
    Where active = :active
    AND tags like :tags
    ORDER BY ID DESC ";
$bindVariables[":active"] = "yes";
$bindVariables[":tags"] = "%electricity%";
//print $neic->sql;
//print_r($bindVariables);
$tie_lookup = $neic->get($bindVariables);

?>
<?php if (!empty($tie_lookup)) {?>
<?php $tietopic = 'electricity'; ?>
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
        <div class="content-container light-top-border-container grey-background">
<ul>
<li class="head"><h2>Survey Forms, Changes &amp; Announcements</h2></li>
          <p><a href="/survey/#electricity"><?php /* <img src="/cneaf/electricity/forms/images/efile1s.png" border="0" /> */ ?> Electric Power forms & help &rsaquo;</a></p>
          <?php /*<p><a href="/cneaf/electricity/2008forms/consolidate.html">Forms 923 &amp; 860 updates &rsaquo;</a></p>*/ ?>
         
        <?php /*  <p><a href="/cneaf/electricity/page/fednotice/eia-111.html">Comment on new form EIA-111 &rsaquo;</a></p> /*/ ?>
         <p class="no-border"><a href="/survey/changes/electricity/">See electricity and renewable (photovoltaic) forms changes for 2014 &rsaquo;</a></p>
         
  
          <?php /* <p><a href="/electricity/data/form-changes/fednotice/elect_2011.html">OMB approved electricity forms through 2013 &rsaquo;</a></p> */ ?>
          
         
        </span>
         <?php /* FAQ Promo */ ?>
        <span class="blue_side">
          <h4 class="q_side"><a href="/tools/faqs/faq.cfm?id=97&t=3 ">How much electricity does an American home use?   &rsaquo;</a></h2></li>
        <p><a href="/tools/faqs/#electricity"><strong>Read all electricity FAQs &rsaquo;</strong></a></p>
        </span>
        <?php /* State Electricity Restructuring Map */ ?>
        <span class="grey_side green_top">
          <li class="head"><h2> Electricity-Related Maps</h2></li>
         
          
         
          <img src="/electricity/images/wholesale_elec_ng_price_loc.jpg">
         
          <p><a href="/maps#electricitynuclear">See more electricity-related maps &rsaquo;</a></p>
        </span>
        <?php /* Energy Explained Promo */ ?>
        
        <p><a href="/energyexplained/index.cfm?page=electricity_home"><img src="/energyexplained/images/section-banners/electricity.jpg" alt="Energy Explained - Renewable Energy"  width="240"  /></a></p>
        <?php /* Kids Promo */ ?>
		<?php include ('global/includes/kids_dates.inc') ; ?>