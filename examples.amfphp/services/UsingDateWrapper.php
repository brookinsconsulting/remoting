<?php
class UsingDateWrapper
{
    function UsingDateWrapper()
    {
        $this->methodTable = array(
            "getTime" => array(
                "description" => "A method to show the server and client time",
                "access" => "remote"
            )
        );
    }
 
    function getTime($time)
    {
        $dw = new DateWrapper($time);
    	return array(gmdate('h:i:s', $dw->getClientDate()), gmdate('h:i:s', $dw->getServerDate()));
    }
}
?>