<?php
require_once("db.php");


class FatUser
{
    public $ID;
	public $User_ID;
	public $Fatora_ID;
	
    
     public function insert(){
      $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
header('Content-Type: text/html; charset=utf-8');
        
		
       
         $sql = "INSERT INTO `fatora_user`(`User_ID`, `Fatora_ID`) VALUES('".$this->User_ID."','".$this->Fatora_ID."' )";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="DELETE FROM fatora_user WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
         
       
         $sql = "UPDATE fatora_user SET `User_ID`='".$this->User_ID."',`Fatora_ID`='".$this->Fatora_ID."' WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
     public function View()
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="SELECT ID,`User_ID`,`Fatora_ID` FROM fatora_user";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
}
?>