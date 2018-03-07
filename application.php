<?php
require ("applications.php");
//require ("db.php");

$db_obj = new dbconnect;
$con = $db_obj->connect();
$con->query("SET NAMES 'utf8'");
header('Content-Type: text/html; charset=utf-8');

if($_SERVER["REQUEST_METHOD"]=="POST"){
   
//    $u=$_POST["Username"];
//    $sql="SELECT COUNT(username) FROM user WHERE username='$u'";
//	$result = $db_obj->executesql($sql);
//	$row = $result->fetch_assoc();
//	if($row['COUNT(username)']>0){
//        echo"username already in use";
//        $u=""; 
//        exit;
//    }
//    else
//    {
//        echo"username is available";
//    }
  
 // $link = $con;

 $con->set_charset("utf8");

 // mysql_set_charset('utf8', $db_obj->connect()); 


    $f =$_POST["FullName"];
    $M =$_POST["Mobile"];
	$e = $_POST["E-mail"];
    $Add = $_POST["Address"];
    $N = $_POST["Nationality"];
    $Edu = $_POST["Education"];
    $D = $_POST["Degree_enrollment"];
    $APP = $_POST["Apply_for"];
    $Dem = $_POST["Demand_salary"];
    $Start = $_POST["Starting_in"];
    $CameF = $_POST["Came_From"];
    $reas = $_POST["Reason"];
    $Comm = $_POST["Comments"];
    $Date=$_POST["Date"];
    
//    $sql="SELECT COUNT(Email) FROM user WHERE Email='$e'";
//	$result = $db_obj->executesql($sql);
//	$row = $result->fetch_assoc();
//	if($row['COUNT(Email)']>0){
//        echo"Email already in use";
//        $u=""; 
//        exit;
//    }
//    else
//    {
//        echo"Email is available";
//    }
    
	



$sql = "INSERT INTO applications(FullName, Mobile, Email, Address, Nationality, Education, Degree_enrollment, Apply_for, Demand_salary, Starting_in, Came_From,Reason, Comments, Date, Page_ID) VALUES ('$f','$M','$e','$Add','$N','$Edu','$D','$APP','$Dem','$Start','$CameF','$reas','$Comm','$Date',1)";
//echo $sql;
 
if( $db_obj->executesql($sql) == true){
    echo"SQL successfully excuted";

         }
    
    else{
         echo "error";
		 
        }
}

?>