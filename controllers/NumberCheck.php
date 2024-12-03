<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class NumberCheck extends CI_Controller {
    public function index() {
        $this->load->view('number_check_form');
    }
    public function check() {
        $number = $this->input->post('number');
        if ($number % 2 == 0) {
            $result = "$number is Even.";
        } else {
            $result = "$number is Odd.";
        }
        $data['result'] = $result;
        $this->load->view('number_check_result', $data);
    }
}
