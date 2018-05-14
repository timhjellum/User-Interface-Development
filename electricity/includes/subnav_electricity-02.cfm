<!--- Section-specific variables --->
<cfset subjectid = 146>

<!--- Get the top-level tags for the Analysis & Projections drop down menu --->
<cfquery name="SubsectionTagsQuery" datasource="NEIC">
  <!--- Use distinct to consolidate records --->
  select distinct ARCHIVES_REPORT_LU.TAGID, ARCHIVES_REPORT_LU.SID, ARCHIVES_REPORT_TAG.TAG, ARCHIVES_REPORT_SUBJECT.SUBJECT
  <!--- Link the tag, report and subject tables to the link table --->
  from ARCHIVES_REPORT_LU, ARCHIVES_REPORT_TAG, ARCHIVES_REPORT_LIST, ARCHIVES_REPORT_SUBJECT
  where ARCHIVES_REPORT_LU.TAGID = ARCHIVES_REPORT_TAG.ID
    and ARCHIVES_REPORT_LU.ID = ARCHIVES_REPORT_LIST.ID
    and ARCHIVES_REPORT_LU.SID = ARCHIVES_REPORT_SUBJECT.ID
    <!--- Only include tags in this subject --->
    and ARCHIVES_REPORT_LU.SID = <cfqueryparam cfsqltype="cf_sql_integer" value="#subjectid#" />
    <!--- This gets only the tags marked as being subsections --->
    and ARCHIVES_REPORT_TAG.ORIGIN = 'bs'
    <!--- Exclude the tags 'All' (No longer used) and 'Most Requested' (Already included in the submenu) --->
    and ARCHIVES_REPORT_LU.TAGID <> 0 and ARCHIVES_REPORT_LU.TAGID <> 214
    <!--- Sort by the tag names --->
    order by ARCHIVES_REPORT_TAG.TAG
</cfquery>
<!--- Get the section name (Can't use row 1 from the query above b/c it doesn't return anything for some subjects) --->
<cfquery name="SubjectNameQuery" datasource="NEIC">
  select SUBJECT
  from ARCHIVES_REPORT_SUBJECT
  where ID = #subjectid#
</cfquery>
<cfset sectionname = SubjectNameQuery.SUBJECT>
<!--- If you want to use title case, use:
<cfset sectionname = REReplace(LCase(SubjectNameQuery.SUBJECT), "(^[[:alpha:]]|[[:blank:]][[:alpha:]])", "\U\1\E", 
--->
<!--- dev
<cfdump var="#Utags2#">
--->
<script>
<!--- Fire when jQuery is ready --->
$(document).ready(function(){
    $('.dropdown').dd();
    $("div.dat_block a").click(function(){
		 $("table.contable").children("tbody").hide();
		$("table.contable th").removeClass("active");
		var sID = this.href.substring(this.href.indexOf("#") + 1);
		$("[name$='" + sID + "']").click();
  });
});	
</script>
<!---cfinclude template="/global/includes/sub_menu_fix.cfm"--->
<!--- Page/Section Title --->
<div class="title bg_electricity">
  <h1><cfoutput>#sectionname#</cfoutput></h1>
</div>

<div class="subnav"><!--- Page/Sub Nav --->
<span class="right"><a href="<cfoutput>#glossary_path#</cfoutput>?id=electricity">Glossary &rsaquo;</a> <a href="<cfoutput>#faqs_path#</cfoutput>#electricity">FAQS &rsaquo;</a></span>
   <ul>
    <li <cfif locale EQ 'overview'>class="active"</cfif>><a href="/electricity/">Overview</a></li>
    <li class="dropdown <cfif locale EQ 'data'>active</cfif>"><a href="/electricity/data.cfm">Data</a></li>
    <!--- Data Menu Drop Down --->
    <div class="dat_block dat_links">
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
        <li><a href="/electricity/reports.cfm">All Electricity Data Reports</a></li>
      </ul>
    </div>
    <!---/ Data Menu Drop Down --->
    <li class="dropdown <cfif locale EQ 'ap'>active</cfif>"><a href="/electricity/reports.cfm">Analysis & Projections</a></li>
    <!--- Reports Menu Drop Down --->
    <div class="dat_block">
        <ul>
        <!--- Switch to SID instead of SECT
        <cfif sect eq "Consumption" or sect eq "Environment">
        --->
        <cfif subjectid eq 140 or subjectid eq 150>
          <!--- WHAT IS THIS SUPPOSED TO DO?
          <cfset tagid = 94>
          --->
        <cfelse>
          <li class="no-border" style="padding-bottom:0px;"><a href="/electricity/reports.cfm#/T214">Most Requested</a></li>
        </cfif>
            <cfloop query="SubsectionTagsQuery">
              <!--- Replaced by qualifiers in the query above
              <cfif tag neq 'All' and tag neq 'Recurring'>
              --->
        				  <cfoutput><li><a href="/electricity/reports.cfm##/T#tagid#">#tag#</a></li></cfoutput>
                <!--- obsolete?
              </cfif>
              --->
            </cfloop>
            <li class="no-border" style="padding-bottom:0px;"><a href="/electricity/reports.cfm#/">All Reports</a></li>
        </ul>
    </div>
    <!---/ Data Menu Drop Down --->
  </ul>
</div><!---/ Page/Sub Nav --->