<cfparam name="betasite" default="">
<cfif betasite EQ 'y'>
	<cftry>
		<script type="text/javascript" src="/beta/js/beta-header.js"></script>
		<cfinclude template="/beta/includes/subnav_beta.cfm">
		<cfif betafback EQ 'y'>
			<link rel="stylesheet" href="/beta/styles/beta-feedback.min.css" type="text/css" media="screen, projection">
			<!---[if IE]><link rel="stylesheet" href="/beta/includes/feedbackie.css" type="text/css" media="screen, projection"><![endif]--->
			<!---script type="text/javascript" src="/global/scripts/JQuery/pslide/jquery.pageslide.min.js"></script--->
			<cfinclude template="/beta/includes/fback_form.cfm">
			<div class="fblink_give hide_menu">Feedback</div>
		</cfif>
		<cfcatch><h1>ERROR... I'm working on it...</h1><cfdump var="#cfcatch#"><cfabort></cfcatch>
	</cftry>
</cfif>

