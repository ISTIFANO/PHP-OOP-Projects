<?php
require '../vendor/autoload.php';
use App\Controller\Student;


/**
 * User: TheCodeholic
 * Date: 4/8/2020
 * Time: 10:16 PM
 */

/**
 * Class Subject
 */
class Subject
{
    public $code;
    public $name;
    /**
     * @var Student[]
     */
    public $students = [] ;
    function __construct($name,$code)
    {
      $this->name=$name;
      $this->code=$code;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setCode($code)
    {
        $this->code = $code;
    }

    // TODO Generate getters and setters
    // TODO Generate constructor for all attributes. $students argument of the constructor can be empty

    /**
     * Method accepts student name and number, creates instance of the Student class, adds inside $students array
     * and returns created instance
     *
     * @param string $name
     * @param string $studentNumber
     * @return \Student
     */
    public function addStudent(string $name, string $studentNumber): Student
    {
        // TODO Implement method according to method annotation

        $student = new Student($name,$studentNumber);

        return $student;


    }
}