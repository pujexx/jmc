<?php

class client extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('client_model');
    }

    function index() {
        $this->log->setLog('visitor visited client page', 0);
        $config = array(
            'base_url' => site_url() . '/client/index/',
            'total_rows' => $this->db->count_all('client'),
            'per_page' => 10,
        );
        $this->pagination->initialize($config);
        $data['content'] = 'front/client';
        $data['setting'] = $this->setting_content_model->get_all_setting();
        $data['pagination'] = $this->pagination->create_links();
        $data['clients'] = $this->client_model->get_all($config['per_page'], $this->uri->segment(3));
        $this->load->view('front/template', $data);
    }

}

?>
