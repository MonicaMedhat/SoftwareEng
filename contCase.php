<?php 
require ("db.php");
require ("Mcases.php");
require ("McaseDetails.php");
require ("Muser.php");
require ("Mdocuments.php");

$db_obj = new dbconnect;
$con = $db_obj->connect();

$Cmod = new Cases;
$Cdmod = new CaseDetails;
$Umod = new User;
$Dmod = new Documents;

if($_SERVER["REQUEST_METHOD"]=="POST"){
        

            $con->set_charset("utf8");
    
            $Cmod->CaseNumber =$_POST["CaseNumber"];
            $Cmod->Tare5_raf3_eld3wa =$_POST["Date"];
            $Cmod->Date_Of_Case_ID =$_POST["Date2"];
            $Cmod->Lawyer_ID =$_POST["SelectLawyer"];
            $Cmod->Client_ID =$_POST["SelectClient"];
            $Cmod->ClientType_ID =$_POST["Sefato"];
            $Cmod->CaseType_ID =$_POST["CaseT"];
            $Cmod->Place_Of_Case_ID = $_POST["sessionplace"];
            $Cmod->CourtName_ID = $_POST["court"];
            $Cmod->Status_ID =$_POST["details"];
            $Cmod->Dayra_ID = $_POST["circle"];   
    
            
             $Umod->FullName =$_POST["opponent"];
             $Umod->mobile =$_POST["mobile5esm"];
             $Umod->Address_ID =$_POST["address5esm"];
	         $Umod->UserType_id ='5';
             $Umod->insert($Umod);
             $sql = "select ID from user where mobile =".$_POST["mobile5esm"]." ";
             $result = $db_obj->executesql($sql);
                           
             if($row = mysqli_fetch_array($result))
             {
                 $Umod->ID = $row["ID"];
             }
             $Cmod->hesm_ID = $Umod->ID;
    
             $Umod->FullName =$_POST["ClientName"];
             $Umod->mobile =$_POST["mobileC"];
             $Umod->Address_ID =$_POST["addressC"];
	         $Umod->UserType_id='4';
             $Umod->insert($Umod);
    
//             $sql = "select ID from user where mobile =".$_POST["mobileC"]." ";
//             
//             $result = $db_obj->executesql($sql);
//             $result=$db_obj->executesql($sql);
//                           
//             if($row = mysqli_fetch_array($result))
//             {
//                 $Umod->ID = $row["ID"];
//             }
             
    $Dmod->docType_ID = $_POST["documenttype"];
    $Dmod->a7raz = $_POST["27raz"];
    $Dmod->insert($Dmod);
    
     $sql = "select ID from documents where DocumentType_ID ='$Dmod->docType_ID' AND a7raz='$Dmod->a7raz'";
             
             $result=$db_obj->executesql($sql);
                           
             if($row = mysqli_fetch_array($result))
             {
                 $Dmod->ID = $row["ID"];
             }
    
            $Cdmod->doc_ID = $Dmod->ID;
            $Cdmod->POV_ID = $_POST["payment"];
    
            $Cdmod->insert($Cdmod);
    
     $sql = "select ID from casedetails where Document_ID ='$Cdmod->doc_ID'";
             $result = $db_obj->executesql($sql);
                           
             if($row = mysqli_fetch_array($result))
             {
                 $Cdmod->ID = $row["ID"];
             }
            $Cmod->CaseDetails_ID = $Cdmod->ID;
            $Cmod->insert($Cmod);      

}
?>