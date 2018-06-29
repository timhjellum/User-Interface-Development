<?php /* Section-specific variables */ ?>
<?php $l2id = 8; ?>
<?php $sectionname = "Environment"; ?>

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
<?php /*cfinclude template="/global/includes/sub_menu_fix.php"*/ ?>
<?php /* Page/Section Title */ ?>
<div class="title bg_coal">
  <h1><?php echo "$sectionname"?></h1>
</div>

<div class="subnav"><?php /* Page/Sub Nav */ ?>
  <span class="right"><a href="<?php echo "$glossary_path"?>?id=environment">Glossary &rsaquo;</a><a href="<?php echo "$faqs_path"?>#environment">FAQS &rsaquo;</a></span>
  <ul>
    <li <?php if ( $locale == 'overview') {?>class="active"<?php  } // end if ?>><a href="index.php">Overview</a></li>
    <li class="dropdown <?php if ( $locale == 'data') {?>active<?php  } // end if ?>"><a href="data.php">Data</a></li>
    <?php /* Data Menu Drop Down */ ?>
    <div class="dat_block dat_links">
      <ul>
        <li><a href="../../data.php#summary">Summary</a></li>
        <li><a href="../../data.php#electric">Electric power plant environmental</a></li>
        <li><a href="../../data.php#intl">International emissions</a></li>
        <li><a href="../../data.php">All environment data reports</a></li>
      </ul>
    </div>
    <?php /*/ Data Menu Drop Down */ ?>

    <li class="dropdown <?php if ( $locale == 'ap') {?>active<?php  } // end if ?>"><a href="reports.php">Analysis & Projections</a></li>

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
          <li><a href="../../browsebytag.php">Alphabetical</a></li>
          <li><a href="../../browsebytag.php?frequency">Frequency</a></li>
          <li><a href="../../browsebytag.php?tagcloud">Tag Cloud</a></li>
        </ul>
      </div>
    </div>
    
  </ul>
</div><?php /*/ Page/Sub Nav */ ?>