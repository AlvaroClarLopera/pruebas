<?php

namespace User;

class User{
    private $username;
    private $email;
    private $password;
    private $birthday;

    public function __construct($username, $email, $password, $birthday)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->birthday = $birthday;

    }

    public function getUsername(){
        return $this->username;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){  
        return $this->password; 
    }

    public function getBirthday(){
        return $this->birthday; 
    }
    
}    

