<?php
require_once("db.php");

class Login
{
    public $email;
    public $password;
    public $User_ID;
    
static function checklogin($e,$p){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
          
        $sql="SELECT * FROM email where User_ID ='".$e."'";
        $sqll="SELECT * FROM passwords  where User_ID ='".$p."'";
        
        $E = $db_obj->executesql($sql);
        $p = $db_obj->executesql($sqll);
        $row =  mysqli_fetch_array($E);
        $roww =  mysqli_fetch_array($p);
		        
		if($row["User_ID"] == $roww["User_ID"])
		{
            
            $Result = $row["User_ID"];
			
		}
		return $Result;
       
    }
    
static function logout()
{
    session_start();
    session_destroy();
    header("location:http://localhost/lawfirm/Vlogin.php");
}
    
}

?>