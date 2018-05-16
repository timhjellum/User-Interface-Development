<cfset what = 'forecast'>
<cfinclude template="/about/new/whatsnew_sitewide_noTIE.cfm">

<!---/ Today in Energy Widget Top3 --->
  <cfquery name="tie_lookup" datasource="NEIC">
  Select * from (
    Select * 
    from neic.today_in_energy
    Where active = 'yes'
    AND tags like '%forecast%'
    ORDER BY ID DESC
  	)

--WHERE ROWNUM <= 1
</cfquery>
<cfif tie_lookup.recordcount NEQ 0>
<cfset tietopic = 'forecast'>
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
        
            <h4>Requested service reports <br/>
            from Congress and others</h4>
         
      
      <p><a href="/analysis/requests/ndaa/">The Availability and Price of Petroleum and Petroleum Products Produced in Countries Other Than Iran </a></br>
            <em>June 27, 2013</em></p>
         <!---<p><a href="/analysis/requests/ngexports_iran/">Natural Gas Exports from Iran</a></br>
      <em>October 9, 2012</em></p>
          
            <p><a href="/analysis/requests/bces12/">Analysis of the  Clean Energy Standard Act of 2012</a></br>
      <em>May 2, 2012</em></p>--->
             
              <p><a href="/analysis/requests/federallands/">Sales of Fossil Fuels Produced from Federal and Indian Lands, FY 2003 through FY 2011</a></br>
  <em>May 30, 2013</em></p>
            <!---<p><a href="http://www.eia.gov/analysis/requests/ndaa/">
The Availability and Price of Petroleum and Petroleum Products Produced in Countries Other Than Iran
</a></br>
     <em>February 29, 2012</em></p> --->
        <!---<p><a href="/analysis/requests/ces_bingaman/">Analysis of Impacts of a Clean Energy Standard as requested by Chairman Bingaman</a></br>
        <em>November 30, 2011</em></p>--->
        <!--- <p><a href="/analysis/requests/ces_hall/">Analysis of Impacts of a Clean Energy Standard as requested by Rep. Ralph Hall</a></br>
        <em>October 25, 2011</em></p>
        <p><a href="http://www.eia.gov/analysis/requests/subsidy/">Direct Federal Financial Interventions and Subsidies in Energy in Fiscal Year 2010</a></br>
        <em>August 1, 2011</em></p>
        <p><a href="http://www.eia.gov/oiaf/servicerpt/manjobsact/index.html">Analysis of Selected Provisions of the Domestic Manufacturing and Energy Jobs Act of 2010</a></br>
        <em>October 18, 2010</em></p>--->
              
     <!---   <p><a href="http://www.eia.gov/oiaf/servicerpt/kgl/index.html">Energy Market and Economic Impacts of the American Power Act of 2010</a><br/>
        <em>July 20, 2010</em></p> --->
        <br />  <a href="/analysis/reports.cfm?t=138"><strong>More service reports &rsaquo;</strong></a></span>
          
          
        <strong>
        </p>
        </strong>
        <span class="grey_side green_top">
            <h4>Presentations </h4> 
        <p><a href=/pressroom/presentations/sieminski_04202013.pdf" class="ico_pdf">Outlook for shale gas and tight oil development in the U.S.</a><br/>
          Adam Sieminski, Administrator<br/>
      <em>April 20, 2013</em>
      </p>
            <p><a href=/pressroom/presentations/sieminski_04082013.pdf" class="ico_pdf">EIA, Energy Markets, Forecasts</a><br/>
          Adam Sieminski, Administrator<br/>
      <em>April 8, 2013</em>
      </p>
             
            
           <br /> <a href="http://www.eia.gov/pressroom/presentations.cfm"><strong>More presentations &rsaquo;</strong></a>
                        
                               </span>
		
		<!--- FAQ Promo --->
        <span class="blue_side">
      <h4 class="q_side"><a href="/tools/faqs/faq.cfm?id=287&t=10">What is the outlook for gasoline prices for 2014 and for 2015  &rsaquo;</a></h4>
          <p><a href="/ask/faq.asp">See all Frequently asked questions &rsaquo;</a></p>
        </span>
