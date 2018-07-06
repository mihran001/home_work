<?php
class Person
    {


    public $firstname;
    public $lastname;
    // public  $birth_date;
    // public $age;
    public function __construct($firstname,$lastname,$birth_day){

        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->birth_day = $birth_day;

    }

    public function getFirstName(){

        return $this->firstname;

    }

    public function setFirstName($new_first_name){

        $this->firstname = $new_first_name;

    }

    public function getLastName(){

        return $this->$lastname;

    }

    public function setLastName($new_last_name){

        $this->lastname = $new_last_name;

    }

    public function getAge(){

            $today = date("Y-m-d");
            $diff = date_diff(date_create($this->birth_day), date_create($today));
    
            $this->birth_day =  $diff->format('%y');
        }

        public function setAge($new_birth_day){

           $this->birth_day = $new_birth_day;
        }
    }
class Student extends Person {

}

$student = new Student("Arman","Poxosyan","1295-11-10");
echo "<pre>";
print_r($student);


class Pupil extends Person {

}
$pupil = new Pupil ("Aram", "Aramyan", "2018-05-10");
echo "<pre>";
print_r($pupil);
?>