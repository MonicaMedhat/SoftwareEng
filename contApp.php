<?php 
require_once("db.php");
require_once("Mapplications.php");
require_once("Memail.php");
require_once ("Mplaces.php");
require_once ("Mmonths.php");
require_once ("MapplyFor.php");
require_once ("MdegOfEn.php");
require_once ("Mnationality.php");
require_once ("Medu.php");
require_once ("Muser.php");

 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");

$Mapp = new application;
$Umod = new User;
$Emod = new Email;
           
$obj=Places::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#address").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Place; ?> </option>");
</script>
<?php
}?>

<?php
$obj=Nationality::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#nationality").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Name; ?> </option>");
</script>
<?php
}?>

<?php
$obj=Education::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#Education").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Name; ?> </option>");
</script>
<?php
}?>
       
<?php

$obj=Degree_Enrollment::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#Degree_enrollment").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Name; ?> </option>");
</script>
<?php
}?>

<?php

    $obj=Apply_For::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#Apply_for").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Name; ?> </option>");
</script>
<?php
}?>       

<?php
$obj=months::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#Date").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Name; ?> </option>");
</script>
<?php
}?>

<?php
if(isset($_POST['submit']))
{
    $Umod->FullName =$_POST["FullName"];
    $Umod->mobile =$_POST["Mobile"];
    $Umod->Address_ID =$_POST["Address"];
	$Umod->UserType_id ='7';
    $Umod->insert();
    $m = $_POST["Mobile"];
    $result = $Umod->ViewM($m);                  
     if($row = mysqli_fetch_array($result))
     {
         $Umod->ID = $row["ID"];
     }
    
      $Emod->User_ID = $Umod->ID;
      $Emod->Value = $_POST["E-mail"];
      $Emod->insert();
            
    $Mapp->N_ID = $_POST["Nationality"];
    $Mapp->Edu_ID = $_POST["Education"];
    $Mapp->D_ID = $_POST["Degree_enrollment"];
    $Mapp->APP_ID = $_POST["Apply_for"];
    $Mapp->Dem = $_POST["Demand_salary"];
    $Mapp->Start = $_POST["Starting_in"];
    $Mapp->CameF = $_POST["Came_From"];
    $Mapps->reas = $_POST["Reason"];
    $Mapp->Comm = $_POST["Comments"];
    $Mapp->Month_ID =$_POST["Date"];
    $Mapp->User_ID = $Umod->ID;
    $Mapp->insert();
        
}
?>