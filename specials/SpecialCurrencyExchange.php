<?php
/**
 * Special Page for CurrencyExchange extension
 *
 * @file
 * @ingroup Extensions
 */

class SpecialCurrencyExchange extends SpecialPage {
	public function __construct() {
		parent::__construct( 'CurrencyExchange' );
	}

	/**
	 * Show the page to the user
	 *
	 * @param string $sub The subpage string argument (if any).
	 *  [[Special:CurrencyExchange/subpage]].
	 */
	public function execute( $sub ) {
		$out = $this->getOutput();

		$out->addModules( 'ext.currencyExchange.foo' );

		$out->setPageTitle( $this->msg( 'currencyexchange-title' ) );

		//$out->addHelpLink( 'How to become a MediaWiki hacker' );

		$out->addWikiMsg( 'currencyexchange-intro' );

		$out->addHTML('<div id="prices">Loading...</div>');
	}

	public function currencyCalc() {
		$req_url = 'https://open.er-api.com/v6/latest/CZK';
		$response_json = file_get_contents($req_url);
		$response = json_decode($response_json);

		$eur_price = round($response->rates->EUR, 2);
		$usd_price = round($response->rates->USD, 2);
		$gbp_price = round($response->rates->GBP, 2);

	}
}

