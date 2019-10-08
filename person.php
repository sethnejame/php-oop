<?php

class Employee extends Person {
  public $jobTitle;

  public function __construct($jobTitle) {
    $this->jobTitle = $jobTitle;
  }

  public function getJobTitle() {
    return $this->jobTitle;
  }
}

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

  public function getGender() {
    return $this->gender;
  }
}

  $seth = new Person("Seth", "NeJame", "male");
  $natalie = new Person("Natalie", "NeJame", "female");

  echo $seth->sayHello() . " Gender: " . $seth->getGender();
  echo "\n";
  echo "<br>";

  echo $natalie->sayHello() . " Gender: " . $natalie->getGender();
  echo "\n";
  echo "<br>";

  $employee = new Employee("Backend Developer");
  echo $employee->getJobTitle();
  echo "\n";
  echo "<br>";


?>