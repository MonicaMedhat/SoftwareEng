<?php
require_once("db.php");
 
class User
{
    public $ID;
	public $FullName;
	public $mobile;
	public $Address_ID;
	
	public $UserType_id;
    
     public function insert(){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
         $sql = "INSERT INTO user (FullName , mobile ,Address_ID, UserType_id) VALUES ('".$this->FullName."' , '".$this->mobile."' ,'".$this->Address_ID."'   , '".$this->UserType_id."' )";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
        $sql="DELETE FROM user WHERE ID ='".$ID."'";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
             
         $sql = "UPDATE user SET `FullName`='".$this->FullName."',`mobile`='".$this->mobile."',`Address_ID`='".$this->Address_ID."',`UserType_id`='".$this->UserType_id."' WHERE ID ='".$ID."'";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
//     public function View()
//    {
//        $db_obj = new dbconnect;
//		$con = $db_obj->connect();
//        $con->set_charset("utf8");
//        header('Content-Type: text/html; charset=utf-8');
//       
//        $sql="SELECT ID,FullName FROM User ";
//         
//        
//        $db_obj->executesql($sql);
//        $db_obj->disconnect();
//    }
    public function ViewID($UserType_id)
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
           
        $sql="SELECT ID,FullName FROM User WHERE UserType_ID ='".$UserType_id."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }

    public static function View($id)
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
       if(!empty($id))
        {
        $sql="SELECT ID,FullName FROM User WHERE UserType_ID =$id";
        $u = $db_obj->executesql($sql);
        $i=0;
		$Result;
           
		while ($row =  mysqli_fetch_array($u))
		{
			$MyObj= new User;
            $MyObj->ID = $row["ID"];
            $MyObj->FullName = $row["FullName"];
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
       }
       
    }
    
    public static function ViewM($mid){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        $sql = "select ID from user where mobile =$mid ";
        $m = $db_obj->executesql($sql);
        return $m;
        
    }
    
    
}
?>