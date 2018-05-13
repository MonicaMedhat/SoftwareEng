<?php
require_once("db.php");
 
class UserTypePage
{
    public $ID;
	public $UserType_ID;
	public $Pages_ID;
    
public function insert(){
    $db_obj = new dbconnect;
	$con = $db_obj->connect();
    $con->set_charset("utf8");
    $sql = "insert into usertype_pages(UserType_ID,Pages_ID) values('".$this->UserType_ID."','".$this->Pages_ID."')";
  
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
      
        $sql="delete from usertype_pages where UserType_ID= $ID";
         
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public static function View($pid){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        $sql = "select * from usertype_pages where UserType_ID= '".$pid."'";
        $TypeDataSet = $db_obj->executesql($sql);
        $i=0;
		$Result;
		while ($row =  mysqli_fetch_array($TypeDataSet))
		{
			$MyObj= new UserTypePage($row["ID"]);
            $MyObj->ID = $row["ID"];
            $MyObj->UserType_ID = $row["UserType_ID"];
            $MyObj->Pages_ID = $row["Pages_ID"];
            $Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
       
    }
    
}
?>