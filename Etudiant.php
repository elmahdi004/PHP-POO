<?php
class Etudiant{
public $name;
public $age;
public $email;


public function __construct($name,$age,$email){
$this->name = $name;
$this->age = $age;
$this->email = $email;
}

public function getName(){
return $this->name;
}
public function getAge(){
return $this->age;
}
public function getEmail(){
return $this->email;
}

public function setName($name){
    $this->name = $name;
}
public function setAge($age){
    $this->name = $age;
}
public function setEmail($email){
    $this->name = $email;
}

public function toArray(){
    return [
        "name" => $this->name,
        "age" => $this->age,
        "email" => $this->email
    ];
}
}






?>