<?php
include_once "Mpage.php";
require_once("db.php");
 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       

class UserType
{
	public $ID;
	public $UserTypeName;
	public $ArrayOfPages;
   
	function __construct($id)
	{
		if ($id!="")
		{	
            $db_obj = new dbconnect;
            $con = $db_obj->connect();
            $con->set_charset("utf8");
                
			$sql="select * from usertype where ID=$id";
			$result=$db_obj->executesql($sql);
            
			if ($row =  mysqli_fetch_array($result))
			{
				$this->UserTypeName=$row["Type"];
				$this->ID=$row["ID"];
				$sql="select Pages_ID from usertype_pages where UserType_ID=$this->ID";
				//echo $sql;
				$result=$db_obj->executesql($sql);
				$i=0;
				while($row1=mysqli_fetch_array($result))
				{
					$this->ArrayOfPages[$i]=new page($row1[0]);
					$i++;
				}
				
			}
				
		}
	}
    
    public function insert(){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
         $sql = "INSERT INTO usertype (Type) VALUES ('".$this->UserTypeName."')";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    static function update($id,$nid){
        $db_obj = new dbconnect;
            $con = $db_obj->connect();
            $con->set_charset("utf8");
                
			$sql="update user set UserType_id= $id WHERE ID= $nid ";
			$db_obj->executesql($sql);
    }
     static function updateu($ut,$nid){
        $db_obj = new dbconnect;
            $con = $db_obj->connect();
            $con->set_charset("utf8");
                
			$sql="update usertype set Type= '".$ut."' WHERE ID= '".$nid."' ";
			$db_obj->executesql($sql);
    }
    
	static function SelectAllUserTypesInDB()
	{
		//mysql_query($sql);
		$db_obj = new dbconnect;
        $con = $db_obj->connect();
        $con->set_charset("utf8");
        $sql="select * from usertype";
		$TypeDataSet = $db_obj->executesql($sql);
		
		$i=0;
		$Result;
		while ($row =  mysqli_fetch_array($TypeDataSet))
		{
			$MyObj= new UserType($row["ID"]);
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
	}
    
   public static function View($id){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        $sql = "select * from user where ID = '".$id."' ";
        $result = $db_obj->executesql($sql);
        return $result;
       
    }
    public static function select(){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        $sql = "SELECT DISTINCT s1.Type as ut, s1.ID as id FROM user u INNER JOIN usertype s1 ON s1.ID=u.UserType_id";
         $TypeDataSet = $db_obj->executesql($sql);
        $i=0;
		$Result;
		while ($row =  mysqli_fetch_array($TypeDataSet))
		{
			$MyObj= new UserType($row["id"]);
            $MyObj->ID = $row["id"];
            $MyObj->UserTypeName = $row["ut"];
            $Result[$i]=$MyObj;
			$i++;
		}
        
		return $Result;
       
    }
    
        
}

?>