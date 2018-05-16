<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="jquery-3.2.1.min.js"></script>
        
    </head>
    
<body>
<img src="123.jpg" alt="logo" />
<center style=" font-size : 30px;">استماره طلب وظيفه</center>
<form action="contApp.php" method="POST">
<fieldset>
<legend>البيانات الشخصيه </legend>
<br>
<div style="padding-bottom: 18px;">الاسم الثلاثى <br>
<input type="text" id="data_1" name="FullName" style="width: 450px;" class="form-control">
</div>
<div style="padding-bottom: 18px;">رقم الموبيل <br>
<input type="text" id="data_3" name="Mobile" style="width : 450px;" class="form-control">
</div>
<div style="padding-bottom: 18px;">البريد الاكترونى <br>
<input type="text" id="data_12" name="E-mail" style="width : 450px;" class="form-control">
</div>
<div style="padding-bottom: 18px;">العنوان <br>
<select name='address' id="address">

</select>
</div>
<div style="padding-bottom: 18px;">الجنسيه <br>
<select name='nationality' id="nationality">

</select>
</div>
    
</fieldset>
<br>
<br>

<fieldset>
<legend>خاص بالتوظيف </legend>
<br>

<div style="padding-bottom: 18px;">الجهه الدراسيه <br>
    <select name='Education' id="Education">

        </select>
</div>
<div style="padding-bottom: 18px;">درجه القيد<br>
<select name='Degree_enrollment' id="Degree_enrollment">

</select>
</div>
<div style="padding-bottom: 18px;">الوظيفه المقدم عليها<br>
<select name='Apply_for' id="Apply_for">

</select>
</div>
<div style="padding-bottom: 18px;">المرتب المطلوب<br>
<input type="text" id="data_6" name="Demand_salary" style="width : 450px;" class="form-control">
</div>
<div style="padding-bottom: 18px;">متى يمكن البدء فى العمل <br>
<input type="month" id="data_7" name="Starting_in" style="width : 450px;" class="form-control">
</div>
<div style="padding-bottom: 18px;">جهه العمل السابقه<br>
<input type="text" id="data_8" name="Came_From" style="width : 450px;" class="form-control">
</div>
<div style="padding-bottom: 18px;">سبب ترك العمل السابق<br>
<input type="text" id="data_9" name="Reason" style="width : 450px;" class="form-control">
</div>
</fieldset>

<fieldset>
<legend>تعليق </legend>
<textarea id="data_9" false="" name="Comments" style="width : 450px;" rows="6" class="form-control"></textarea>
</fieldset>
<div style="padding-bottom: 18px;">التاريخ <br>
<select name='Date' id="Date">

</select>
</div>
<br>
<input type="submit" name="submit" value="تمت" >
<?php include("contApp.php"); ?>
</form></body></html>