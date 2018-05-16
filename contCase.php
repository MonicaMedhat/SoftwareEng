<?php 
require_once ("db.php");
require_once ("Mcases.php");
require_once ("McaseType.php");
require_once ("MclientType.php");
require_once ("McaseDetails.php");
require_once ("McourtName.php");
require_once ("Muser.php");
require_once ("Mdayra.php");
require_once ("Mplaces.php");
require_once ("Mdate.php");
require_once ("Mstatus.php");
require_once ("Mdocuments.php");
require_once ("MpayMeth.php");


 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        


$Cmod = new Cases;
$Cdmod = new CaseDetails;
$Umod = new User;
$Dmod = new Documents;

$obj=CaseType::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#CaseT").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Name; ?> </option>");
</script>
<?php
}?>

<?php
$obj=Date::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#Date").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Date; ?>  <?php echo $obj[$i]->Time; ?> </option>");
</script>
<?php
}?>

<?php
$cr=CourtName::View();

for($i=0;$i<count($cr);$i++) {?>
<script>
$("#court").append("<option value= <?php echo $cr[$i]->ID; ?> > <?php echo $cr[$i]->Name; ?> </option>");
</script>
     <?php }?> 

   <?php
$obj=Dayra::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#circle").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Dayra; ?> </option>");
</script>
<?php
            }?>


<?php
$obj=Date::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#Date2").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Date; ?>  <?php echo $obj[$i]->Time; ?> </option>");
</script>
<?php
}?>

<?php            
$obj=Places::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#sessionplace").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Place; ?> </option>");
</script>
<?php
}?>
     <?php


$obj=CaseStatus::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#details").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Status; ?> </option>");
</script>
<?php
}
$obj=CaseStatus::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#previous").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Status; ?> </option>");
</script>
<?php
}
$obj=CaseStatus::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#decision").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Status; ?> </option>");
</script>
<?php
}?>
<?php
    $v ='2';	
    $obj=User::View($v);
    for($i=0;$i<count($obj);$i++){?>
    <script>
    $("#SelectLawyer").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->FullName; ?> </option>");
    </script> 
<?php
}?>

<?php            
$obj=Places::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#address5esm").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Place; ?> </option>");
</script>
<?php
}?>

<?php
$x ='4';	
$obj=User::View($x);
if($obj != ""){
    for($i=0;$i<count($obj);$i++){?>
    <script>
    $("#SelectClient").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->FullName; ?> </option>");
    </script> 
<?php
}}
else {?>
<script>
    $("#SelectClient").append("<option> > add client </option>");
 </script>
<?php  
}
?>
<?php            
$obj=ClientType::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#side").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Type; ?> </option>");
</script>
<?php
}?>

 <?php            
$obj=Places::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#addressC").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Place; ?> </option>");
</script>
<?php
}?>
<?php
$obj=Documents::ViewDT();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#documenttype").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->type; ?> </option>");
</script>
<?php
}?>
 
<?php
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
            $Cmod->previous_status =$_POST["previous"];
            $Cmod->decision =$_POST["decision"];

            $Cmod->Dayra_ID = $_POST["circle"];   
    
            
             $Umod->FullName =$_POST["opponent"];
             $Umod->mobile =$_POST["mobile5esm"];
             $Umod->Address_ID =$_POST["address5esm"];
	         $Umod->UserType_id ='5';
             $Umod->insert();
             $m = $_POST["mobile5esm"];
             $result = $Umod->ViewM($m);
                       
             if($row = mysqli_fetch_array($result))
             {
                 $Umod->ID = $row["ID"];
             }
             $Cmod->hesm_ID = $Umod->ID;
    
             $Umod->FullName =$_POST["ClientName"];
             $Umod->mobile =$_POST["mobileC"];
             $Umod->Address_ID =$_POST["addressC"];
	         $Umod->UserType_id='4';
             $Umod->insert();
    
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
    $Dmod->Value = $_POST["document"];
    $Dmod->insert();
    $d = $Dmod->docType_ID;
    $v = $Dmod->Value;
    $result = $Dmod->select($d,$v);
    
             if($row = mysqli_fetch_array($result))
             {
                 $Dmod->ID = $row["ID"];
             }
    
            $Cdmod->doc_ID = $Dmod->ID;
           
    
            $Cdmod->insert($Cdmod);
            $cd = $Cdmod->doc_ID;
            $result = $Cdmod->View($cd);
                           
             if($row = mysqli_fetch_array($result))
             {
                 $Cdmod->ID = $row["ID"];
             }
            $Cmod->CaseDetails_ID = $Cdmod->ID;
            $Cmod->insert();      

}
?>

 <script>
        function div_show(){
        document.getElementById('popup').style.display = "block";
        }
        function form1_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "block";
        }
         function form1_hide() {
        document.getElementById('form1').style.display = "none";
        document.getElementById('form').style.display = "block";
        }
        function form2_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('client').style.display = "none"; 
        document.getElementById('form2').style.display = "block"; 
        }
         function form2_hide() {
        document.getElementById('form').style.display = "none";
         document.getElementById('form2').style.display = "none";
        document.getElementById('form1').style.display = "block"; 
        }
         function form3_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('form2').style.display = "none";
        document.getElementById('client').style.display = "none";
        document.getElementById('form3').style.display = "block"; 
        }
        function form3_hide() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('form3').style.display = "none";
       
        document.getElementById('form2').style.display = "block"; 
        }
        function client_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('form2').style.display = "none";
        document.getElementById('form3').style.display = "none"; 
        document.getElementById('client').style.display = "block"; 
        
        }
        function form4_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('form3').style.display = "none";
        document.getElementById('form2').style.display = "none"; 
        document.getElementById('client').style.display = "none"; 
        
        }
        function div_hide(){
        location.href = 'index.php';
        }

    </script>