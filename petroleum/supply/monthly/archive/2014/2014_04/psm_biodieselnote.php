<?php $locale = 'overview'; ?>
<?php include_once('../../../../../../config.php'); ?>
<!DOCTYPE html>
<html>
<head>
<?php include(ROOT.'global/includes/css_rehab_eia-head.inc'); ?>

<?php if(!isset($no_titling)) include(ROOT.'global/includes/titling.inc'); ?>
</head>
<body>

<?php /* Outer Wrapper */ ?>
<?php include(ROOT.'global/includes/css_rehab_eia-header.inc'); ?>
<section class="content">
    <div class="l-outer-wrapper" id="outerX">
      <div class="l-inner-wrapper" id="innerX">
        <div class="content">
          <div class="l-row header">
	          <div class="l-full-width-col">
<?php include(ROOT.'global/petroleum/includes/subnav_petroleum.inc'); ?>
<?php /* Page/Body Content */ ?>

	  
            </div>
          </div>
<div class="l-row">
<div class="l-main-col">
<?php /* start main content */ ?>





     
<h3>Biodiesel Production Data</h3>

<p style="font-size:11px;margin:0px;padding:4px 0px;color:#7d7d7d;">
<strong>Released: April 29, 2014</strong></p>


<dl class="survey"> 

<p>
Biodiesel production data are reported as "Renewable Fuels and Oxygenate Plant Net Production" of "Renewable Fuels Except Fuel Ethanol" on supply and disposition tables of the <a href="/petroleum/supply/monthly/">Petroleum Supply Monthly (PSM)</a> and on supply and disposition tables available from Petroleum Navigator. The source for biodiesel production data is Form EIA-22M "Monthly Biodiesel Production Survey". U.S. and regional aggregated data from Form EIA-22M are reported in the <a href="/biofuels/biodiesel/production/">Monthly Biodiesel Report</a> that is normally released on the same day as the PSM. However, release of the Monthly Biodiesel Report with data for February 2014 is delayed to allow time for implementation of new systems by EIA. Therefore, biodiesel production data in the PSM for February 2014 were estimated by EIA and are only partially based on survey data.
</p>

 
</dl>


        </div>
<?php /* END Left Column */ ?>

      </div>
<?php /*/ Page/Body Content */ ?>
      </div><?php /* end .content */ ?>
    </div><?php /* end .l-inner-wrapper */ ?>
  </div><?php /* end .l-outer-wrapper */ ?>
</section><?php /* end section */ ?>
<?php include(ROOT.'global/includes/css_rehab_eia-footer.inc'); ?>

<?php /*/ Outer Wrapper */ ?>

</body>
</html>