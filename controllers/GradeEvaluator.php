<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class GradeEvaluator extends CI_Controller {
   public function index() {
        $this->load->view('grade_evaluator_form');
    }

    public function evaluate() {
        $score = $this->input->post('score');
        // Determine the grade based on the score
        if ($score >= 90 && $score <= 100) {
            $grade = 'A';
        } elseif ($score >= 80) {
            $grade = 'B';
        } elseif ($score >= 70) {
            $grade = 'C';
        } elseif ($score >= 60) {
            $grade = 'D';
        } elseif ($score >= 0) {
            $grade = 'F';
        } else {
            $grade = 'Invalid score! Please enter a score between 0 and 100.';
        }
        $data['result'] = "Score: $score, Grade: $grade";
        $this->load->view('grade_evaluator_result', $data);
    }
}
