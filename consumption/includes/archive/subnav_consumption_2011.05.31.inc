<?php /* Consumption Sub Nav */ ?>
    <div class="title bg_enduse"><?php /* Page/Section Title */ ?>
      <h1>Consumption & Efficiency</h1>
    </div><?php /*/ Page/Section Title */ ?>
    
    <div class="subnav"><?php /* Page/Sub Nav */ ?>
    <span class="right"><a href="<?php echo "$glossary_path"?>?id=consumption">Glossary &rsaquo;</a> <a href="<?php echo "$faqs_path"?>#crudeoil">FAQS &rsaquo;</a></span>
       <ul>
        <li <?php if ( $locale == 'overview') {?>class="active"<?php  } // end if ?>><a href="/consumption/">Overview</a></li>
        <li <?php if ( $locale == 'data') {?>class="active"<?php  } // end if ?>><a href="/consumption/data.cfm">Data</a></li>
        <li <?php if ( $locale == 'ap') {?>class="active"<?php  } // end if ?>><a href="/consumption/reports.cfm">Analysis & Projections</a></li>
      </ul>
    </div><?php /*/ Page/Sub Nav */ ?>
    
    
 