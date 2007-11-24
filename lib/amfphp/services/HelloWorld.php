<?php

// bc heading

class HelloWorld
{
  // Comment
  function HelloWorld()
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
						  )
				   );
  }

  // Comment
  function combineString( $sPrependString = 'The answer machine says: ',  $sAppendString = false)
  {
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

}

?>