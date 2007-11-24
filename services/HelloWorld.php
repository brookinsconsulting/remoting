<?php

// bc heading

class HelloWorld
{

  // Comment
  function HelloWorld()
  {
        $this->methodTable = array( 
        "sayHelloWorld" => array(
			      "access" => "remote",
			      "description" => "Returns the combination of two strings as a single string"
			      )
	);
  }

  // Comment
  function sayHelloWorld( $sPrependString = 'The answer machine says: ',  $sAppendString = '... Hello World!' )
  {
    if( $sAppendString == false )
      $sAppendString = '... Hello World!';

    if( $sPrependString == false )
      $sPrependString = 'The answer machine says: ';

    return $sPrependString . $sAppendString;
    eZExecution::cleanExit();
  }

}

?>