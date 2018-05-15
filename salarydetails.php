<?php
$id=0;
$originalsalary="";
$Deductable="";
$Bonus="";
$totalsalary="";
//connect to database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "software";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['sum'])){
    
    $originalsalary = $_POST['originalsalary'];
	$Deductable = $_POST['Deductable'];
	$Bonus = $_POST['Bonus'];
	$totalsalary=$_POST['totalsalary'];
	$totalsalary= $originalsalary  + $Bonus  - $Deductable ;
	$query = "insert into salarydetails (   originalsalary , Deductable , Bonus , totalsalary   ) VALUES (  '$originalsalary'  , '$Deductable' , '$Bonus' , '$totalsalary' )";
	$totalsalary= $originalsalary  + $Bonus  - $Deductable ;
	mysqli_query($con , $query);
	//header('location:pospos.php');
	
}
if (isset($_POST['save'])){
    
    $originalsalary = $_POST['originalsalary'];
	$Deductable = $_POST['Deductable'];
	$Bonus = $_POST['Bonus'];
	$totalsalary=$_POST['totalsalary'];
	$totalsalary= $originalsalary  + $Bonus ;
	$query = "insert into salarydetails (   originalsalary , Deductable , Bonus , totalsalary  ) VALUES (  '$originalsalary'  , '$Deductable' , '$Bonus' , '$totalsalary' )";
	$totalsalary= $originalsalary  + $Bonus - $Deductable ;
	$totalsalary= $_POST['totalsalary'];
	mysqli_query($con , $query);
	//header('location:pospos.php');
	
}

//retirve data
$results = mysqli_query($con, " select * from salarydetails");

?>

<!Doctype html>
<html>
<body>
<table>
<thead>
<tr>


<th>originalsalary</th>
<th>Deductable</th>
<th>Bonus</th>
<th>totalsalary</th>
</tr>
</thead>
<tbody>
<?php while($row = mysqli_fetch_array($results)) {
?>
<tr>


<td><?php echo  $row['originalsalary']; ?></td>
<td><?php echo  $row['Deductable']; ?></td>
<td><?php echo  $row['Bonus']; ?></td>
<td><?php echo  $row['totalsalary']; ?></td>

<td>
<a  href ="salarydetails.php?=<?php echo $row['ID']; ?>"></a>
</td>
</tr>
<?php } ?>
</tbody>
</table>

<form method="POST" action="">
<br>
<div class="input-group">
<label>originalsalary</label>
<input type ="text"name="originalsalary" value="<?php echo $originalsalary; ?>">
</div>
<br>

<label>Deductable</label>
<input type ="text"name="Deductable" value="<?php echo $Deductable; ?>">
</div>
<br>

<div class="input-group">
<label>Bonus</label>
<input type ="text"name="Bonus" value="<?php echo $Bonus; ?>">
</div>
<br>


<div class="input-group">
<label>totalSalary</label>
<input type="text" name="totalsalary" value="<?php echo $totalsalary; ?>">
</div>
<br>

<div class="input-group">
<input name="sum"  type ="submit" value="sum"></div>
<br>

<div class="input-group">
<input name="save"  type ="submit" value="save"></div>
<br>


</form>
</body>
</html>
