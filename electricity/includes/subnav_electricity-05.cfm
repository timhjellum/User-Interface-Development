<!--- Section-specific variables --->
<cfset subjectid = 146>
<cfset sectionname = "Electricity">

<!--- Get the top-level tags for the Analysis & Projections drop down menu --->
<cfquery name="SubsectionTagsQuery" datasource="NEIC">
  <!--- Use distinct to consolidate records --->
  select distinct ARCHIVES_REPORT_LU.TAGID, ARCHIVES_REPORT_LU.SID, ARCHIVES_REPORT_TAG.TAG, ARCHIVES_REPORT_SUBJECT.SUBJECT
  <!--- Link the tag, report and subject tables to the link table --->
  from NEIC.ARCHIVES_REPORT_LU, NEIC.ARCHIVES_REPORT_TAG, NEIC.ARCHIVES_REPORT_LIST, NEIC.ARCHIVES_REPORT_SUBJECT
  where NEIC.ARCHIVES_REPORT_LU.TAGID = NEIC.ARCHIVES_REPORT_TAG.ID
    and NEIC.ARCHIVES_REPORT_LU.ID = NEIC.ARCHIVES_REPORT_LIST.ID
    and NEIC.ARCHIVES_REPORT_LU.SID = NEIC.ARCHIVES_REPORT_SUBJECT.ID
    <!--- Only include tags in this subject --->
    and NEIC.ARCHIVES_REPORT_LU.SID = <cfqueryparam cfsqltype="cf_sql_integer" value="#subjectid#" />
    <!--- This gets only the tags marked as being subsections --->
    and NEIC.ARCHIVES_REPORT_TAG.ORIGIN = 'bs'
    <!--- Exclude the tags 'All' (No longer used) and 'Most Requested' (Already included in the submenu) --->
    and NEIC.ARCHIVES_REPORT_LU.TAGID <> 0 and NEIC.ARCHIVES_REPORT_LU.TAGID <> 214
    <!--- Sort by the tag names --->
    order by Lower(ARCHIVES_REPORT_TAG.TAG)
</cfquery>
<!--- Hardcoded above since some sections include multiple subjects, or have a longer section name
<!--- Get the section name (Can't use row 1 from the query above b/c it doesn't return anything for some subjects) --->
<cfquery name="SubjectNameQuery" datasource="NEIC">
  select SUBJECT
  from ARCHIVES_REPORT_SUBJECT
  where ID = #subjectid#
</cfquery>
<cfset sectionname = SubjectNameQuery.SUBJECT>
--->
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
        <li><a href="/electricity/reports.cfm">All electricity data reports</a></li>
      </ul>
    </div>
    <!---/ Data Menu Drop Down --->
    
    <li class="dropdown <cfif locale EQ 'ap'>active</cfif>"><a href="/electricity/reports.cfm">Analysis & Projections</a></li>

    <!--- Reports Menu Drop Down --->
    <div id="analysis-projections" class="dat_block dat_links" style="width:600px;">

      <!--- Left side --->
      <div style="float:left; width:400px;">
        <h4 style="margin: 12px 20px 6px 20px;border-bottom:1px solid #CCC;padding-bottom:2px;">Major Topics</h4>
        <ul class="split_2columns" style="margin-bottom:16px;">
          <li><a href="/electricity/reports.cfm#/T214">Most popular</a></li>
          <cfoutput>
          <!--- Iterate over all major topics (tags in this subject with ORIGIN=bs) --->
          <cfloop query="SubsectionTagsQuery">
            <!--- Use a regular expression to strip out parentheses (and anything inside them) --->
            <cfset WithoutParentheses = Trim(reReplaceNoCase(TAG, "\(.*\)", "", "all"))>
            <cfset SentenceCase = UCase(Left(WithoutParentheses, 1)) & Right(WithoutParentheses, Len(WithoutParentheses) - 1)>
            <li><a href="/electricity/reports.cfm##/T#tagid#">#SentenceCase#</a></li>
          </cfloop>
          </cfoutput>
          <li class="no-border" style="padding-bottom:0px;"><a href="/electricity/reports.cfm">All reports</a></li>
        </ul>
      </div>

      <!--- Right side --->
      <div class="listContainer2" style="width:200px; float:right">
        <h4 style="margin: 12px 20px 6px 20px; border-bottom:1px solid #ccc; padding-bottom:2px;">Browse by Tag</h4>
        <ul>
          <li><a href="/electricity/browsebytag.cfm">Alphabetical</a></li>
          <li><a href="/electricity/browsebytag.cfm?frequency">Frequency</a></li>
          <li><a href="/electricity/browsebytag.cfm?tagcloud">Tag Cloud</a></li>
        </ul>
      </div>
    </div>
    <!---/ Data Menu Drop Down --->
  </ul>
</div><!---/ Page/Sub Nav --->