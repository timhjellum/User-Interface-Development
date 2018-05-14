<div class="report_header">
<span class="left rtitle">
 <h1>State Electricity Profiles</h1>
  <p><strong>Data for 2010</strong>&nbsp;|&nbsp;&nbsp;<strong>Release Date:</strong>&nbsp;January 9, 2011&nbsp;&nbsp;|&nbsp;&nbsp;<strong>Next Release:</strong> April 2012&nbsp;&nbsp;<br/>
  </p>
  </span>


<span  class="left rtitle_form">
	<h4>State Electricity Profiles</h4>
	<form name="state_select" id="state_select">
	 <label>State:&nbsp;</label>
      <select name="issue" size="1" id="issue" style="width:110px">
       <option value="alabama" selected="selected">Alabama</option>
       	 <option value="new_york">New York</option>
		  <option value="louisiana">Louisiana</option>
	      <option value="august2011">August 2011</option>
	      <option value="july2011">July 2011</option>
	      <option value="june2011">June 2011</option>
	      <option value="may2011">May 2011</option>
	      <option value="april2011">April 2011</option>
	      <option value="march2011">March 2011</option>
	      <option value="february2011">February 2011</option>
	      <option value="january2011">January 2011</option>
	      <option value="archived">issues prior to 2011</option>
	   </select>
	   <input type="submit" name="go_button" class="arrow_go" align="absmiddle" id= "go_button" value="Go" onclick="select_issue();" />
	</form>           
</span>
</div>

<script>
$('#issue_select').submit(function() {
	var issue = $("#issue").val();
	var file_format = $("#file_format").val();
	var file_location = "/electricity/monthly/current_year/";
	
	if (issue == 'archived') {
		document.location.href = '/electricity/monthly/backissues.html';
	}
	else
	{
		var selected_issue = file_location + issue + "." + file_format;
	  document.location.href = selected_issue;
	}
  return false;
});
	
</script>