<!--- New in electricity --->
        <cfset what = 'electricity'>
        <cfinclude template="/about/new/whatsnew_sitewide_noTIE.cfm">

<!---/ Today in Energy Widget Top3 --->
  <cfquery name="tie_lookup" datasource="NEIC">
  Select * from (
    Select * 
    from neic.today_in_energy
    Where active = 'yes'
    AND tags like '%electricity%'
    ORDER BY ID DESC
  	)

--WHERE ROWNUM <= 1
</cfquery>
<cfif tie_lookup.recordcount NEQ 0>
<cfset tietopic = 'electricity'>
<span class="dblue_side_top blue_top ">
  <a href="/todayinenergy/"><img src="/global/images/sprites/tie_w_title.png"/></a>
</span>
<span class="white_box">
  <div id="eiatie">
    <cfinclude template="/todayinenergy/outreach/file_scrub_tie_side_sm_top3.cfm">
  </div>
</span>
<br />
</cfif>

<!---/ Today in Energy Widget Top3 --->
        <span class="grey_side blue_top">
        <h4>Survey Forms, Changes &amp; Announcements</h4>
          <p><a href="/survey/#electricity"><!--- <img src="/cneaf/electricity/forms/images/efile1s.png" border="0" /> ---> Electric Power forms & help &rsaquo;</a></p>
          <!---<p><a href="/cneaf/electricity/2008forms/consolidate.html">Forms 923 &amp; 860 updates &rsaquo;</a></p>--->
         
        <!---  <p><a href="/cneaf/electricity/page/fednotice/eia-111.html">Comment on new form EIA-111 &rsaquo;</a></p> /--->
         <p class="no-border"><a href="/survey/changes/electricity/">See electricity and renewable (photovoltaic) forms changes for 2014 &rsaquo;</a></p>
         
  
          <!--- <p><a href="/electricity/data/form-changes/fednotice/elect_2011.html">OMB approved electricity forms through 2013 &rsaquo;</a></p> --->
          
         
        </span>
         <!--- FAQ Promo --->
        <span class="blue_side">
          <h4 class="q_side"><a href="/tools/faqs/faq.cfm?id=97&t=3 ">How much electricity does an American home use?   &rsaquo;</a></h4>
        <p><a href="/tools/faqs/#electricity"><strong>Read all electricity FAQs &rsaquo;</strong></a></p>
        </span>
        <!--- State Electricity Restructuring Map --->
        <span class="grey_side green_top">
          <h4> Electricity-Related Maps</h4>
         
          
         
          <img src="/electricity/images/wholesale_elec_ng_price_loc.jpg">
         
          <p><a href="/maps#electricitynuclear">See more electricity-related maps &rsaquo;</a></p>
        </span>
        <!--- Energy Explained Promo --->
        
        <p><a href="/energyexplained/index.cfm?page=electricity_home"><img src="/energyexplained/images/section-banners/electricity.jpg" alt="Energy Explained - Renewable Energy"  width="240"  /></a></p>
        <!--- Kids Promo --->
		<cfinclude template="/global/includes/kids_dates.cfm">