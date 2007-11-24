<?php
 
class ClassMapping
{
    //Constructor and declaration
    //methodTable for AMFPHP
    function ClassMapping()
    {
		$this->methodTable = array(
		    "getLength"  => array(
			    "description" => "Return the length of a vector",
				"access" => "remote",
				"arguments" => array (
					"vector" => array(
						"type" => "Vector3d", //This is what does the class mapping
						"required" => "true"
					)
				)
		    )
		);
    }
 
    //The actual function
    function getLength($vector)
    {
        return sprintf('%.2f', $vector->getLength());
     }
}
 
?>