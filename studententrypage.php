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
        
        <form action="studententrypage.php" method="POST">
            <table>
                
                <th>Add Student</th>
               
                 <tr>
                     
                    <td>Name</td>
                    
                    <td><input type="text" name="nameText"></td>
                    
                </tr>                
                 
                <tr>
                    <td>Reg No.</td>
                    
                    <td><input type="text" name="regNoText"></td>
                    
                </tr>
                
                
                 <tr>
                     
                    <td></td>
                    
                    <td><input type="submit" value="Create" name="createBtn"></td>
                    
                </tr>
                
            </table>
        </form>
        
        <?php
        
        require_once 'student.php';
        
        require_once 'department.php';
        
        session_start();
        
        if(isset($_POST['createBtn']))
        {
            $student = new Student($_POST['nameText'], $_POST['regNoText']);
            
            $department = $_SESSION['department']; 
            
            echo $department->add_student($student);
                    
            
        }
        
        ?>
    </body>
</html>
