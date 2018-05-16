
<html>
    <head>
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
    <body>
   
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
<?php include_once("ContVcases.php"); ?>
                 </tbody>

        </table>
         </body>
</html>