<?php $what = 'environment'; ?>
 <?php include ('about/new/whatsnew_sitewide_noTIE.php') ; ?>

<?php /*/ Today in Energy Widget Top3 */ ?>
<?php
//hsh_sql:
//associated with query name tie_lookup
$bindVariables = array();
$neic->sql = " Select *
    from neic.today_in_energy
    Where active = 'yes'
    AND tags like :tags
    ORDER BY ID DESC
  	 ";
$bindVariables[":active"] = "yes";
$bindVariables[":tags"] = "%nuclear%";
//print $neic->sql;
//print_r($bindVariables);
$tie_lookup = $neic->get($bindVariables);
?>
<?php if (!empty($tie_lookup)) {?>
<?php $tietopic = 'environment'; ?>
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
        <?php /*span class="grey_side blue_top">
            <h4>Survey Forms, Changes &amp; Announcements</h4>
            <p>add text </p>
          </span*/ ?>
          <?php /* FAQ Promo */ ?>
        <span class="blue_side">
          <h4 class="q_side"><a href="/tools/faqs/faq.cfm?id=74&t=11">How much carbon dioxide (CO2) is produced per kilowatt-hour when generating electricity with fossil fuels?  &rsaquo; </a></h4>
          <p><a href="/tools/faqs/#environment">See all environment FAQs &rsaquo;</a></p>
        </span>
    <?php /*span class="grey_side green_top">
            <h4><a href="/oiaf/1605/index.html">What is the Voluntary Reporting Program?</a></h4>
                     <p>  <a href="/oiaf/1605/index.html"><img src="/oiaf/1605/images/image001.gif" height="150"></a><br/><br/><a href="http://www.eia.gov/oiaf/1605/index.html">See more &rsaquo;</a></p>
          </span*/ ?>
              
<?php /* Kids Promo */ ?>
<?php include ('global/includes/kids_dates.inc') ; ?>