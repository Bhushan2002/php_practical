<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SumNaturalNumbers extends CI_Controller {
    public function index() {
        $this->load->view('sum_natural_numbers_form');
    }
    public function calculate() {
        $limit = $this->input->post('limit');
        // Validate input
        if ($limit < 0) {
            $result = "Please enter a non-negative number.";
        } else {
            // Calculate the sum of natural numbers
            $sum = ($limit * ($limit + 1)) / 2;
            $result = "The sum of natural numbers up to $limit is $sum.";
        }
        $data['result'] = $result;
        $this->load->view('sum_natural_numbers_result', $data);
    }
}
