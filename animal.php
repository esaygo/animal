<?php

class Animal {
  public $name;
  public $health = 100;

  public function __construct($name) {
    $this->name = $name;
  }

  public function walk(){
    $this->health -= 1;
    return $this;
  }

  public function run() {
    $this->health -= 5;
    return $this;
  }

  public function displayHealth() {
    echo $this->name . '</br>';
    echo $this->health . '</br>';
    return $this;
  }

}

class Dog extends Animal {
  public $health = 150;

  function pet() {
    $this->health += 5;
    return $this;
  }
}


class Dragon extends Animal {
  public $health = 170;

  function dragon_greetings() {
    echo "I am a proud dragon!</br>";
    parent::displayHealth();
    return $this;
  }

  function __construct() {
    $this->dragon_greetings();
  }

  function fly() {
    $this->health -= 10;
    return $this;
  }

}

$animal = new Animal('animal');
$animal->walk()->walk()->walk()->run()->run()->displayHealth();
$dog = new Dog('Lucky');
$dog->walk()->walk()->walk()->run()->run()->pet()->displayHealth();
$dragon = new Dragon('Rex');
$dragon->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();

 ?>
