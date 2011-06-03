<?php

class Login extends CI_Controller {

    function  __construct() {
        parent::__construct();
    }

    function index(){

       $config=  $config = array(
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
       if($this->form_validation->run()==TRUE){
           
       }
       $this->load->view('login/logintemplate');
    }
}

?>
