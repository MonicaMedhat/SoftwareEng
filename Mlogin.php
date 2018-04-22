<?php
class Login
{
    public $FullName ;
    public $password;   
    
      public function login(){
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
          
           $sql="SELECT FullName,passwords.Value FROM USER u1 INNER JOIN passwords ON passwords.User_ID =u1.ID";
          
          $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
      }
}


?>