<?php
require_once("db.php");
 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
class Cases{

    public $ID;
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
    
    /*
    SELECT CaseNumber,s0.Status as Status,s1.Status as previous ,s2.Status as decistion ,T1.FullName As 5esm,T2.FullName AS Lawyer ,T3.FullName AS Client,T11.Type AS ClientType, T4.Date As Date , T5.Time As Time ,T6.Dayra AS Dayra ,T7.Name As Name,T8.Place As Place,T9.Date As Date2,T10.Name AS Type,T13.Value AS documents,T15.a7raz as a7raz, T14.Type as docType From cases c1
INNER JOIN case_status s0
	ON s0.ID=c1.Status_ID
INNER JOIN case_status s1
	ON s1.ID=c1.previous_status
 INNER JOIN case_status s2
	ON s2.ID=c1.decision
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
INNER JOIN documents T13
  ON T13.ID=T12.Document_ID
INNER JOIN documents T15
  ON T15.ID=T12.Document_ID
 
 INNER JOIN documenttype_id T14
 ON T14.ID=T13.DocumentType_ID
 
 
*/    
    
     static function ViewCN()
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
       
        $sql="SELECT ID,CaseNumber FROM cases";
         
         $TypeDataSet = $db_obj->executesql($sql);
		
		$i=0;
		$Result;
		while ($row =  mysqli_fetch_array($TypeDataSet))
		{
			$MyObj= new Cases;
            $MyObj->ID = $row["ID"];
            $MyObj->CaseNumber = $row["CaseNumber"];
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
    }
    
     public static function ViewM($mid){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        $sql = "select ID  FROM cases where CaseNumber ='".$mid."'";
        $m = $db_obj->executesql($sql);
        return $m;
        
    }
    
    public static function ViewC($mid){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        $sql = "select CaseNumber FROM cases where ID ='".$mid."'";
        $m = $db_obj->executesql($sql);
        return $m;
        
    }
    
    
    
     public static function ViewUser($mid){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        $sql = "select Client_ID  FROM cases where ID ='".$mid."'";
        $m = $db_obj->executesql($sql);
        return $m;
        
    }
    
    
    
    
    
    public function show()
    {
         $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');
        $sql="
SELECT Status,CaseNumber,T1.FullName As 5esm,T2.FullName AS Lawyer ,T3.FullName AS Client,T11.Type AS ClientType, T4.Date As Date , T5.Time As Time ,T6.Dayra AS Dayra ,T7.Name As Name,T8.Place As Place,T9.Date As Date2,T10.Name AS Type,T13.Value AS CaseDetails From cases c1
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
  INNER JOIN documents T13
  ON T13.ID=T12.Document_ID
    ";
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
        
    }
    
    public function insert(){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        
       
        $sql = "INSERT INTO `cases` (`CaseNumber`, `Tare5_raf3_eld3wa`, `Date_Of_Case_ID`, `Lawyer_ID`, `Client_ID`,ClientType_ID, `5esm_ID`, `CaseType_ID`, `Place_Of_Case_ID`, `CourtName_ID`, `Status_ID`, `Dayra_ID`,CaseDetails_ID) VALUES ('".$this->CaseNumber."', '".$this->Tare5_raf3_eld3wa."','".$this->Date_Of_Case_ID."','".$this->Lawyer_ID."','".$this->Client_ID."','".$this->ClientType_ID."','".$this->hesm_ID."','".$this->CaseType_ID."','".$this->Place_Of_Case_ID."','".$this->CourtName_ID."','".$this->Status_ID."','".$this->Dayra_ID."','".$this->CaseDetails_ID."')";
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    public function Delete($CaseNumber)
    {
         $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
        $sql="DELETE FROM cases WHERE CaseNumber='".$CaseNumber."'";
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    public function update($CaseNumber)
    {
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
       
        $sql="UPDATE `cases` SET `CaseNumber`='".$this->CaseNumber."',`Tare5_raf3_eld3wa`='".$this->Tare5_raf3_eld3wa."',`Date_Of_Case_ID`='".$this->Date_Of_Case_ID."',`Lawyer_ID`='".$this->Lawyer_ID."',`Client_ID`='".$this->Client_ID."',`ClientType_ID`='".$this->ClientType_ID."',`5esm_ID`='".$this->hesm_ID."',`CaseType_ID`='".$this->CaseType_ID."',`Place_Of_Case_ID`='".$this->Place_Of_Case_ID."',`CourtName_ID`='".$this->CourtName_ID."',`Status_ID`='".$this->Status_ID."',`Dayra_ID`='".$this->Dayra_ID."',`CaseDetails_ID`='".$this->CaseDetails_ID."'WHERE CaseNumber='".$CaseNumber."'";
        
        $db_obj->executesql($sql);
        $db_obj->disconnect();
    }
    
    

}

?>