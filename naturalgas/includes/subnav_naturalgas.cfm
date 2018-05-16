<!--- Section-specific variables --->
<cfset l2id = 1>
<cfset sectionname = "Natural Gas">

<!--- Fire when jQuery is ready --->
<script>
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
<div class="title bg_naturalgas">
  <h1><cfoutput>#sectionname#</cfoutput></h1>
</div>

<div class="subnav"><!--- Page/Sub Nav --->
  <span class="right"><a href="<cfoutput>#glossary_path#</cfoutput>?id=natural%20gas">Glossary &rsaquo;</a> <a href="<cfoutput>#faqs_path#</cfoutput>#naturalgas">FAQS &rsaquo;</a></span>
  <ul>
    <li <cfif locale EQ 'overview'>class="active"</cfif>><a href="/naturalgas/">Overview</a></li>
    <li class="dropdown <cfif locale EQ 'data'>active</cfif>"><a href="/naturalgas/data.cfm">Data</a></li>
    <!--- Data Menu Drop Down --->
    <div class="dat_block dat_links">
      <ul>
        <li><a href="/naturalgas/data.cfm#summary">Summary</a></li>
        <li><a href="/naturalgas/data.cfm#prices">Prices</a></li>
        <li><a href="/naturalgas/data.cfm#exploration">Exploration & reserves</a></li>
        <li><a href="/naturalgas/data.cfm#production">Production</a></li>
        <li><a href="/naturalgas/data.cfm#imports">Imports/exports</a></li>
        <li><a href="/naturalgas/data.cfm#pipelines">Pipelines</a></li>
        <li><a href="/naturalgas/data.cfm#storage" target="_parent">Storage</a></li>
        <li><a href="/naturalgas/data.cfm#consumption">Consumption</a></li>
        <li><a href="/naturalgas/data.cfm">All natural gas data reports</a></li>
      </ul>
    </div>
    <!---/ Data Menu Drop Down --->

    <li class="dropdown <cfif locale EQ 'ap'>active</cfif>"><a href="/naturalgas/reports.cfm">Analysis & Projections</a></li>

    <!--- Reports Menu Drop Down --->
    <div id="analysis-projections" class="dat_block dat_links" style="width:600px;">

      <!--- Left side --->
      <div style="float:left; width:400px;">
        <h4 style="margin: 12px 20px 6px 20px;border-bottom:1px solid #CCC;padding-bottom:2px;">Major Topics</h4>
        <ul class="split_2columns" style="margin-bottom:16px;">
          <!--- Analysis & Projections Menu Include --->
          <cfinclude template="\global\includes\menu_ap.cfm">
        </ul>
      </div>

      <!--- Right side --->
      <div class="listContainer2" style="width:200px; float:right">
        <h4 style="margin: 12px 20px 6px 20px; border-bottom:1px solid #ccc; padding-bottom:2px;">Browse by Tag</h4>
        <ul>
          <li><a href="/naturalgas/browsebytag.cfm">Alphabetical</a></li>
          <li><a href="/naturalgas/browsebytag.cfm?frequency">Frequency</a></li>
          <li><a href="/naturalgas/browsebytag.cfm?tagcloud">Tag Cloud</a></li>
        </ul>
      </div>
    </div>
    <!---/ Data Menu Drop Down --->
  </ul>
</div><!---/ Page/Sub Nav --->
