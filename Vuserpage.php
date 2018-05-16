<?php include_once "db.php"; ?>
<html>
<head>
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body>
    <header>
        <nav class="menu">     
            <a href="Vnotification.php" class="bt" id="viewnot">Message</a>
            <input class="bt" name="logout" id="logout" type="button" onclick="logout()" value="logout">
          <?php  include_once "contUserpage.php";?>
            
        </nav>
       
    </header>
    
    </body>
    
</html>