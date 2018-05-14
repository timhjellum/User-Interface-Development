<?php $what = 'natural gas'; ?>
<?php include ('about/new/whatsnew_sitewide_noTIE.php') ; ?>
<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic = new NEIC();
?>

<?php /*/ Today in Energy Widget Top3 */ ?>
<?php $neic->sql = "
  Select * from (
    Select * 
    from neic.today_in_energy
    Where active = 'yes'
    AND tags like '%nuclear%'
    ORDER BY ID DESC
  	)

--WHERE ROWNUM <= 1
";?>
<?php $tie_lookup = $neic->get(); ?>
<?php if ( count($tie_lookup) != 0) {?>
<?php $tietopic = 'natural gas'; ?>
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
         <span class="grey_side blue_top">
        <h4>Regular Weekly Releases*</h4>
       
         <p><a href="http://ir.eia.gov/ngs/ngs.html">Weekly Natural Gas Storage Report &rsaquo;</a><br />
           <i>10:30 a.m. EST, Thursday</i>
         <p><a href="/naturalgas/weekly/">Natural Gas Weekly Update &rsaquo;</a><br />
           <i>2:00 - 2:30 p.m. EST, Thursday</i>
            <p class="no-border"><i>*No releases: Monday, Tuesday, Wednesday or Friday. Releases change on weeks with Federal holidays.</i></p>
       <h4><a href="/todayinenergy/index.cfm?tg=natural gas">Recent Articles &rsaquo;</a></h4>
        </span>
        <?php /* Survey */ ?>
           <span class="grey_side blue_top">
        <h4>Survey Forms, Changes &amp; Announcements</h4>
       <?php /* <p><strong>Announcement:</strong> The July 2011 Monthly Natural Gas Gross Production Report and July 2011 Natural Gas Monthly, originally scheduled for release July 29th, 2011, will be released August 2, 2011.  The delay is due to processing difficulties arising from recent resource reductions to EIA.</p>   */ ?>
        <p><a href="/survey/#naturalgas">Natural gas surveys &rsaquo;</a></p>
        <p><a href="/survey/#naturalgas">Reserves surveys &rsaquo;</a></p>
       <p><a href="/survey/notice/ngdownstreamforms2015.cfm">Federal Register Notice for Proposed Downstream survey changes &rsaquo;</a><br />
           <i>comment by July 7, 2014</i></p> 
       <p><a href="/survey/notice/ngforms2015.cfm">Federal Register Notice for Proposed Upstream Oil and Natural Gas survey changes &rsaquo;</a><br />
           <i>comment by July 7, 2014</i></p>    
        </span>
        
        <?php /* FAQ Promo */ ?>
        <span class="blue_side">
          <h4 class="q_side">
          	<a href="/tools/faqs/faq.cfm?id=45&t=8">What are Mcf, Btu, and therms? How do I convert prices in Mcf to Btu's and therms? &rsaquo;</a>
        </h4>
          <strong>
          <p><a href="/tools/faqs/#naturalgas">See all natural gas FAQs &rsaquo;</a></p></strong>
        </span>
        
       
        <span class="grey_side green_top">
        <h4>U.S. Natural Gas Maps</h4>
          <p><a href="/pub/oil_gas/natural_gas/analysis_publications/maps/maps.htm"><img src="/oil_gas/rpd/northamer_gas.jpg" width="200" height="133" alt="map of Lower 48 Shale Plays" /></a></p>
          <p><a href="/maps#oilandgas"><b>See more natural gas maps &rsaquo;</b></a></p>
        </span>
        
        
        <?php /* Energy Explained Promo */ ?>
        
        <p><a href="/energyexplained/index.cfm?page=natural_gas_home"><img src="/energyexplained/images/section-banners/naturalgas.jpg"  alt="Energy Explained - Renewable Energy"  width="240"  /></a></p>
        <?php /* Kids Promo */ ?>
        <?php include ('global/includes/kids_dates.inc') ; ?>
