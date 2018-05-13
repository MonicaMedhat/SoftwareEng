 <?php
    require_once ("db.php"); 
    include_once "MuserTypePage.php";
    include_once "contLogin.php";
    include_once "Mpage.php";
    
              if(!empty($_SESSION["UserTypeid"]))
            {	
                $db_obj = new dbconnect;
                $con = $db_obj->connect();
                $id = $_SESSION["UserTypeid"];
                  echo $id;
                 $result = UserTypePage::View($id);
                                                   
                for($i=0;$i<count($result);$i++)
                {
                   $up[$i] = $result[$i]->Pages_ID;
                    echo $result[$i]->Pages_ID; 
                   
                 $obj = page::View($up[$i]);  
                    
               for($j=0;$j<count($obj);$j++)
                { ?>
                     <a href="<?php echo $obj[$j]->PhysicalPath; ?>" ><?php echo $obj[$j]->FriendlyName;?></a>
            <?php
                } 
                    
                }
                   
                    } 
?>
