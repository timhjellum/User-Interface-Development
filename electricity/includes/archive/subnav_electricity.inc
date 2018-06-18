<?php /* Section-specific variables */ ?>
<?php $l2id = 2; ?>
<?php $sectionname = "Electricity"; ?>

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
<?php /* include ('global/includes/sub_menu_fix.inc') ;*/ ?>
<?php /* Page/Section Title */ ?>
<div class="title bg_electricity">
  <h1><?php echo "$sectionname"?></h1>
</div>

<div class="subnav">
  <?php /* Page/Sub Nav */ ?>
  <span class="right"><div hidden>electricity </div> <a href="<?php echo "$glossary_path"?>?id=electricity">Glossary &rsaquo;</a> <div hidden>electricity </div> <a href="<?php echo "$faqs_path"?>#electricity">FAQS &rsaquo;</a></span>
  <ul>
    <li <?php if ( $locale == 'overview') {?>class="active"<?php  } // end if ?>><a href="/electricity/">Overview</a></li>
    <li class="dropdown <?php if ( $locale == 'data') {?>active<?php  } // end if ?>"><a href="/electricity/data.php">Data</a></li>
    <?php /* Data Menu Drop Down */ ?>
    <div class="dat_block dat_links">
      <ul>
        <li><a href="/electricity/data/browser">Electricity Data Browser <i>(interactive query tool with charting &amp; mapping)</i></a></li>
        <li><a href="/electricity/data.php#summary">Summary</a></li>
        <li><a href="/electricity/data.php#sales">Sales (consumption), revenue, prices & customers</a></li>
        <li><a href="/electricity/data.php#generation">Generation and thermal output</a></li>
        <li><a href="/electricity/data.php#gencapacity">Capacity of electric power plants</a></li>
        <li><a href="/electricity/data.php#consumption">Consumption of fuels used to generate electricity</a></li>
        <li><a href="/electricity/data.php#fossilfuels">Receipts of fossil-fuels for electricity generation</a></li>
        <li><a href="/electricity/data.php#avgcost">Average cost of fossil-fuels for electricity generation</a></li>
        <li><a href="/electricity/data.php#ffstocks">Fossil-fuel stocks for electricity generation</a></li>
        <!--              <li><a href="/electricity/data.php#electriccosts">Electricity costs</a></li> -->
        <li><a href="/electricity/data.php#revenue">Cost, revenue and expense statistics for...</a></li>
        <li><a href=" /electricity/data.php#traderel">Electricity transactions, reliability</a></li>
        <!--        <li><a href="/electricity/data.php#demand">Demand, capacity resources, and capacity margins</a></li>
				 -->        <li><a href="/electricity/data.php#elecenv">Electricity and the environment</a></li>
        <li><a href="/electricity/data.php">All electricity data reports</a></li>
      </ul>
    </div>
    <?php /*/ Data Menu Drop Down */ ?>
    
    <li class="dropdown <?php if ( $locale == 'ap') {?>active<?php  } // end if ?>"><a href="/electricity/reports.php">Analysis & Projections</a></li>

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
          <li><a href="/electricity/browsebytag.php">Alphabetical</a></li>
          <li><a href="/electricity/reports.php#/T194,T214,T182,T198,T1564">Recurring</a></li> 
           <?php /* <li><a href="/electricity/browsebytag.php?frequency">Frequency</a></li> */ ?>
          <li><a href="/electricity/browsebytag.php?tagcloud">Tag Cloud</a></li>
        </ul>
      </div>
    </div>
    <?php /*/ Data Menu Drop Down */ ?>
  </ul>
</div><?php /*/ Page/Sub Nav */ ?>