
<html>
<script src="jquery-3.2.1.min.js"></script>
<body>

        <form method="post">
        
            <table>
                <tr>
                    <td>All Pages</td>
                    <td></td>
                    <td>Chosen Pages</td>
                </tr>
                <tr>
                    <td>
                    <select name ="leftValues" id="leftValues" STYLE="width: 160px; box-sixing;" multiple>
                    
                    </select>
                    </td>
                    <td align="center">
                        
                         <input type ="button" id="btnLeft" value="<<">
                        <input type ="button" id="btnRight" value=">>">
                        
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
                        <input type="submit" name="page" value="add">
                    </td>
                </tr>
            </table>
            <br>
            <h1>Select what user type you wanna view</h1>
            
            <select name="view" id="view">

            </select>
            <input type="submit" name="v" value="select">
            <br>
            
            
            <select name="un" id="un" STYLE="width: 160px; box-sixing;" multiple>
                                  
            </select>
            <br>
            
            <select name="type" id="type">
                 <?php  include("contControls.php");  ?>             
            </select>
                <br>
                <input type="submit" name="Add" value="add">
               
            </form>
        
    </body>
</html>