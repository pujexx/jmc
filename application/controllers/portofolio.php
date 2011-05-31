<?php

class portofolio extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('portofolio_model', 'screenshot_portofolio_model'));
    }

    function index() {

        $config = array(
            'base_url' => site_url() . '/portofolio/index/',
            'total_rows' => $this->db->count_all('portofolio'),
            'per_page' => 3,
        );
        $this->pagination->initialize($config);
        $data['content'] = 'front/portofolio';
        $data['setting'] = $this->setting_content_model->get_all_setting();
        $data['pagination'] = $this->pagination->create_links();
        $data['portofolios'] = $this->portofolio_model->get_all($config['per_page'], $this->uri->segment(3));
        $this->load->view('front/template', $data);
    }

    function more($id='') {
        if ($id == '') {
            exit;
        } else {
            $data['content'] = 'front/portofolio_more';
            $data['setting'] = $this->setting_content_model->get_all_setting();
            $data['screenshot'] = $this->screenshot_portofolio_model->get_all_by($id);
            $data['portofolio'] = $this->portofolio_model->get_one($id);

            $this->load->view('front/template', $data);
        }
    }

}

?>
