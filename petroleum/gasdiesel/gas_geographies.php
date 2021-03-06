<?php include_once('../../config.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Gasoline and Diesel Fuel Update</title>
<?php include(ROOT.'global/includes/css_rehab_eia-head.inc'); ?>
<?php if(!isset($no_titling)) include(ROOT.'global/includes/titling.inc'); ?>
</head>
<body>
<?php include(ROOT.'global/includes/css_rehab_eia-header.inc'); ?>
<?php include('../includes/sub-navigation.inc'); ?>
<?php $headtitle = 'Gasoline and Diesel Fuel Update'; ?>
<?php include('./includes/report-details.inc'); ?>
<div class="l-row l-two-col-right-narrow">
<div class="l-main-col">
<?php /* start main content */ ?>
<a name="pricesbyregion"></a>
<p>
<span><a href="images/gasoline_prices_map.png" class="lightbox"><img src="images/gasoline_prices_map.png" width="620" title="gasoline prices by region"/></a></span></p>
<span style="float:left">
<p>&nbsp;</p>
<a name="reformulatedmap"></a>
<p>
<span><a href="images/reformulated-v3b-waz.png" class="lightbox"><img src="images/reformulated-v3b-waz.png" title="reformulated gasoline areas" width="620"/></a></span></p>
</span>
<span style="float:left">
<p>&nbsp;</p>
<p>
<a name="statesmap"></a>
<span><a href="images/paddmap-gas-m2.png" class="lightbox"><img src="images/paddmap-gas-m2.png" width="620" title="states and cities in each PADD region"/></a></span></p>
</span>
<span style="float:left">
                <h2><a name="city-county"></a>Retail motor gasoline city definitions</h2>
<p>The table below shows the counties included in the sampling area for the ten cities that EIA publishes<br /> retail motor gasoline prices for. EIA does not have gasoline prices by county.
</p>
<table class="data">
<col width="103" />
<col width="236" />
<thead>
<tr>
<th>City</th>
<th class="align-left">Counties included</th>
</tr>
</thead></tbody><tr><td rowspan="14" >Boston</td>
<td>Barnstable County, MA</td>
</tr>
<tr>
<td>Bristol    County, MA</td>
</tr>
<tr>
<td>Dukes    County, MA</td>
</tr>
<tr>
<td>Essex    County, MA</td>
</tr>
<tr>
<td>Hillsborough    County, NH</td>
</tr>
<tr>
<td>Merrimack    County, NH</td>
</tr>
<tr>
<td>Middlesex    County, MA</td>
</tr>
<tr>
<td>Nantucket    County, MA</td>
</tr>
<tr>
<td>Norfolk    County, MA</td>
</tr>
<tr>
<td>Plymouth    County, MA</td>
</tr>
<tr>
<td>Rockingham    County, NH</td>
</tr>
<tr>
<td>Strafford    County, NH</td>
</tr>
<tr>
<td>Suffolk    County, MA</td>
</tr>
<tr>
<td>Worcester    County, MA</td>
</tr>
<tr class="section">
<td rowspan="10" >Chicago</td>
<td>Cook County, IL</td>
</tr>
<tr>
<td>Du Page    County, IL</td>
</tr>
<tr>
<td>Grundy    County (partial), IL</td>
</tr>
<tr>
<td>Kane    County, IL</td>
</tr>
<tr>
<td>Kendall    County ( partial), IL</td>
</tr>
<tr>
<td>Lake    County, IL</td>
</tr>
<tr>
<td>Lake    County, IN</td>
</tr>
<tr>
<td>McHenry    County, IL</td>
</tr>
<tr>
<td>Porter    County, IN</td>
</tr>
<tr>
<td>Will    County, IL</td>
</tr>
<tr class="section">
<td rowspan="6" >Cleveland</td>
<td>Ashtabula County, OH</td>
</tr>
<tr>
<td>Cuyahoga County, OH</td>
</tr>
<tr>
<td>Geauga County, OH</td>
</tr>
<tr>
<td>Lake County, OH</td>
</tr>
<tr>
<td>Lorain County, OH</td>
</tr>
<tr>
<td>Medina County, OH</td>
</tr>
<tr class="section">
<td rowspan="5" >Denver</td>
<td>Adams County, CO</td>
</tr>
<tr>
<td>Arapahoe County, CO</td>
</tr>
<tr>
<td>Denver County, CO</td>
</tr>
<tr>
<td>Douglas County, CO</td>
</tr>
<tr>
<td>Jefferson County, CO</td>
</tr>
<tr class="section">
<td rowspan="8" >Houston</td>
<td>Brazoria County, TX</td>
</tr>
<tr>
<td>Chambers    County, TX</td>
</tr>
<tr>
<td>Fort    Bend County, TX</td>
</tr>
<tr>
<td>Galveston    County, TX</td>
</tr>
<tr>
<td>Harris    County, TX</td>
</tr>
<tr>
<td>Liberty    County, TX</td>
</tr>
<tr>
<td>Montgomery    County, TX</td>
</tr>
<tr>
<td>Waller    County, TX</td>
</tr>
<tr class="section">
<td rowspan="5" >Los Angeles</td>
<td>Los Angeles County, CA</td>
</tr>
<tr>
<td>Orange County, CA</td>
</tr>
<tr>
<td>Riverside County (partial), CA</td>
</tr>
<tr>
<td>San Bernardino County (partial), CA</td>
</tr>
<tr>
<td>Ventura County, CA</td>
</tr>
<tr class="section">
<td>Miami</td>
<td>Dade County, FL</td>
</tr>
<tr class="section">
<td rowspan="26" >New York</td>
<td>Bergen County, NJ</td>
</tr>
<tr>
<td>Bronx    County, NY</td>
</tr>
<tr>
<td>Essex County, NJ</td>
</tr>
<tr>
<td>Fairfield County, CT</td>
</tr>
<tr>
<td>Hudson County, NJ</td>
</tr>
<tr>
<td>Hunterdon County, NJ</td>
</tr>
<tr>
<td>Kings    County, NY</td>
</tr>
<tr>
<td>Litchfield County (partial), CT</td>
</tr>
<tr>
<td>Middlesex County, NJ</td>
</tr>
<tr>
<td>Monmouth County, NJ</td>
</tr>
<tr>
<td>Morris County, NJ</td>
</tr>
<tr>
<td>Nassau    County, NY</td>
</tr>
<tr>
<td>New Haven County (partial), CT</td>
</tr>
<tr>
<td>New    York County, NY</td>
</tr>
<tr>
<td>Ocean County, NJ</td>
</tr>
<tr>
<td>Orange    County, NY</td>
</tr>
<tr>
<td>Passaic    County, NJ</td>
</tr>
<tr>
<td>Putnam,    NY</td>
</tr>
<tr>
<td>Queens    County, NY</td>
</tr>
<tr>
<td>Richmond    County, NY</td>
</tr>
<tr>
<td>Rockland    County, NY</td>
</tr>
<tr>
<td>Somerset    County, NJ</td>
</tr>
<tr>
<td>Suffolk    County, NY</td>
</tr>
<tr>
<td>Sussex    County, NJ</td>
</tr>
<tr>
<td>Union    County, NJ</td>
</tr>
<tr>
<td>Westchester    County, NY</td>
</tr>
<tr class="section">
<td rowspan="6" >San Francisco</td>
<td>Alameda County, CA</td>
</tr>
<tr>
<td>Contra Costa County, CA</td>
</tr>
<tr>
<td>Marin County, CA</td>
</tr>
<tr>
<td>San Francisco County, CA</td>
</tr>
<tr>
<td>San Mateo County, CA</td>
</tr>
<tr>
<td>Santa Clara County, CA</td>
</tr>
<tr class="section">
<td rowspan="3" >Seattle</td>
<td>Island County, WA</td>
</tr>
<tr>
<td>King County, WA</td>
</tr>
<tr>
<td>Snohomish County, WA</td>
</tr>
</tbody>
<tfoot>
<tr>
<td colspan="99"></td>
</tr>
</tfoot>
</table>
</span>
<?php /* end main content */ ?>
</div>
<div class="l-narrow-col">
<?php include('./includes/gdu_side3.inc'); ?>
</div>
</div>
<?php include(ROOT.'global/includes/css_rehab_eia-footer.inc'); ?>
</body>
</html>
