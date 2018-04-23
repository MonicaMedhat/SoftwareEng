<?php
require_once("db.php");
 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');

class User
{
    public $ID;
	public $FullName;
	public $mobile;
	public $Address_ID;
	public $UserType_id;
    public $obj;
    
     public function insert($obj){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
         $sql = "INSERT INTO user (FullName , mobile ,Address_ID, UserType_id) VALUES ('".$obj->FullName."' , '".$obj->mobile."' ,'".$obj->Address_ID."'   , '".$obj->UserType_id."' )";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="DELETE FROM user WHERE ID ='".$ID."'";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
         $sql = "UPDATE user SET `FullName`='".$this->FullName."',`mobile`='".$this->mobile."',`Address_ID`='".$this->Address_ID."',`UserType_id`='".$this->UserType_id."' WHERE ID ='".$ID."'";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
}
?>