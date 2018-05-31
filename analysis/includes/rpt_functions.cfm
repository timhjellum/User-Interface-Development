<cfsilent>

	<cfparam name="form.runQuery" default="false"/>
	<cfparam name="form.tags" default=""/>
	<cfparam name="form.subjects" default=""/>
	<cfparam name="form.searchString" default=""/>
	<cfparam name="form.reportNumber" default=""/>
	<cfparam name="form.startDate" default="" />
	<cfparam name="form.endDate" default="" />
	<cfparam name="local.displayResult" default="false" />
	<cfparam name="local.searchResults" default="" />
	<cfparam name="searchResults" default="" />
	<cfparam name="dsn" default="NEIC" />
    <cfparam name="subj" default="Features" />
	
	<cfset rc.title = "EIA Reports &amp; Products" />
	
	<!--- queries to set up the menu selections --->
	<cfquery name="local.fuelSources" datasource="#dsn#">
		select *
		from ARCHIVES_REPORT_SUBJECT
		where menu = 'Fuel Sources'
	</cfquery>
	
	<cfquery name="local.topics" datasource="#dsn#">
		select *
		from ARCHIVES_REPORT_SUBJECT
		where menu = 'Topics'
	</cfquery>
	
	<cfquery name="local.others" datasource="#dsn#">
		select *
		from ARCHIVES_REPORT_SUBJECT
		where menu = 'Other'
	</cfquery>
		
	<cfquery name="local.tags" datasource="#dsn#">
		select *
		from ARCHIVES_REPORT_TAG
	</cfquery>
	
	<!--- Search for first subject --->
	<cfif len(form.subjects) or subj EQ 'Features'>
		<cfquery name="searchResults" datasource="#dsn#">
			SELECT archives_report_list.title, archives_report_list.release_date, archives_report_list.contact_name,
            archives_report_list.contact_number, archives_report_list.feature, archives_report_list.link_html,
            archives_report_list.link_pdf, archives_report_list.pdf_size, archives_report_list.summary_descript, 
            archives_report_lu.sid, archives_report_lu.id, archives_report_subject.subject
            FROM archives_report_list, archives_report_lu, archives_report_subject
            WHERE ( archives_report_lu.sid = archives_report_subject.id )
              AND ( archives_report_lu.id = archives_report_list.id )
              AND ( archives_report_subject.subject = <cfqueryparam cfsqltype="cf_sql_varchar" list="true" value="#form.subjects#" /> )
		</cfquery>
        <!---cfdump var="#searchResults#"><cfabort--->
	</cfif>
    
	
	<!--- tags and subjects ids --->
	<cfif len(form.tags)>
		<cfquery name="searchResults" datasource="#dsn#">
			select * 
			from ARCHIVES_REPORT_LIST a, ARCHIVES_REPORT_TAG_LINK b, ARCHIVES_REPORT_SUBJECT_LINK c 
			where a.ID = b.fk_idreportarchive  
		  	and a.ID = c.fk_idreportarchive
		 	<cfif len(form.tags)>
		 		and b.fk_idreporttag in (<cfqueryparam cfsqltype="cf_sql_integer" list="true" value="#form.tags#" />)
			</cfif>
			<cfif len(form.subjects)>
				and c.fk_idreportsubject in (<cfqueryparam cfsqltype="cf_sql_integer" list="true" value="#form.subjects#" />)
			</cfif>
		</cfquery>
	</cfif>
    
    <!--- wildcard subject and title search --->
	<cfif len(form.searchString) and form.reportNumber eq "Number">
		<cfquery name="searchResults" datasource="#dsn#">
			select *
			from ARCHIVES_REPORT_LIST
			where 
				TITLE LIKE <cfqueryparam cfsqltype="cf_sql_varchar" value="#form.reportNumber#%" />
				or 
				SUMMARY_DESCRIPT like <cfqueryparam cfsqltype="cf_sql_varchar" value="#form.reportNumber#%" />
		</cfquery>
	</cfif>
	
	<!--- wildcard on the report number --->
	<cfif len(form.reportNumber)>
		<cfquery name="searchResults" datasource="#dsn#">
			select *
			from ARCHIVES_REPORT_LIST
			where REPORT_NUMBER LIKE <cfqueryparam cfsqltype="cf_sql_varchar" value="%#form.reportNumber#%" />
            or
            TITLE LIKE <cfqueryparam cfsqltype="cf_sql_varchar" value="%#form.reportNumber#%" />
				or 
				SUMMARY_DESCRIPT like <cfqueryparam cfsqltype="cf_sql_varchar" value="%#form.reportNumber#%" />
		</cfquery>
	</cfif>
	
	<!--- search on dates --->
	<cfif len(form.startDate) and isDate(form.startdate)>

		<cfif not isDate(form.endDate)>
			<cfset form.endDate = createODBCDate(now()) />
		</cfif>
	
		<cfquery name="searchResults" datasource="#dsn#">
			select *
			from ARCHIVES_REPORT_LIST
			where 
				(
					(
						release_date 
						BETWEEN <CFQUERYPARAM VALUE="#CreateODBCDate(form.StartDate)#" CFSQLTYPE="CF_SQL_DATE"> 
						AND <CFQUERYPARAM VALUE="#CreateODBCDate(form.endDate)#" CFSQLTYPE="CF_SQL_DATE">
					)
				)
		</cfquery>
	</cfif>
	
</cfsilent>