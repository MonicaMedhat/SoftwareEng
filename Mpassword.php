<?php
require_once("db.php");
 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');

class Passwords
{
    public $ID;
	public $User_ID;
	public $Value;
	
    
     public function insert(){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
         $sql = "INSERT INTO  `passwords`( `User_ID`, `Value`) VALUES ('".$this->User_ID."' , '".$this->Value."')";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="DELETE FROM passwords WHERE ID ='".$ID."'";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
         
       
         $sql = "UPDATE passwords SET `User_ID`='".$this->User_ID."',`Value`='".$this->Value."' WHERE ID ='".$ID."'";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public static function View($password){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        $sql = "SELECT User_ID FROM passwords where Value = '".$password."'";
        $result = $db_obj->executesql($sql);
        return $result;
       
    }
    
}
?>