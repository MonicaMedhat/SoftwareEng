<?php
require_once("db.php");


class Pay_opt
{
    public $ID;
	public $Payment_ID;
	public $Option_ID;
	
    
     public function insert(){
      $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
header('Content-Type: text/html; charset=utf-8');
        
		
       
         $sql = "INSERT INTO  `payment_options`(  `Payment_ID`, `Option_ID`) VALUES ('".$this->Payment_ID."','".$this->Option_ID."' )";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="DELETE FROM payment_options WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
         
       
         $sql = "UPDATE payment_options SET `Payment_ID`='".$this->Payment_ID."',`Option_ID`='".$this->Option_ID."' WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
     public function View()
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="SELECT ID,`Payment_ID`, `Option_ID` FROM payment_options";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    public static function ViewM($mid){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        $sql = "select ID  FROM payment_options where Option_ID ='".$mid."'";
        $m = $db_obj->executesql($sql);
        return $m;
        
    }
    
    
}
?>