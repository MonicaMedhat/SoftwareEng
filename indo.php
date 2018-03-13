
<?php include('serve.php');



//fetch data to be updated
if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$sql="select * from user where id=$id";
	//echo $sql;
	$rec=mysqli_query($con, $sql);
	$record=mysqli_fetch_array($rec);
	$ID=$record['ID'];
	$FullName=$record['FullName'];
	$Email=$record['Email'];
	$Password=$record['Password'];
	$mobile=$record['mobile'];
	$UserType_id=$record['UserType_id'];
	
}

 ?>
<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {ID: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });    
    
});
</script>
<title>add data for employee</title>
</head>
<body>
<table>
<thead>
<tr>
<th>ID</th>
<th>FullName</th>
<th>Email</th>
<th>Password</th>
<th>mobile</th>
<th>UserType_id</th>
<th colspan="2">Actions</th>
</tr>
</thead>
<tbody>
<?php while($row = mysqli_fetch_array($results)){ ?>
<tr>
<td><?php echo  $row['ID']; ?></td>
<td><?php echo  $row['FullName']; ?></td>
<td><?php echo  $row['Email']; ?></td>
<td><?php echo  $row['Password']; ?></td>
<td><?php echo  $row['mobile']; ?></td>
<td><?php echo  $row['UserType_id']; ?></td>
<td>
<a class="edit" href ="indo.php?edit=<?php echo $row['ID']; ?>">edit</a>
</td>

</tr>
<?php } ?>

</tbody>
</table>

<form method="POST" action="serve.php">
<input type= "hidden" name="id" value="<?php echo $id; ?>">
<div class="input-group">
<label>ID</label>
<input type ="text"name="ID" value="<?php echo $ID; ?>">
<br>
</div>
<br>
<div class ="input-group">
<label>FullName</label>
<input type ="text" name="FullName" value="<?php echo $FullName; ?>">

</div>
<br>
<div class="input-group">
<label>Email</label>
<input type ="text"name="Email" value="<?php echo $Email; ?>">

</div>
<br>
<div class="input-group">
<label>Password</label>
<input type ="text"name="Password" value="<?php echo $Password; ?>">

</div>
<br>
<div class="input-group">
<label>mobile</label>
<input type ="text"name="mobile" value="<?php echo $mobile; ?>">

</div>
<br>
<div class="input-group">
<label>UserType_id</label>
<input type ="text"name="UserType_id" value="<?php echo $UserType_id; ?>">

</div>
<br>
<div class="input-group">
<button type ="submit" name="save" class="btn">save</button>
<button type ="submit" name="update" class="btn">update</button>
<button type ="submit" name="delete" class="btn">delete</button>
    
</form>

</div>
<br>

 <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
	<div class="search-box">
        <input type="text" placeholder="Search Name..." />
        <div class="result"></div>
    </div>
                    

           <form action="indo.php" method="POST">
			

            

            <table>
                <tr>
                    <th>Id</th>
                    <th>FullName</th>
                    <th>Email</th>
                    <th>Password</th>
					<th>mobile</th>
					<th>UserType_id</th>
                </tr>

      
                
            </table>
</form>
</body>
</html>

