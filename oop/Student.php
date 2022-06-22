<?php
class Student {
    public function getStudentName(String $name){
        echo "$name";
    }
}
$student = new Student();

$student->getStudentName("Sahil");

?>