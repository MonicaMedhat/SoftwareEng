<html>
    <head>
      <title>Invoice</title>
       <script src="jquery-3.2.1.min.js"></script> 
         <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <form method="POST" action="ContInv.php">
            
            <p>اختار رقم القضية   :
              <select name='caseN' id="caseN"> 
               
            </select>
                 </p>
            
            
            <p> اختار طريقة الدفع  : visa
              <select name='payment' id="payment"> 
               
            </select>
                 </p>
            
            <p>   خصائص الدفع : code el visa
              <select name='options' id="options"> 
               
            </select>
                 </p>
            
             <p>  قيمة خاصية الدفع :
             
                  <input type="text" name="payOV" id='payOV' >
                 </p>
            
            
            <p>
                ادخل المبلغ الكلي : 
                
                <input type="text" name="total" id='total' >
                
            </p>
            <p>
                 ادخل المبلغ المدفوع : 
                
                <input type="text" name="paid" id='paid' >
                
            </p>
            <p>
                غرض الفاتورة : 
                <select name='expenType' id="expenType"> 
               
            </select>
                
                
            </p>
             <p>
                عن شهر  : 
                
                
                 <input type="month" name="month" id='month' >
                
            </p>
               
            <input type="submit" name="v" value="اختر">
            
        <?php include_once("ContInv.php");?>
            
        </form>
    </body>
</html>
