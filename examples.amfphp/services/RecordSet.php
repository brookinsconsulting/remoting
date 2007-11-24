<?php
 
include_once("dbconfig.php");
class RecordSet
{
    //Constructor and declaration
    //methodTable for AMFPHP
    function RecordSet()
    {
		$this->methodTable = array(
		    "listPersons"  => array(
			    "description" => "Return lastname, firstname of every person between 10 and 30 years old",
				"access" => "remote",
				"arguments" => array ()
		    )
		);
		mysql_pconnect( DB_HOST, DB_USER, DB_PASS);
		mysql_select_db( DB_NAME );
    }
 
    //The actual function
    function listPersons($age_min, $age_max)
    {
        $query = sprintf("SELECT CONCAT_WS(' ', last_name, first_name ) AS label, uid as data FROM person " .
                 "WHERE age BETWEEN %d AND %d " .
                 "ORDER BY last_name", $age_min, $age_max);
        NetDebug::trace($query);
        $rs = mysql_query($query);
        NetDebug::trace(mysql_error());
        return $rs;
     }
}
 
?>