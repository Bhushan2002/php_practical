<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dog extends Animal {
    public function speak() {
        return "Woof! My name is {$this->name} and I am {$this->age} years old.";
    }
}
?>
