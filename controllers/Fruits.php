<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fruits extends CI_Controller {
    public function index() {
        // Create an indexed array of fruits
        $fruits = array("Apple", "Banana", "Cherry", "Date", "Elderberry");

        // Load the view and pass the fruits array
        $this->load->view('fruits_view', ['fruits' => $fruits]);
    }
}
