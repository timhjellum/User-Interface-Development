<!--- Section-specific variables --->
<cfset l2id = 9>
<cfset sectionname = "Analysis & Projections">

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
<div class="title bg_analysis">
  <h1><cfoutput>#sectionname#</cfoutput></h1>
</div>

<div class="subnav"><!--- Page/Sub Nav --->
  <span class="right"><a href="<cfoutput>#glossary_path#</cfoutput>">Glossary &rsaquo;</a> <a href="<cfoutput>#faqs_path#</cfoutput>">FAQS &rsaquo;</a></span>
  <ul>
    <li <cfif locale EQ 'overview'>class="active"</cfif>><a href="/analysis/">Overview</a></li>
    <li class="dropdown <cfif locale EQ 'data'>active</cfif>"><a href="/analysis/projection-data.php">Projection Data</a></li>
    <!--- Data Menu Drop Down --->
    <div class="dat_block dat_links">
      <ul>
        <li><a href="/analysis/projection-data.php#forecasts">Monthly short-term forecasts through the next calendar year</a></li>
        <li><a href="/analysis/projection-data.php#annualproj">Annual projections to 2050</a></li>
        <li><a href="/analysis/projection-data.php#intlproj">International projections</a></li>
        <li><a href="/analysis/projection-data.php">All projections reports</a></li>
      </ul>
    </div>

    <!---/ Data Menu Drop Down --->
    <li class="dropdown <cfif locale EQ 'ap'>active</cfif>"><a href="/analysis/reports.php">Analysis & Projections</a></li>

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
          <li><a href="/analysis/browsebytag.php">Alphabetical</a></li>
          <li><a href="/analysis/browsebytag.php?frequency">Frequency</a></li>
          <li><a href="/analysis/browsebytag.php?tagcloud">Tag Cloud</a></li>
        </ul>
      </div>
    </div>
    <!---/ Data Menu Drop Down --->
  </ul>
</div><!---/ Page/Sub Nav --->