<!--- Set the HTML title (used by /global/includes/titling.cfm via eia_footer.cfm) --->
<cfset L2T = 'Natural Gas'>
<cftry>
<cfcache action="flush">
<cfset locale = 'overview'>
<!--- set this so that the carousel.cfm include query will pull the correct set of Issues and Trends for this page. --->
<cfset l2page = 'page_nat'>
<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<cfinclude template="/global/includes/eia_head_info.cfm">
<link rel="stylesheet" type="text/css" href="/global/includes/issuestrends/css/gallery.prefixed.css" />
<link rel="stylesheet" type="text/css" href="/global/includes/issuestrends/css/gallery_fixes.css" />
<link rel="stylesheet" type="text/css" href="/global/includes/issuestrends/css/styles_mv.css" />
</head>
<body>
  <!---Remove this line below, or comment out before posting to live. --->
<div id="outerX"><!--- Outer Wrapper --->
  <cfinclude template="/global/includes/eia_header.cfm">
      <cfinclude template="/naturalgas/includes/subnav_naturalgas.cfm">
      <!--- Page/Body Content --->
      <div class="pagecontent eqcol_temp">
	  <!---<div class="alert"><p><strong>What's changed?</strong> &nbsp; See <a href="/about/eia_explained.cfm#l2_enhancements" id="enhance" style="background:none; padding-right:0; margin-right:0">highlights of new features</a> or <a href="#video" id="youtube" style="background:none; padding-right:0; margin-right:0">take a 60 second video tour</a>.</p></div>--->
	  <cfinclude template="/global/includes/l2-youtube.cfm">
        <div class="feature-section"> 
          <!--- Main --->
          <h1>Current Issues & Trends <span class="right"><a  href="issuestrends/">See more &rsaquo;</a></span></h1>
          <div>
          <!--- carousel --->
          <cfinclude template="/global/includes/issuestrends/carousel.cfm">
        <!--- carousel ---> 
      </div>
    </div>
    <div class="main"> 
      <!---Left column---> 
      <span class="main_col">
      <h1>Recent Data</h1>
      <cfinclude template="/naturalgas/includes/data_table.cfm">
      <p><a href="/naturalgas/data.cfm"><b>See more data &rsaquo;</b></a></p>
      <h2>Updated Data Series</h2>
      <ul class="updated_data">
        <li><span class="series_date">9/28/2016</span> <a href="/dnav/ng/ng_pri_fut_s1_d.htm">Natural gas spot and futures prices </a></li>
        <li><span class="series_date">8/31/2016</span> <a href="/dnav/ng/ng_pri_sum_dcu_nus_m.htm">Natural gas prices</a></li>
        <li><span class="series_date">8/31/2016</span> <a href="/dnav/ng/ng_prod_sum_a_EPG0_FGW_mmcf_m.htm">Natural gas gross withdrawals and production</a></li>
        
      </ul>
      <h2>Survey Forms, Changes & Announcements</h2>
      <ul>
        <li><a href="/survey/#naturalgas">Natural gas surveys &rsaquo;</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PL2OD0gKF-sIULwpCNRF0wzz20GVou-gB3">EIA-857 Survey Instructional Videos &rsaquo;</a></li>
		   <li><a href="http://ir.eia.gov/ngs/notice.html">Changes to the Weekly Natural Gas Storage Report regions and revision threshold</a></li>
      </ul>
      </span> 
      <!---End left column---> 
      <!---Right column---> 
     <cfinclude template="/global/includes/issuestrends/recent_AP_schedule.cfm">
      <h2>Upcoming Releases</h2>
      <p><em>Releases may change on weeks with Federal holidays.</em></p>
      <p><a href="http://ir.eia.gov/ngs/ngs.html">Weekly Natural Gas Storage Report</a>: <em>10:30 a.m. EST, Thursday</em><br />
        <a href="/naturalgas/weekly/">Natural Gas Weekly Update</a>: <em>2:00 - 2:30 p.m. EST, Thursday </em></p>
      <!---p><em>*No releases: Monday, Tuesday, Wednesday or Friday.</p--->
            <p><a href="/reports/upcoming.cfm"><b> See all upcoming &rsaquo;</b></a></p>

      </span> 
      <!---end Right column---> 
      <!---Interactive visualizations section--->
      <h1>Interactive Visualizations, Data, & Multimedia</h1>
      <ul class="visualizations">
        <!---li><a title="U.S. Natural Gas Data Brower" href="/dnav/ng/data.cfm#summary?src=-f10">
          <div class="circle_ng_navigator circle"></div>
          <b>U.S. Natural Gas<br />Data Brower</b></a></li--->

        <li><a title="U.S. Natural Gas Infrastructure Map" href="/state/maps.cfm?v=Natural%20Gas">
          <div class="circle_ng_map circle"></div>
          <b>U.S. Natural Gas Infrastructure Map</b></a></li>

        <li><a title="U.S. Fossil Fuel Resource Map" href="/state/maps.cfm?v=Fossil%20Fuel%20Resources">
          <div class="circle_fossil_fuel circle"></div>
          <b>U.S. Fossil Fuel Resource Map</b></a></li>

        <li><a title="U.S. Energy Disruptions Map" href="/special/disruptions/">
          <div class="circle_disruptions circle"></div>
          <b>U.S. Energy Disruptions Map</b></a></li>

          <li><a title="STEO Data Browser" href="/forecasts/steo/query/">
            <div class="circle_steo circle"></div>
            <b>STEO<br />
            Data Browser</b></a></li>

          <li><a title="Company-level Query System" href="/cfapps/ngqs/ngqs.cfm?f_report=RP2&f_sortby=&f_items=&f_year_start=&f_year_end=&f_show_compid=&f_fullscreen=">
          <div class="circle_ng_query circle"></div>
          <b>Company-level<br />
          Query System</b></a></li>
          
           <li><a title="Trends in Energy: Drilling efficiency and increasing U.S. oil and natural gas production" href="http://www.youtube.com/watch?v=eIRB-NnyKyE">
          <div class="circle_video circle"></div>
          <b>Trends in<br />
          Energy Video</b></a></li>

        <!---li><a href="/radio/">
          <div class="circle_radio circle"></div>
          <b>Radio Spot</b></a></li--->
      </ul>
      <!---end Interactive visualizations section---> 
      <!---Energy education section--->
      <h1>Energy Education</h1>
      <div class="ed_section">
        <div>
          <div> <img src="/global/images/icons/education/nat_gas.png"/> <span>
            <h2><a href="/energyexplained/index.cfm?page=natural_gas_home">Natural Gas Explained</a></h2>
            <p><em><a href="/energyexplained/index.cfm?page=natural_gas_factors_affecting_prices">Factors affecting natural gas prices</a></em></p>
            <p><a href="/energyexplained/index.cfm?page=natural_gas_home"><b>See more natural gas topics &rsaquo;</b></a></p>
            </span> </div>
        </div>
        <div>
          <div> <img src="/global/includes/issuestrends/images/icon_eib.png"/> <span>
            <h2><a href="/energy_in_brief/">Energy in Brief</a></h2>
            <p><em><a href="/energy_in_brief/article/shale_in_the_united_states.cfm">Shale in the United States</a></em></p>
            <p><a href="/energy_in_brief/"><b>See more Energy in Brief articles &rsaquo;</b></a></p>
            </span> </div>
        </div>
        <div>
          <div> <img src="/global/includes/issuestrends/images/icon_faq.png"/> <span>
            <h2><a href="/tools/faqs/">FAQs</a></h2>
            <p><em><a href="/tools/faqs/faq.cfm?id=45&t=8">What are Mcf, Btu, and therms? How do I convert prices in Mcf to Btu's and therms?</a></em></p>
            <p><a href="/tools/faqs/#naturalgas"><b>See all natural gas FAQs &rsaquo;</b></a></p>
            </span> </div>
          <div> <img src="/global/includes/issuestrends/images/icon_kids.png"/> <span>
            <h2><a href="/kids">Energy Kids</a></h2>
            <p><em><a href="/kids/energy.cfm?page=natural_gas_home-basics">How Was Natural Gas Formed?</a></em></p>
            <p><a href="/kids/energy.cfm?page=natural_gas_home-basics"><b>See natural gas on Energy Kids &rsaquo;</b></a></p>
            </span> </div>
        </div>
      </div>
      <!---end Energy education section----> 
      <!--- Main ---> 
    </div>
    <!---/ Page/Body Content --->
    <cfinclude template="/global/includes/eia_footer.cfm">
</div>
<!---/ Outer Wrapper ---> 
<script>
$("#youtube").fancybox({
	'scrolling'		: 'no',
	'titleShow'		: false,
	'onClosed'		: function() {
	    $("#login_error").hide();
	}
});
</script>
</body>
</html>

<cfcatch>
  <cfif Find("wwwdev", CGI.HTTP_HOST)>
    <h1>CFCATCH</h1>
    <cfdump var="#cfcatch#">
  <cfelse>
    <cfoutput>#cfcatch#</cfoutput>
  </cfif>
</cfcatch>
</cftry>
