<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stylee.css">
<title>Lawyer Information</title>
</head>
<body>
<header>
<div class="container">
   <h1>بيانات المحامين</h1>
   </div>
<div class="header">
</div>
</header>
<br>
<br>
<input type="text"name="بحث">
<button type="button" onclick="('بحث')">بحث</button>
<br>
<br>
<br>
<?php if (isset($_SESSION['msg'])): ?>
<div class="msg">
<?php
echo $_SESSION['msg'];
unset($_SESSION['msg']);
?>
<table align="center">
<table border="1">
<tr>
<th colspan="1">العمليات</th>
<th>التعليق</th>
<th>توقيت الجلسه</th>
<th>تاريخ استلام القضيه</th>
<th>نوع القضيه</th>
<th>اسم الموكل</th>
<th>اسم المحامى</th>
</tr>
<?php while($row = mysqli_fetch_array($results)){?>
<tr>
<td>
   <a class="add_button" href="lawyer.php?add=<?php echo $row['id']; ?>">add</a>
   <a class="delete_button" href="server.php?delete=<?php echo $row['id']; ?>">delete</a>
</td>
<td> <?php echo $row ['name5'];?></td>
<td> <?php echo $row ['name4'];?></td>
<td> <?php echo $row ['name3'];?></td>
<td> <?php echo $row ['name2'];?></td>
<td> <?php echo $row ['name1'];?></td>
<td> <?php echo $row ['name'];?></td>
</tr>
<?php } ?>
</table>
<br>
<br>
<br>
<form method="post" action="server.php">
<input type ="hidden" name="id" value="<?php echo $id; ?>">
<div style="padding-bottom: 18px;">اسم المحامى<br>
<input type="text" id="data_1" name="data_1"  value ="<?php echo $name; ?>" style="width: 450px;">
</div>
<div style="padding-bottom: 18px;">اسم الموكل <br>
<input type="text" id="data_2" name="data_2"  value ="<?php echo $name1; ?>" style="width: 450px;">
</div>
<div style="padding-bottom: 18px;">نوع القضيه <br>
<input type="text" id="data_3" name="data_3"  value ="<?php echo $name2; ?>" style="width: 450px;">
</div>
<div style="padding-bottom: 18px;">تاريخ استلام القضيه <br>
<input type="text" id="data_4" name="data_4"  value ="<?php echo $name3; ?>" style="width: 450px;">
</div>
<div style="padding-bottom: 18px;">موعد القضيه <br>
<input type="text" id="data_5" name="data_5"  value ="<?php echo $name4; ?>" style="width: 450px;">
</div>
<div style="padding-bottom: 18px;">التعليقات <br>
<input type="text" id="data_6" name="data_6"  value ="<?php echo $name5; ?>" style="width: 450px;">
</div>
<button type="submit" name="حفظ" class="btn">حفظ</button>
</form>
<br>
<footer> Copyright © 2018</footer>

</body>
</html>

