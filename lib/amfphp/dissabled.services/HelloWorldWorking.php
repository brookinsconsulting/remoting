<?php

class HelloWorld
{
  function HelloWorld()
  {
        $this->methodTable = array( 
				   "say" => array(
						  "access" => "remote",
						  "description" => "Pings back a message"
						  ),
				   "fetchContentObjectNode" => array(
						  "access" => "remote",
						  "description" => "Returns a content object node object"
						  )
				   );
  }

  function say($sMessage, $sIntMessage = 'You said: ')
  {
    return $sIntMessage . $sMessage;
  }

  function fetchContentObjectNode( $nodeID = false )
  {
    // return array( array( 0,1 ) );

    // ini_set('display_errors', 0);
   
    // return $this->say($nodeID, 'They know the rest of the number sir ... ');

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


    // $node = array( 1, 2);
    // $node =& eZContentObjectTreeNode::fetch( 2 );
    // $node =& eZContentObjectTreeNode::fetchList( false, false, 3 );
    // $node =& eZContentObjectTreeNode::fetchList( 2, false, 3 );

    // require_once ("kernel/classes/ezcontentobjecttreenode.php");
    /*    $db = eZDB::instance();
    // return $db;
    
    if( ! $db->isConnected() )
    {
      // return 'errorMissingConnectionToDB';
      return $db;
    }
    */

    $node = & eZContentObjectTreeNode::fetch ( $nodeID );

    // print_r($nodeID);
    return $node;
    eZExecution::cleanExit();


    /// print_r( $node );             

    // return $node; // eZContentObjectTreeNode::fetch( $nodeID ); // $node; // print_r($node);

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