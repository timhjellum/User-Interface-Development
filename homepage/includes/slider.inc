<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› or the  &rsaquo; */

$slideOneURL = "/petroleum/drilling/";
$slideOneImageName = "slide01.jpg";
$slideOneLabel = "Drilling Productivity Report";
$slideOneDescription = "Approach to assessing the productivity of oil and gas drilling operations&mdash; March report";

$slideTwoURL = "/forecasts/steo/";
$slideTwoImageName = "slide02.jpg";
$slideTwoLabel = "Short-Term Energy Outlook March 2018";
$slideTwoDescription = "Energy projections for supply, demand, and prices";

$slideThreeURL = "/outlooks/aeo/";
$slideThreeImageName = "slide03.jpg";
$slideThreeLabel = "Annual Energy Outlook 2018";
$slideThreeDescription = "Full Annual Energy Outlook with projections to 2050";

$slideFourURL = "/conference/2018/";
$slideFourImageName = "slide04.jpg";
$slideFourLabel = "2018 EIA Energy Conference, June 4-5";
$slideFourDescription = "Session topics now available";

$slideFiveURL = "/petroleum/marketing/monthly/";
$slideFiveImageName = "slide05.jpg";
$slideFiveLabel = "Petroleum Marketing Monthly";
$slideFiveDescription = "Monthly price and volume statistics on crude oil and petroleum products";

$slideSixURL = "/beta/international/analysis.cfm?iso=SDN";
$slideSixImageName = "slide06.jpg";
$slideSixLabel = "Most of Sudan&#039s and South Sudan&#039s oil and gas reserves extend into both countries";
$slideSixDescription = "Read the Country Analysis Brief";

/* DO NOT EDIT BELOW */
/* DO NOT EDIT BELOW */
/* DO NOT EDIT BELOW */
?>



<div class="l-row header">
	<div class="slider-home-top"></div>
    <div class="slider-home">
        <ul>
			<li>
				<img src='/css_rehab/archive/homepage/images/slider/<?=$slideOneImageName?>?<?php echo(rand());?>' alt='<?=$slideOneLabel?>' />
				<div class="slider-overlay">
					<h2><a href='<?=$slideOneURL?>' title='<?=$slideOneLabel?>'><?=$slideOneLabel?></a></h2> 
					<h3><a href='<?=$slideOneURL?>'><?=$slideOneDescription?></a></h3>
				</div>
			</li>
			<li>
				<img src='/css_rehab/archive/homepage/images/slider/<?=$slideTwoImageName?>?<?php echo(rand());?>' alt='<?=$slideTwoLabel?>' />
				<div class="slider-overlay">
					<h2><a href='<?=$slideTwoURL?>' title='<?=$slideTwoLabel?>'><?=$slideTwoLabel?></a></h2> 
					<h3><a href='<?=$slideTwoURL?>'><?=$slideTwoDescription?></a></h3>
				</div>
			</li>
			<li>
				<img src='/css_rehab/archive/homepage/images/slider/<?=$slideThreeImageName?>?<?php echo(rand());?>' alt='<?=$slideThreeLabel?>' />
				<div class="slider-overlay">
					<h2><a href='<?=$slideThreeURL?>' title='<?=$slideThreeLabel?>'><?=$slideThreeLabel?></a></h2> 
					<h3><a href='<?=$slideThreeURL?>'><?=$slideThreeDescription?></a></h3>
				</div>
			</li>
			<li>
				<img src='/css_rehab/archive/homepage/images/slider/<?=$slideFourImageName?>?<?php echo(rand());?>' alt='<?=$slideFourLabel?>' />
				<div class="slider-overlay">
					<h2><a href='<?=$slideFourURL?>' title='<?=$slideFourLabel?>'><?=$slideFourLabel?></a></h2> 
					<h3><a href='<?=$slideFourURL?>'><?=$slideFourDescription?></a></h3>
				</div>
			</li>
			<li>
				<img src='/css_rehab/archive/homepage/images/slider/<?=$slideFiveImageName?>?<?php echo(rand());?>' alt='<?=$slideFiveLabel?>' />
				<div class="slider-overlay">
					<h2><a href='<?=$slideFiveURL?>' title='<?=$slideFiveLabel?>'><?=$slideFiveLabel?></a></h2> 
					<h3><a href='<?=$slideFiveURL?>'><?=$slideFiveDescription?></a></h3>
				</div>
			</li>
			<li>
				<img src='/css_rehab/archive/homepage/images/slider/<?=$slideSixImageName?>?<?php echo(rand());?>' alt='<?=$slideSixLabel?>' />
				<div class="slider-overlay">
					<h2><a href='<?=$slideSixURL?>' title='<?=$slideSixLabel?>'><?=$slideSixLabel?></a></h2> 
					<h3><a href='<?=$slideSixURL?>'><?=$slideSixDescription?></a></h3>
				</div>
			</li>
        </ul>
        <div class="slider-home-pager"></div>
    </div>
    <div class="slider-home-bottom"></div>
</div>