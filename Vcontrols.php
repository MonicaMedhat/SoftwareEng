
<html>
    <head>
<script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
        </head>
<body>
<div>
    
        <form id="control" method="post">
        
            <table>
                <tr>
                    <td><b>All Pages</b></td>
                    <td></td>
                    <td><b>Chosen Pages</b></td>
                </tr>
                <tr>
                    <td>
                    <select name ="leftValues" id="leftValues" STYLE="width: 160px; box-sixing;" multiple>
                    
                    </select>
                    </td>
                    <td align="center">
                        
                         <input type ="button" class="m" id="btnLeft" value="<<">
                        <input type ="button" class="m" id="btnRight" value=">>">
                        
                    </td>
                    <td>
                     <select id="rightValues" name="choosenpages[]" STYLE="width: 160px; box-sixing;" multiple>
                               
                     </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    
                        <select name="UserType" id="UserType">
                            
                        </select>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="page" class="m" value="add">
                    </td>
                </tr>
            </table>
            <br>
            <b>Select what user type you wanna view</b>
            <br>
            
            <select name="view" id="view">

            </select>
            <input type="submit" class="m" name="v" value="select">
            <br>
            
            
            <select name="un" id="un" STYLE="width: 160px; box-sixing;" multiple>
                                  
            </select>
            <br>
            <b>assign user type to a user</b>
            <br>
            <select name="type" id="type">
                     
            </select>
                <br>
                <input class="m" type="submit" name="Add" value="add">
               <br>
            <br>
            <b>add or edit a user type</b>
            <br>
            <input class="m" type="button" value="edit" onclick="f9_show()"> <input class="m" type="button" value="add" onclick="f8_show()"> <br>
            </form>
    
    <form id="ccase"  method="POST">
        
            <b> نوع القضية </b>
            <br>
            <select name='CaseT' id="CaseT">
              
            </select> <br> <input type="submit" class="m" name="cad" value="delete"> <input type="button" class="m" value="add" onclick="f1_show()">
            <br><br>
            <b> المحكمة </b>
            <br>
            <select name='court' id="court">
           
              </select> <br> <input type="submit" class="m" name="cod" value="delete"> <input type="button" class="m" value="add" onclick="f2_show()" >
            <br><br>
            <b> الدائرة </b>
            <br>
               <select name='circle' id="circle">
              
               </select> <br> <input type="submit" class="m" name="cd" value="delete"> <input type="button" class="m" value="add" onclick="f3_show()">
            <br><br>
            <b> مكان الجلسة </b>
            <br>
           <select name='sessionplace' id="sessionplace"> 
              
              </select> <br> <input type="submit" class="m" name="sed" value="delete"> <input type="button" class="m" value="add" onclick="f4_show()">
            <br><br>
            <b> ما تم في الجلسة </b>
            <br>

               <select name='details' id="details">
          
               </select> <br> <input type="submit" class="m" name="dd" value="delete"> <input type="button" class="m" value="add" onclick="f5_show()">
            <br><br>
            <b>صفته </b>
               <br>
               <select name='side' id="side">
            
            </select> <br> <input type="submit" class="m" name="sd" value="delete"> <input type="button" class="m" value="add" onclick="f6_show()" >
            <br><br>
               <b> نوع اوراق الموكل </b>
               <br>
              
            <select name='documenttype' id="documenttype">
               
             </select> <br> <input type="submit" class="m" name="d" value="delete"> <input class="m" type="button" value="add" onclick="f7_show()">

    </form>
    
<form id="fapp" method="POST">
        <b>الجنسيه</b> <br>
<select name='nationality' id="nationality">

</select>
        <br>
     <input type="submit" class="m" name="nd" value="delete"> <input class="m" type="button" value="add" onclick="f7_show()">
<br><br>
        <b>الجهه الدراسيه </b><br>
    <select name='Education' id="Education">

        </select>
    
    <br>
     <input type="submit" class="m" name="ed" value="delete"> <input class="m" type="button" value="add" onclick="f7_show()">
<br><br>
<b>درجه القيد</b><br>
<select name='Degree_enrollment' id="Degree_enrollment">

</select>
    <br>
     <input type="submit" class="m" name="dd" value="delete"> <input class="m" type="button" value="add" onclick="f7_show()">
<br><br>
<b>لوظيفه المقدم عليها</b>ا<br>
<select name='Apply_for' id="Apply_for">

</select>
<br>
     <input type="submit" class="m" name="ad" value="delete"> <input class="m" type="button" value="add" onclick="f7_show()">
    <br>
    </form>
            
    <form id ="f1" method="POST">
        <input type ="text" name = "f1n">
        <input type="submit" class="m" name="caa" value="add">
        <input class="m" type="button" value="cancel" onclick ="f1_hide()" >
    </form>
         <form id ="f2" method="POST">
        <input type ="text" name = "f2n">
        <input type="submit" class="m" name="coa" value="add" >
        <input class="m" type="button" value="cancel" onclick ="f2_hide()" >
    </form>
         <form id ="f3" method="POST">
        <input type ="text" name = "f3n">
        <input type="submit" class="m" name="ca" value="add">
        <input class="m" type="button" value="cancel" onclick ="f3_hide()" >
    </form>
         <form id ="f4" method="POST">
        <input type ="text" name = "f4n">
        <input type="submit" class="m" name="sea" value="add" >
        <input class="m" type="button" value="cancel" onclick ="f4_hide()" >
    </form>
         <form id ="f5" method="POST">
        <input type ="text" name = "f5n">
        <input type="submit" class="m" name="da" value="add"  >
        <input class="m" type="button" value="cancel" onclick ="f5_hide()" >
    </form>
         <form id ="f6" method="POST">
        <input type ="text" name = "f6n">
        <input type="submit" class="m" name="sa" value="add" >
        <input class="m" type="button" value="cancel" onclick ="f6_hide()" >
    </form>
         <form id ="f7" method="POST">
        <input type ="text" name = "f7n">
        <input type="submit" class="m" name="ad" value="add">
        <input class="m" type="button" value="cancel" onclick ="f7_hide()">
    </form>
    <form id ="f8" method="POST">
        <input type ="text" name = "f8n">
        <input type="submit" class="m" name="ua" value="add">
        <input class="m" type="button" value="cancel" onclick ="f8_hide()" >
    </form>
    <form id ="f9" method="POST">
        <select name="utype" id="utype" STYLE="width: 160px; box-sixing;" multiple>
             <?php  include("contControls.php"); ?>          
            </select> <br> <br>
        <input type ="text" name ="f9n" id="f9n">
        <br>
        <br>
        <input type="submit" class="m" name="ue" value="edit">
        <input class="m" type="button" value="cancel" onclick ="f9_hide()" >
        
    </form>
        </div>
    </body>
</html>