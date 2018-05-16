<?php
require_once ("db.php");
require_once ("Mcases.php");
$db_obj = new dbconnect;
		$con = $db_obj->connect();
    $con->set_charset("utf8");

$CN = $_GET['id']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

$c = new Cases;
$c->Delete($CN);

header("Location: Vcases.php");
?> 