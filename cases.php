<?php

require_once ("db.php");

 $db_obj = new dbconnect;
		$con = $db_obj->connect();
    $con->set_charset("utf8");

header('Content-Type: text/html; charset=utf-8');
       
        
        ?>

<html>
    
    <?php


//require ("db.php");

 $db_obj = new dbconnect;
		$con = $db_obj->connect();
    $con->set_charset("utf8");

header('Content-Type: text/html; charset=utf-8');
?>
    
    
    <head>
        <title><h1> قضايا </h1></title>
        <script src="jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
<body>
    <header>
    </header>
    
    <main>
        
        
       
         <form id="search" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
             <div id="search">
<!--             <input type="text" name="Search"id="text" placeholder="Search for names.." onkeyup="myFunction()">-->
            <input type="text" name="Search"id="text" placeholder="بحث...">
             <?php
              if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $s=$_POST["Search"];
           $sql="SELECT ID,FullName FROM User WHERE FullName Like '".$s."' ";
	       $result=$db_obj->executesql($sql);
           echo "<select name='SelectCase'>"; 
                  while($row = mysqli_fetch_array($result)){  ?>  
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['FullName']; ?></option>
             <?php
               }
                  echo "</select>";                 
                  
                 //$selectSQL ="SELECT * FROM cases ";           
              }
  
             ?>
                 </div>
             
             
             <div name="cases">
            <?php
             //$selectSQL = 'SELECT CaseNumber,case_status.Status FROM `cases`JOIN case_status ON cases.Status_ID=case_status.ID';
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
                // $select2="SELECT FullName FROM user INNER JOIN cases ON cases.5esm_ID=user.ID";
                // $selectSQL ="SELECT * FROM cases "; 
                 $result=$db_obj->executesql($selectSQL);
                    
//              $row = mysqli_fetch_array($result);
//                $s1=$row['Status'];
//                $s2=$row['Status'];
//                $s3=$row['Status'];
//                $opp=$row['5esm'];
//                $c=$row['Client'];
//                $l=$row['Lawyer'];
//                $d=$row['Date'];
//                $t=$row['Time'];
//                $dayra=$row['Dayra'];
//                $n=$row['Name'];
//                $p=$row['Place'];
//                $d2=$row['Date2'];
//                $ty=$row['Type'];
//                $cn=$row['CaseNumber'];
    ?>
        
        
        <table id="casetable" align="center">
            <thead>
              <tr>
                  <th colspan="2"> اجراءات </th>
                <th>   القرار   </th>
                <th>  ما تم في الجلسة السابقة   </th>
                  <th>  ما تم في الجلسة   </th>
                   <th>الخصم و صفتة</th>
                  <th>اسم الموكل و صفتة</th>
                  <th>اسم المحامي المسؤول</th>
                   <th>معاد الجلسة</th>
                   <th>الدائرة</th>
                   <th>المحكمة</th>
                  <th>مكان المحكمة</th>
                  <th>تاريخ رفع القضية</th>
                   <th>نوع قضية  </th> 
                  <th>رقم القضية</th>
               </tr>
                </thead>
            <tbody>
    <?php
      
       
                  while($row = mysqli_fetch_array($result)){   
                echo "<tr>
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
                      
                      
//                      echo"<script>
//                      function myFunction() {
//                   header('location:EditCase.php');
//}
//                      </script>"
                      
                      
                      ?>
                
                <?php
                    echo " </tr>";
                
                      
                  
                  
           
               }
                                  
  
    ?>
  </tbody>

        </table>
                 </div>
             </form>
       
        <script>
            
//            var table = document.getElementById('casetable');
        

                
//                for(var i = 1; i < table.rows.length; i++)
//                {
//                    table.rows[i].onclick = function()
//                    {
//                         //rIndex = this.rowIndex;
////                         document.getElementById("fname").value = this.cells[0].innerHTML;
////                         document.getElementById("lname").value = this.cells[1].innerHTML;
////                         document.getElementById("age").value = this.cells[2].innerHTML;
//                        
//                          $('td').prop('contentEditable', true);
//                        $('#b1').prop('contentEditable', false);
//  };
//                }
//            onClick='GetCellValues();'
            function GetCellValues() {
    var table = document.getElementById('casetable');
    for (var r = 1, n = table.rows.length; r < n; r++) {
        for (var c = 0, m = table.rows[r].cells.length; c < m; c++) {
            alert(table.rows[r].cells[13].innerHTML);
        }
    }
}
        
        </script>

    </main>
    
    <footer>
    </footer>
    
</body>
    
   
    
</html>
