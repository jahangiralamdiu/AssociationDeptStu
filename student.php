<?php

/**
 * Description of student
 *
 * @author bcc
 */
class Student {
   
    private $name;
    
    private $reg_no;
    
    
    
    function __construct($name, $reg_no) {
        $this->name = $name;
        $this->reg_no = $reg_no;
       
    }
    
  
    public function get_name() {
        return $this->name;
    }

    public function get_reg_no() {
        return $this->reg_no;
    }

    
    
}
