<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MultiplicationTable extends CI_Controller {
    public function index() {
        $this->load->view('multiplication_table_form');
    }

    public function generate() {
        $number = $this->input->post('number');
        $table = [];
        // Generate multiplication table using do while loop
        $i = 1;
        do {
            $table[] = "$number x $i = " . ($number * $i);
            $i++;
        } while ($i <= 10);
        $data['table'] = $table;
        $this->load->view('multiplication_table_result', $data);
    }
}
