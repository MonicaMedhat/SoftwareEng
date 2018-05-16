<?php
require_once("db.php");
 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');

class application
{
    public $ID;
    public $N_ID;
    public $Edu_ID ;
    public $D_ID ;
    public $APP_ID ;
    public $Dem ;
    public $Start ;
    public $CameF ;
    public $reas ;
    public $Comm ;
    public $Month_ID;
    public $User_ID;
    
    
    
    public function insert(){
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');

    
    $sql = "INSERT INTO applications( User_ID,Nationality_ID, Education_ID, Degree_enrollment_ID, Apply_for_ID, Demand_salary, Starting_in, Came_From,Reason, Comments, Month_ID) VALUES 
    ('".$this->User_ID."','".$this->N_ID."','".$this->Edu_ID."','".$this->D_ID."','".$this->APP_ID."','".$this->Dem."','".$this->Start."','".$this->CameF."','".$this->reas."','".$this->Comm."','".$this->Month_ID."')";
        
        
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');

    
    $sql = "UPDATE `applications` SET `User_ID`='".$this->User_ID."',`Nationality_ID`='".$this->N_ID."',`Education_ID`='".$this->Edu_ID."',`Degree_enrollment_ID`='".$this->D_ID."',`Apply_for_ID`='".$this->APP_ID."',`Demand_salary`='".$this->Dem."',`Starting_in`='".$this->Start."',`Came_From`='".$this->CameF."',`Reason`='".$this->reas."',`Comments`='".$this->Comm."',`Month_ID`='".$this->Month_ID."' WHERE ID ='".$ID."'";
        
        
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="DELETE FROM applications WHERE ID ='".$ID."'";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    public function View()
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
//       T3.Degree_enrollment_ID AS deg, T4.Apply_for_ID AS appF,
        $sql="SELECT T6.FullName As fn,T7.mobile As mob,T8.Place As pl,T9.Type As type,T10.Value AS Email,T1.Name AS nat, T2.Name AS edu,T3.Name AS deg, T4.Name AS appF,  `Demand_salary`, `Starting_in`, `Came_From`, `Reason`, `Comments`, T5.Name AS date  FROM `applications`a1
    INNER JOIN user T6
	   ON T6.ID=a1.User_ID
    INNER JOIN user T7
	   ON T7.ID=a1.User_ID
    INNER JOIN usertype T9
	   ON T9.ID=a1.User_ID  
    INNER JOIN email T10
	   ON T10.ID=a1.User_ID
    INNER JOIN places T8
	   ON T8.ID=T6.Address_ID
    INNER JOIN nationality T1
	   ON T1.ID=a1.Nationality_ID
    INNER JOIN education_ID T2
	   ON T2.ID=a1.Education_ID
    INNER JOIN degree_enrollment T3
	   ON T3.ID=a1.Degree_enrollment_ID
    INNER JOIN apply_for T4
	   ON T4.ID=a1.Apply_for_ID
    INNER JOIN monthes T5
	   ON T5.ID=a1.Month_ID
       ";
         
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
}


?>