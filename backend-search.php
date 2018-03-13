<?php
$con = mysqli_connect("localhost", "root", "", "swproj");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$term =  $_REQUEST['ID'];
 
if(isset($term)){
    // Attempt select query execution
    $sql = "SELECT * FROM user WHERE FullName LIKE '%" . $term . "%'";
    if($result = mysqli_query($con, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['FullName'] . " ". $row['FullName'] ."</p>";
            }
        } else{
            echo "<p>No matches found</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
}
 
// close connection
mysqli_close($con);
?>