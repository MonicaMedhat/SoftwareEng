<html>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
   <main>
       
       <div  id="popup" >
                  
           <form  id="addcase"  name="form" action="Vcases.php" method="POST" >
               
            <img id="close" src="close.png" width="40px" hight="40px" onclick ="div_hide()">
            
           <div id="form" name="form">
         
            <b> رقم القضية </b>
               
            <br>
            <input type ="text" name = "CaseNumber">
            <br>
            <br>
            <b> نوع القضية </b>
            <br>
            <select name='CaseT' id="CaseT">
               
            </select>
            <br>
            <br>
            <b> تاريخ رفع الدعوة </b>
            <br>
               <select name='Date' id="Date">
         
               </select>
              
           
            <br>
            <br>
            <b> المحكمة </b>
            <br>
            <select name='court' id="court">
           
              </select> 
            <br>
            <br>
            <b> الدائرة </b>
            <br>
               <select name='circle' id="circle">
              
               </select>
            <br>
            <br>
            <b> معاد الجلسة </b>
            <br>
               <select name='Date2' id="Date2">
              
              
               </select>
               <br>
               <br>
            <b> مكان الجلسة </b>
            <br>
           <select name='sessionplace' id="sessionplace"> 
               
              </select> 
               
            <br>
            <br>
            
            <b> ما تم في الجلسة </b>
            <br>

               <select name='details' id="details">
           
               </select>
               <br>
                <br>
                 <b> ما تم في الجلسة السابقة </b>
            <br>

               <select name='previous' id="previous">
           
               </select>
               
               <br>
                <br>
                 <b> القرار </b>
                <br>

               <select name='decision' id="decision">
           
               </select>
               
               <br>
               <br>
            <button class="m" type="button" onclick ="form1_show(); ">التالي</button>
              
           </div>
           
           
           <div id="form1" name='form1'>
               
            <b> اسم المحامي </b>
            <br>
               <select name='SelectLawyer' id="SelectLawyer">
          
               </select>
            <br>
            <br>
            <b> اسم الخصم </b>
            <br>
            <input type ="text" name = "opponent">
             
            <br>
            <br>
            <b> العنوان </b>
            <br>
            <select name='address5esm' id="address5esm">
               
              </select> 
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
            <select name='SelectClient' id="SelectClient">
                
            </select>
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
               <select name='Sefato' id="side">
             
            </select>
            <br>
            <br>
            <b> العنوان </b>
            <br>
            <select name='addressC' id="addressC">
              
             </select>  
            <br>
            <br>
            <b> الهاتف </b>
            <br>
            <input type ="text" name = "mobileC">
            <br>
            <br>
            <button class="m" type="button" onclick ="form2_show() ">رجوع</button>
            <button class="m" type="button" onclick ="form3_show() ">التالي</button>
               
           </div> 
           
           <div id="form3" name="form3">
            <b> اوراق الموكل </b>
               <br>
            <textarea name='document' rows="4" cols="30"></textarea>
            <br>
            <br>
               <b> نوع اوراق الموكل </b>
               <br>
                <br>
            <select name='documenttype' id="documenttype">
             </select>  
            <br>
            <br>
            <b> احراز </b>
            <br>
            <input type ="text" name = "27raz">
               <br>
                <br>
              
            <button class="m" type="button" onclick ="form3_hide() ">رجوع</button>
            <button class="m" type="submit">حفظ</button>
                
            </div>
               
       <?php  include("contCase.php");?>
        </form>
        
       </div>
          
       
   </main> 
    
   
</body>
</html>
