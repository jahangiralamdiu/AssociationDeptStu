<?php
/**
 * Description of department
 *
 * @author bcc
 */
class Department {

    private $name;
    private $code;
    private $student_list;

    function __construct($name, $code) {
        $this->name = $name;
        $this->code = $code;
        $this->student_list = array();
    }

    public function add_student($a_student) 
    {
        if(count($this->student_list)<1)
        {
            $this->student_list [] = $a_student;
        }
        else 
        {
            foreach ($this->student_list as $student) 
            {
            if ($student->get_reg_no() != $a_student->get_reg_no()) 
            {
                if (count($this->student_list) < 10) 
                {
                    $this->student_list [] = $a_student;

                    return 'Student Added';
                } 
                else 
                {
                    return 'No vacancy';
                }
            } 
            else 
            {
                return 'Duplicate Student';
            }
            }
        }
        
    }

    public function get_name() {
        return $this->name;
    }

    public function get_code() {
        return $this->code;
    }

    public function get_all_student() {
        return $this->student_list;
    }

    public function get_student_number() {
        return count($this->student_list);
    }

}
