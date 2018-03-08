<?php
session_start();
	
require ("addCaseH.php");
$db_obj = new dbconnect;
$con = $db_obj->connect();
header('Content-Type: text/html; charset=utf-8');
 
?>


     <?php
       if($_SERVER["REQUEST_METHOD"]=="POST"){
   
    $u =$_POST["Email"];
    $p = $_POST["password"];
    $sql="SELECT Email, Password, UserType_id from user where Email= '$u'";
	$result=$db_obj->executesql($sql);
	$row = mysqli_fetch_array($result);
    $id = $row["UserType_id"];
    if(($u==$row["Email"])&&($p==$row["Password"]))
    {
        $_SESSION["Email"]=$row["Email"];
        $_SESSION["password"]=$row["Password"];
         $_SESSION["Userid"] = $row["UserType_id"];
        
    }
    
    else{
        echo "invalid Email or password";
    }
    
    if( $db_obj->executesql($sql) == true){
        
        if($id==1)
        {
             header("location:http://localhost/lawfirm/index.html");
            $con->set_charset("utf8");
           
            $CN =$_POST["caseNumber"];
            $CT =$_POST["CaseT"];
            $date =$_POST["Day"]. "-" . $_POST["Month"] . "-" .$_POST["Year"] ;
            $m7kma = $_POST["court"];
            $dayra = $_POST["circle"];
            $date2 =$_POST["Day2"]. "-" . $_POST["Month2"] . "-" .$_POST["Year2"] ;
            $Time = $_POST["Time"]." ".$_POST["ampm"];
            $makan= $_POST["sessionplace"];
            
            
            
        if( $db_obj->executesql($sql) == true){
            echo"SQL successfully excuted";
			header("location:http://localhost/SE-ass1/index.php");

         }
    
        else
        {
            echo "error";
		 
        }

        }
        
        if($id==2)
        {
             header("location:http://localhost/lawfirm/lawyerpage.php");

        }
        
         }
    
    else{
         echo "error SQL";
		 
        }
}
        
      
            
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
            
    }
}
       
        ?>
   