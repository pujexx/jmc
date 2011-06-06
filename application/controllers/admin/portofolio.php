<?php

class Portofolio extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['content'] = "admin/portofolio";
        $this->load->view('admin/template', $data);
    }

    function listportofolio() {
        $this->load->model('portofolio_model');
        $config = array(
            'base_url' => site_url() . '/admin/portofolio/listportofolio/',
            'total_rows' => $this->db->count_all('portofolio'),
            'per_page' => 3,
            'uri_segment' => 4
        );
        $this->pagination->initialize($config);
        $data['content'] = "admin/list_portofolio";
        $data['pagination'] = $this->pagination->create_links();
        $data['portofolios'] = $this->portofolio_model->get_all($config['per_page'], $this->uri->segment(4));

        $this->load->view('admin/template', $data);
    }

    function newportofolio() {
        $this->load->library('ck');
        $data['content'] = "admin/form_portofolio";
        $this->load->view('admin/template', $data);
    }

    function form_update() {
        
    }

    function update() {
        
    }

    function delete() {
        
    }

    function delete2() {
        
    }

}

?>
