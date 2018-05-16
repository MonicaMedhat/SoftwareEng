
<html>
    <head>
      <title>Invoice</title>
       <script src="jquery-3.2.1.min.js"></script> 
         <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        :  اختار الفاتورة
        <form method="GET" action="Mchfatora.php">
              <select name='caseN' id="caseN"> 
               
            </select>
            
            
                
            
                
               
            <input type="submit" name="v" value="اختر">
            
        <?php include_once("ContInv.php");?>
        </form>
    </body>
</html>
