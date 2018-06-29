<style type="text/css"> 
#bubble3 {
	list-style: none;
	margin: 0px;
	padding: 0px;
}
#bubble3 li {
/*	display: inline-block;*/
	float:left;
	margin-left: 9px;
	margin-bottom:10px;
	padding: 0px;
	width: 60px;
	height: 60px;
}
#bubble3 li:first-child {margin-left: 0px;}
#bubble3 li a img {
	position: relative;
	border: none;
}
 
#bubble3 li a img.large {
	display: none;
}
 
#bubble3 li a:hover img.small {
	display: none;
	z-index: 0;
}
 
#bubble3 li a:hover img.large {
	display: block;
	margin-top: -5px;
	margin-left: -5px;
	z-index: 500 !important;
}
 

</style> 
<ul id="bubble3">
    <li>      <a href="non-oecd_demand.cfm" class="fb">
        <img class="small" src="images/ui/thumbs/thumb_demand_non_oecd_off.png" alt="Demand non-OECD" />
        <img class="large" src="images/ui/thumbs/thumb_demand_non_oecd_on.png" alt="Demand non-OECD" />
      </a></li>
    <li>      <a href="oecd_demand.cfm" class="fb">
        <img class="small" src="images/ui/thumbs/thumb_demand_oecd_off.png" alt="Demand OECD" />
        <img class="large" src="images/ui/thumbs/thumb_demand_oecd_on.png" alt="Demand OECD" />
      </a></li>
    <li>      <a href="non-opec_production.cfm" class="fb">
        <img class="small" src="images/ui/thumbs/thumb_supply_non_oecd_off.png" alt="Supply non-OECD" />
        <img class="large" src="images/ui/thumbs/thumb_supply_non_oecd_on.png" alt="Supply non-OECD" />
      </a></li>
    <li>      <a href="opec_spare_capacity.cfm" class="fb">
        <img class="small" src="images/ui/thumbs/thumb_supply_oecd_off.png" alt="Supply OECD" />
        <img class="large" src="images/ui/thumbs/thumb_supply_oecd_on.png" alt="Supply OECD" />
      </a></li>
    <li>      <a href="active_trading.cfm" class="fb">
        <img class="small" src="images/ui/thumbs/thumb_trading_active_off.png" alt="Trading Active" />
        <img class="large" src="images/ui/thumbs/thumb_trading_active_on.png" alt="Trading Active" />
      </a></li>
    <li>      <a href="passive_trading.cfm" class="fb">
        <img class="small" src="images/ui/thumbs/thumb_trading_passive_off.png" alt="Trading Passive" />
        <img class="large" src="images/ui/thumbs/thumb_trading_passive_on.png" alt="Trading Passive" />
      </a></li>
    <li>      <a href="other_financial_markets.cfm" class="fb">
        <img class="small" src="images/ui/thumbs/thumb_trading_other_off.png" alt="Trading Other Financial Markets" />
        <img class="large" src="images/ui/thumbs/thumb_trading_other_on.png" alt="Trading Other Financial Markets" />
      </a></li>
    <li>      <a href="inventory.cfm" class="fb">
        <img class="small" src="images/ui/thumbs/thumb_inventories_off.png" alt="Inventories" />
        <img class="large" src="images/ui/thumbs/thumb_inventories_on.png" alt="Inventories" />
      </a></li>
    <li>      <a href="risk_factors.cfm" class="fb">
        <img class="small" src="images/ui/thumbs/thumb_geopolitical_off.png" alt="Geopolitical and Other Events" />
        <img class="large" src="images/ui/thumbs/thumb_geopolitical_on.png" alt="Geopolitical and Other Events" />
      </a></li>
    <li>      <a href="expectations.cfm" class="fb">
        <img class="small" src="images/ui/thumbs/thumb_expectations_off.png" alt="Expectations" />
        <img class="large" src="images/ui/thumbs/thumb_expectations_on.png" alt="Expectations" />
      </a></li>
  </ul>