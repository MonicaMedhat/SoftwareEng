<html>
    <head>
        <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body> 
    <div id="background">
            <form id ="not" method="POST">
                <h1>Send a message</h1>
            <b>what users you wanna view</b>
            <br>
            
            <select name="view" id="view">

            </select>
            <input type="submit" class="m" name="v" value="select">
            <br>
            
            
            <select name="un" id="un" STYLE="width: 160px; box-sixing;" multiple>
                  <?php include "observer.php";?>                
            </select>
            <br>
                <b>Message</b>
                <br>
             
                <textarea rows="4" cols="30" name="message" id="message"></textarea>
                <br><br>
                <input type="submit" class="m" name="send" value="Send">
                <a href="Vuserpage.php"  class="m">Cancel</a>
            </form>
   </div>

    </body>
</html>