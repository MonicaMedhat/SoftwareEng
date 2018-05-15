<?php
require_once("db.php");


class Fat_FatDet
{
    public $ID;
	public $FatoraDet_ID;
	public $Fatora_ID;
	
    
     public function insert(){
      $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
header('Content-Type: text/html; charset=utf-8');
        
		
       
         $sql = "INSERT INTO `fatora_fatdetails`(`FatoraDet_ID`, `Fatora_ID`) VALUES('".$this->FatoraDet_ID."','".$this->Fatora_ID."' )";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="DELETE FROM fatora_fatdetails WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
         
       
         $sql = "UPDATE fatora_fatdetails SET `FatoraDet_ID`='".$this->FatoraDet_ID."',`Fatora_ID`='".$this->Fatora_ID."' WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
     public function View()
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="SELECT ID,`FatoraDet_ID`,`Fatora_ID` FROM fatora_fatdetails";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
}
?>