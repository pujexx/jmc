<?php

class Administrator extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $config = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == TRUE) {
            $this->load->library('auth');
            $user = $this->input->post('username');
            $pass = $this->input->post('password');
            if ($this->auth->process_login($user, $pass) == TRUE) {
                // redirect('admin/front');
            } else {
                $this->session->set_flashdata('login_notif', '<p>username and password do not exist in database</p>');
                redirect('administrator');
            }
        }
        $this->load->view('login/logintemplate');
    }

    function logout() {
        //   $this->session->sess_destroy();

        $this->session->unset_userdata('id');
        $this->session->unset_userdata('login');
        $this->session->set_flashdata('login_notif', '<p>logout from system</p>');
        redirect('administrator');
    }

}

?>
