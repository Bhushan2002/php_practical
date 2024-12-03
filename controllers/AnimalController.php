<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnimalController extends CI_Controller {
    public function index() {
        // Load models
        $this->load->model('Animal');
        $this->load->model('Dog');

        // Set properties for the Dog instance
        $dog = new Dog();
        $dog->setProperties("Buddy", 3);

        $data['message'] = $dog->speak();

        // Load the view and pass the data
        $this->load->view('animal_view', $data);
    }
}
?>
