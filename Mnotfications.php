<?php
require_once("db.php");
 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");

class Notfications
{
    public $ID;
	public $User_ID ;
	public $Value;
	
    function __construct($uid,$v){
        $this->User_ID=$uid;
        $this->Value=$v;
    }
    
     public function insert(){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");

         $sql = "INSERT INTO  `notfications`( `User_ID`, `Value`) VALUES ('".$this->User_ID."' , '".$this->Value."')";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
       
        $sql="DELETE FROM notfications WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
         $sql = "UPDATE notfications SET `User_ID`='".$this->User_ID."',`Value`='".$this->Value."' WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
}
?>