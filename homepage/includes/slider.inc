<?php
/* edit the link URL, Title and Date below */
/* no need to add the  > or the &nbsp;› or the  &rsaquo; */

$slideOneURL = "/special/disruptions/";
$slideOneImageName = "slide01.jpg";
$slideOneTitle = "Tropical Storm Gordon";
$slideOneDescription = "See energy infrastructure in the storm's path";

$slideTwoURL = "/petroleum/supply/monthly/";
$slideTwoImageName = "slide02.jpg";
$slideTwoTitle = "Petroleum Supply Monthly";
$slideTwoDescription = "With data for June 2018";

$slideThreeURL = "/petroleum/transportation/";
$slideThreeImageName = "slide03.jpg";
$slideThreeTitle = "U.S. Movements of Crude Oil By Rail";
$slideThreeDescription = "With data through June 2018";

$slideFourURL = "/beta/international/analysis.php?iso=KOR";
$slideFourImageName = "slide04.jpg";
$slideFourTitle = "South Korea is one of the world's leading energy importers";
$slideFourDescription = "Read the Country Analysis Brief";

$slideFiveURL = "/totalenergy/data/monthly/";
$slideFiveImageName = "slide05.jpg";
$slideFiveTitle = "Monthly Energy Review";
$slideFiveDescription = "Recent energy statistics";

$slideSixURL = "/petroleum/drilling/";
$slideSixImageName = "slide06.jpg";
$slideSixTitle = "Drilling Productivity Report";
$slideSixDescription = "Assessing the productivity of oil and natural gas drilling operations&#8212;August 2018 report";



/* test slide - you must remove the 'start' and 'end' php comment lines to view the slide */

/*$slideSevURL = "";
$slideSevImageName = "";
$slideSevTitle = "";
$slideSevDescription = "";*/

/* DO NOT EDIT BELOW */
/* DO NOT EDIT BELOW */
/* DO NOT EDIT BELOW */
?>

<?php $arrow = ""; ?>
<div class="l-row header">
	<div class="slider-home-top"></div>
    <div class="slider-home">
        <ul>
			<li class="b1">
				<img src='/homepage/images/slider/<?=$slideOneImageName?>?<?php echo(rand());?>' alt='<?=$slideOneTitle?>' />
				<div class="slider-overlay">
		<h2><a href='<?=$slideOneURL?>' title='<?=$slideOneTitle?>'><?=$slideOneTitle?><?php $s1d = $slideOneDescription;$s1dEmpty = '';if ($s1d == $s1dEmpty) {echo  $arrow;} ?></a></h2> 
					<h3><a href='<?=$slideOneURL?>'><?=$slideOneDescription?></a></h3>
				</div>
			</li>
			<li class="b2">
				<img src='/homepage/images/slider/<?=$slideTwoImageName?>?<?php echo(rand());?>' alt='<?=$slideTwoTitle?>' />
				<div class="slider-overlay">
		<h2><a href='<?=$slideTwoURL?>' title='<?=$slideTwoTitle?>'><?=$slideTwoTitle?><?php $s2d = $slideTwoDescription;$s2dEmpty = '';if ($s2d == $s2dEmpty) {echo  $arrow;} ?></a></h2> 
					<h3><a href='<?=$slideTwoURL?>'><?=$slideTwoDescription?></a></h3>
				</div>
			</li>
			<li class="b3">
				<img src='/homepage/images/slider/<?=$slideThreeImageName?>?<?php echo(rand());?>' alt='<?=$slideThreeTitle?>' />
				<div class="slider-overlay">
		<h2><a href='<?=$slideThreeURL?>' title='<?=$slideThreeTitle?>'><?=$slideThreeTitle?><?php $s3d = $slideThreeDescription;$s3dEmpty = '';if ($s3d == $s3dEmpty) {echo  $arrow;} ?></a></h2> 
					<h3><a href='<?=$slideThreeURL?>'><?=$slideThreeDescription?></a></h3>
				</div>
			</li>
			<li class="b4">
				<img src='/homepage/images/slider/<?=$slideFourImageName?>?<?php echo(rand());?>' alt='<?=$slideFourTitle?>' />
				<div class="slider-overlay">
		<h2><a href='<?=$slideFourURL?>' title='<?=$slideFourTitle?>'><?=$slideFourTitle?><?php $s4d = $slideFourDescription;$s4dEmpty = '';if ($s4d == $s4dEmpty) {echo  $arrow;} ?></a></h2> 
					<h3><a href='<?=$slideFourURL?>'><?=$slideFourDescription?></a></h3>
				</div>
			</li>
			<li class="b5">
				<img src='/homepage/images/slider/<?=$slideFiveImageName?>?<?php echo(rand());?>' alt='<?=$slideFiveTitle?>' />
				<div class="slider-overlay">
		<h2><a href='<?=$slideFiveURL?>' title='<?=$slideFiveTitle?>'><?=$slideFiveTitle?></a><?php $s5d = $slideFiveDescription;$s5dEmpty = '';if ($s5d == $s5dEmpty) {echo  $arrow;} ?></h2> 
					<h3><a href='<?=$slideFiveURL?>'><?=$slideFiveDescription?></a></h3>
				</div>
			</li>
			<li class="b6">
				<img src='/homepage/images/slider/<?=$slideSixImageName?>?<?php echo(rand());?>' alt='<?=$slideSixTitle?>' />
				<div class="slider-overlay">
		<h2><a href='<?=$slideSixURL?>' title='<?=$slideSixTitle?>'><?=$slideSixTitle?><?php $s6d = $slideSixDescription;$s6dEmpty = '';if ($s6d == $s6dEmpty) {echo  $arrow;} ?></a></h2> 
					<h3><a href='<?=$slideSixURL?>'><?=$slideSixDescription?></a></h3>
				</div>
			</li>
            
            
<?php /* start php comment - everything below cannot will not display
			<li class="b7">
			<li class="b7">
				<img src='/homepage/images/slider/<?=$slideSevImageName?>?<?php echo(rand());?>' alt='<?=$slideSevTitle?>' />
				<div class="slider-overlay">
		<h2><a href='<?=$slideSevURL?>' title='<?=$slideSevTitle?>'><?=$slideSevTitle?><?php $s7d = $slideSevDescription;$s7dEmpty = '';if ($s7d == $s7dEmpty) {echo  $arrow;} ?></a></h2> 
					<h3><a href='<?=$slideSevURL?>'><?=$slideSevDescription?></a></h3>
				</div>
			</li>
				<img src='/homepage/images/slider/<?=$slideSevImageName?>?<?php echo(rand());?>' alt='<?=$slideSevTitle?>' />
				<div class="slider-overlay">
		<h2><a href='<?=$slideSevURL?>' title='<?=$slideSevTitle?>'><?=$slideSevTitle?><?php $s7d = $slideSevDescription;$s7dEmpty = '';if ($s7d == $s7dEmpty) {echo  $arrow;} ?></a></h2> 
					<h3><a href='<?=$slideSevURL?>'><?=$slideSevDescription?></a></h3>
				</div>
			</li>
end php comment */ ?>
        </ul>
        <div class="slider-home-pager"></div>
    </div>
    <div class="slider-home-bottom"></div>
</div>

