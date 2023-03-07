$(document).ready(function() {
	var wikiBaseUrl = mw.config.get( 'wgServer' ) + mw.config.get( 'wgScriptPath' );
	var ajaxUrl = wikiBaseUrl + '/extensions/CurrencyExchange/src/currency.php';
	$("#prices").load(ajaxUrl)
	setInterval(function() {
		$("#prices").load(ajaxUrl)
	}, 60000);
});