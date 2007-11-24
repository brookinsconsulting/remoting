/**
 * This service secures a method by username and password
 */
<?php
class SecureService
{
    function SecureService()
    {
        $this->methodTable = array(
            "testLogin" => array(
                "description" => "A login test method",
                "access" => "remote",
                "roles" => "admin"   // this method will be available only if authenticate method returns "admin"
            ),
            "secureMethod" => array(
                "description" => "A secure method",
                "access" => "remote",
                "roles" => "admin"   // this method will be available only if authenticate method returns "admin"
            ),
            "regularMethod" => array(
                "description" => "A non-secure method",
                "access" => "remote" 
            ),
            "logout" => array(
                "description" => "A logout method",
                "access" => "remote"
            )
        );
    }
    
    function testLogin()
    {
    	return true;
    }
 
    function secureMethod()
    {
        return "Only authorized people can access this";
    }
 
    function regularMethod()
    {
        return "Anyone can access this";
    }
 
    function logout()
    {
        Authenticate::logout();
    }
 
    // This function will authenticate the client
    // before return the value of method call
    function _authenticate($user, $pass){
        if($user == "admin" && $pass == "secret"){
            return "admin";
        } else {
            return false;
        }
    }
}
?>