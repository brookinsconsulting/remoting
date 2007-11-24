<?php

$Module = array( 'name' => 'remoting', 'variable_params' => false, 'ui_component_match' => 'module' );

$ViewList = array();

/* $Module = array( "name" => "Worldpay",
                 "variable_params" => true,
                 "function" => array(
                     "script" => "callback.php") );
*/


$ViewList["browser"] = array(
			      "script" => "browser.php",
			      'params' => false,
			      'default_navigation_part' => 'ezsetupnavigationpart',
			      'functions' => array( 'read' )
);


$FunctionList = array();
$FunctionList['read'] = array();
// $FunctionList['convert'] = array();


?>
