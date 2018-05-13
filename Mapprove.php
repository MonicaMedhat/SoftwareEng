<?php
require_once("db.php");
 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');

class Approve
{
    public $ID;
	public $App_ID ;
	public $TransactionLog_ID;
	
    
     public function insert(){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
         $sql = "INSERT INTO  `approve`( `App_ID`, `TransactionLog_ID`) VALUES ('".$this->App_ID."' , '".$this->TransactionLog_ID."')";
         
         echo $sql;
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="DELETE FROM approve WHERE ID ='".$ID."'";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
         
       
         $sql = "UPDATE approve SET `App_ID`='".$this->App_ID."',`TransactionLog_ID`='".$this->TransactionLog_ID."' WHERE ID ='".$ID."'";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
}
?>