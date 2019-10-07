<?php

  class Person {
    private $first = "Seth"; // always prioritize props as private
    private $last = "NeJame";
    private $age = "33";

    public function owner() {
      $a = $this->first;
      return $a;
    }
  }

  class Pet {
    public function owner() {
      $a = "Charlie";
      return $a;
    }
  }
?>