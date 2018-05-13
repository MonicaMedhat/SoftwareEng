<?php
require_once("db.php");


class Date
{
    public $ID;
	public $Date;
    public $Time;
	
    
     public function insert(){
      $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
header('Content-Type: text/html; charset=utf-8');
        
		
       
         $sql = "INSERT INTO  `date_of_case`( `Date`, `Time`) VALUES ('".$this->Date."','".$this->Time."' )";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="DELETE FROM date_of_case WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
         
       
         $sql = "UPDATE date_of_case SET `Date`='".$this->Date."',`Time`='".$this->Time."' WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     static function View()
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
       
        $sql="SELECT ID,Date,Time FROM date_of_case";
        $TypeDataSet = $db_obj->executesql($sql);
		
		$i=0;
		$Result;
		while ($row =  mysqli_fetch_array($TypeDataSet))
		{
			$MyObj= new Date;
            $MyObj->ID = $row["ID"];
            $MyObj->Date = $row["Date"];
            $MyObj->Time = $row["Time"];
            
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
    }
    
    
    
}
?>