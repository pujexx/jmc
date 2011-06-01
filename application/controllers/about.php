<?php

class about extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('about_model');
    }

    function index() {
        
        $this->log->setLog('visitor visited about page',0);
        $data['about'] = $this->about_model->get_all_model();
        // print_r($data['about']);
        $data['setting'] = $this->setting_content_model->get_all_setting();
        $data['content'] = "front/about";
        $this->load->view('front/template', $data);
    }

}

?>
