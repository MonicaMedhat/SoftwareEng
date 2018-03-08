<?php
session_start();
//initialiaze virables
    $name="";
	$name1="";
	$name2="";
	$name3="";
	$name4="";
	$name5="";
	$id=0;
//connect to database
$db = mysqli_connect('localhost','root',' ','lawyerinfo');
//if save button is clicked (save data)
if(isset($_POST['حفظ'])){
	$name=$_POST['اسم المحامى'];
	$name1=$_POST['اسم الموكل'];
	$name2=$_POST['نوع القضيه'];
	$name3=$_POST['تاريخ استلام القضيه'];
	$name4=$_POST['توقيت القضيه'];
	$name5=$_POST['التعليقات'];
	
	
	$query= "INSERT INTO info (name,name1,name2,name3,name4,name5) VALUES ('$name' , '$name1' , 'name2' , '$name3' , '$name4' , '$name5')";
	mysqli_query($db, $query);
	$_SESSION['msg']="تم حفظ البيانات بنجاح";
	header('location: lawyer.php');
	
}
//delete records
if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	mysqli_query($db,_"DELETE FROM info WHERE id=$id");
	$_SESSION['msg']="تم مسح البيانات بنجاح";
	header('location: lawyer.php');

	
//search records
if(isset($_post['search'])){
	$valueTosearch=$POST['valueTosearch'];
	$query =//msh 3rfa 
	$search_result= filterTable($query);
}
else{
	$query="SELECT *FROM USER_TYPE_ID";//msh mot2kda
	$search_result = filterTable($quer);
}
function filterTable($query)
{
	$connect = mysql_connect("localhost" , "root", "" , "lawyerinfo");
	$filter_Result=mysql_query ($connecr,$query);
	return $filter_Result;

}
//retirve records
$results = mysql_query($db, "SELECT *FROM info");




?>