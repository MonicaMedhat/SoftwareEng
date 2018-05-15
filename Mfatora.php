<?php
require_once("db.php");


class Fatora
{
    public $ID;
	public $Total;
	public $Month_ID;
	
    
     public function insert(){
      $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
header('Content-Type: text/html; charset=utf-8');
        
		
       
         $sql = "INSERT INTO `fatora`(`Total`, `Month_ID`) VALUES('".$this->Total."','".$this->Month_ID."' )";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="DELETE FROM fatora WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
         
       
         $sql = "UPDATE fatora SET `Total`='".$this->Total."',`Month_ID`='".$this->Month_ID."' WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
     public function View()
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="SELECT ID,`Total`,`Month_ID` FROM fatora";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    public static function ViewM($mid){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        $sql = "select ID  FROM fatora where Total ='".$mid."'";
        $m = $db_obj->executesql($sql);
        return $m;
        
    }
    
    
}
?>