<?php

//initialize virables

$id=0;
$ID="";
$FullName="";
$Email="";
$Password="";
$mobile="";
$UserType_id="";
$edit_state=true;

//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swproj";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

//if save button clicked data saved ( add data)
if (isset($_POST['save'])){
	
	$ID = $_POST['ID'];
	$FullName = $_POST['FullName'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$mobile = $_POST['mobile'];
	$UserType_id= $_POST['UserType_id'];
	$query = "insert into user ( ID , FullName , Email , Password , mobile , UserType_id) VALUES ('$ID' , '$FullName' , '$Email' , '$Password' , '$mobile' , '$UserType_id')";
	mysqli_query($con , $query);
	header('location:indo.php');//redirect to indo.php after adding
}
//update data
if(isset($_POST['update'])) {

	$ID=$_POST['ID'];
	$FullName=$_POST['FullName'];
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	$mobile=$_POST['mobile'];
	$UserType_id=$_POST['UserType_id'];
	$sql="update user set ID='$ID',FullName='$FullName',Email='$Email',Password='$Password', mobile='$mobile' , UserType_id='$UserType_id' where ID =$ID";
//	echo $sql;
	mysqli_query($con,$sql );

  header('location:indo.php');
	
}


//delete data
if (isset($_POST['delete'])) {
	$sql="delete from user where ID=$ID";
	mysqli_query($con,$sql );
	//header('location:indo.php');
	$ID=$_POST['ID'];
	$FullName=$_POST['FullName'];
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	$mobile=$_POST['mobile'];
	$UserType_id=$_POST['UserType_id'];
	
	$sql="delete from user where ID =$ID";
	echo $sql;
	mysqli_query($con,$sql );

  header('location:indo.php');
}


//retirve data
$results = mysqli_query($con, " select * from user");

?>
	
		
		
	