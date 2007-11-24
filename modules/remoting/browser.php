<?php
//

$module =& $Params["Module"];

require_once( "kernel/common/template.php" );
$tpl = templateInit();

/* 
require_once('extension/worldpay/classes/worldpaycallbackhandler.php');
$callback_handler =& new WorldPayCallbackHandler();
$tpl->setVariable( "status", $callback_handler->handleCallback());
$http =& eZHTTPTool::instance();
$tpl->setVariable( "name", $http->variable('name'));

$currency_symbol_map = array('USD' => '$', 'GBP' => '&pound;', 'EUR' => '&euro;');
$tpl->setVariable( "amount", $currency_symbol_map[$http->variable('authCurrency')] . sprintf('%.2f', $http->variable('authAmount')));
*/ 

$Result = array();

// $Result['content'] = 'Hello';
// $Result['pagelayout'] = 'pagelayout.tpl';  

// $Result['pagelayout'] = 'index.html';
// $Result['pagelayout'] = 'browser/index.html';

// $Result['pagelayout'] = $tpl->fetch( "design:browser/index.html" );  
// $Result['content'] = 'Hello';                 

// $Result['pagelayout'] = $tpl->fetch( "design:browser/index.tpl" );

$Result['pagelayout'] = 'browser/index.tpl';

// $Result['content'] = $tpl->fetch( "design:test.tpl" );
// $Result['content'] = $tpl->fetch( "design:browser/index.tpl" );

// $Result['pagelayout'] = 'wp_pagelayout.tpl';
// $Result['content'] =& $tpl->fetch( "design:callback.tpl" );
// return 'hello'; // true;
	
?>
