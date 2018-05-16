<?php
$pageTitle = '';
$locale = 'data';
?>
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
<body>
<?php /* Start of Outer Wrapper */ ?>
<div id="outerX"> 
  <?php /* EIA Header */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
  <?php /* Navigation Menu */ ?>
  <?php include ('includes/subnav_coal.inc') ; ?>



      
      <div class="l-row">
      <div class="l-main-col">
        <?php include('includes/main-data.inc'); ?>
        <div class="weeklies"> <span>
        <h2>Regular Weekly Releases*</h2>
        <h3>Monday</h3>
        <p><a href="/coal/markets/">Coal Markets</a> (*Formerly Weekly NYMEX Coal Futures and Coal News & Markets)</p>
        <?php /* Commented out by CA2 on 10/27/2012
            <p><a href="/coal/page/coalnews/coalmar.html">Coal News &amp; Markets &rsaquo;</a></p>
*/ ?>
        <h3>Thursday</h3>
        <p><a href="/coal/production/weekly/">Weekly Coal Production</a></p>
        <p class="no-border"><i>*No releases: Tuesday, Wednesday, or Friday. Releases change on weeks with federal holidays.</i></p>
        </span> </div>
      </div>
      <div class="l-narrow-col">
        <?php include('includes/side-data.inc') ?><?php include ('includes/side_data.inc') ; ?>
      </div>
    </div>
    <?php include('css_rehab/archive/global/footer/includes/footer.inc') ?>
    </body>
    </html>