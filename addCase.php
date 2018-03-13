<?php

	
//require("addCaseH.php");
session_start();
require ("db.php");
$db_obj = new dbconnect;
$con = $db_obj->connect();
//header('Content-Type: text/html; charset=utf-8');
 
?>


     <?php
//       if($_SERVER["REQUEST_METHOD"]=="POST"){
//   
//    $u =$_POST["Email"];
//    $p = $_POST["password"];
//    $sql="SELECT Email, Password, UserType_id from user where Email= '$u'";
//	$result=$db_obj->executesql($sql);
//	$row = mysqli_fetch_array($result);
//    $id = $row["UserType_id"];
//    if(($u==$row["Email"])&&($p==$row["Password"]))
//    {
//        $_SESSION["Email"]=$row["Email"];
//        $_SESSION["password"]=$row["Password"];
//         $_SESSION["Userid"] = $row["UserType_id"];
//        
//    }
//    
//    else{
//        echo "invalid Email or password";
//    }
//    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
//        if($id==1)
//        {
            // header("location:http://localhost/lawfirm/index.html");
            $con->set_charset("utf8");
           
            $CN =$_POST["CaseNumber"];
            $CT =$_POST["CaseT"];
            $raf3_eld3wa=$_POST["Date"];
            //$raf3_eld3wa =$_POST["Day"]. "-" . $_POST["Month"] . "-" .$_POST["Year"] ; //lesa insert fel data
            $m7kma = $_POST["court"];
            $dayra = $_POST["circle"];                                          
            $ma3ad_elgalsa=$_POST["Date2"];
            //$ma3ad =$_POST["Day2"]. "-" . $_POST["Month2"] . "-" .$_POST["Year2"] ; //lesa insert fel data
           // $Time = $_POST["Time"]." ".$_POST["ampm"];
            $makan= $_POST["sessionplace"];
            $status=$_POST["details"];
            $SL=$_POST["SelectLawyer"];
            
            $el5esm=$_POST["opponent"];
           
            $address5esm=$_POST["address5esm"];
            $mobile5esm=$_POST["mobile5esm"];
            
            
            $SClient=$_POST["SelectClient"];/////
            $Client=$_POST["ClientName"];
            $ClientType=$_POST["Sefato"];///
            $addressC=$_POST["addressC"];
            $mobileC=$_POST["mobileC"];
            $Payments=$_POST["payment"];
            
            $sql = "INSERT INTO cases(CaseNumber,Tare5_raf3_eld3wa, CaseType_ID , CourtName_ID  , Dayra_ID , Date_Of_Case_ID , Place_Of_Case_ID , Status_ID ,Lawyer_ID,Client_ID,5esm_ID  ) VALUES ('$CN','$raf3_eld3wa','$CT','$m7kma','$dayra','$ma3ad_elgalsa','$makan','$status','$SL','$SClient','4')";
            $sql2="INSERT INTO user(FullName ,mobile, Address_ID,UserType_id ) VALUES('$el5esm','$mobile5esm','$address5esm','5')";
            $sql3="INSERT INTO user(FullName ,mobile, Address_ID,UserType_id ) VALUES('$Client','$mobileC','$addressC','4')";
            $sql4="INSERT INTO casedetails(Document_ID ,Pay_O_Value_ID ,ClientType_ID ,Case_ID ) VLAUES('1','$Payments','$ClientType','2')";
    echo $sql;
        if( $db_obj->executesql($sql) == true){
            echo"SQL successfully excuted";
			//header("location:http://localhost/SE-ass1/index.php");

         }
    
        else
        {
            echo "error";
		 
        }
    }

//        }
//        
//        if($id==2)
//        {
//           //  header("location:http://localhost/lawfirm/lawyerpage.php");
//
//        }
//        
//         }
//    
//    else{
//         echo "error SQL";
//		 
//        }
//}
        
      

       
        ?>
   