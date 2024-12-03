<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class FibonacciSeries extends CI_Controller {
    public function index() {
        $this->load->view('fibonacci_form');
    }
    public function generate() {
        $terms = $this->input->post('terms');
        $fibonacci = [];
        // Generate Fibonacci series
        if ($terms <= 0) {
            $result = "Please enter a positive integer.";
        } else {
            $fibonacci[0] = 0;
            if ($terms > 1) {
                $fibonacci[1] = 1;
                for ($i = 2; $i < $terms; $i++) {
                    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
                }
            }
            $result = "Fibonacci series up to $terms terms: " . implode(", ", $fibonacci);
        }
        $data['result'] = $result;
        $this->load->view('fibonacci_result', $data);
    }
}
