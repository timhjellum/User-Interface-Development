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
<?php $L2Title = "Commercial Buildings Energy Consumption Survey (CBECS)"; ?>
<div class="title bg_commercial"> 
  <?php /* Page/Section Title */ ?> 
  <a href="/consumption/">&#8249; Consumption &amp; Efficiency</a>
  <h1 style="font-size:27px"> <?php echo "$L2Title"?>
  </h1>
</div>
<?php /*/ Page/Section Title */ ?>
<div class="subnav"> 
  <?php /* Page/Sub Nav */ ?> 
  <span class="right"><a href="<?php echo "$glossary_path"?>?id=consumption">Glossary &rsaquo;</a><a href="<?php echo "$faqs_path"?>#crudeoil">FAQS &rsaquo;</a></span>
  <ul>
    <li <?php if ( $locale == 'overview') {?>class="active"<?php  } // end if ?>><a href="/consumption/commercial/">Overview</a></li>
    <li class="dropdown <?php if ( $locale == 'data') {?>active<?php  } // end if ?>"><a href="/consumption/commercial/data/2012/">Data</a></li>
    <div class="dat_block">
      <ul><li><a href="/consumption/commercial/data/2012/">2012</a></li>
        <li><a href="/consumption/commercial/data/2003/">2003</a></li>
        <li><a href="/consumption/commercial/data/1999/">1999</a></li>
        <li><a href="/consumption/commercial/data/1995/">1995</a></li>
        <li><a href="/consumption/commercial/data/1992/">1992</a></li>
        <li><a href="/consumption/commercial/data/previous/">Previous</a></li>
      </ul>
    </div>
    <li <?php if ( $locale == 'ap') {?>class="active"<?php  } // end if ?>><a href="/consumption/commercial/reports.php">Analysis &amp; Projections</a></li>
</div>
<?php /*/ Page/Sub Nav */ ?> 
