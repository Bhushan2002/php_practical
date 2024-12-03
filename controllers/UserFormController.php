<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserFormController extends CI_Controller {
    public function index() {
        $this->load->view('user_form');
    }
    public function submit() {
        // Retrieve input data
        $name = $this->input->post('name');
        $contact_method = $this->input->post('contact_method');
        $interests = $this->input->post('interests');
        // Prepare data for the view
        $data['name'] = $name;
        $data['contact_method'] = $contact_method;
        $data['interests'] = $interests;
        // Load the result view
        $this->load->view('form_result', $data);
    }
}
?>
