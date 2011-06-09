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
        $data['pagination'] = $this->pagination->create_links();
        $data['clients'] = $this->client_model->get_all($config['per_page'], $this->uri->segment(4));
        $data['content'] = "admin/client";
        $this->load->view('admin/template', $data);
    }

    function newclient() {
        $data['error'] = "";
        $data['content'] = "admin/newclient";
        $this->load->view('admin/template', $data);
    }

    function upload() {
        $config['upload_path'] = './client/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $data = array('error' => $this->upload->display_errors());
            $data['content'] = "admin/newclient";
            $this->load->view('upload_form', $data);
        } else {
            $data = array('upload_data' => $this->upload->data());
              $data['content'] = "admin/newclient";
            $this->load->view('admin/clientsucces', $data);
        }
    }

    function updateformclient() {
        
    }

    function updateclient() {
        
    }

    function delete() {
        
    }

}

?>
