<?php 
require("db.php");

$db_obj = new dbconnect;

for($i = 0; $i<100; $i++)
{
    $con = $db_obj->connect();
}

?>