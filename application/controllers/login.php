<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $config = $config = array(
            array(
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required'
            ),
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == TRUE) {
            $this->load->library('auth');
            $username = $this->input->post('username',TRUE);
            $password = $this->input->post('password'.TRUE);
            if($this->auth->proses_login($username,$password)==TRUE){
                redirect('admin','refresh');
            }
            else {
                $this->session->set_flashdata('notif','username dan password tidak valid');
                redirect('login/index');
            }
        }
        $this->load->view('login/logintemplate');
    }

}

?>
