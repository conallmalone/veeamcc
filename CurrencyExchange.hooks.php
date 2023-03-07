<?php
/**
 * Hooks for CurrencyExchange extension
 *
 * @file
 * @ingroup Extensions
 */
use MediaWiki\MediaWikiServices;
use MediaWiki\Hook\BeforePageDisplayHook;

class CurrencyExchangeHooks {
    public function onBeforePageDisplay( BeforePageDisplayHook $hook ) {
        $page = $hook->getOutput()->getTitle();
        if ( $page->isSpecialPage( 'CurencyExchange' ) ) {
            $hook->getOutput()->addModules( 'ext.currencyExchange.foo' );
        }
    }
}
