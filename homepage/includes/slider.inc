<?php
/* edit the link URL, Title and Date below */
/* no need to add the  > or the &nbsp;› or the  &rsaquo; */

$slideOneURL = "/outlooks/aeo/section_issues.php#grt";
$slideOneImageName = "slide01.jpg";
$slideOneTitle = "Annual Energy Outlook 2018 Issue in Focus: Oil and Natural Gas Resources and Technology Analysist";
$slideOneDescription = "";

$slideTwoURL = "/beta/international/analysis.cfm?iso=GBR";
$slideTwoImageName = "slide02.jpg";
$slideTwoTitle = "The United Kingdom is the second-largest producer of oil in OECD Europe";
$slideTwoDescription = "Read the Country Analysis Brief";

$slideThreeURL = "/petroleum/drilling/";
$slideThreeImageName = "slide03.jpg";
$slideThreeTitle = "Drilling Productivity Report";
$slideThreeDescription = "Approach to assessing the productivity of oil and gas drilling operations&#8212; March report";

$slideFourURL = "/conference/2018/";
$slideFourImageName = "slide04.jpg";
$slideFourTitle = "2018 EIA Energy Conference, June 4-5";
$slideFourDescription = "Session topics now available";

$slideFiveURL = "/petroleum/marketing/monthly/";
$slideFiveImageName = "slide05.jpg";
$slideFiveTitle = "Petroleum Marketing Monthly";
$slideFiveDescription = "Monthly price and volume statistics on crude oil and petroleum products";

$slideSixURL = "/electricity/monthly/";
$slideSixImageName = "slide06.jpg";
$slideSixTitle = "Electric Power Monthly";
$slideSixDescription = "Data for January 2018";

/* DO NOT EDIT BELOW */
/* DO NOT EDIT BELOW */
/* DO NOT EDIT BELOW */
?>



<div class="l-row header">
	<div class="slider-home-top"></div>
    <div class="slider-home">
        <ul>
			<li class="b1">
				<img src='/css_rehab/archive/homepage/images/slider/<?=$slideOneImageName?>?<?php echo(rand());?>' alt='<?=$slideOneTitle?>' />
				<div class="slider-overlay">
					<h2><a href='<?=$slideOneURL?>' title='<?=$slideOneTitle?>'><?=$slideOneTitle?></a></h2> 
					<h3><a href='<?=$slideOneURL?>'><?=$slideOneDescription?></a></h3>
				</div>
			</li>
			<li class="b2">
				<img src='/css_rehab/archive/homepage/images/slider/<?=$slideTwoImageName?>?<?php echo(rand());?>' alt='<?=$slideTwoTitle?>' />
				<div class="slider-overlay">
					<h2><a href='<?=$slideTwoURL?>' title='<?=$slideTwoTitle?>'><?=$slideTwoTitle?></a></h2> 
					<h3><a href='<?=$slideTwoURL?>'><?=$slideTwoDescription?></a></h3>
				</div>
			</li>
			<li class="b3">
				<img src='/css_rehab/archive/homepage/images/slider/<?=$slideThreeImageName?>?<?php echo(rand());?>' alt='<?=$slideThreeTitle?>' />
				<div class="slider-overlay">
					<h2><a href='<?=$slideThreeURL?>' title='<?=$slideThreeTitle?>'><?=$slideThreeTitle?></a></h2> 
					<h3><a href='<?=$slideThreeURL?>'><?=$slideThreeDescription?></a></h3>
				</div>
			</li>
			<li class="b4">
				<img src='/css_rehab/archive/homepage/images/slider/<?=$slideFourImageName?>?<?php echo(rand());?>' alt='<?=$slideFourTitle?>' />
				<div class="slider-overlay">
					<h2><a href='<?=$slideFourURL?>' title='<?=$slideFourTitle?>'><?=$slideFourTitle?></a></h2> 
					<h3><a href='<?=$slideFourURL?>'><?=$slideFourDescription?></a></h3>
				</div>
			</li>
			<li class="b5">
				<img src='/css_rehab/archive/homepage/images/slider/<?=$slideFiveImageName?>?<?php echo(rand());?>' alt='<?=$slideFiveTitle?>' />
				<div class="slider-overlay">
					<h2><a href='<?=$slideFiveURL?>' title='<?=$slideFiveTitle?>'><?=$slideFiveTitle?></a></h2> 
					<h3><a href='<?=$slideFiveURL?>'><?=$slideFiveDescription?></a></h3>
				</div>
			</li>
			<li class="b6">
				<img src='/css_rehab/archive/homepage/images/slider/<?=$slideSixImageName?>?<?php echo(rand());?>' alt='<?=$slideSixTitle?>' />
				<div class="slider-overlay">
					<h2><a href='<?=$slideSixURL?>' title='<?=$slideSixTitle?>'><?=$slideSixTitle?></a></h2> 
					<h3><a href='<?=$slideSixURL?>'><?=$slideSixDescription?></a></h3>
				</div>
			</li>
        </ul>
        <div class="slider-home-pager"></div>
    </div>
    <div class="slider-home-bottom"></div>
</div>