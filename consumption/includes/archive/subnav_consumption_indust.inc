<?php /* Renewable Sub Nav */ ?>
    <div class="title bg_industrial">
<?php /* Page/Section Title */ ?>
      <a href="index.php">&lsaquo; Consumption & Efficiency</a>
      <h1>Consumption</h1>
    </div><?php /*/ Page/Section Title */ ?>
    
    <div class="subnav">
<?php /* Page/Sub Nav */ ?>
    <span class="right"><a href="<?php echo "$glossary_path"?>">Glossary &rsaquo;</a><a href="<?php echo "$faqs_path"?>#crudeoil">FAQS &rsaquo;</a></span>
       <ul>
        <li <?php if ( $locale == 'overview') {?>class="active"<?php  } // end if ?>><a href="/consumption/">Overview</a></li>
        <li <?php if ( $locale == 'industrial') {?>class="active"<?php  } // end if ?>><a href="/consumption/industrial/">Industrial</a></li>
        <li <?php if ( $locale == 'commercial') {?>class="active"<?php  } // end if ?>><a href="/consumption/commercial/">Commercial</a></li>
        <li <?php if ( $locale == 'industrial') {?>class="active"<?php  } // end if ?>><a href="/consumption/industrial/">Industrial</a></li>
      </ul>
    </div><?php /*/ Page/Sub Nav */ ?>