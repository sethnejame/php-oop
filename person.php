<?php

class Person {
  public $firstName;
  public $lastName;
  public $gender;

  public function __construct($firstName, $lastName, $gender) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->gender = $gender;
  }

  public function sayHello() {
    return "Hello, my name is ". $this->firstName . " " . $this->lastName;
  }
}

  $seth = new Person("Seth", "NeJame", "male");

  echo $tom->sayHello();
  echo "\n";

?>