<?php

require( 'autoload.php' );

class HelloWorld
{
  function HelloWorld()
  {
        $this->methodTable = array( "say" => array(
						   "access" => "remote",
						   "description" => "Pings back a message"
						   )
				    );
  }
 
  function say($sMessage, $sIntMessage = 'You said: ')
  {
    return $sIntMessage . $sMessage;
  }

  function node($nodeID=false)
  {
    // return array( array( 0,1 ) );

    // ini_set('display_errors', 0);
   
    // return $this->say($nodeID, 'They know the rest of the number sir ... ');

    // ez expects vhost base dir is same as code. 
    // while gateway ... is normally separated because ..
    // require_once ("lib/ezutils/classes/ezini.php");
    // require_once ("lib/ezutils/classes/ezsys.php");
    require_once ("kernel/classes/ezscript.php");
    // require_once ("kernel/classes/ezpersistentobject.php");
    // require_once ("lib/ezdb/classes/ezdb.php");

    // require_once ("lib/ezfile/classes/ezdir.php");
    // require_once ("lib/ezi18n/classes/eztextcodec.php");
    // require_once ("lib/ezi18n/classes/ezcharsetinfo.php");

    // require_once ("lib/ezdb/classes/ezdbinterface.php");
    // require_once ("lib/ezdb/classes/eznulldb.php");

    // require_once ("kernel/classes/ezcontentlanguage.php");
    // require_once ("kernel/classes/ezcontentobjecttreenode.php");

    // include the file
    // include_once( "classes/ezinifile.php" );

    // $ini = eZINI::instance( "site.ini" );

    $ini =& eZINI::instance();
    // return $ini;

    // Initialize/set the index file.

    eZSys::init( 'nusoap.php', $ini->variable( 'SiteAccessSettings', 'ForceVirtualHost' ) == 'true' );
    // eZSys::initIni( $ini );

    // include ezsession override implementation
    include_once( 'lib/ezutils/classes/ezsession.php' );

    // Check for extension
    include_once( 'lib/ezutils/classes/ezextension.php' );
    include_once( 'kernel/common/ezincludefunctions.php' );

    eZExtension::activateExtensions( 'default' );
    // Extension check end
    
    // plain_site_user | $ini->variable( 'SiteSettings', 'DefaultAccess' )

    // return $ini->variable( 'SiteSettings', 'DefaultAccess' );
    
    // Activate correct siteaccess
    include_once( 'access.php' );
    $access = array( 'name' => $ini->variable( 'SiteSettings', 'DefaultAccess' ),
		     'type' => EZ_ACCESS_TYPE_DEFAULT );
    $access = changeAccess( $access );
    $GLOBALS['eZCurrentAccess'] =& $access;
    // Siteaccess activation end

    // return $access;

    /* require_once ("extension/json/include/simplify.php");
    require_once ("extension/json/jsonrpc/xmlrpc.inc");
    require_once ("extension/json/jsonrpc/jsonrpc.inc");
    require_once ("extension/json/jsonrpc/json_extension_api.inc");
    */

    // Module return value,
    // normally fetched from template
    //foreach ($Params[UserParameters] as $param => $value) 
    //    $tpl->setVariable( $param, $value );
    /*
    if (isset ($Params['Parameters'][0]))
      $nodeID=$Params['Parameters'][0];
    else 
      $nodeID=$_GET['nodeID'];
    */

    $node =& eZContentObjectTreeNode::fetch( 2 );

    print_r( $node );             

    return $node; // eZContentObjectTreeNode::fetch( $nodeID ); // $node; // print_r($node);

    /* simplifyNode ($node);

    $json = json_encode ($node);
    if (isset($_GET['debug'])) {
      echo "<pre>";
      print_r ($node);
    }
    print_r($json);
    */
    // eZExecution::cleanExit();
  }

}

?>