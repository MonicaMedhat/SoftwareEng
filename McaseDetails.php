<?php
require_once("db.php");
 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');

class CaseDetails{
    public $ID;
 public $doc_ID;
public $POV_ID;
    
public function insert ()
{
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
     
    $sql="INSERT INTO `casedetails`( `Document_ID`, `Pay_O_Value_ID`) VALUES ('".$this->doc_ID."','".$this->POV_ID."') ";
    $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
}
 public function update ($ID)
{
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
    $sql="UPDATE `casedetails` SET `Document_ID`='".$this->doc_ID."',`Pay_O_Value_ID`='".$this->POV_ID."'WHERE  ID ='".$ID."'";
    $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
}  
    public function delete ($ID)
{
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
    $sql="DELETE FROM `casedetails` WHERE ID ='".$ID."'";
    $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
}  
    
    
public static function View($id){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        $sql = "select ID from casedetails where Document_ID ='".$id."'";
        $m = $db_obj->executesql($sql);
        return $m;
        
    }
}
    ?>
