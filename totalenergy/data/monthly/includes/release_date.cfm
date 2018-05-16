<!--- 
	Release date
	9/11/2013 - Update: Change the values inside the CreateDate functions.
	CreateDate takes 3 values, the four digit year, the month, and the day.
 --->
<cfset m_release_date = CreateDate(2017,03,28>
<cfset next_m_release_date = CreateDate(2017,04,25)>
<cfif NOT IsDefined("set_vars_only")>
<p>
<cfoutput>#DateFormat(m_release_date, "mmmm yyyy")#</cfoutput>&nbsp;&nbsp;<a href="pdf/mer.pdf" class="ico_pdf">PDF</a>&nbsp;&#124;&nbsp;<a href="previous.cfm">previous editions</a><br />
Release Date: <cfoutput>#DateFormat(m_release_date, "mmmm d, yyyy")#</cfoutput><br />
<!--- Revision notice for February 2016 release --->
<!---Revised: February 25, 2016 (<a class="lightbox" href="revision_notice.cfm">revision</a>)<br />--->
Next Update: <cfoutput>#DateFormat(next_m_release_date, "mmmm d, yyyy")#</cfoutput>
</p>
</cfif>