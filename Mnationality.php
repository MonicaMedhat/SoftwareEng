<?php
require_once("db.php");
$db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
class Nationality
{
    public $ID;
	public $Name;
	
    
     public function insert(){
      $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
    
         $sql = "INSERT INTO  `nationality`( `Name`) VALUES ('".$this->Name."' )";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
               
        $sql="DELETE FROM nationality WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
         $sql = "UPDATE nationality SET `Name`='".$this->Name."' WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
     static function View()
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
        $sql="SELECT ID,Name FROM nationality";
       $TypeDataSet = $db_obj->executesql($sql);
		$i=0;
		$Result;
		while ($row =  mysqli_fetch_array($TypeDataSet))
		{
			$MyObj= new Nationality;
            $MyObj->ID = $row["ID"];
            $MyObj->Name = $row["Name"];
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
    }
    
    
}
?>