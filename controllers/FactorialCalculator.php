<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FactorialCalculator extends CI_Controller {

    public function index() {
        $this->load->view('factorial_form');
    }
    public function calculate() {
        $number = $this->input->post('number');
        $factorial = 1;
        // Calculate factorial using a for loop
        if ($number < 0) {
            $result = "Factorial is not defined for negative numbers.";
        } else {
            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i;
            }
            $result = "The factorial of $number is $factorial.";
        }
        $data['result'] = $result;
        $this->load->view('factorial_result', $data);
    }
}
