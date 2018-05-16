<?php
include_once "MuserType.php";
include_once "MuserTypePage.php";
include_once "Muser.php";
include_once "Mpage.php";
include_once "db.php";
include_once ("Mcases.php");
include_once ("McaseType.php");
include_once ("MclientType.php");
include_once ("McaseDetails.php");
include_once ("McourtName.php");
include_once ("Mdayra.php");
include_once ("Mplaces.php");
include_once ("Mdate.php");
include_once ("Mstatus.php");
include_once ("Mdocuments.php");
include_once ("MpayMeth.php");
require_once ("Mmonths.php");
require_once ("MapplyFor.php");
require_once ("MdegOfEn.php");
require_once ("Mnationality.php");
require_once ("Medu.php");

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
$obj=UserType::select();
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
                        
$ob=UserType::SelectAllUserTypesInDB();
for($i=0;$i<count($ob);$i++){?>
<script>
$("#utype").append("<option value= <?php echo $ob[$i]->ID; ?> > <?php echo $ob[$i]->UserTypeName; ?> </option>");
</script>
<?php
}

$obj=CaseType::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#CaseT").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Name; ?> </option>");
</script>
<?php
}
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
$obj=Places::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#sessionplace").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Place; ?> </option>");
</script>
<?php
}
$obj=CaseStatus::View();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#details").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->Status; ?> </option>");
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
$obj=Documents::ViewDT();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#documenttype").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->type; ?> </option>");
</script>
<?php
}?>

<?php
$ut = new UserType ;
if(isset($_POST['ua']))
{
    $db_obj = new dbconnect;
    $con = $db_obj->connect();
    $ut->UserTypeName = $_POST["f8n"];
    $ut->insert();   
}

if(isset($_POST['ue']))
{
    $db_obj = new dbconnect;
    $con = $db_obj->connect();
     $un = $_POST["f9n"];
     $uid = $_POST["utype"];
    $ut->updateu($un,$uid);   
}

$cat = new CaseType ;
if(isset($_POST['caa']))
{
    $db_obj = new dbconnect;
    $con = $db_obj->connect();
    $cat->Name = $_POST["f1n"];
    $cat->insert();   
}
if(isset($_POST['cad']))
{
     $catt = $_POST["CaseT"];
    $cat->delete($catt);
}

$cr = new CourtName;
if(isset($_POST['coa']))
{
    $db_obj = new dbconnect;
    $con = $db_obj->connect();
    $cr->Name = $_POST["f2n"];
    $cr->insert();   
}
if(isset($_POST['cod']))
{
     $crr = $_POST["court"];
    $cr->delete($crr);
}


$d = new Dayra;
if(isset($_POST['ca']))
{
    $db_obj = new dbconnect;
    $con = $db_obj->connect();
    $d->Dayra = $_POST["f3n"];
    $d->insert();   
}
if(isset($_POST['cd']))
{
     $dd = $_POST["circle"];
    $d->delete($dd);
}

$p = new Places;
if(isset($_POST['sea']))
{
    $db_obj = new dbconnect;
    $con = $db_obj->connect();
    $p->Place = $_POST["f4n"];
    $p->insert();   
}
if(isset($_POST['sed']))
{
     $pp = $_POST["sessionplace"];
    $p->delete($pp);
}

$cst = new CaseStatus;
if(isset($_POST['da']))
{
    $db_obj = new dbconnect;
    $con = $db_obj->connect();
    $cst->Status = $_POST["f5n"];
    $cst->insert();   
}
if(isset($_POST['dd']))
{
     $css = $_POST["details"];
    $cst->delete($css);
}

$ct = new ClientType;
if(isset($_POST['sa']))
{
    $db_obj = new dbconnect;
    $con = $db_obj->connect();
    $ct->Type = $_POST["f6n"];
    $ct->insert();   
}
if(isset($_POST['sd']))
{
     $cs = $_POST["side"];
    $ct->delete($cs);
}

$doct = new Documents;
if(isset($_POST['ad']))
{
    $db_obj = new dbconnect;
    $con = $db_obj->connect();
    $doct->type = $_POST["f7n"];
    $doct->insertd();   
}
if(isset($_POST['d']))
{
    $do = $_POST["documenttype"];
    $doct->deleted($do);
}
$n = new Nationality;
if(isset($_POST['nd']))
{
    $no = $_POST["nationality"];
    $n->deleted($do);
}
?>
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


<script>
function f1_show(){
        document.getElementById('f1').style.display = "block";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none"; 
        document.getElementById('ccase').style.display = "none"; 
        document.getElementById('control').style.display = "none"; 
    
        }
    function f2_show() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "block";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none"; 
        document.getElementById('ccase').style.display = "none"; 
    document.getElementById('control').style.display = "none"; 
        }
    function f3_show() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "block";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none"; 
        document.getElementById('ccase').style.display = "none"; 
    document.getElementById('control').style.display = "none"; 
        }
    function f4_show() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "block";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none"; 
        document.getElementById('ccase').style.display = "none"; 
    document.getElementById('control').style.display = "none"; 
        }
    function f5_show() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "block"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none"; 
        document.getElementById('ccase').style.display = "none"; 
    document.getElementById('control').style.display = "none"; 
        }
    function f6_show() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "block";
        document.getElementById('f7').style.display = "none"; 
        document.getElementById('ccase').style.display = "none"; 
    document.getElementById('control').style.display = "none"; 
        }
    function f7_show() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "block"; 
        document.getElementById('ccase').style.display = "none"; 
    document.getElementById('control').style.display = "none"; 
        }
    function f8_show() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none"; 
        document.getElementById('f8').style.display = "block";
        document.getElementById('f9').style.display = "none";  
        document.getElementById('ccase').style.display = "none"; 
    document.getElementById('control').style.display = "none"; 
        }
    function f9_show() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none"; 
        document.getElementById('f8').style.display = "none";
        document.getElementById('f9').style.display = "block"; 
        document.getElementById('ccase').style.display = "none"; 
    document.getElementById('control').style.display = "none"; 
        }
    function f1_hide(){
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none";
         document.getElementById('f8').style.display = "none";
        document.getElementById('f9').style.display = "none"; 
        document.getElementById('ccase').style.display = "block"; 
        document.getElementById('control').style.display = "block"; 
        }
    function f2_hide() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none";
         document.getElementById('f8').style.display = "none";
        document.getElementById('f9').style.display = "none"; 
        document.getElementById('ccase').style.display = "block"; 
        document.getElementById('control').style.display = "block"; 
        }
    function f3_hide() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none";
         document.getElementById('f8').style.display = "none";
        document.getElementById('f9').style.display = "none"; 
        document.getElementById('ccase').style.display = "block"; 
        document.getElementById('control').style.display = "block"; 
        }
    function f4_hide() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none"; 
        document.getElementById('ccase').style.display = "block"; 
        document.getElementById('control').style.display = "block"; 
        }
    function f5_hide() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none"; 
        document.getElementById('ccase').style.display = "block"; 
        document.getElementById('control').style.display = "block"; 
        }
    function f6_hide() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none";
         document.getElementById('f8').style.display = "none";
        document.getElementById('f9').style.display = "none"; 
        document.getElementById('ccase').style.display = "block"; 
        document.getElementById('control').style.display = "block"; 
        }
    function f7_hide() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none";
        document.getElementById('f8').style.display = "none";
        document.getElementById('f9').style.display = "none"; 
        document.getElementById('ccase').style.display = "block"; 
        document.getElementById('control').style.display = "block"; 
        }
     function f8_hide() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none"; 
        document.getElementById('f8').style.display = "none";
        document.getElementById('f9').style.display = "none"; 
        document.getElementById('ccase').style.display = "block"; 
        document.getElementById('control').style.display = "block"; 
        }
     function f9_hide() {
        document.getElementById('f1').style.display = "none";
        document.getElementById('f2').style.display = "none";
        document.getElementById('f3').style.display = "none";
        document.getElementById('f4').style.display = "none";
        document.getElementById('f5').style.display = "none"; 
        document.getElementById('f6').style.display = "none";
        document.getElementById('f7').style.display = "none"; 
        document.getElementById('f8').style.display = "none";
        document.getElementById('f9').style.display = "none"; 
        document.getElementById('ccase').style.display = "block"; 
        document.getElementById('control').style.display = "block"; 
        }
</script>