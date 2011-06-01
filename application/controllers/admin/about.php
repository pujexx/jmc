<?php

class About extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->model('about_model');
        $data['about'] = $this->about_model->get_all_model();
        $data['content'] = "admin/form_about";
        $this->load->view('admin/template',$data);
    }

    function update() {
        
    }

}

?>
