<!--- NEW Sub NAv --->
<cfset sect = 'Electricity'>
<cfquery name="Utags2" datasource="NEIC">
    SELECT distinct archives_report_lu.tagid, archives_report_lu.sid, archives_report_subject.subject, archives_report_tag.tag, 
    count(ARCHIVES_REPORT_LIST.HAS_DATA) as D, count(ARCHIVES_REPORT_LIST.HAS_FORECAST) as F, count(ARCHIVES_REPORT_LIST.HAS_ANALYSIS) as A 
          FROM neic.archives_report_lu, neic.archives_report_subject, neic.archives_report_tag, NEIC.ARCHIVES_REPORT_LIST 
          WHERE ( archives_report_subject.id = archives_report_lu.sid ) 
            AND ( archives_report_tag.id = archives_report_lu.tagid )
            AND ( archives_report_lu.id = archives_report_list.id)
            AND ( archives_report_subject.subject = <cfqueryparam cfsqltype="cf_sql_varchar" list="true" value="#sect#" /> ) 
            AND ( archives_report_tag.origin = 'bs' )
            group by archives_report_lu.tagid, archives_report_lu.sid, archives_report_subject.subject, archives_report_tag.tag 
            order by tag
</cfquery>
<script>
	$(function(){
		$('.dropdown').dd();
	});
	
$(document).ready(function(){
    $("div.dat_block a").click(function(){
		 $("table.contable").children("tbody").hide();
		$("table.contable th").removeClass("active");
		var sID = this.href.substring(this.href.indexOf("#") + 1);
		$("[name$='" + sID + "']").click();
  });
});	
</script>
<!---cfinclude template="/global/includes/sub_menu_fix.cfm"--->
	<cfset L2Title = "Electricity">
    <div class="title bg_electricity"><!--- Page/Section Title --->
      <h1><cfoutput>#L2Title#</cfoutput></h1>
    </div><!---/ Page/Section Title --->
    
    <div class="subnav"><!--- Page/Sub Nav --->
    <span class="right"><a href="<cfoutput>#glossary_path#</cfoutput>?id=electricity">Glossary &rsaquo;</a> <a href="<cfoutput>#faqs_path#</cfoutput>#electricity">FAQS &rsaquo;</a></span>
       <ul>
        <li <cfif locale EQ 'overview'>class="active"</cfif>><a href="/electricity/">Overview</a></li>
        <li class="dropdown <cfif locale EQ 'data'>active</cfif>"><a href="/electricity/data.cfm">Data</a></li>
        <!--- Data Menu Drop Down --->
        <div class="dat_block">
            <ul>
              <li><a href="/electricity/data/browser">Electricty Data Browser <i>(interactive query tool with charting &amp; mapping)</i></a></li>
              <li><a href="/electricity/data.cfm#summary">Summary</a></li>
              <li><a href="/electricity/data.cfm#sales">Sales (consumption), revenue, prices & customers</a></li>
              <li><a href="/electricity/data.cfm#generation">Generation and thermal output</a></li>
              <li><a href="/electricity/data.cfm#gencapacity">Electric power plants generating capacity</a></li>
              <li><a href="/electricity/data.cfm#consumption">Consumption of fuels used to generate electricity</a></li>
              <li><a href="/electricity/data.cfm#fossilfuels">Receipts of fossil-fuels for electricity generation</a></li>
              <li><a href="/electricity/data.cfm#avgcost">Average cost of fossil-fuels for electricity generation</a></li>
              <li><a href="/electricity/data.cfm#ffstocks">Fossil-fuel stocks for electricity generation</a></li>
<!--              <li><a href="/electricity/data.cfm#electriccosts">Electricity costs</a></li> -->
              <li><a href="/electricity/data.cfm#revenue">Revenue and expense statistics for...</a></li>
              <li><a href="/electricity/data.cfm#traderel">Electricity purchases, sales for resale, imports/exports, reliability</a></li>
              <li><a href="/electricity/data.cfm#demand">Demand, capacity resources, and capacity margins</a></li>
              <li><a href="/electricity/data.cfm#elecenv">Electricity and the environment</a></li>
              <li><a href="/electricity/reports.cfm?t=9999&f=d">All Electricity Data Reports</a></li>
            </ul>
        </div>
        <!---/ Data Menu Drop Down --->
        <li class="dropdown <cfif locale EQ 'ap'>active</cfif>"><a href="/electricity/reports.cfm">Analysis & Projections</a></li>
        <!--- Reports Menu Drop Down --->
        <div class="dat_block">
            <ul>
            <cfif sect neq "Consumption" and sect neq "Environment">
              
              <li class="no-border" style="padding-bottom:0px;"><a href="/electricity/reports.cfm?t=214">Most Requested</a></li>
            <cfelse>
              <cfset tagid = 94>
            </cfif>
                <cfloop query="utags2">
                <cfif tag EQ 'All' OR tag EQ 'Recurring'>
                <cfelse>
				  <cfoutput>
                    <li><a href="/electricity/reports.cfm?t=#tagid#">#tag#</a></li>
                  </cfoutput>
                </cfif>
                </cfloop>
                <li class="no-border" style="padding-bottom:0px;"><a href="/electricity/reports.cfm?t=9999">All Reports</a></li>
            </ul>
        </div>
        <!---/ Data Menu Drop Down --->
      </ul>
    </div><!---/ Page/Sub Nav --->