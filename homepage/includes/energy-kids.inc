<div class="content-container energy-kids">
	<a href="/kids/">
		<?php
		$yearin=date("Y");
		$format = "m/d/Y";
		$now = DateTime::createFromFormat($format, date($format));
		$options = (object) [
			'summer' => [["05/31/","08/27/"]],
			'halloween' => [["10/07/","11/01/"]],
			'thanksgiving' => [["11/14/","11/29/"]],
			'winter' => [["12/01/","12/31/"],["01/01/","03/01/"]],
			'umbrella' => [["02/28/","04/16/"]],
			'spring' => [["04/15/","06/01/"]]
		];

		$keepGoing=true;
		$theme="standard";
		foreach($options as $key => $value) {
			if($keepGoing)
			foreach($value as $index => $dates) {
				if($keepGoing){
					$date1  = DateTime::createFromFormat($format, $dates[0].$yearin);
					$date2  = DateTime::createFromFormat($format, $dates[1].$yearin);
					if($now>$date1&&$now<$date2){
						$theme=$key;
						$keepGoing=false;
					}
				}
			}
		}
		?>
		<picture>
			<source media="(min-width: 956px)" srcset="/css_rehab/archive/homepage/images/energy-kids/kids-laptop-<?php echo $theme; ?>.png?<?php echo(rand());?>">
			<source media="(min-width: 480px)" srcset="/css_rehab/archive/homepage/images/energy-kids/kids-tablet-<?php echo $theme; ?>.png?<?php echo(rand());?>">
			<img src="/css_rehab/archive/homepage/images/energy-kids/kids-mobile-<?php echo $theme; ?>.png?<?php echo(rand());?>" alt="Small image of Energy Kids banner with host Energy Ant">
		</picture>
	</a>
</div>

