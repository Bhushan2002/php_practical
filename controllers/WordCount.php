<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class WordCount extends CI_Controller {
    public function index() {
        $this->load->view('word_count_form');
    }
    public function count_words() {
        $input_string = $this->input->post('input_string');
        $word_count = $this->calculate_word_count($input_string);
        $data['word_count'] = $word_count;
        $data['input_string'] = $input_string;
        $this->load->view('word_count_result', $data);
    }
    private function calculate_word_count($string) {
        $count = 0;
        $in_word = false;
        for ($i = 0; $i < strlen($string); $i++) {
            if ($string[$i] != ' ') {
                if (!$in_word) {
                    $in_word = true;
                    $count++;
                }
            } else {
                $in_word = false;
            }
        }
        return $count;
    }
}
?>
