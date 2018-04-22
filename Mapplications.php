<?php

class application
{
    public $ID;
    public $f ;
    public $M ;
    public $e ;
    public $Add;
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

    
    $sql = "INSERT INTO applications(FullName, Mobile, Email, Address, Nationality_ID, Education_ID, Degree_enrollment_ID, Apply_for_ID, Demand_salary, Starting_in, Came_From,Reason, Comments, Month_ID, User_ID) VALUES 
    ('".$this->f."','".$this->M."','".$this->e."','".$this->Add."','".$this->N_ID."','".$this->Edu_ID."','".$this->D_ID."','".$this->APP_ID."','".$this->Dem."','".$this->Start."','".$this->CameF."','".$this->reas."','".$this->Comm."','".$this->Month_ID."','".$this->User_ID."')";
        
        
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');

    
    $sql = "UPDATE `applications` SET `FullName`='".$this->f."',`Mobile`='".$this->M."',`Email`='".$this->e."',`Address`='".$this->Add."',`Nationality_ID`='".$this->N_ID."',`Education_ID`='".$this->Edu_ID."',`Degree_enrollment_ID`='".$this->D_ID."',`Apply_for_ID`='".$this->APP_ID."',`Demand_salary`='".$this->Dem."',`Starting_in`='".$this->Start."',`Came_From`='".$this->CameF."',`Reason`='".$this->reas."',`Comments`='".$this->Comm."',`Month_ID`='".$this->Month_ID."',`User_ID`='".$this->User_ID."' WHERE ID ='".$ID."'";
        
        
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
    
}


?>