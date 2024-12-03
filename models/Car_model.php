<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Car_model {
    public $make;
    public $model;
    public $year;
    // Constructor to initialize properties
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
}
?>
