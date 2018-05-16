

<?php

require_once ("db.php");
session_start();
 $db_obj = new dbconnect;
		$con = $db_obj->connect();
    $con->set_charset("utf8");
 
?>
<!DOCTYPE html>
<html>
    <script src="jquery-3.2.1.min.js"></script>
 <head>
  <title> Edit </title>
  <body>
 
	<?php
//		 if(!empty($_SESSION["Email"]))
   // {
      
      
        $selectSQL="
SELECT Status,CaseNumber,T1.FullName As 5esm,T2.FullName AS Lawyer ,T3.FullName AS Client, T4.Date As Date , T5.Time As Time ,T6.Dayra AS Dayra ,T7.Name As Name,T8.Place As Place,T9.Date As Date2,T10.Name AS Type  From cases c1
INNER JOIN case_status
	ON case_status.ID=c1.Status_ID
INNER JOIN user T1
	ON T1.ID=c1.5esm_ID
INNER JOIN user T2
	ON T2.ID=c1.Lawyer_ID
INNER JOIN user T3
	ON T3.ID=c1.Client_ID
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
    ";
       $result=$db_obj->executesql($selectSQL);
      
        $row = mysqli_fetch_array($result);
       
        $s1=$row['Status'];
        $s2=$row['Status'];
        $s3=$row['Status'];
        $opp=$row['5esm'];
        $c=$row['Client'];
        $l=$row['Lawyer'];
        $d=$row['Date'];
        $t=$row['Time'];
        $dayra=$row['Dayra'];
        $n=$row['Name'];
        $p=$row['Place'];
        $d2=$row['Date2'];
        $ty=$row['Type'];
        $cn=$row['CaseNumber'];
        
        echo"<form id='Edit' method='POST' action=''>";
      
      
      
      
      
      
      //-----------------------------------------------------------------------NEW--------------------------------------
      
      
      
      
      
       
                  while($row = mysqli_fetch_array($result)){   
                echo "<table><tr>
                <td id='b1'><a  class='m'  href=\"EditCase.php?id=".$row['CaseNumber']."\">تعديل</a></td>
                <td><a class='m' href=\"deleteCase.php?id=".$row['CaseNumber']."\">مسح</a></td>
                <td>{$row['Status']}</td>
                <td>{$row['Status']}</td>
                <td>{$row['Status']}</td>
                <td>{$row['5esm']}</td>
                <td>{$row['Client']}</td>
                <td>{$row['Lawyer']}</td>
                <td>{$row['Date']}AT: {$row['Time']}</td>
                <td>{$row['Dayra']}</td>
                <td>{$row['Name']}</td>
                <td>{$row['Place']}</td>
                <td>{$row['Date2']}</td>
                <td>{$row['Type']}</td>
                <td>{$row['CaseNumber']}</td>";
                      
                  }
      
      
      //-----------------------------------------------------------------------NEW--------------------------------------
        
        echo"
        


        <b> القرار</b>
			<br>";?>
            
             <?php
               $sql="SELECT ID,Status FROM case_status";
	       $result=$db_obj->executesql($sql);
   
           echo "<select name='details'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Status']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }
      //-------------///////////------------hankmel men hena---------------------

               echo "</select> 
             
            
			
			<br>
			<b>ما تم في الجلسة السابقة </b>
			<br>
			<input type ='text' name='lastName' value=$s2 >
			<br>
            <b> ما تم في الجلسة </b>
			<br>
			<input type ='text' name='Email' value=$s3>
			<br>
            <b> الخصم و صفتة</b>
			<br>
			<input type ='text' name='opponent' value=$opp>
			<br>
            <b> اسم الموكل و صفتة:</b>
			<br>
			<input type ='text' name='tele' value=$c>
			<br>";
//            <b> اسم المحامي المسؤول</b>
//			<br>
//			<input type ='text' name='hobby' value=$l>
//			<br>
//      <b> معاد الجلسة </b>
//            <br>";?>
      <br>
      <b> اسم المحامي </b>
            <br>
          <?php
               $sql="SELECT ID,FullName FROM User WHERE UserType_ID=2";
	       $result=$db_obj->executesql($sql);
   
           echo "<select name='SelectLawyer'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['FullName']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
           
            <br>
            <br>
            <b> العنوان </b>
            <br>
            
               <?php
               $sql="SELECT ID,Place FROM places";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='address5esm'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Place']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
            <br>
            <br>
            <b> الهاتف </b>
            <br>
            <input type ="text" name = "mobile5esm">
            <br>
           
            
      
               <?php
      echo"<b>معاد الجلسة<b><br>";
      
               $sql="SELECT ID,Date  FROM date_of_case";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='Date2'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Date']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>
               
              
      <br>
            <br>
            <b> الدائرة </b>
            <br>
           ";
               
               
                 
               $sql="SELECT ID,Dayra FROM eldayra";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='circle'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Dayra']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>
      <br>
            <br>
            <b> المحكمة </b>
            <br>
            ";
               
                 
               $sql="SELECT ID,Name FROM courtname";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='court'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Name']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>
               
               <br>
                <b> رقم القضية </b>
            <br>
            <input type ='text' name = 'CaseNumber' value='$cn'>
            <br>
            <br>
            <b> نوع القضية </b>
            <br>";
             
              
               $sql="SELECT ID,Name FROM casetype";
	       $result=$db_obj->executesql($sql);
   
           echo "<select name='CaseT'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Name']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
            <br>
            <br>
            <b> تاريخ رفع الدعوة </b>
            <br>
                <?php
               $sql="SELECT ID,Date FROM date_of_case";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='Date'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Date']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>
               "; 
               
		
      
      
      
      
      
      
      
      
      

//----------------------------------------------------------first way--------------------------------------------------------------      
        echo"</form>";
		 if($_SERVER["REQUEST_METHOD"]=="POST"){
        
//        if($id==1)
//        {
            // header("location:http://localhost/lawfirm/index.html");
            $con->set_charset("utf8");
           
            $CN =$_POST["CaseNumber"];
            $CT =$_POST["CaseT"];
            $raf3_eld3wa=$_POST["Date"];
            //$raf3_eld3wa =$_POST["Day"]. "-" . $_POST["Month"] . "-" .$_POST["Year"] ; //lesa insert fel data
            $m7kma = $_POST["court"];
            $dayra = $_POST["circle"];                                          
            $ma3ad_elgalsa=$_POST["Date2"];
            //$ma3ad =$_POST["Day2"]. "-" . $_POST["Month2"] . "-" .$_POST["Year2"] ; //lesa insert fel data
           // $Time = $_POST["Time"]." ".$_POST["ampm"];
            $makan= $_POST["sessionplace"];
            $status=$_POST["details"];
            $SL=$_POST["SelectLawyer"];
            
            $el5esm=$_POST["opponent"];
           
            $address5esm=$_POST["address5esm"];
            $mobile5esm=$_POST["mobile5esm"];
            
            
            $SClient=$_POST["SelectClient"];/////
            $Client=$_POST["ClientName"];
            $ClientType=$_POST["Sefato"];///
            $addressC=$_POST["addressC"];
            $mobileC=$_POST["mobileC"];
            $Payments=$_POST["payment"];
            
            $sql = "UPDATE INTO cases(CaseNumber,Tare5_raf3_eld3wa, CaseType_ID , CourtName_ID  , Dayra_ID , Date_Of_Case_ID , Place_Of_Case_ID , Status_ID ,Lawyer_ID,Client_ID,5esm_ID  ) VALUES ('$CN','$raf3_eld3wa','$CT','$m7kma','$dayra','$ma3ad_elgalsa','$makan','$status','$SL','$SClient','4')";
            $sql2="UPDATE INTO user(FullName ,mobile, Address_ID,UserType_id ) VALUES('$el5esm','$mobile5esm','$address5esm','5')";
            $sql3="UPDATE INTO user(FullName ,mobile, Address_ID,UserType_id ) VALUES('$Client','$mobileC','$addressC','4')";
            $sql4="UPDATE INTO casedetails(Document_ID ,Pay_O_Value_ID ,ClientType_ID ,Case_ID ) VLAUES('1','$Payments','$ClientType','2')";
    echo $sql;
        if( $db_obj->executesql($sql) == true){
            echo"SQL successfully excuted";
			//header("location:http://localhost/SE-ass1/index.php");

         }
    
        else
        {
            echo "error";
		 
        }
    }
//	}
	?>
  </body>
      <script>
           var table = document.getElementById('casetable');
        

                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
//                         document.getElementById("fname").value = this.cells[0].innerHTML;
//                         document.getElementById("lname").value = this.cells[1].innerHTML;
//                         document.getElementById("age").value = this.cells[2].innerHTML;
                        
                          $('td').prop('contentEditable', true);
                        $('#b1').prop('contentEditable', false);
                       
                        
                        
                         alert("hiiii");
                     
                    };
                }
        

    </script>
     
  
 </head>
 </html>