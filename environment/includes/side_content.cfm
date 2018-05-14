<cfset what = 'environment'>
 <cfinclude template="/about/new/whatsnew_sitewide_noTIE.cfm">

<!---/ Today in Energy Widget Top3 --->
  <cfquery name="tie_lookup" datasource="NEIC">
  Select * from (
    Select * 
    from neic.today_in_energy
    Where active = 'yes'
    AND tags like '%nuclear%'
    ORDER BY ID DESC
  	)

--WHERE ROWNUM <= 1
</cfquery>
<cfif tie_lookup.recordcount NEQ 0>
<cfset tietopic = 'environment'>
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

       <!---cfinclude template="/about/new/whatsnew_sitewide.cfm"--->
        <!---span class="grey_side blue_top">
            <h4>Survey Forms, Changes &amp; Announcements</h4>
            <p>add text </p>
          </span--->
          <!--- FAQ Promo --->
        <span class="blue_side">
          <h4 class="q_side"><a href="/tools/faqs/faq.cfm?id=74&t=11">How much carbon dioxide (CO2) is produced per kilowatt-hour when generating electricity with fossil fuels?  &rsaquo; </a></h4>
          <p><a href="/tools/faqs/#environment">See all environment FAQs &rsaquo;</a></p>
        </span>
    <!---span class="grey_side green_top">
            <h4><a href="/oiaf/1605/index.html">What is the Voluntary Reporting Program?</a></h4>
                     <p>  <a href="/oiaf/1605/index.html"><img src="/oiaf/1605/images/image001.gif" height="150"></a><br/><br/><a href="http://www.eia.gov/oiaf/1605/index.html">See more &rsaquo;</a></p>
          </span--->
              
<!--- Kids Promo --->
<cfinclude template="/global/includes/kids_dates.cfm">