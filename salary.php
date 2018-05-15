<?php
$id=0;
$salaryDetails_ID="";
$totalsalary="";



//connect to database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "software";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['save'])){
	$salaryDetails_ID = $_POST['salaryDetails_ID'];
	$totalsalary = $_POST['totalsalary'];
	$query = "insert into salary (   salaryDetails_ID , totalsalary  ) VALUES (  '$salaryDetails_ID' , '$totalsalary )";
	mysqli_query($con , $query);
}
//retirve data
$results = mysqli_query($con, " select * from salary");

?>

<!Doctype html>
<html>
<body>
<table>
<thead>
<tr>
<th>salaryDetails_ID</th>
<th>totalsalary</th>
</tr>
</thead>
<tbody>
<?php while($row = mysqli_fetch_array($results)) {
?>
<tr>
<td><?php echo  $row['salaryDetails_ID']; ?></td>
<td><?php echo  $row['totalsalary']; ?></td>
<td>
<a  href ="salary.php?=<?php echo $row['ID']; ?>"></a>
</td>
</tr>
<?php } ?>
</tbody>
</table>

<form method="POST" action="">
<br>

<div class="input-group">
<label>salaryDetails_ID</label>
<input type ="text"name="salaryDetails_ID" value="<?php echo $salaryDetails_ID; ?>">
    
</div>
    
<br>
    <div class="input-group">
<label>totalsalary</label>
<input type ="text"name="totalsalary" value="<?php echo $totalsalary; ?>">
   
</div>
<br>

<div class="input-group">
<input name="save"  type ="submit" value="save"></div>
<br>
    

    
</form>
</body>
</html>

