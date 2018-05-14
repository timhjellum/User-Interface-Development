<cfsilent >

	<cfparam name=form.runQuery default=false/>
	<cfparam name=form.tags default=/>
	<cfparam name=form.subjects default=/>
	<cfparam name=form.searchString default=/>
	<cfparam name=form.reportNumber default=/>
	<cfparam name=form.startDate default= />
	<cfparam name=form.endDate default= />
	<cfparam name=local.displayResult default=false />
	<cfparam name=local.searchResults default= />
	<cfparam name=searchResults default= />
	<cfparam name=dsn default=NEIC />
    <cfparam name=subj default=Features />
	
	<?php $rc.title = "EIA Reports &amp; Products" /; ?>
	
	<!--- queries to set up the menu selections --->
	<?php $local.fuelSources = mysql_query("
		select *
		from ARCHIVES_REPORT_SUBJECT
		where menu = 'Fuel Sources'
	");
	
	 $local.topics = mysql_query("
		select *
		from ARCHIVES_REPORT_SUBJECT
		where menu = 'Topics'
	");
	
	 $local.others = mysql_query("
		select *
		from ARCHIVES_REPORT_SUBJECT
		where menu = 'Other'
	");
		
	 $local.tags = mysql_query("
		select *
		from ARCHIVES_REPORT_TAG
	");?>
	
	<!--- Search for first subject --->
	<?php if ( ($1) || $subj == 'Features') {
		 $searchResults = mysql_query("
			SELECT archives_report_list.title, archives_report_list.release_date, archives_report_list.contact_name,
            archives_report_list.contact_number, archives_report_list.feature, archives_report_list.link_html,
            archives_report_list.link_pdf, archives_report_list.pdf_size, archives_report_list.summary_descript, 
            archives_report_lu.sid, archives_report_lu.id, archives_report_subject.subject
            FROM archives_report_list, archives_report_lu, archives_report_subject
            WHERE ( archives_report_lu.sid = archives_report_subject.id )
              AND ( archives_report_lu.id = archives_report_list.id )
              AND ( archives_report_subject.subject = <cfqueryparam cfsqltype=cf_sql_varchar list=true value=$form.subjects /> )
		");?>
        <!---cfdump var="#searchResults#"><cfabort--- >
	<?php  } // end if ?>
    
	
	<!--- tags and subjects ids --->
	<?php if ( ($1)) {
		 $searchResults = mysql_query("
			select * 
			from ARCHIVES_REPORT_LIST a, ARCHIVES_REPORT_TAG_LINK b, ARCHIVES_REPORT_SUBJECT_LINK c 
			where a.ID = b.fk_idreportarchive  
		  	and a.ID = c.fk_idreportarchive
		 	<?php if ( ($1)) {?>
		 		and b.fk_idreporttag in (<cfqueryparam cfsqltype=cf_sql_integer list=true value=$form.tags />)
			<?php  } // end if 
			 if ( ($1)) {?>
				and c.fk_idreportsubject in (<cfqueryparam cfsqltype=cf_sql_integer list=true value=$form.subjects />)
			<?php  } // end if ?>
		");
	  } // end if ?>
    
    <!--- wildcard subject and title search --->
	<?php if ( ($1) && $form.reportNumber == "Number") {
		 $searchResults = mysql_query("
			select *
			from ARCHIVES_REPORT_LIST
			where 
				TITLE LIKE <cfqueryparam cfsqltype=cf_sql_varchar value=$form.reportNumber% />
				or 
				SUMMARY_DESCRIPT like <cfqueryparam cfsqltype=cf_sql_varchar value=$form.reportNumber% />
		");
	  } // end if ?>
	
	<!--- wildcard on the report number --->
	<?php if ( ($1)) {
		 $searchResults = mysql_query("
			select *
			from ARCHIVES_REPORT_LIST
			where REPORT_NUMBER LIKE <cfqueryparam cfsqltype=cf_sql_varchar value=%$form.reportNumber% />
            or
            TITLE LIKE <cfqueryparam cfsqltype=cf_sql_varchar value=%$form.reportNumber% />
				or 
				SUMMARY_DESCRIPT like <cfqueryparam cfsqltype=cf_sql_varchar value=%$form.reportNumber% />
		");
	  } // end if ?>
	
	<!--- search on dates --->
	<?php if ( ($1) && $isDate(form.startdate) isDate(form.startdate) ) {

		 if ( ($1)) {
			 $form.endDate = createODBCDate(now()) /; 
		  } // end if 
	
		 $searchResults = mysql_query("
			select *
			from ARCHIVES_REPORT_LIST
			where 
				(
					(
						release_date 
						BETWEEN <cfQUERYPARAM VALUE=$CreateODBCDate(form.StartDate) CFSQLTYPE=CF_SQL_DATE> 
						AND <cfQUERYPARAM VALUE=$CreateODBCDate(form.endDate) CFSQLTYPE=CF_SQL_DATE>
					)
				)
		");
	  } // end if ?>
	
</cfsilent>