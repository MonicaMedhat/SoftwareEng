<?php

class page
{
    public $ID;
    public $FriendlyName;
    public $PhysicalPath;
    public $html;
    public $obj;
    
    
    function __construct($id)
    {
        
         if($id!="")
        {
            $db_obj = new dbconnect;
            $con = $db_obj->connect();
    
            $sql = "select * from pages where ID=$id";
             $result = $db_obj->executesql($sql);
            
            if($row = mysqli_fetch_array($result))
            {
                $this->ID = $row["ID"];
                $this->FriendlyName = $row["FriendlyName"];
                $this->PhysicalPath = $row["PhysicalPath"];
                $this->html = $row["Html"];
            }
            
        }
        
    }
    
     static function selectallpages()
    {
       
    $db_obj = new dbconnect;
    $con = $db_obj->connect();
    
        $sql = "select * from pages";
        $pageDataSet = $db_obj->executesql($sql);
        
        $i=0;
        $result;
        
        while($row = mysqli_fetch_array($pageDataSet))
        {
            $obj = new page($row["ID"]);
            $result[$i]=$obj;
            $i++;
        }
        return $result;
    }
    
    public static function View($pi){
        $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        $sql = "select * from pages where ID = '".$pi."' ";
        $p = $db_obj->executesql($sql);
        
        $i=0;
        $result;
        while($row = mysqli_fetch_array($p))
        {
            $MyObj = new page($row["ID"]);
            $MyObj->ID = $row["ID"];
            $MyObj->FriendlyName = $row["FriendlyName"];
            $MyObj->PhysicalPath = $row["PhysicalPath"];
            $result[$i]=$MyObj;
            $i++;
        }
        return $result;
    
       }    
}

?>