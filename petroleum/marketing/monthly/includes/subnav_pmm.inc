<?php $L2Title = "Petroleum & Other Liquids"; ?>
<div class="title bg_petroleum">
<h1><?php echo "$L2Title"?></h1>
</div>
<div class="subnav">
<span class="align-right"><a href="<?php echo "$glossary_path"?>?id=petroleum">Glossary &rsaquo;</a><a href="<?php echo "$faqs_path"?>#crudeoil">FAQS &rsaquo;</a></span>
    <ul>
<li <?php if ( $locale == 'overview') {?>class="active"<?php  } // end if ?>><a href="/petroleum/">Overview</a></strong>
<li  <?php if ( $locale == 'data') {?>class="active"<?php  } // end if ?>><a href="/petroleum/data.php">Data</a></strong>
<li <?php if ( $locale == 'ap') {?>class="active"<?php  } // end if ?>><a href="/petroleum/reports.php">Analysis & Projections</a></strong>
    </ul>
