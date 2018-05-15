<?php
require_once("db.php");


class ExpenseTypes
{
    public $ID;
	public $Type;
	
    
     public function insert(){
      $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
header('Content-Type: text/html; charset=utf-8');
        
		
       
         $sql = "INSERT INTO  `expensetypes`( `Type`) VALUES ('".$this->Type."' )";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="DELETE FROM expensetypes WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
         
       
         $sql = "UPDATE expensetypes SET `Type`='".$this->Type."' WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     static function View()
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
       
        $sql="SELECT ID,Type FROM expensetypes";
         
         $TypeDataSet = $db_obj->executesql($sql);
		
		$i=0;
		$Result;
		while ($row =  mysqli_fetch_array($TypeDataSet))
		{
			$MyObj= new PMethod;
            $MyObj->ID = $row["ID"];
            $MyObj->Type = $row["Type"];
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
    }
    
    
}
?>