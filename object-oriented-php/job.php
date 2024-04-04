<?php

class JobDetails extends Person{
    public $company;
    public $designation;
    //method overriding- 
    public function getFullName(){
        return parent::getFullName()."-". $this->designation;
    }
    public function getJobDetails(){
        return $this->fname." ".$this->lname." is working as ".$this->designation." at ".$this->company;
    }

    
}