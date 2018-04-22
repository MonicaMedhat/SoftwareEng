<?php
require_once("db.php");
 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
class Documents{
    public $ID;
 public $docType_ID;
public $a7raz;
    
public function insert ()
{
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
    $sql="INSERT INTO `documents`(`DocumentType_ID`, `a7raz`) VALUES ('".$this->docType_ID."','".$this->a7raz."') ";
    $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
}
 public function update ($ID)
{
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
    $sql="UPDATE `documents` SET `DocumentType_ID`='".$this->docType_ID."',`a7raz`='".$this->a7raz."'WHERE  ID ='".$ID."'";
    $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
}  
    public function delete ($ID)
{
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
    $sql="DELETE FROM `documents` WHERE ID ='".$ID."'";
    $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
}  
    
    }
?>