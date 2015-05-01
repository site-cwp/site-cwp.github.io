<cfset location = "index.html">
<cfif isdefined("url.page")>
	<cfif url.page eq "disclaimer-mobilecore">
		<cfset location = "disclaimer/mobilecore/">
	<cfelseif url.page eq "disclaimer">
		<cfset location = "disclaimer/">
	</cfif>
</cfif>
<cfoutput>
<script>
	window.location = "#location#";
</script>
</cfoutput>
