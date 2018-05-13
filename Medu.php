<?php
require_once("db.php");


class Education
{
    public $ID;
	public $Name;
	
    
     public function insert(){
      $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
           
         $sql = "INSERT INTO  education_id( `Name`) VALUES ('".$this->Name."' )";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
        $sql="DELETE FROM education_id WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
         $sql = "UPDATE education_id SET `Name`='".$this->Name."' WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    static function View()
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
        $sql="SELECT ID,Name FROM education_id";
        $TypeDataSet = $db_obj->executesql($sql);
		$i=0;
		$Result;
		while ($row =  mysqli_fetch_array($TypeDataSet))
		{
			$MyObj= new Education;
            $MyObj->ID = $row["ID"];
            $MyObj->Name = $row["Name"];
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
    }
    
    
}
?>