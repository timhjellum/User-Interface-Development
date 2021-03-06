<div class="blue_top">
        <li class="header"><h2>Additional data and methodology</h2></li>
                <li>Table 1. Crude oil and lease condensate production in the United States<span style="float:right">        <li><a href="xls/table1.xlsx"><i class="ico xls"><span>XLS</span></i> </a>&nbsp; &nbsp;        <li><a href="pdf/table1.pdf"><i class="ico pdf">PDF</i> </a></span></li>
                <li>Table 2. Crude oil and lease condensate production in the United States with monthly and annual changes <span class="align-right">        <li><a href="xls/table2.xlsx"><i class="ico xls"><span>XLS</span></i> </a>&nbsp; &nbsp;        <li><a href="pdf/table2.pdf"><i class="ico pdf">PDF</i> </a></span></li>
                <li>Table 3. Natural gas gross withdrawals in selected states and the Federal Gulf of Mexico <span style="float:right">        <li><a href="xls/table3.xlsx"><i class="ico xls"><span>XLS</span></i> </a>&nbsp; &nbsp;        <li><a href="pdf/table3.pdf"><i class="ico pdf">PDF</i> </a></span></li>
                <li>Table 4. Natural gas gross withdrawals in selected states and the Federal Gulf of Mexico with monthly and annual changes <span class="align-right">        <li><a href="xls/table4.xlsx"><i class="ico xls"><span>XLS</span></i> </a>&nbsp; &nbsp;        <li><a href="pdf/table4.pdf"><i class="ico pdf">PDF</i> </a></span></li>
                <li>Table 5. Crude oil and lease condensate production by API gravity category in selected Lower 48 states and the Federal Gulf of Mexico <span class="align-right">        <li><a href="xls/table5.xlsx"><i class="ico xls"><span>XLS</span></i> </a>&nbsp; &nbsp;        <li><a href="pdf/table5.pdf"><i class="ico pdf">PDF</i> </a></span></li>
<li class="sub-header">Comparisons and statistical measures</li>
                <li><a href="xls/comp-stat-oil.xlsx"><i class="ico xls"><span>XLS</span></i>Crude oil comparisons with other estimates</a></li>
                <li><a href="xls/comp-stat-gas.xlsx"><i class="ico xls"><span>XLS</span></i>Natural gas comparisons with other estimates</a></li>
                <li><a href="xls/api-history.xlsx"><i class="ico xls"><span>XLS</span></i>Historical oil production by API gravity</a></li>
                <li><a href="pdf/eia914methodology.pdf"><i class="ico pdf">PDF</i>Methodology</a></li>
                <li><a href="pdf/eia914revisionpolicy.pdf"><i class="ico pdf">PDF</i>Revision Policy</a></li></li>
                <li><a href="images/2015-914states.png" class="lightbox"><img src="images/2015-914states.png" alt="map of 914 states gas surveyed" width="270"/></a></li>
                <li><a href="faqs.php">Frequently Asked Questions</a></li>
</div>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/global/includes/utils/utils.inc';
require($_SERVER['DOCUMENT_ROOT'].'/global/includes/utils/Neic.inc';
$neic      = new NEIC();
?>
<?php
//hsh_sql:
//associated with query name tie_lookup
$bindVariables = array();
$neic->sql = " Select *
from neic.today_in_energy
Where active = :active
AND tags like :tags1 OR tags like :tags2 OR tags like :tags3 OR tags like :tags4 OR tags like :tags5
ORDER BY ID DESC ";
$bindVariables[":active"] = "yes";
$bindVariables[":tags1"] = '%crude oil%';
$bindVariables[":tags2"] = '%petroleum%';
$bindVariables[":tags3"] = '%coal%';
$bindVariables[":tags4"] = '%production%';
$bindVariables[":tags5"] = '%natural gas%';
//print $neic->sql;
//print_r($bindVariables);
$tie_lookup = $neic->get($bindVariables);
?>
<?php if (!empty($tie_lookup)) {?>
<?php $tietopic = 'production'; ?>
<div class="green_top tie_container">
        <li class="header"><h2>        <li><a href="/todayinenergy/">Today in Energy<br/><span>Energy Analysis Every Weekday</span></a></h2></li>
<?php include ('todayinenergy/outreach/file_scrub_tie_side_sm_top3.php') ; ?>
</div>
<?php  } // end if ?>
<div class="blue_top">
        <li class="header"><h2>Related data and reports</h2></li>
                <li><a href="/petroleum/data.php" >Petroleum data</a></li>
                <li><a href="/petroleum/supply/monthly/">Petroleum Supply Monthly</a></li>
                <li><a href="/naturalgas/data.php" >Natural gas data</a></li>
                <li><a href="/naturalgas/monthly/" >Natural Gas Monthly</a></li>
</div>
