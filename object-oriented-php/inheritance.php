<?php
class Person{
    public $fname;
    public $lname;
    protected $employeeId = 1234;

    public function getFullName(){
        return $this->fname." ".$this->lname;
    }

    public function getEmployeeId(){
        return $this->employeeId;
    }
}