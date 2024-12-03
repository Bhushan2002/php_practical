<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class StudentList extends CI_Controller {
    public function index() {
        $students = ["Alice", "Bob", "Charlie", "David", "Eva"];
        $data['students'] = $students;
        $this->load->view('student_list', $data);
    }
}
?>