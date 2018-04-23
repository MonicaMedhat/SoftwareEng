<?php


require ("db.php");

 $db_obj = new dbconnect;
 $con = $db_obj->connect();
 $con->set_charset("utf8");

header('Content-Type: text/html; charset=utf-8');
?>
<html>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <main>
       
       <div  id="popup" >
                  
           <form  id="addcase"  name="form" action="controller.php" method="POST" >
               
            <img id="close" src="close.png" width="40px" hight="40px" onclick ="div_hide()">
            
           <div id="form" name="form">
               
            <b> رقم القضية </b>
            <br>
            <input type ="text" name = "CaseNumber">
            <br>
            <br>
            <b> نوع القضية </b>
            <br>
             <?php
              
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

               echo "</select>"; 
               ?>
               
            <br>
            <br>
            <b> المحكمة </b>
            <br>
            
               
                 <?php
               $sql="SELECT ID,Name FROM courtname";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='court'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Name']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
            <br>
            <br>
            <b> الدائرة </b>
            <br>
           
               
               
                 <?php
               $sql="SELECT ID,Dayra FROM eldayra";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='circle'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Dayra']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
            <br>
            <br>
            <b> معاد الجلسة </b>
            <br>
               <?php
               $sql="SELECT ID,Date  FROM date_of_case";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='Date2'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Date']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
               
               <br>
               <br>
            <b> مكان الجلسة </b>
            <br>
           
               
                <?php
               $sql="SELECT ID,Place FROM places";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='sessionplace'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Place']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
               
               
               
            <br>
            <br>
            <br>
            <b> التفاصيل </b>
            <br>
<!--             <textarea id="TA" name="details" rows="5" cols="30"></textarea>-->
               
                <?php
               $sql="SELECT ID,Status FROM case_status";
	       $result=$db_obj->executesql($sql);
   
           echo "<select name='details'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Status']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
               <br>
               <br>
            <button class="m" type="button" onclick ="form1_show(); ">التالي</button>
           </div>
           
           
           <div id="form1" name='form1'>
               
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
            <b> اسم الخصم </b>
            <br>
            <input type ="text" name = "opponent">
             
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
            <br>
            
            <br>
            <br>
            <button class="m" type="button" onclick ="form1_hide() ">رجوع</button>
            <button class="m" type="button" onclick ="form2_show() ">التالي</button>
           
           </div>
           <div id="form2" name="form2">
               
            <b> اسم الموكل </b>
            <br>
           <h4 >ابحث عن الموكل هنا</h4>
                <?php
               $sql="SELECT ID,FullName FROM User WHERE UserType_ID=4";
	           $result=$db_obj->executesql($sql);
   
           echo "<select name='SelectClient'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['FullName']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
            <br>
            <br>
            <button class="m" type="button" onclick ="client_show() ">اضافة موكل</button>
            <br>
            <br>
            <button class="m" type="button" onclick ="form2_hide() ">رجوع</button>
            <button class="m" type="button" onclick ="form3_show() ">التالي</button>
           </div>
           
           <div id="client" name='client' >
               
            <b> اسم </b>
            <br>
            <input type ="text" name = "ClientName">
               <br>
           <b>صفته </b>
               <br>
             <?php
               $sql="SELECT ID,Type FROM clienttype";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='Sefato' id='side'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Type']; ?></option>
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
   
           echo " <select name='addressC'>"; // start a table tag in the HTML

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
            <input type ="text" name = "mobileC">
            <br>
            <br>
            <button class="m" type="button" onclick ="form4_show()"> اوراق الموكل </button>
            <br>
            <br>
            <button class="m" type="button" onclick ="form2_show() ">رجوع</button>
            <button class="m" type="button" onclick ="form3_show() ">التالي</button>
           </div>
               
            <div id="form4" name="form4">
            
            <b> اوراق الموكل </b>
            <br>
                <?php
               $sql="SELECT ID,Type FROM documenttype_id";
	           $result=$db_obj->executesql($sql);
   
              echo " <select name='documenttype'>"; 

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Type']; ?></option>

             <?php
               }

               echo "</select>"; 
               ?>  
               
            <br>
            <b> احراز </b>
            <br>
            <input type ="text" name = "27raz">
               <br>
                <br>
            
            <button class="m" type="button" onclick ="client_show() ">رجوع</button>
            <button class="m" type="button" onclick ="form3_show() ">التالي</button>
            </div>
    
           
           <div id="form3" name="form3">
              
            <b> طريقة الدفع </b>
            <br>
               
               <?php
               $sql="SELECT ID,Name FROM payment";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='payment'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Name']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>  
               
            <br>
            <br>
            <button class="m" type="button" onclick ="form3_hide() ">رجوع</button>
            <button class="m" type="submit">حفظ</button>
            </div>
               
       
        </form>
        
       </div>
          
       
   </main> 
    
    <script>
        function div_show(){
        document.getElementById('popup').style.display = "block";
        }
        function form1_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "block";
        }
         function form1_hide() {
        document.getElementById('form1').style.display = "none";
        document.getElementById('form').style.display = "block";
        }
        function form2_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('client').style.display = "none"; 
        document.getElementById('form2').style.display = "block"; 
        }
         function form2_hide() {
        document.getElementById('form').style.display = "none";
         document.getElementById('form2').style.display = "none";
        document.getElementById('form1').style.display = "block"; 
        }
         function form3_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('form2').style.display = "none";
        document.getElementById('client').style.display = "none";
        document.getElementById('form4').style.display = "none"; 
        document.getElementById('form3').style.display = "block"; 
        }
        function form3_hide() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('form3').style.display = "none";
        document.getElementById('form4').style.display = "none"; 
        document.getElementById('form2').style.display = "block"; 
        }
        function client_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('form2').style.display = "none";
        document.getElementById('form3').style.display = "none"; 
        document.getElementById('client').style.display = "block"; 
         document.getElementById('form4').style.display = "none"; 
        }
        function form4_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('form3').style.display = "none";
        document.getElementById('form2').style.display = "none"; 
        document.getElementById('client').style.display = "none"; 
        document.getElementById('form4').style.display = "block"; 
        }
        function div_hide(){
        location.href = 'index.php';
        }

    </script>
</body>
</html>
