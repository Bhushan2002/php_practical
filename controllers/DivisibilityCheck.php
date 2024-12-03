<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DivisibilityCheck extends CI_Controller {
    public function index() {
        $this->load->view('divisibility_check_form');
    }

    public function check() {
        $number = $this->input->post('number');
        if ($number % 3 == 0) {
            $result = "$number is divisible by 3.";
        } else {
            $result = "$number is not divisible by 3.";
        }
        $data['result'] = $result;
        $this->load->view('divisibility_check_result', $data);
    }
}
