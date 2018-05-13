<?php
require_once("db.php");
 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
class Cases{

    
    public $CaseNumber;
    public $Tare5_raf3_eld3wa;
    public $Date_Of_Case_ID;
    public $Lawyer_ID;
    public $Client_ID;
    public $ClientType_ID;
    public $hesm_ID;
    public $CaseType_ID;
    public $Place_Of_Case_ID;
    public $CourtName_ID;
    public $Status_ID;
    public $Dayra_ID;
    public $CaseDetails_ID;
    
    
    public function show()
    {
         $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
        $sql="
SELECT Status,CaseNumber,T1.FullName As 5esm,T2.FullName AS Lawyer ,T3.FullName AS Client,T11.Type AS ClientType, T4.Date As Date , T5.Time As Time ,T6.Dayra AS Dayra ,T7.Name As Name,T8.Place As Place,T9.Date As Date2,T10.Name AS Type T12.Details AS CaseDetails From cases c1
INNER JOIN case_status
	ON case_status.ID=c1.Status_ID
INNER JOIN user T1
	ON T1.ID=c1.5esm_ID
INNER JOIN user T2
	ON T2.ID=c1.Lawyer_ID
INNER JOIN user T3
	ON T3.ID=c1.Client_ID
INNER JOIN clienttype T11
	ON T11.ID=c1.ClientType_ID 
INNER JOIN date_of_case T4
	ON T4.ID=c1.Date_Of_Case_ID
INNER JOIN date_of_case T5
	ON T5.ID=c1.Date_Of_Case_ID
INNER JOIN eldayra T6
	ON T6.ID=c1.Dayra_ID 
INNER JOIN courtname T7
	ON T7.ID=c1.CourtName_ID  
INNER JOIN places T8
	ON T8.ID=c1.Place_Of_Case_ID  
INNER JOIN date_of_case T9
	ON T9.ID=c1.Tare5_raf3_eld3wa 
INNER JOIN casetype T10
	ON T10.ID=c1.CaseType_ID
INNER JOIN casedetails T12
	ON T12.ID=c1.CaseDetails_ID

    ";
        
    }
    
    public function insert(){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql = "INSERT INTO `cases` (`CaseNumber`, `Tare5_raf3_eld3wa`, `Date_Of_Case_ID`, `Lawyer_ID`, `Client_ID`,ClientType_ID, `5esm_ID`, `CaseType_ID`, `Place_Of_Case_ID`, `CourtName_ID`, `Status_ID`, `Dayra_ID`,CaseDetails_ID) VALUES ('".$this->CaseNumber."', '".$this->Tare5_raf3_eld3wa."','".$this->Date_Of_Case_ID."','".$this->Lawyer_ID."','".$this->Client_ID."','".$this->ClientType_ID."','".$this->hesm_ID."','".$this->CaseType_ID."','".$this->Place_Of_Case_ID."','".$this->CourtName_ID."','".$this->Status_ID."','".$this->Dayra_ID."','".$this->CaseDetails_ID."')";
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    public function Delete($CaseNumber)
    {
         $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
        $sql="DELETE FROM cases WHERE CaseNumber='".$CaseNumber."'";
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    public function update($CaseNumber)
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
        $sql="UPDATE `cases` SET `CaseNumber`='".$this->CaseNumber."',`Tare5_raf3_eld3wa`='".$this->Tare5_raf3_eld3wa."',`Date_Of_Case_ID`='".$this->Date_Of_Case_ID."',`Lawyer_ID`='".$this->Lawyer_ID."',`Client_ID`='".$this->Client_ID."',`ClientType_ID`='".$this->ClientType_ID."',`5esm_ID`='".$this->hesm_ID."',`CaseType_ID`='".$this->CaseType_ID."',`Place_Of_Case_ID`='".$this->Place_Of_Case_ID."',`CourtName_ID`='".$this->CourtName_ID."',`Status_ID`='".$this->Status_ID."',`Dayra_ID`='".$this->Dayra_ID."',`CaseDetails_ID`='".$this->CaseDetails_ID."'WHERE CaseNumber='".$CaseNumber."'";
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    

}
//-------------------------------------------caseDetails--------------------------


class CaseDetails{
    public $ID;
 public $doc_ID;
public $POV_ID;
    
public function insert ()
{
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
    $sql="INSERT INTO `casedetails`( `Document_ID`, `Pay_O_Value_ID`) VALUES ('".$this->doc_ID."','".$this->POV_ID."') ";
    $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
}
 public function update ($ID)
{
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
    $sql="UPDATE `casedetails` SET `Document_ID`='".$this->doc_ID."',`Pay_O_Value_ID`='".$this->POV_ID."'WHERE  ID ='".$ID."'";
    $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
}  
    public function delete ($ID)
{
    $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
    $sql="DELETE FROM `casedetails` WHERE ID ='".$ID."'";
    $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
}  
    
    }
    

//---------------------User---------------------------------------------
class User
{
    public $ID;
	public $FullName ;
	public $mobile;
	public $Address_ID ;
	
	public $UserType_id;
    
     public function insert(){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
         $sql = "INSERT INTO user (FullName , mobile ,Address_ID, UserType_id) VALUES ('".$this->FullName."' , '".$this->mobile."' ,'".$this->Address_ID."'   , '".$this->UserType_id."' )";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
     public function Delete($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
        $sql="DELETE FROM user WHERE ID ='".$ID."'";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
     public function update($ID){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
       
         $sql = "UPDATE user SET `FullName`='".$this->FullName."',`mobile`='".$this->mobile."',`Address_ID`='".$this->Address_ID."',`UserType_id`='".$this->UserType_id."' WHERE ID ='".$ID."'";
         
        $db_obj->connect();
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    
}
//----------------------------------//applications//--------------------------------------------------------------------

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


//--------------------------------------------------Login-------------------------------------------------------------
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



//-------------------------------------------

?>