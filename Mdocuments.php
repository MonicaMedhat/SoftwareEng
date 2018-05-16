<?php
require_once("db.php");

class Documents{
    
public $ID;
public $docType_ID;
public $Value;
public $a7raz;
public $type;
    
public function insert ()
{
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
    $sql="INSERT INTO `documents`(`DocumentType_ID`, `Value`, `a7raz`) VALUES ('".$this->docType_ID."','".$this->Value."','".$this->a7raz."') ";
    
        $db_obj->executesql($sql);
        $db_obj->disconnect();
}
 public function update ($ID)
{
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
    $sql="UPDATE `documents` SET `DocumentType_ID`='".$this->docType_ID."',`Value`='".$this->Value."',`a7raz`='".$this->a7raz."'WHERE  ID ='".$ID."'";
    
        $db_obj->executesql($sql);
        $db_obj->disconnect();
}  
    public function delete ($ID)
{
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
    $sql="DELETE FROM `documents` WHERE ID ='".$ID."'";
   
        $db_obj->executesql($sql);
        $db_obj->disconnect();
}  
 public function View()
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
        $sql="SELECT  `Value`, T9.Type As type, `a7raz` FROM `documents`d1
         INNER JOIN documenttype_id T9
	   ON T9.ID=d1.DocumentType_ID";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
static function ViewDT(){
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
        $sql="SELECT ID,Type FROM documenttype_id";
         
         $TypeDataSet = $db_obj->executesql($sql);
		
		$i=0;
		$Result;
		while ($row =  mysqli_fetch_array($TypeDataSet))
		{
			$MyObj= new Documents;
            $MyObj->ID = $row["ID"];
            $MyObj->type = $row["Type"];
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
}
    
public function insertd()
{
   $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
    
    $sq="INSERT INTO documenttype_id (Type) VALUES ('".$this->type."') ";
    
        $db_obj->executesql($sq);
        $db_obj->disconnect();
}
 public function deleted($ID)
{
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
    $sql="DELETE FROM documenttype_id WHERE ID ='".$ID."'";
   
        $db_obj->executesql($sql);
        $db_obj->disconnect();
}      
public static function select($id,$val){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        $sql = "select * from documents where DocumentType_ID ='".$id."' AND Value='".$val."' ";
        $m = $db_obj->executesql($sql);
        return $m;
        
    }
    
    }
?>