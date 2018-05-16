<?php /* Section-specific variables */ ?>
<?php $subjectids = "140,142"; ?>
<?php /*
Consumption = 140
Efficiency = 142
Renewable = 223
Alternative fuels = 132
*/ ?>
<?php $sectionname = "Consumption & Efficiency"; ?>

<script>
<?php /* Fire when jQuery is ready */ ?>
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
<?php /*cfinclude template="/global/includes/sub_menu_fix.cfm"*/ ?>
<?php /* Page/Section Title */ ?>
<div class="title bg_enduse">
  <h1><?php echo "$sectionname"?></h1>
</div>

<div class="subnav">
  <?php /* Page/Sub Nav */ ?>
  <span class="right"><a href="<?php echo "$glossary_path"?>?id=consumption">Glossary &rsaquo;</a> <a href="<?php echo "$faqs_path"?>#conversion%20equivalents">FAQS &rsaquo;</a></span>
  <ul>
    <li <?php if ( $locale == 'overview') {?>class="active"<?php  } // end if ?>><a href="/consumption/">Overview</a></li>
    <li class="dropdown <?php if ( $locale == 'data') {?>active<?php  } // end if ?>"><a href="/consumption/data.cfm">Data</a></li>
    <?php /* Data Menu Drop Down */ ?>
    <div class="dat_block dat_links">
      <ul>
      <li><a href="/consumption/data.cfm#rec">Residential Energy Consumption Survey data</a></li>
      <li><a href="/consumption/data.cfm#cec">Commercial Energy Consumption Survey data</a></li>
      <li><a href="/consumption/data.cfm#mfg">Manufacturing Energy Consumption Survey data</a></li>
      <li><a href="/consumption/data.cfm#vehicles">Vehicle Energy Consumption Survey data</a></li>
      <li><a href="/consumption/data.cfm#intensity">Energy intensity</a></li>
      <li><a href="/consumption/data.cfm#consumption">Consumption summaries</a></li>
      <li><a href="/consumption/data.cfm#avgcost">Average cost of fossil-fuels for electricity generation</a></li>
      <li><a href="/consumption/data.cfm">All consumption &amp; efficiency data reports</a></li>
      </ul>
    </div>
    <?php /*/ Data Menu Drop Down */ ?>

    <li class="dropdown <?php if ( $locale == 'ap') {?>active<?php  } // end if ?>"><a href="/consumption/reports.cfm">Analysis & Projections</a></li>

    <?php /* Reports Menu Drop Down */ ?>
    <div id="analysis-projections" class="dat_block dat_links" style="width:600px;">

      <?php /* Left side */ ?>
      <div style="float:left; width:400px;">
        <h4 style="margin: 12px 20px 6px 20px;border-bottom:1px solid #CCC;padding-bottom:2px;">Major Topics</h4>
        <ul class="split_2columns" style="margin-bottom:16px;">
          <?php /* Analysis & Projections Menu Include */ ?>
          <?php include ('global/includes/menu_ap.inc') ; ?>
        </ul>
      </div>

      <?php /* Right side */ ?>
      <div class="listContainer2" style="width:200px; float:right">
        <h4 style="margin: 12px 20px 6px 20px; border-bottom:1px solid #ccc; padding-bottom:2px;">Browse by Tag</h4>
        <ul>
          <li><a href="/consumption/browsebytag.cfm">Alphabetical</a></li>
          <li><a href="/consumption/browsebytag.cfm?frequency">Frequency</a></li>
          <li><a href="/consumption/browsebytag.cfm?tagcloud">Tag Cloud</a></li>
        </ul>
      </div>
    </div>

    <?php /* BEGIN Proposed new drop-down to reach End-Use Reports at L2 level -->
    <li class="dropdown"><a href="#">End-Use Consumption Surveys</a></li>
    <div class="dat_block">
      <ul>
        <li><a href="#">Overview</a></li>
        <li><a href="/consumption/residential/">Residential Energy Consumption (RECS)</a></li>
        <li><a href="/emeu/cbecs/contents.html">Commercial Building Energy Consumption (CBECS)</a></li>
        <li><a href="/emeu/mecs/contents.html">Manufacturing Energy Consumption (MECS)</a></li>
        <li><a href="/emeu/rtecs/contents.html">Transportation (RTECS)</a></li>
      </ul>
    </div>
    <!-- END Proposed new drop-down to reach End-Use Reports at L2 level*/ ?>

    <?php /*/ Data Menu Drop Down */ ?>
  </ul>
</div><?php /*/ Page/Sub Nav */ ?>