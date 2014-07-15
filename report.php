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
        <?php
        require_once 'student.php';
        
        require_once 'department.php';
        
        session_start();       
            
            $department = $_SESSION['department'];           
                       
            echo 'Code '.$department->get_code().'<br/>';
            
            echo 'Name '.$department->get_Name().'<br/>';
            
            echo 'Number of Student : '.$department->get_student_number().'<br/>';
            
            foreach ($department->get_all_student() as $an_student) 
                {
                echo $an_student->get_name().' '.$an_student->get_reg_no(). ' <br/>';
    
                }
       
        ?>
    </body>
</html>
