<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Person {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function greet() {
        return "Hello, my name is " . $this->name;
    }
}
?>
