<?php

class User {

    private static $username = "";
    private static $password = "";

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getUsername(){
        return $this->username;
    }
}
