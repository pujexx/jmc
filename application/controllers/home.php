<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
       
    }

    function index() {
        $data['setting'] = $this->setting_content_model->get_all_setting();

        $data['content'] = "front/home";
        $this->load->view('front/template', $data);
    }

}

?>
