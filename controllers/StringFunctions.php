<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StringFunctions extends CI_Controller {
    public function index() {
        $this->load->view('string_functions_form');
    }
   public function demonstrate() {
        $input_string = $this->input->post('input_string');
        
        // Demonstrating various string functions
        $data['original'] = $input_string;
        $data['length'] = strlen($input_string);
        $data['uppercase'] = strtoupper($input_string);
        $data['lowercase'] = strtolower($input_string);
        $data['reversed'] = strrev($input_string);
        $data['word_count'] = str_word_count($input_string);
        $data['substring'] = substr($input_string, 0, 5); // First 5 characters
        $this->load->view('string_functions_result', $data);
    }
}
?>
