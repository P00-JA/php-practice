<?php

//getter and setter works by first assigning the variable to private and accessing them through public functions

class User{
    private $id;
    private $username;
    private$email;
    private $password;

    public function setId( $id ){
        $this->id = $id;
    }
    public function setUsername( $username ){
        $this->username = $username;
    }
    public function setEmail( $email ){
        $this->email = $email;
    }
    public function setPassword( $password ){
        $this->password = $password;
    }
    public function getId( ){
        return $this->id;
    }
    public function getUsername( ){
        return $this->username;
    }
    public function getEmail( ){
        return $this->email;
    }
    public function getPassword(  ){
        return $this->password;
    }
}