<?php /* possible side boxes */ ?>
<?php $what = 'renewables'; ?>
<?php include ('about/new/whatsnew_sitewide_noTIE.php') ; ?>

<?php /*/ Today in Energy Widget Top3 */ ?>
  <?php $tie_lookup = mysql_query("
  Select * from (
    Select * 
    from neic.today_in_energy
    Where active = 'yes'
    AND tags like '%nuclear%'
    ORDER BY ID DESC
  	)

--WHERE ROWNUM <= 1
");?>
<?php if ( $tie_lookup.recordcount != 0) {?>
<?php $tietopic = 'renewable'; ?>
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

<?php /*cfinclude template="/about/new/whatsnew_sitewide.cfm"*/ ?>

<div class="content-container light-top-border-container grey-background">
<ul>
<li class="head"><h2>Survey Forms, Changes & Announcements</h2></li>
  <p><a href="/cneaf/solar.renewables/page/forms.html">Renewable and Alternate Fuels Survey Forms and Instructions  &rsaquo;</a></p>
</span> 

<?php /*span class="grey_side green_top">
  <li class="head"><h2><a href="/maps#renewable">Renewable Energy Maps</a></h2></li>
  <a href="/cneaf/solar.renewables/page/biodiesel/biodiesel.html"><img src="/renewable/images/biodiesel-map-200.gif" /></a> <br />
  </p>
  <p><a href="/maps/">See more  maps  &rsaquo;</a></p>
</span*/ ?>

<span class="blue_side">
  <h4 class="q_side"><a href="/tools/faqs/faq.cfm?id=93&t=4">How many alternative fuel and hybrid vehicles are in the U.S.? &rsaquo;</a></h2></li>
  <p><a href="/tools/faqs/#renewables">See all renewable & alternative fuels FAQs  &rsaquo;</a></p>
</span>
<p><a href="/energyexplained/index.cfm?page=renewable_home"><img src="/global/images/side_features/ee_renewable.jpg" width="240" height="123" alt="Energy Explained - Renewable Energy" /></a></p>
<?php include ('global/includes/kids_dates.inc') ; ?>
<?php /*/ possible side boxes */ ?>
