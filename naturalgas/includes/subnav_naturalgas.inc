<?php /* Section-specific variables */ ?>
<?php $l2id = 1; ?>
<?php $sectionname = "Natural Gas"; ?>

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
<div class="title bg_naturalgas">
  <h1><?php echo "$sectionname"?></h1>
</div>

<div class="subnav"><?php /* Page/Sub Nav */ ?>
  <span class="right"><div hidden>natural gas </div> <a href="<?php echo "$glossary_path"?>?id=natural%20gas">Glossary &rsaquo;</a> <div hidden>natural gas </div> <a href="<?php echo "$faqs_path"?>#naturalgas">FAQS &rsaquo;</a></span>
  <ul>
    <li <?php if ( $locale == 'overview') {?>class="active"<?php  } // end if ?>><a href="/naturalgas/">Overview</a></li>
    <li class="dropdown <?php if ( $locale == 'data') {?>active<?php  } // end if ?>"><a href="/naturalgas/data.php">Data</a></li>
    <?php /* Data Menu Drop Down */ ?>
    <div class="dat_block dat_links">
      <ul>
        <li><a href="/naturalgas/data.php#summary">Summary</a></li>
        <li><a href="/naturalgas/data.php#prices">Prices</a></li>
        <li><a href="/naturalgas/data.php#exploration">Exploration & reserves</a></li>
        <li><a href="/naturalgas/data.php#production">Production</a></li>
        <li><a href="/naturalgas/data.php#imports">Imports/exports</a></li>
        <li><a href="/naturalgas/data.php#pipelines">Pipelines</a></li>
        <li><a href="/naturalgas/data.php#storage" target="_parent">Storage</a></li>
        <li><a href="/naturalgas/data.php#consumption">Consumption</a></li>
        <li><a href="/naturalgas/data.php">All natural gas data reports</a></li>
      </ul>
    </div>
    <?php /*/ Data Menu Drop Down */ ?>

    <li class="dropdown <?php if ( $locale == 'ap') {?>active<?php  } // end if ?>"><a href="/naturalgas/reports.php">Analysis & Projections</a></li>

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
        <h4 style="margin: 12px 20px 6px 20px; border-bottom:1px solid #ccc; padding-bottom:2px;">Find by</h4>
        <ul>
          <li><a href="/naturalgas/browsebytag.php">Alphabetical</a></li>
          <li><a href="/naturalgas/reports.php#/T202,T182,T198,T1564,T1568">Recurring</a></li>
          <li><a href="/naturalgas/browsebytag.php?tagcloud">Tag Cloud</a></li>
        </ul>
      </div>
    </div>
    <?php /*/ Data Menu Drop Down */ ?>
  </ul>
</div><?php /*/ Page/Sub Nav */ ?>
