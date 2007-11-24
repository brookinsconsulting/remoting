<?php

// bc heading

class RemoteBasicExample
{
  // Comment
  function RemoteBasicExample()
  {
        $this->methodTable = array( 
				   "combineString" => array(
						  "access" => "remote",
						  "description" => "Returns the combination of two strings as a single string"
						  ),
				   "fetchContentObjectNode" => array(
						  "access" => "remote",
						  "description" => "Returns a eZContentObjectTreeNode object by nodeID"
						  ),
				   "fetchContentObjectNodeList" => array(
						  "access" => "remote",
						  "description" => "Returns an array of all eZContentObjectTreeNode objects"
						  ),
				   "fetcheZPublishVersion" => array(
						  "access" => "remote",
                                                  "description" => "Returns a number"
						  )
				   );
  }

 // Comment
 function combineString( $sPrependString = 'The answer machine says: ', $sAppendString = '... Hello World!' )
 {
    if( $sAppendString == false )
      $sAppendString = '... Hello World!';

    if( $sPrependString == false )
      $sPrependString = 'The answer machine says: ';

    return $sPrependString . $sAppendString;
    eZExecution::cleanExit();
  }

  // Comment
  function fetchContentObjectNode( $nodeID = false )
  {
    $node =& eZContentObjectTreeNode::fetch( $nodeID );
    return $node;
    eZExecution::cleanExit();
  }

  // Comment
  function fetchContentObjectNodeList( )
  {
    $result =& eZContentObjectTreeNode::fetchlist();
    return $result;
    eZExecution::cleanExit();
  }

  // Comment
  function fetcheZPublishVersion( )
  {
    $sdk = new eZPublishSDK();
    $version = $sdk->version();

    /* if( $sAppendString == false )
    $sAppendString = '... Hello World!'; */

 return $version;
 eZExecution::cleanExit();
  }

}

?>