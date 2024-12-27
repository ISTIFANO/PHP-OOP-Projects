<?php
/**
 * User: TheCodeholic
 * Date: 4/8/2020
 * Time: 10:40 PM
 */

/**
 * Class Student
 */
class Student
{
    public string $name;
    public string $studentNumber;

    function __construct($name,$studentNumber)
    {
      $this->name=$name;
      $this->studentNumber=$studentNumber;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getStudentNumber()
    {
        return $this->studentNumber;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setStudentNumber($studentNumber)
    {
        $this->studentNumber = $studentNumber;
    }

    // TODO Generate getters and setters for both arguments
    // TODO Generate constructor with both arguments.
}

// $var = new Student("Aamir",2003);
// echo$var->getName();

// $var->setName("wassime");
// var_dump($var);


