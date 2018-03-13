html>

<head>
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    
      <title>
          تسجيل الدخول
      </title>
    
</head>

<body>
    
    <header>
         

    </header>
    
<main>
    
<form id="f" method="POST">
<h1> تسجيل الدخول </h1>

<b> البريد الألكتروني </b>
<br>
<input type = "text" name = "Email">
<br>
<br>
<b> كلمة السر </b>
<br>
<input type = "Password" name = "password">
<br>
<br>
<input class="m" type="submit" value="دخول" id="loginbtn">
<button class="m" type="Reset">اعادة</button>
</form>


 </main>
    
</body>
</html>

<?php
session_start();
require ("db.php");
include_once "user.php";

$db_obj = new dbconnect;
$con = $db_obj->connect();

if($_SERVER["REQUEST_METHOD"]=="POST"){
   
    $u =$_POST["Email"];
    $p = $_POST["password"];
    
    $sql="SELECT Value,User_ID from email where Value= '$u'";
	$result=$db_obj->executesql($sql);
	$row = mysqli_fetch_array($result);
    $uid = $row["User_ID"];
    
    $sqll="SELECT Value from passwords where User_ID= '$uid'";
    $resultt=$db_obj->executesql($sqll);
	$roww = mysqli_fetch_array($resultt);
    
    $sqlll="SELECT UserType_id from user where ID= '$uid'";
    $resulttt=$db_obj->executesql($sqlll);
	$roww = mysqli_fetch_array($resulttt);
    $id = $rowww["UserType_id"];
    
    if(($u==$row["Value"])&&($p==$roww["Value"]))
    {
        $_SESSION["Email"]=$row["Value"];
        $_SESSION["password"]=$roww["Value"];
         $_SESSION["Userid"] = $rowww["UserType_id"];
        
    }
    
    else{
        echo "invalid Email or password";
    }
    
    if( $db_obj->executesql($sql) == true){
        
             header("location:http://localhost/lawfirm/userpage.php");

        
         }
    
    else{
         echo "error SQL";
		 
        }
}


?>
  