<?php
require_once ("db.php");
require_once("MpayMeth.php");
require_once("Mcases.php");
require_once("Mmonths.php");    
require_once("Mfatora.php");
require_once("MfatDet.php");
require_once("MpayOV.php");
require_once("MpayOpt.php");
require_once("Moption.php");
require_once("MfatFatDet.php");
require_once("MfatUser.php");

require_once("MexpenType.php");

//require_once("Vinvoice.php");

 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        

$month=new months();
$fat=new Fatora();
$fatD=new FatDet();
$fatFatDet=new Fat_FatDet();
$fatUser=new FatUser();
$POV=new PayOV;
$Opt=new Option();
$PO=new Pay_opt();
$Pay=new PMethod;
$cn=new Cases;





$obj=PMethod::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#payment").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Name; ?> </option>");
</script>
<?php
                                  
}?>
<?php

$obj=Cases::ViewCN();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#caseN").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->CaseNumber; ?> </option>");
</script>


<?php
                                  
}?>

<?php

$obj=ExpenseTypes::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#expenType").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Type; ?> </option>");
</script>


<?php
                                  
}?>


<?php

$obj=Option::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#options").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Name; ?> </option>");
</script>


<?php
                                  
}?>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
//    
//$mm = new months;
//$mm->Name = $mid; // 7oty makan el $mid el $_Post[]
//$mm->insert();
//
//$m = months::ViewM($mid);
//if($row = mysqli_fetch_array($m))
//{
//    $m->ID = $row["ID"];
//}
//$x = $m->ID;
//echo $x;
//    
    

    
   //options , payment -->payment_options 
    
//$Opt->Name=$_POST['options'];
//$Opt->insert();
//$mid =$Opt->Name;  
//$m = Option::ViewM($mid);
//     if($row = mysqli_fetch_array($m))
//{
//    $m->ID = $row["ID"];
//}
//$xo = $m->ID;
//echo " ",$xo;
    $PO->Option_ID=$_POST['options'];
    
    
    
      
//$Pay->Name=$_POST['payment'];
//$Pay->insert();
//$mid = $Pay->Name; 
//$m = PMethod::ViewM($mid);
//     if($row = mysqli_fetch_array($m))
//{
//    $m->ID = $row["ID"];
//}
//$x2 = $m->ID;
//echo " ",$x2;
    $PO->Payment_ID=$_POST['payment'];
//    $PO->insert();
    
    
    
    
    
    
    
    
    
  $mid1 = $PO->Option_ID;//$_POST['options']; 
$m1 = Pay_opt::ViewM($mid1);
     if($row = mysqli_fetch_array($m1))
{
    $m1->ID = $row["ID"];
}
$x3 = $m1->ID;
echo " ",$x3;

//    
//$mid=$_POST['caseN'];
//    
//
//$m = Cases::ViewC($mid);
//     if($row = mysqli_fetch_array($m))
//{
//    $m->ID = $row["ID"];
//}
//$x4 = $m->ID;
//echo " ",$x4;
    
    
$POV->PM_option_ID=$x3;
$POV->Case_ID =$_POST['caseN'];
$POV->value=$_POST['payOV'];
$POV->insert();
 
    
    //fatora,fatDetails
    

$fatD->ExpenseType_ID=$_POST['expenType'];
$fatD->Paid=$_POST['paid'];
$fatD->insert();    
    
        
$month->Name=$_POST['month'];
$month->insert();
$mid2 =$month->Name; //$_POST['month'];
$m2 = months::ViewM($mid2);
    if($row = mysqli_fetch_array($m2))
{
    $m2->ID = $row["ID"];
}
$x = $m2->ID;
echo $x;
$fat->Month_ID= $x;   
$fat->Total=($_POST['total'] - $fatD->Paid);
$fat->insert();






    
    
    
    
    
    
    
    
// fatora_fatoraDetails
         


$mid3= $fatD->Paid;//$_POST['paid'];  
$m3 = FatDet::ViewM($mid3);
     if($row = mysqli_fetch_array($m3))
{
    $m3->ID = $row["ID"];
}
$f1 = $m3->ID;
echo " ",$f1;
    
    $fatFatDet->FatoraDet_ID=$f1;
     
    
      
$mid4 = $fat->Total;//$_POST['total'];  
$m4 = Fatora::ViewM($mid4);
     if($row = mysqli_fetch_array($m4))
{
    $m4->ID = $row["ID"];
}
$f2 = $m4->ID;
echo " ",$f2;
    
    $fatFatDet->Fatora_ID=$f2;
    $fatFatDet->insert();
    
    
    
    
    
  
//fatora,user
    
    
$mid5 = $POV->Case_ID;//$_POST['caseN'];  
$m5 = Cases::ViewUser($mid5);
     if($row = mysqli_fetch_array($m5))
{
    $m5->Client_ID = $row["Client_ID"];
}
$u1 = $m5->Client_ID;
echo " ",$u1;
    
    $fatUser->User_ID=$u1;
     
    
      
$mid6 = $fat->Total;//$_POST['total'];  
$m6 = Fatora::ViewM($mid6);
     if($row = mysqli_fetch_array($m6))
{
    $m6->ID = $row["ID"];
}
$f2 = $m6->ID;
echo " ",$f2;
    
    $fatUser->Fatora_ID=$f2;
    $fatUser->insert();
    
    

    $query = array(
    'caseN' => $POV->Case_ID, 
    'User_ID' => $fatUser->User_ID,
    'fat_ID' => $fatUser->Fatora_ID,
    'month_ID' => $fat->Month_ID,
    'fatd_ID' =>  $fatFatDet->FatoraDet_ID,
    'expenType' =>$fatD->ExpenseType_ID ,
    'pay_opt_ID' => $POV->PM_option_ID,
    'pay_ID' => $PO->Payment_ID
    );
    
    
    $qry=$POV->Case_ID;
    $qry2= $fatUser->User_ID;
    $qry3=$fatUser->Fatora_ID;
    $qry4=$fat->Month_ID;
    $qry5=$fatFatDet->FatoraDet_ID;
    $qry6=$fatD->ExpenseType_ID ;
    $qry7=$POV->PM_option_ID;
    $qry8=$PO->Payment_ID;
    
//    $query = http_build_query($query);
 header("Location: /SE_Project/Minvoice.php?caseN=$qry&User_ID=$qry2&fat_ID=$qry3&month_ID=$qry4&fatd_ID=$qry5&expenType=$qry6&pay_opt_ID=$qry7&pay_ID=$qry8");

}
?>




