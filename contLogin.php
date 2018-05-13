<?php
session_start();
require_once("db.php");
include_once("Mlogin.php");
include_once("Muser.php");
include_once("MuserType.php");
require_once("Memail.php");
require_once("Mpassword.php");

$db_obj = new dbconnect;
$con = $db_obj->connect();
$con->set_charset("utf8");

if(isset($_POST['Add']))
{          
    $u =$_POST["Email"];
    $p = $_POST["password"];
    
    $e = Email::View($u);
    $pp = Passwords::View($p);
   if($row = mysqli_fetch_array($e))
    {
         $e->User_ID = $row["User_ID"];    
    }
     if($roww = mysqli_fetch_array($pp))
    {
         $pp->User_ID = $roww["User_ID"];    
    }

    if($row["User_ID"] == $roww["User_ID"])
    {
         $id = $row["User_ID"];
    }
    
    $obj = UserType::View($id);
    
    if($rro = mysqli_fetch_array($obj))
    {
        $obj->UserTypeName = $rro["UserType_id"]; 
    
     $un = $obj->UserTypeName;
     
        $_SESSION["UserTypeid"] = $un;
   
    header("location:http://localhost/lawfirm/Vuserpage.php");
    }
   
}

?>