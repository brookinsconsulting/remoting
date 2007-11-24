<?php
	header("Content-type: text/html");

	include_once("config.inc.php");


	$serviceBrowserName = $cfg['AmfphpPath'] . "util/ServiceBrowser.php";

	if( file_exists( $serviceBrowserName )) 
	{			//  Get it relative to the current file name
		include_once( $serviceBrowserName );
	}
	else
	{
		die("AMFPHP path not set properly");
	}

	if( !is_dir( $cfg['ServicesPath'] )) 
	{
		$result =  "FATAL ERROR - Invalid ServicesPath<BR><BR>See right pane.";
	}
	else
	{
		$explorer = new ServiceBrowser($cfg['ServicesPath'],$cfg['OmitPath'] );
		$services = $explorer->listServices();
		
		$result = "";
		foreach($services as $key => $value)
		{
			$result .= sprintf("<strong><a href='details.php?class=%s' target='details'>%s</a></strong> (<a href='methodTable.php?class=%s' target='details'>methodTable</a>)<br />", $value[1] . $value[0],
					str_replace("/",".", $value[1]) . $value[0], $value[1] . $value[0]);
		}
	
		if( empty( $result )) 
		{
			$result = "No services found.<BR><BR>" .
			"<a href='details.php?class=__none__found__' target='details'>" .
	                "Tell me more...</A>";
		}
	}
    
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Service browser</title>
<link href="css/service-browser.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Service Browser</h1>
<p>

<?php echo $result ?>

</p>
</body>
</html>

