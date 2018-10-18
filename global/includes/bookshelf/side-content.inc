<div class="secondary-alt">
    <ul>
        <li class="head"><h2>Newly Released and Upcoming</h2></li>
        <li><a id="whatsnew" href="/about/new/">What's New </a>highlights each new report -- everyday.</li>
        <li><a id="upcoming" href="/reports/upcoming.php">Upcoming</a> shows what reports will be coming out and when.</li>
    </ul>
</div>

<div class="clear"></div>


  	<?php if ($L2T=='Petroleum & Other Liquids') : ?>	
<div class="secondary-alt">
    <ul>
        <li class="head"><h2>Published Weekly</h2></li>
        <li><a href="/petroleum/gasdiesel/">Gasoline and Diesel Fuel Update</a><br>Every Monday at 5:00 p.m. ET</li>
        <li><a href="/petroleum/supply/weekly/">Weekly Petroleum Status Report</a><br>Every Wednesday at 10:30 a.m. ET</li>
        <li><a href="/petroleum/heatingoilpropane/">Heating Oil and Propane Update</a><br>Every Wednesday, after 1:00 p.m. ET<br>(October - March only)</li>
        <li><a href="/petroleum/weekly/">This Week in Petroleum </a><br>Every Wednesday, after 1:00 p.m. ET</li>
        <li><em>*release dates change on weeks with Federal holidays.</em></li>
    </ul>
</div>
  	<?php endif; ?>	

  	<?php if ($L2T=='Coal') : ?>	
<div class="secondary-alt">
    <ul>
        <li class="head"><h2>Published Weekly</h2></li>
        <li><a href="/coal/markets/">Coal Markets</a><br>Every Monday at 5:00 p.m. ET</li>
        <li><a href="/coal/production/weekly/">Weekly Coal Production</a><br>Every Thursday at 5:00 p.m. ET</li>
        <li><em>*release dates change on weeks with Federal holidays.</em></li>
    </ul>
</div>
  	<?php endif; ?>	
  	
  	<?php if ($L2T=='Natural Gas') : ?>	
<div class="secondary-alt">
    <ul>
        <li class="head"><h2>Published Weekly</h2></li>
        <li><a href="http://ir.eia.gov/ngs/ngs.html">Weekly Natural Gas Storage Report</a><br>Every Thursday at 10:30 a.m. EST*</li>
        <li><a id="tbd3" href="/naturalgas/weekly/">Natural Gas Weekly Update</a><br>Every Thursday at 2:00 - 2:30 p.m. EST*</li>
      <!--p><a id="tbd1" href="/naturalgas/monthly/" target="none">Natural Gas Monthly</a></li>
        <li><a id="tbd2" href="/naturalgas/annual/">Natural Gas Annual</a><br></p-->
        <li><em>*release dates change on weeks with Federal holidays.</em></li>
    </ul>
</div>
  	<?php endif; ?>	

  	<?php // if ($L2T=='Renewable & Alternative Fuels') : ?>
      <!---p><a href="/petroleum/ethanolcapacity/index.cfm">U.S. Fuel Ethanol Plant Production Capacity</a><br>June <?php //echo date(Y); ?><br></p-->
  	<?php // endif; ?>

  	<?php if ($L2T=='Electricity') : ?>	
<div class="secondary-alt">
    <ul>
        <li class="head"><h2>Published Frequently</h2></li>
        <li><a href="/beta/realtime_grid/">Electric System Operating Data</a><br>Updated hourly</li>
        <li><a href="/electricity/wholesale/">Wholesale Electricity and Natural Gas Market Data</a><br>Biweekly on Thursdays</li>
      <!--p><a href="/electricity/monthly/">Electric Power Monthly</a><br>between the 20th and the 25th  of the month</li>
        <li><a href="/electricity/monthly/update">Electricity Monthly Update</a><br>between the 20th and the 25th of the month<br></p-->
        </ul>
    </div>
<?php endif; ?>

  	<?php if ($L2T=='Nuclear & Uranium') : ?>	
<div class="secondary-alt">
    <ul>
        <li class="head"><h2>Updated Daily</h2></li>
        <li><a href="/nuclear/outages/">Status of Nuclear Outages</a></li>
     <!--
         <li><em>*release dates change on weeks with Federal holidays.</em></p>
        -->
    </ul>
</div>
  	<?php endif; ?>	

  	<?php //if ($L2T=='Consumption & Efficiency') : ?>	
      <!---p><a id="tbd4" href=""></a><br></p--->
  	<?php //endif; ?>

  	<?php //if ($L2T=='Total Energy') : ?>
      <!--
        <li><a href="/forecasts/steo/">Short-Term Energy Outlook</a><br>6/6/<?php //echo date(Y);?></li>
        <li><a href="/totalenergy/data/monthly/">Monthly Energy Review</a><br>6/27/<?php //echo date(Y);?></li>
    -->
  	<?php //endif; ?>
<?php //include ('global/includes/issuestrends/recent_AP_schedule.inc') ; ?>

