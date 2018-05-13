<?php 
require_once("db.php");
require_once("Muser.php");
require_once("Memail.php");
require_once("Mpassword.php");
include_once("Mplaces.php");


 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        

$Umod = new User;
$Emod = new Email;
$Pmod = new Passwords;
            
$obj = Places::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#address").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Place; ?> </option>");
</script>
<?php
}

if(isset($_POST['submit']))
{
     $Umod->FullName =$_POST['FullName'];
     $Umod->mobile =$_POST['mobile'];
     $Umod->Address_ID =$_POST['address'];
	 $Umod->UserType_id ='6';
     $Umod->insert();
    $m = $_POST["mobile"];
    $result = $Umod->ViewM($m);
     $password = $_POST['password'];                        
     if($row = mysqli_fetch_array($result))
      {
            $Umod->ID = $row["ID"];
      }
            $Emod->User_ID = $Umod->ID;
            $Pmod->User_ID = $Umod->ID;
    
            $Emod->Value = $_POST['Email'];
            
            $Pmod->Value = $password; //sha1($password);    
            $Emod->insert();
            $Pmod->insert();

}
?>