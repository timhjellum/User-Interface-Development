<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();

$what = 'coal'; ?>
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
$bindVariables[":tags"] = "%nuclear%";
//print $neic->sql;
//print_r($bindVariables);
$tie_lookup = $neic->get($bindVariables);
?>
<?php if (!empty($tie_lookup)) {?>
<?php $tietopic = 'coal'; ?>
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
       <?php /* Weekly Releases */ ?>
         <div class="secondary">
<ul>
<li class="head"><h2>Regular Weekly Releases*</h2></li>
        <p><a href="/coal/nymex/">Weekly NYMEX Coal Futures &rsaquo;</a><br />

<?php /*        <p><a href="/cneaf/coal/page/nymex/nymex_report.html">Weekly NYMEX Coal Futures &rsaquo;</a><br /> */ ?>
           <i>5:00 p.m. ET, Monday</i>
<?php /* Commented out by CA2 requested by Melinda Hobbs on 01/27/2012
      <p><a href="/cneaf/coal/page/coalnews/coalmar.html">Coal News & Markets &rsaquo;</a><br />
           <i>5:00 p.m. ET, Monday</i>
*/ ?>
		<p><a href="/coal/news_markets/">Coal News & Markets &rsaquo;</a><br />
           <i>5:00 p.m. ET, Monday</i>
        <p><a href="/coal/production/weekly/">Weekly Coal Production &rsaquo;</a><br />
           <i>5:00 p.m. ET, Thursday</i>
            
         
        <p class="no-border"><i>*No releases: Tuesday, Wednesday or Friday. Releases change on weeks with Federal holidays.</i></p>
       
        </span> 
           <?php /* Survey */ ?>
         <div class="secondary">
<ul>
<li class="head"><h2>Survey Forms, Changes & Announcements</h2></li>
            <p><a href="/survey/#coal">Coal survey forms &rsaquo;</a> </p>
          <?php /*p><a href="/survey/changes/coal/">Comment by October 28th on survey changes &rsaquo;</a></p*/ ?>
           <p class="no-border"><a href="/survey/meetings/coal1212/coal_data_revision_policy.pdf">Coal data revision policy. &rsaquo;</a></p>
          <?php /*  <p><a href="/cneaf/coal/page/surveys/coal_survey_auth.html">Coal survey authorization 2011-14 &rsaquo;</a></p>
       <p><a href="/cneaf/coal/page/schedule/product_description.html">Coal data & analysis products: descriptions & schedules &rsaquo;</a> </p> */ ?>
          </span>
		  <?php /*
       <span class="grey_side green_top">
            <li class="head"><h2>Coal Maps</h2></li>
            
          <p><a href="/energy_in_brief/role_coal_us.cfm "><img src="/energy_in_brief/images/maps/coal_production_map.jpg"  width="200"></a><br/><br/><a href="/maps#coal">See more coal maps &rsaquo;</a></p>
          </span>
		  */ ?>
                  <?php /* FAQ Promo */ ?>
        <span class="blue_side">
          <h4 class="q_side"><a href="/tools/faqs/faq.cfm?id=527&t=2 ">How much coal, natural gas, or petroleum is used to generate a kilowatt-hour of electricity? &rsaquo;</a></h2></li> 
          <p><a href="/tools/faqs/#coal">See all coal FAQs  &rsaquo;</a></p>
        </span>
         <?php /* Energy Explained Promo */ ?>
        
        <p><a href="/energyexplained/index.cfm?page=coal_home"><img src="/energyexplained/images/section-banners/coal.jpg" alt="Energy Explained - Coal" width="240" /></a></p>
        <?php /* Kids Promo */ ?>
        <?php include ('global/includes/kids_dates.inc') ; ?>