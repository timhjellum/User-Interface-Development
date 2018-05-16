<!--- 
		Release date

	9/11/2013 - Update: Change the values inside the CreateDate functions.
	CreateDate takes 3 values, the four digit year, the month, and the day.
	
	1/8/2013 - Update: Also change the value of last_year_annual_data. 
	This is used in the query  of annual data for the total energy browser. -SG
 --->
<cfset a_release_date = CreateDate(2012,09,27)>
<cfset last_year_annual_data = 2016>
<cfif NOT IsDefined("set_vars_only")>

<p><cfoutput>#DateFormat(a_release_date, "mmmm yyyy")#</cfoutput>&nbsp;&nbsp;<a href="pdf/aer.pdf" class="ico_pdf">PDF</a>&nbsp;&#124;&nbsp;<a href="previous.cfm">previous editions</a><br />
Release Date: <cfoutput>#DateFormat(a_release_date, "mmmm d, yyyy")#</cfoutput><br /><!---Next Update: Suspended for 2013 (see <a href="/pressroom/releases/press386.cfm">press release</a>)---></p>
</cfif>