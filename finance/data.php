<?php $locale = 'data'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<body>
<?php /* Start of Outer Wrapper */ ?>
<div id="outerX"> 
  <?php /* EIA Header */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
      <?php /* Navigation Menu */ ?>
      <?php include ('includes/subnav_finance.inc') ; ?>

          <div class="l-row">
          <div class="l-main-col">          <a name="mpurc" id="mpurc"></a><h1>Market Prices and Uncertainty Report Charts</h1>
          <table width="100%" class="zebra">
            <thead>
              <tr>
                <th><strong>Selected Charts</strong></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <tr><td><a href="/forecasts/steo/uncertainty/images/uncertainty_fig1.png" class="lightbox">Figure 1: Historical crude oil front month futures prices</a></td><td></td></tr>
            <tr>
              <td><a href="/forecasts/steo/uncertainty/images/uncertainty_fig7.png" class="lightbox">Figure 7: Probability of the January 2016 WTI contract expiring above  price levels</a></td><td></td></tr>
            <tr>
              <td><a href="/forecasts/steo/uncertainty/images/uncertainty_fig8.png" class="lightbox">Figure 8: Historical RBOB futures prices and crack spreads</a></td><td></td></tr>
            <tr>
              <td><a href="/forecasts/steo/uncertainty/images/uncertainty_fig12.png" class="lightbox">Figure 12: Probability of January 2016  retail gasoline exceeding different prices levels at expiration</a></td><td></td></tr>
            <tr>
              <td><a href="/forecasts/steo/uncertainty/images/uncertainty_fig14.png" class="lightbox">Figure 14:  U.S. natural gas prices and storage</a></td><td></td></tr>
            <tr>
              <td><a href="/forecasts/steo/uncertainty/images/uncertainty_fig16.png" class="lightbox">Figure 16: Probability of the January 2016 Henry Hub contract expiring above price levels</a></td><td></td></tr>
              <tr>
                <td><a href="/forecasts/steo/images/Fig1.png" class="lightbox">West Texas Intermediate (WTI) Crude Oil Price Confidence Intervals</a></td>
                <td><span class="right"><a href="/forecasts/steo/xls/Fig1.xls" class="ico_xls"><span hidden="West Texas Intermediate (WTI) Crude Oil Price Confidence Intervals "></span>
XLS</a></span></td>
              </tr>
              <tr>
                <td><a href="/forecasts/steo/images/Probability_WTI.png" class="lightbox">West Texas Intermediate (WTI) Crude Oil Price Probabilities</a></td>
                <td><span class="right"><a href="/forecasts/steo/xls/Probability_WTI.xls" class="ico_xls"><span hidden="West Texas Intermediate (WTI) Crude Oil Price Probabilities "></span>
XLS</a></span></td>
              </tr>
              <tr>
                <td><a href="/forecasts/steo/images/Fig4.png" class="lightbox">Henry Hub natural gas prices and confidence intervals</a></td>
                <td><span class="right"><a href="/forecasts/steo/xls/Fig4.xls" class="ico_xls"><span hidden="Henry Hub natural gas prices and confidence intervals "></span>
XLS</a></span></td>
              </tr>
              <tr>
                <td><a href="/forecasts/steo/images/Probability_HH.png" class="lightbox">Henry Hub natural gas price probabilities</a></td>
                <td><span class="right"><a href="/forecasts/steo/xls/Probability_HH.xls" class="ico_xls"><span hidden="Henry Hub natural gas price probabilities "></span>
XLS</a></span></td>
              </tr>
            </tbody>
          </table>
          <h1><a name="archive" id="archive"></a>Archive</h1>
        <h2><a name="frs"></a>Financial Reporting System (FRS) <span style="color:red; font-style:bold;" class="right">(suspended)</span></h2>


            <?php include('includes/main-data.inc'); ?>
          </div>
          <div class="l-narrow-col">
            <?php include('includes/side-data.inc') ?>      <?php include ('includes/side_data.inc') ; ?>
          </div>
        </div>
        <?php include('css_rehab/archive/global/footer/includes/footer.inc') ?>
        </body>
        </html>