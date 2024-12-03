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
class CarController extends CI_Controller {
    public function index() {
        
        // Create an instance of Car_model
        $car = new Car_model("Toyota", "Camry", 2022);
       // Prepare data for the view
        $data['make'] = $car->make;
        $data['model'] = $car->model;
        $data['year'] = $car->year;
       // Load the view
        $this->load->view('car_view', $data);
    }
}
?>
