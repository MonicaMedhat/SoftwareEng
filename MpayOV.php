<?php
require_once("db.php");


class PayOV
{
    public $ID;
	public $PM_option_ID;
	public $Case_ID ;
    public $value  ;
	
    
     public function insert(){
      $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
header('Content-Type: text/html; charset=utf-8');
        
		
       
         $sql = "INSERT INTO `payment_options_value`(`PM_option_ID`, `Case_ID`, `value`) VALUES('".$this->PM_option_ID."','".$this->Case_ID."','".$this->value."' )";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="DELETE FROM payment_options_value WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
         
       
         $sql = "UPDATE payment_options_value SET `PM_option_ID `='".$this->PM_option_ID ."',`Case_ID `='".$this->Case_ID ."', `value` ='".$this->value ."'WHERE ID ='".$ID."'";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     static function View()
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
       
        $sql="SELECT ID,PM_option_ID,Case_ID,value FROM payment_options_value";
         
         $TypeDataSet = $db_obj->executesql($sql);
		
		$i=0;
		$Result;
		while ($row =  mysqli_fetch_array($TypeDataSet))
		{
			$MyObj= new PMethod;
            $MyObj->ID = $row["ID"];
            $MyObj->PM_option_ID = $row["PM_option_ID"];
            $MyObj->Case_ID = $row["Case_ID"];
            $MyObj->value = $row["value"];
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
    }
    
    
    
    
}
?>