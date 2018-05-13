<?php
include_once "MuserType.php";
include_once "MuserTypePage.php";
include_once "Muser.php";
include_once "Mpage.php";
include_once "db.php";

?>

<script type="text/javascript">

    $(document).ready(function(){
        $("#btnLeft").click(function(){
            var selectedItem = $("#rightValues option:selected");
            $("#leftValues").append(selectedItem);
        });
        $("#btnRight").click(function(){
            var selectedItem = $("#leftValues option:selected");
            $("#rightValues").append(selectedItem);
        });
        
    });

</script>

<?php

$obj=page::selectallpages();

for($i=0;$i<count($obj);$i++){ ?>
<script> 
$("#leftValues").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->FriendlyName; ?>  </option>");

</script>
<?php } ?>

<?php                          
$obj=UserType::SelectAllUserTypesInDB();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#UserType").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->UserTypeName; ?> </option>");
</script>
<?php
}
?>
<?php
$mtp = new UserTypePage;
if(isset($_POST['page']))
{
    $db_obj = new dbconnect;
    $con = $db_obj->connect();  
    $u = $_POST["UserType"];
    $p =  $_POST['choosenpages'];
    $mtp->Delete($u);
    foreach($p as $page){
        $mtp->UserType_ID = $u;
        $mtp->Pages_ID = $page;
        $mtp->insert();        
    }
    
   
}?>

<?php                          
$obj=UserType::SelectAllUserTypesInDB();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#view").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->UserTypeName; ?> </option>");
</script>
<?php
}
if(isset($_POST['v']))
{
$v = $_POST["view"];	
$obj=User::View($v);
for($i=0;$i<count($obj);$i++){?>
<script>
$("#un").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->FullName; ?> </option>");
</script>
<?php } } ?>


<?php                          
$obj=UserType::SelectAllUserTypesInDB();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#type").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->UserTypeName; ?> </option>");
</script>
<?php
}
$mu = new UserType;
if(isset($_POST['Add']))
{
    $db_obj = new dbconnect;
    $con = $db_obj->connect();
    $t = $_POST["type"];
    $nid = $_POST["un"];
   $mu->update($t,$nid);   
}
?>