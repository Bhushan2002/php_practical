<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DayName extends CI_Controller {
    public function index() {
        $this->load->view('day_name_form');
    }

    public function check() {
        $dayNumber = $this->input->post('day_number');
        $days = [
            1 => "Sunday",
            2 => "Monday",
            3 => "Tuesday",
            4 => "Wednesday",
            5 => "Thursday",
            6 => "Friday",
            7 => "Saturday"
        ];
        $result = isset($days[$dayNumber]) ? 
       $days[$dayNumber] : "Invalid number! Please enter a number between 1 and 7.";
        $data['result'] = $result;
        $this->load->view('day_name_result', $data);
    }
}
