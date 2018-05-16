<?php /* NEW Sub NAv */ ?>
<?php $sect = 'Consumption'; ?>
<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT distinct archives_report_lu.tagid, archives_report_lu.sid, archives_report_subject.subject, archives_report_tag.tag,
    count(ARCHIVES_REPORT_LIST.HAS_DATA) as D, count(ARCHIVES_REPORT_LIST.HAS_FORECAST) as F, count(ARCHIVES_REPORT_LIST.HAS_ANALYSIS) as A
          FROM neic.archives_report_lu, neic.archives_report_subject, neic.archives_report_tag, NEIC.ARCHIVES_REPORT_LIST
          WHERE ( archives_report_subject.id = archives_report_lu.sid )
            AND ( archives_report_tag.id = archives_report_lu.tagid )
            AND ( archives_report_lu.id = archives_report_list.id)
            AND ( archives_report_subject.subject = :subject )
            group by archives_report_lu.tagid, archives_report_lu.sid, archives_report_subject.subject, archives_report_tag.tag
            order by tag ";
$bindVariables[":subject"] = $sect;
//print $neic->sql;
//print_r($bindVariables);
$Utags2 = $neic->get($bindVariables);
?>
<script>
	$(function(){
		$('.dropdown').dd();
	});
	
$(document).ready(function(){
    $("div.dat_block a").click(function(){
		 $("table.contable").children("tbody").hide();
		$("table.contable th").removeClass("active");
		var sID = this.href.substring(this.href.indexOf("#") + 1);
		$("[name$='" + sID + "']").click();
  });
});	
</script>
<?php /*cfinclude template="/global/includes/sub_menu_fix.cfm"*/ ?>
	<?php $L2Title = "Consumption & Efficiency"; ?>
    <div class="title bg_enduse"><?php /* Page/Section Title */ ?>
      <h1><?php echo "$L2Title"?></h1>
    </div><?php /*/ Page/Section Title */ ?>
    
    <div class="subnav"><?php /* Page/Sub Nav */ ?>
    <span class="right"><a href="<?php echo "$glossary_path"?>?id=consumption">Glossary &rsaquo;</a> <a href="<?php echo "$faqs_path"?>#conversion%20equivalents">FAQS &rsaquo;</a></span>
       <ul>
        <li <?php if ( $locale == 'overview') {?>class="active"<?php  } // end if ?>><a href="/consumption/">Overview</a></li>
        <li class="dropdown <?php if ( $locale == 'data') {?>active<?php  } // end if ?>"><a href="/consumption/data.cfm">Data</a></li>
        <?php /* Data Menu Drop Down */ ?>
        <div class="dat_block">
            <ul>
              <li><a href="/consumption/data.cfm#rec">Residential Energy Consumption Survey Data</a></li>
              <li><a href="/consumption/data.cfm#cec">Commercial Energy Consumption Survey Data</a></li>
              <li><a href="/consumption/data.cfm#mfg">Manufacturing Energy Consumption Survey Data</a></li>
              <li><a href="/consumption/data.cfm#vehicles">Vehicle Energy Consumption Survey Data</a></li>
              <li><a href="/consumption/data.cfm#intensity">Energy Intensity</a></li>
              <li><a href="/consumption/data.cfm#consumption">Consumption Summaries</a></li>
              <li><a href="/consumption/data.cfm#avgcost">Average cost of fossil-fuels for electricity generation</a></li>
              <li><a href="/consumption/reports.cfm?t=9999&f=d">All Consumption &amp; Efficiency Data Reports</a></li>
            </ul>
        </div>
        <?php /*/ Data Menu Drop Down */ ?>
        <li class="dropdown <?php if ( $locale == 'ap') {?>active<?php  } // end if ?>"><a href="/consumption/reports.cfm">Analysis & Projections</a></li>
        <?php /* Reports Menu Drop Down */ ?>
        <div class="dat_block">
            <ul>
            
            <?php if ( $sect != "Consumption" && $sect != "Environment") {?>  
              <li class="no-border" style="padding-bottom:0px;"><a href="/consumption/reports.cfm?t=214">Most Requested</a></li>
            <?php  } else { ?>
              <?php $tagid = 94; ?>
            <?php  } // end if ?>
                <cfloop query=utags2>
                <?php if ( $tag == 'All' || $tag == 'Recurring') {?>
                <?php  } else { ?>
				  
                    <li><a href="/consumption/reports.cfm?t=<?php echo "$tagid"?>"><?php echo "$tag"?></a></li>
                  
                <?php  } // end if ?>
                </cfloop>
                <li class="no-border" style="padding-bottom:0px;"><a href="/consumption/reports.cfm?t=9999">All Reports</a></li>
            </ul>
        </div>
        <?php /*/ Data Menu Drop Down */ ?>
      </ul>
    </div><?php /*/ Page/Sub Nav */ ?>