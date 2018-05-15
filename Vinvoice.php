
<html>
    <head>
      <title>Invoice</title>
       <script src="jquery-3.2.1.min.js"></script> 
         <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        :  اختار الفاتورة
        <form method="GET" action="Minvoice.php">
              <select name='caseN' id="caseN"> 
               
            </select>
            
             غرض الفاتورة : 
                <select name='expenType' id="expenType"> 
               
            </select>
                
            
                
               
            <input type="submit" name="v" value="اختر">
            
        <?php include_once("ContInv.php");?>
        </form>
    </body>
</html>
