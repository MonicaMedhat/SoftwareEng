<?php
require_once("db.php");


class FatDet
{
    public $ID;
	public $ExpenseType_ID;
	public $Paid;
	
    
     public function insert(){
      $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
header('Content-Type: text/html; charset=utf-8');
        
		
       
         $sql = "INSERT INTO `fatora_details`(`ExpenseType_ID`, `Paid`) VALUES('".$this->ExpenseType_ID."','".$this->Paid."' )";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="DELETE FROM fatora_details WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
         
       
         $sql = "UPDATE fatora_details SET `ExpenseType_ID`='".$this->ExpenseType_ID."',`Paid`='".$this->Paid."' WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
     public function View()
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="SELECT ID,`ExpenseType_ID`,`Paid` FROM fatora_details";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public static function ViewM($mid){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        $sql = "select ID  FROM fatora_details where Paid ='".$mid."'";
        $m = $db_obj->executesql($sql);
        return $m;
    
    
}
}
?>