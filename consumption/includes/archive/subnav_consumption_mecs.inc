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
<?php /* Consumption Sub Nav */ ?>
<?php $L2Title = "Manufacturing Energy Consumption Survey (MECS)"; ?>
<div class="title bg_industrial"> 
  <?php /* Page/Section Title */ ?> 
  <a href="../">&#8249; Consumption &amp; Efficiency</a>
  <h1 style="font-size:27px">
    <?php echo "$L2Title"; echo PHP_EOL;?>
  </h1>
</div>
<?php /*/ Page/Section Title */ ?>
<div class="subnav"> 
  <?php /* Page/Sub Nav */ ?> 
  <span class="right"><a href="<?php echo "$glossary_path"?>?id=consumption">Glossary &rsaquo;</a><a href="<?php echo "$faqs_path"?>#crudeoil">FAQS &rsaquo;</a></span>
  <ul>
    <li <?php if ( $locale == 'overview') {?>class="active"<?php  } // end if ?>><a href="/consumption/manufacturing/index.php">Overview</a></li>
    <li class="dropdown <?php if ( $locale == 'data') {?>active<?php  } // end if ?>"><a href="/consumption/manufacturing/data/index.php">Data</a></li>
    <div class="dat_block">
      <ul>
      <li ><a href="/consumption/manufacturing/data/2014/">2014</a></li>
        <li ><a href="/consumption/manufacturing/data/2010/">2010</a></li>
        <li ><a href="/consumption/manufacturing/data/2006/">2006</a></li>
        <li><a href="/consumption/manufacturing/data/2002/">2002</a></li>
        <li><a href="/consumption/manufacturing/data/1998/">1998</a></li>
        <li><a href="/consumption/manufacturing/data/1994/">1994</a></li>
        <li><a href="/consumption/manufacturing/data/1991/">1991</a></li>
        <?php /*li><a href="/consumption/manufacturing/data/1988/">1988</a></li>
        <li><a href="/consumption/manufacturing/data/1985/">1985</a></li */ ?>
        <li><a href="/consumption/manufacturing/data/archive/">Archive</a></li>
      </ul>
      
    </div>
    <li <?php if ( $locale == 'ap') {?>class="active"<?php  } // end if ?>><a href="/consumption/manufacturing/reports.php">Analysis &amp; Projections</a></li>
  </ul>
</div>
<?php /*/ Page/Sub Nav */ ?> 
