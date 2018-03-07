<?php
//require("application.php");
require ("db.php");

$db_obj = new dbconnect;
$con = $db_obj->connect();
?>
<!-- saved from url=(0042)file:///C:/Users/Amer/Desktop/new%202.html -->
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<img src="123.jpg" alt="logo" />
<center style=" font-size : 30px;">استماره طلب وظيفه</center>
<form action="application.php" method="POST">
<fieldset>
<legend>البيانات الشخصيه </legend>
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
<input type="text" id="data_13" name="Address" style="width : 450px;" class="form-control">
</div>
<div style="padding-bottom: 18px;">الجنسيه <br>
<input type="text" id="data_14" name="Nationality" style="width : 450px;" class="form-control">
</div>
</fieldset>

<fieldset>
<legend>خاص بالتوظيف </legend>
<div style="padding-bottom: 18px;">الجهه الدراسيه <br>
<input type="text" id="data_11" name="Education" style="width : 450px;" class="form-control">
</div>
<div style="padding-bottom: 18px;">درجه القيد<br>
<input type="text" id="data_10" name="Degree_enrollment" style="width : 450px;" class="form-control">
</div>
<div style="padding-bottom: 18px;">الوظيفه المقدم عليها<br>
<input type="text" id="data_5" name="Apply_for" style="width : 450px;" class="form-control">
</div>
<div style="padding-bottom: 18px;">المرتب المطلوب<br>
<input type="text" id="data_6" name="Demand_salary" style="width : 450px;" class="form-control">
</div>
<div style="padding-bottom: 18px;">متى يمكن البدء فى العمل <br>
<input type="text" id="data_7" name="Starting_in" style="width : 450px;" class="form-control">
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
<input type="text" id="data_15" name="Date" style="width : 450px;" class="form-control">
</div>


<div style="padding-bottom: 18px;"><input name="Submit" value="تمت" type="Submit"></div>

</form></body></html>
