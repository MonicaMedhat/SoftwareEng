<html>
<head>

    <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<form id="sign" method="POST">

      <h1>Sign Up form</h1>
	  
      <b>FullName:</b>
    <br>
      <input name="FullName" type="text" placeholder="Enter FullName" required>
	  
	  <br>
	  <br>
      
	  <b>Mobile:</b>
    <br>
      <input name="mobile" type="text" placeholder="Enter mobile" required>
	  
	  <br>
	  <br>  
      <b>Address: </b>
    <select name="address" id="address">
       	
	  </select>
	  <br>
	  <br>  
	   <b> Password: </b>
       <br>
       <input type = "Password" id="p" name = "password">
       <br>
       <br>

        <b> Confirm Password: </b>
        <br>
        <input type = "password" id="pp" name = "Confirm Password">
        <br>
        <br>
	   <b> Email : </b>
        <br>
        <input type = "Email" id="e" name = "Email">
        <br>
        <br>

        <b> Confirm Email : </b>
        <br>
        <input type = "Email" id="ee" name = "Confirm Email">
        <br>
        <br>
	 
      <p>By creating an account you agree to our <a href="#" style="color:blue">Terms & Privacy.</a></p>

        <button class="m" type="Reset">Reset</button>
      
		<input class="m" type="submit" name="submit" value="signup" >
	<?php include("contSign.php"); ?>
  </form>
</body>
   
</html>