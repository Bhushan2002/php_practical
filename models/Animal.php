<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal {
    protected $name;
    protected $age;

    public function setProperties($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function speak() {
        return "I am an animal.";
    }
}
?>
