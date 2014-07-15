<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="departmententryform.php" method="POST">
            <table>
                
                <th>Add Department</th>
                
                <tr>
                    <td>Code</td>
                    <td><input type="text" name="codeText"></td>
                </tr>
                
                 <tr>
                     
                    <td>Name</td>
                    
                    <td><input type="text" name="nameText"></td>
                    
                </tr>
                
                 <tr>
                     
                    <td></td>
                    
                    <td><input type="submit" value="Create" name="createBtn"></td>
                    
                </tr>
                
            </table>
        </form>
        <?php
       
        require_once 'department.php';
        
        require_once 'department.php';
        
        session_start();
        
        if(isset($_POST['createBtn']))
        {
            $department = new Department($_POST['nameText'], $_POST['codeText']);
            
            $_SESSION['department'] = $department;
            
            echo 'Department Created';       
        }
        
        ?>
    </body>
</html>
