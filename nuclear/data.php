<?php $locale = 'data'; ?>
<?php /*cfinclude template="/global/includes/no_cache_headers.cfm"*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>

<script type="text/javascript">
function MM_jumpMenuGo(objId,targ,restore){ //v9.0
  var selObj = null;  with (document) { 
  if (getElementById) selObj = getElementById(objId);
  if (selObj) eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0; }
}
</script>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
</head>
<body>
<?php /* Start of Outer Wrapper */ ?>
<div id="outerX">
  <?php /* EIA Header */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
  <?php /* Navigation Menu */ ?>
  <?php include ('includes/subnav_nuclear.inc') ; ?>

    <div class="l-row">
    <div class="l-main-col">
      <?php include('includes/main-data.inc'); ?>
    </div>
    <div class="l-narrow-col">
      <?php include('includes/side-data.inc') ?><?php include ('includes/side_data.inc') ; ?>
    </div>
  </div>
  <?php include('css_rehab/archive/global/footer/includes/footer.inc') ?>
  </body>
  </html>