<?php

include_once("config.inc.php");

function getCfgPath() {

        //  Build the path name of the config file
	$cfgPath = $_SERVER[ 'PATH_TRANSLATED' ];
	$exploded = explode( '/', $cfgPath );
	array_pop( $exploded );
	array_push( $exploded, 'cfg.include.php' );
        $cfgPath = implode( '/', $exploded );
	
	return( $cfgPath );

}

if( !is_dir( $cfg['ServicesPath'] )) 
{
	print( "FATAL ERROR - Invalid ServicesPath<BR><BR>\n" .
	       "You must edit the file <b>" . getCfgPath() . "</b> " . 
               "and change the ServicesPath value to point to " .
               "the directory where you installed the services " .
               "directory of you AMFPHP installation. ");
}	

elseif( '__none__found__' == $_GET['class'] ) 
{
	$cfgPath = getCfgPath();

	print "

<font size=6><b>No services found</b></font><BR><BR>

According to settings made in:<BR> 
<b>$cfgPath</b><BR> 
your services should be located in the directory:<BR>
<b>{$cfg['ServicesPath']}</b>

<BR><BR>

<b>Suggestions:</b><BR>

If you haven't installed any services yet, you need to install at least one
service before using this program.  See the INSTALL file, or wiki for instructions
on installing a simple service for testing.

<BR><BR>

If your services are already installed in a different directory than the one 
listed above, you should edit the file cfg.include.php in the directory listed 
above and make the cfgPath point to the directory that contains your services.

<BR><BR>

If your services are installed in the proper directory
listed above you should make sure they have permissions such that your web server
can read them.

<BR><BR>

The name of the class within the service must EXACTLY match the name of the
file, including case.  Any differences will cause the service to be ignored.

<BR><BR>

Don't confuse the gateway with the service.  The gateway is the PHP file that
is executed by the Flash Player to invoke a service.  It must reside within
the DocumentRoot of the web server, and be visible to the world.  Services 
are class files that define things made available and reside in the 
/flashservices/services directory.  The entire /flashservices path can reside
either within DocumentRoot, or outside in a directory specified in the PHP
INCLUDE_PATH.
";

}


elseif(isset($_GET['class']))
{
	ob_start();
	
	$serviceBrowserName = $cfg['AmfphpPath'] . "util/ServiceBrowser.php";
	if( file_exists( $serviceBrowserName )) 
	{			//  Get it relative to the current file name
		define("AMFPHP_BASE", $cfg['AmfphpPath']);
		include_once( $serviceBrowserName );
	} else {	//  Get it from the path
		die("AMFPHP path not set properly");
	}


	$explorer = new ServiceBrowser($cfg['ServicesPath']);
	$explorer->setStyleSheet("css/service-browser.css");

	
	if($explorer->setService($_GET['class']))
	{
		$explorer->browse();
		ob_end_flush();
	}
	else
	{
		ob_end_clean();
		echo("There is no class named " . str_replace('/', '.', $_GET['class']) . " with a valid methodTable declared in this file.");
	}
}
?>
