<?php /* Section-specific variables */ ?>

<?php $l2id = 7; ?>

<?php /*
Consumption = 140
Efficiency = 142
Renewable = 223
Alternative fuels = 132
*/ ?>
<?php $sectionname = "Renewable & Alternative Fuels"; ?>

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
<?php /* include ('global/includes/sub_menu_fix.inc') ; */ ?>
<?php /* Page/Section Title */ ?>
<div class="title bg_renewable">
  <h1><?php echo "$sectionname"?></h1>
</div>

<div class="subnav"><?php /* Page/Sub Nav */ ?>
  <span class="right"><div hidden="">renewables </div><a href="<?php echo "$glossary_path"?>?id=renewable">Glossary &rsaquo;</a> <div hidden="">renewables </div><a href="<?php echo "$faqs_path"?>#renewable">FAQS &rsaquo;</a></span>
  <ul>
    <li <?php if ( $locale == 'overview') {?>class="active"<?php  } // end if ?>><a href="/renewable/">Overview</a></li>
    <li class="dropdown <?php if ( $locale == 'data') {?>active<?php  } // end if ?>"><a href="/renewable/data.php">Data</a></li>
    <?php /* Data Menu Drop Down */ ?>
    <div class="dat_block dat_links">
        <ul>
          <li><a href="/renewable/data.php#summary">Summary</a></li>
          <li><a href="/renewable/data.php#biomass">Biomass</a></li>
          <li><a href="/renewable/data.php#geothermal">Geothermal</a></li>
          <li><a href="/renewable/data.php#hydro">Hydropower</a></li>
          <li><a href="/renewable/data.php#solar">Solar</a></li>
          <li><a href="/renewable/data.php#wind">Wind</a></li>
          <li><a href="/renewable/data.php#alternative">Alternative transportation fuels</a></li>
          <li><a href="/renewable/data.php">All renewable &amp; alternative fuels data reports</a></li>
        </ul>
    </div>
    <?php /*/ Data Menu Drop Down */ ?>
    
    <li class="dropdown <?php if ( $locale == 'ap') {?>active<?php  } // end if ?>"><a href="/renewable/reports.php">Analysis & Projections</a></li>

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
          <li><a href="/renewable/browsebytag.php">Alphabetical</a></li>
          <li><a href="/renewable/reports.php#/T1099,T182,T198">Recurring</a></li>
          <li><a href="/renewable/browsebytag.php?tagcloud">Tag Cloud</a></li>
        </ul>
      </div>
    </div>
    <?php /*/ Data Menu Drop Down */ ?>
  </ul>
</div><?php /*/ Page/Sub Nav */ ?>