<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'CurrencyExchange' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['CurrencyExchange'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['CurrencyExchangeAlias'] = __DIR__ . '/CurrencyExchange.i18n.alias.php';
	$wgExtensionMessagesFiles['CurrencyExchangeMagic'] = __DIR__ . '/CurrencyExchange.i18n.magic.php';
	wfWarn(
		'Deprecated PHP entry point used for CurrencyExchange extension. Please use wfLoadExtension ' .
		'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return true;
} else {
	die( 'This version of the CurrencyExchange extension requires MediaWiki 1.25+' );
}
