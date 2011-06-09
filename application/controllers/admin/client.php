<?php

class Client extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->model('client_model');
        $config = array(
            'base_url' => site_url() . '/admin/client/index/',
            'total_rows' => $this->db->count_all('client'),
            'per_page' => 10,
            'uri_segment' => 4
        );
        $this->pagination->initialize($config);
        $data['pagination']=  $this->pagination->create_links();
        $data['clients'] = $this->client_model->get_all($config['per_page'], $this->uri->segment(4));
        $data['content'] = "admin/client";
        $this->load->view('admin/template', $data);
    }

    function newclient() {
        $data['content']="admin/newclient";
        $this->load->view('admin/template',$data);
    }

    function updateformclient() {
        
    }

    function updateclient() {
        
    }

    function delete() {
        
    }

}

?>
