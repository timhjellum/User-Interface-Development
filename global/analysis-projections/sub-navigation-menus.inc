<?php
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();
global $l2id;

$neic->sql =<<<SQL
SELECT ID FROM neic.bs_tags where l2_id = :l2id
SQL;
$bindVariables = array(':l2id' => $l2id);
$results = $neic->get($bindVariables);
if(count($results) > 0) {
	$CorrespondingTag = $results[0]['id'];
}
//$tags = isset($tags) ? $tags : '';

if($l2id == 0) {
?>
<ul class="l-one-third-col">
    <li><a href="/petroleum/reports.php#/T<?php echo $CorrespondingTag;?>,T214">Most popular</a></li>
    <li><a href="/petroleum/reports.php#/T<?php echo $CorrespondingTag;?>,T100">Consumption/demand</a></li>
    <li><a href="/petroleum/reports.php#/T<?php echo $CorrespondingTag;?>,T1167">Exports/imports</a></li>
    <li><a href="/petroleum/reports.php#/T<?php echo $CorrespondingTag;?>,T186">Forecasts/projections </a></li>
    <li><a href="/petroleum/reports.php#/T<?php echo $CorrespondingTag;?>,T1302">Inventories/stocks</a></li>
</ul>
<ul class="l-one-third-col">
    <li><a href="/petroleum/reports.php#/T<?php echo $CorrespondingTag;?>,T66">Prices</a></li>
    <li><a href="/petroleum/reports.php#/T<?php echo $CorrespondingTag;?>,T80">Production/supply</a></li>
    <li><a href="/petroleum/reports.php#/T<?php echo $CorrespondingTag;?>,T70">Refining</a></li>
    <li><a href="/petroleum/reports.php#/T<?php echo $CorrespondingTag;?>,T82">Reserves</a></li>
    <li><a href="/petroleum/reports.php#/T<?php echo $CorrespondingTag;?>">All reports</a></li>
</ul>
<?php
} elseif($l2id == 1) {
?>
<ul class="l-one-third-col">
    <li><a href="/naturalgas/reports.php#/T<?php echo $CorrespondingTag;?>,T214">Most popular</a></li>
    <li><a href="/naturalgas/reports.php#/T<?php echo $CorrespondingTag;?>,T100">Consumption/demand</a></li>
    <li><a href="/naturalgas/reports.php#/T<?php echo $CorrespondingTag;?>,T1167">Exports/imports</a></li>
    <li><a href="/naturalgas/reports.php#/T<?php echo $CorrespondingTag;?>,T186">Forecasts/projections </a></li>
    <li><a href="/naturalgas/reports.php#/T<?php echo $CorrespondingTag;?>,T66">Prices</a></li>
</ul>
<ul class="l-one-third-col">
    <li><a href="/naturalgas/reports.php#/T<?php echo $CorrespondingTag;?>,T80">Production/supply</a></li>
    <li><a href="/naturalgas/reports.php#/T<?php echo $CorrespondingTag;?>,T82">Reserves</a></li>
    <li><a href="/naturalgas/reports.php#/T<?php echo $CorrespondingTag;?>,T174">Storage</a></li>
    <li><a href="/naturalgas/reports.php#/T<?php echo $CorrespondingTag;?>">All reports</a></li>
</ul>
<?php
} elseif($l2id == 3) {
?>
<ul class="l-one-third-col">
    <li><a href="/coal/reports.php#/T<?php echo $CorrespondingTag;?>,T214">Most popular</a></li>
    <li><a href="/coal/reports.php#/T<?php echo $CorrespondingTag;?>,T100">Consumption/demand </a></li>
    <li><a href="/coal/reports.php#/T<?php echo $CorrespondingTag;?>,T76">Environment</a></li>
    <li><a href="/coal/reports.php#/T<?php echo $CorrespondingTag;?>,T1167">Exports/imports </a></li>
    <li><a href="/coal/reports.php#/T<?php echo $CorrespondingTag;?>,T186">Forecasts/Projections</a></li>
</ul>
<ul class="l-one-third-col">
    <li><a href="/coal/reports.php#/T<?php echo $CorrespondingTag;?>,T1302">Inventories/stocks</a></li>
    <li><a href="/coal/reports.php#/T<?php echo $CorrespondingTag;?>,T66">Prices</a></li>
    <li><a href="/coal/reports.php#/T<?php echo $CorrespondingTag;?>,T80">Production/supply</a></li>
    <li><a href="/coal/reports.php#/T<?php echo $CorrespondingTag;?>,T82">Reserves</a></li>
    <li><a href="/coal/reports.php#/T<?php echo $CorrespondingTag;?>">All reports</a></li>
</ul>
<?php
} elseif($l2id == 2) {
?>
<ul class="l-one-third-col">
    <li><a href="/electricity/reports.php#/T<?php echo $CorrespondingTag;?>,T214">Most popular</a></li>
    <li><a href="/electricity/reports.php#/T<?php echo $CorrespondingTag;?>,T1679">Capacity</a></li>
    <li><a href="/electricity/reports.php#/T<?php echo $CorrespondingTag;?>,T98">Costs</a></li>
    <li><a href="/electricity/reports.php#/T<?php echo $CorrespondingTag;?>,T100">Demand response</a></li>
    <li><a href="/electricity/reports.php#/T<?php echo $CorrespondingTag;?>,T76">Environment</a></li>
    <li><a href="/electricity/reports.php#/T<?php echo $CorrespondingTag;?>,T96">Generation</a></li>
    <li><a href="/electricity/reports.php#/T<?php echo $CorrespondingTag;?>,T1302">Inventories/stocks</a></li>
</ul>
<ul class="l-one-third-col">
    <li><a href="/electricity/reports.php#/T<?php echo $CorrespondingTag;?>,T1068">Policy</a></li>
    <li><a href="/electricity/reports.php#/T<?php echo $CorrespondingTag;?>,T1199">Power plants</a></li>
    <li><a href="/electricity/reports.php#/T<?php echo $CorrespondingTag;?>,T186">Forecasts/projections</a></li>
    <li><a href="/electricity/reports.php#/T<?php echo $CorrespondingTag;?>,T98">Revenue</a></li>
    <li><a href="/electricity/reports.php#/T<?php echo $CorrespondingTag;?>,T110">Sales</a></li>
    <li><a href="/electricity/reports.php#/T<?php echo $CorrespondingTag;?>,T1177">Transmission</a></li>
    <li><a href="/electricity/reports.php#/T<?php echo $CorrespondingTag;?>">All reports</a></li>
</ul>
<?php
} elseif($l2id == 7) {
?>
<ul class="l-one-third-col">
    <li><a href="/renewable/reports.php#/T<?php echo $CorrespondingTag;?>,T214">Most popular</a></li>
    <li><a href="/renewable/reports.php#/T<?php echo $CorrespondingTag;?>,T1248">Alternative Fuels</a></li>
    <li><a href="/renewable/reports.php#/T<?php echo $CorrespondingTag;?>,T1679">Capacity</a></li>
    <li><a href="/renewable/reports.php#/T<?php echo $CorrespondingTag;?>,T100">Consumption/demand </a></li>
    <li><a href="/renewable/reports.php#/T<?php echo $CorrespondingTag;?>,T76">Environment</a></li>
</ul>
<ul class="l-one-third-col">
    <li><a href="/renewable/reports.php#/T<?php echo $CorrespondingTag;?>,T186">Forecasts/projections</a></li>
    <li><a href="/renewable/reports.php#/T<?php echo $CorrespondingTag;?>,T96">Generation</a></li>
    <li><a href="/renewable/reports.php#/T<?php echo $CorrespondingTag;?>,T66">Prices</a></li>
    <li><a href="/renewable/reports.php#/T<?php echo $CorrespondingTag;?>,T80">Production/supply</a></li>
    <li><a href="/renewable/reports.php#/T<?php echo $CorrespondingTag;?>">All reports</a></li>
</ul>
<?php
} elseif($l2id == "5") {
?>
<ul class="l-one-third-col">
    <li><a href="/nuclear/reports.php#/T<?php echo $CorrespondingTag;?>,T214">Most popular</a></li>
    <li><a href="/nuclear/reports.php#/T<?php echo $CorrespondingTag;?>,T1199">Power plants</a></li>
    <li><a href="/nuclear/reports.php#/T<?php echo $CorrespondingTag;?>,T186">Forecasts/projections</a></li>
</ul>
<ul class="l-one-third-col">
    <li><a href="/nuclear/reports.php#/T<?php echo $CorrespondingTag;?>,T1098">Outages</a></li>
    <li><a href="/nuclear/reports.php#/T<?php echo $CorrespondingTag;?>,T156">Uranium</a></li>
    <li><a href="/nuclear/reports.php#/T<?php echo $CorrespondingTag;?>">All reports</a></li>
</ul>
<?php
} elseif($l2id == "4") {
?>
<ul class="l-one-third-col">
    <li><a href="/consumption/reports.php#/T<?php echo $CorrespondingTag;?>,T214">Most popular</a></li>
    <li><a href="/consumption/reports.php#/T<?php echo $CorrespondingTag;?>,T88">Commercial</a></li>
    <li><a href="/consumption/reports.php#/T<?php echo $CorrespondingTag;?>,T218">Efficiency</a></li>
    <li><a href="/consumption/reports.php#/T<?php echo $CorrespondingTag;?>,T186">Forecasts/projections</a></li>
</ul>
<ul class="l-one-third-col">
    <li><a href="/consumption/reports.php#/T<?php echo $CorrespondingTag;?>,T90">Manufacturing</a></li>
    <li><a href="/consumption/reports.php#/T<?php echo $CorrespondingTag;?>,T86">Residential</a></li>
    <li><a href="/consumption/reports.php#/T<?php echo $CorrespondingTag;?>,T92">Transportation</a></li>
    <li><a href="/consumption/reports.php#/T<?php echo $CorrespondingTag;?>">All reports</a></li>
</ul>
<?php
}  elseif($l2id == "6") {
?>
<ul class="l-one-third-col">
    <li><a href="/totalenergy/reports.php#/T<?php echo $CorrespondingTag;?>,T214">Most popular</a></li>
    <li><a href="/totalenergy/reports.php#/T<?php echo $CorrespondingTag;?>,T182">Annual</a></li>
    <li><a href="/totalenergy/reports.php#/T<?php echo $CorrespondingTag;?>,T198">Monthly</a></li>
</ul>
<ul class="l-one-third-col">
    <li><a href="/totalenergy/reports.php#/T<?php echo $CorrespondingTag;?>,T186">Forecasts/projections</a></li>
    <li><a href="/totalenergy/reports.php#/T<?php echo $CorrespondingTag;?>,T1304">States</a></li>
    <li><a href="/totalenergy/reports.php#/T<?php echo $CorrespondingTag;?>">All reports</a></li>
</ul>
<?php
}  elseif($l2id == "9") {
?>
<ul class="l-one-third-col">
    <li><a href="/analysis/reports.php#/T<?php echo $CorrespondingTag;?>,T214">Most popular</a></li>
    <li><a href="/analysis/reports.php#/T<?php echo $CorrespondingTag;?>,T128">AEO (Annual Energy Outlook)</a></li>
    <li><a href="/analysis/reports.php#/T<?php echo $CorrespondingTag;?>,T138">Congressional & other requests</a></li>
</ul>
<ul class="l-one-third-col">
    <li><a href="/analysis/reports.php#/T<?php echo $CorrespondingTag;?>,T132">IEO (International Energy Outlook)</a></li>
    <li><a href="/analysis/reports.php#/T<?php echo $CorrespondingTag;?>,T1139">STEO (Short-Term Energy Outlook)</a></li>
    <li><a href="/analysis/reports.php#/T<?php echo $CorrespondingTag;?>">All reports</a></li>
</ul>
<?php
} elseif($l2id == "8") {
?>
<ul class="l-one-third-col">
    <li><a href="/environment/reports.php#/T<?php echo $CorrespondingTag;?>,T214">Most popular</a></li>
    <li><a href="/environment/reports.php#/T<?php echo $CorrespondingTag;?>,T1166">Emissions</a></li>
    <li><a href="/environment/reports.php#/T<?php echo $CorrespondingTag;?>,T186">Forecasts/projections</a></li>
</ul>
<ul class="l-one-third-col">
    <li><a href="/environment/reports.php#/T<?php echo $CorrespondingTag;?>,T116">International</a></li>
    <li><a href="/environment/reports.php#/T<?php echo $CorrespondingTag;?>">All reports</a></li>
</ul>
<?php
} elseif($l2id == "10") {
?>
<ul class="l-one-third-col">
    <li><a href="/finance/reports.php#/T<?php echo $CorrespondingTag;?>,T214">Most popular</a></li>
    <li><a href="/finance/reports.php#/T<?php echo $CorrespondingTag;?>,T194">Electricity</a></li>
    <li><a href="/finance/reports.php#/T<?php echo $CorrespondingTag;?>,T192">Coal</a></li>
</ul>
<ul class="l-one-third-col">
    <li><a href="/finance/reports.php#/T<?php echo $CorrespondingTag;?>,T202">Natural gas</a></li>
    <li><a href="/finance/reports.php#/T<?php echo $CorrespondingTag;?>,T1288">Oil/petroleum</a></li>
    <li><a href="/finance/reports.php#/T<?php echo $CorrespondingTag;?>">All reports</a></li>
</ul>
<?php
}
?>
