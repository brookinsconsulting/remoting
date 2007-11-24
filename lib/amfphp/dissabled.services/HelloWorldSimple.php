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

}

?>