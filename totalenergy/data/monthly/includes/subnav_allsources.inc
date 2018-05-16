<script>
$(function(){
	$('.subnav .dat').dd();
});
</script>
<?php /* Renewable Sub Nav */ ?>
    <div class="title bg_allsources"><?php /* Page/Section Title */ ?>
      <h1>Total Energy</h1>
    </div><?php /*/ Page/Section Title */ ?>
    
    <div class="subnav"><?php /* Page/Sub Nav */ ?>
    <span class="right"><a href="<?php echo "$glossary_path"?>">Glossary &rsaquo;</a> <a href="<?php echo "$faqs_path"?>">FAQS &rsaquo;</a></span>
       <ul>
        <li <?php if ( $locale == 'overview') {?>class="active"<?php  } // end if ?>><a href="/totalenergy/">Overview</a></li>
        <li class="dat"><a href="/totalenergy/">Data</a></li>
        <div>
          <ul>
            <li><a href="/totalenergy/data/monthly/index.cfm">Monthly</a></li>
            <li><a href="/totalenergy/data/annual/index.cfm" class="no-border">Annual</a></li>
          </ul>
        </div>
        <li <?php if ( $locale == 'ap') {?>class="active"<?php  } // end if ?>><a href="/totalenergy/reports.cfm">Analysis & Projections</a></li>
      </ul>
    </div><?php /*/ Page/Sub Nav */ ?>