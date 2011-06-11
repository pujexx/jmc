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
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $form_validation = array(
            array(
                'field' => 'title',
                'label' => 'keterangan',
                'rules' => 'required'
            ),
            array(
                'field' => 'keterangan',
                'label' => 'keterangan',
                'rules' => 'required'
            ),
        );
        $this->form_validation->set_rules($form_validation);
        if ($this->form_validation->run() == TRUE) {
            if (isset($_FILES['userfile'])) {
                if (!$this->upload->do_upload()) {
                    $data = array('error' => $this->upload->display_errors());
                    $data['content'] = "admin/newclient";
                    $this->load->view('admin/template', $data);
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    //echo "<pre>";
                    // print_r($data['upload_data']);
                    //  echo "</pre>";

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = "./client/" . $data['upload_data']['file_name'];

                    $config['maintain_ratio'] = TRUE;
                    $config['width'] = 200;
                    $config['height'] = 100;
                    $this->load->library('image_lib', $config);

                    if ($this->image_lib->resize()) {
                        $this->load->model('client_model');
                        $data_client = array(
                            'name_client' => $this->input->post('title', TRUE),
                            'content_client' => $this->input->post('keterangan', TRUE),
                            'client_tumbh' => $data['upload_data']['file_name'],
                        );
                        $berhasil = array(
                            "notif" => "success menambah client"
                        );
                        $this->client_model->insert($data_client);
                        $this->session->set_flashdata($berhasil);
                        redirect('admin/client');
                        //$data['content'] = "admin/clientsucces";
                        //$this->load->view('admin/template', $data);
                    } else {

                        $data = array('error' => $this->image_lib->display_errors());
                        $data['content'] = "admin/newclient";
                        $this->load->view('upload_form', $data);
                    }
                }
            } else {
                $this->load->model('client_model');
                $data_client = array(
                    'name_client' => $this->input->post('title', TRUE),
                    'content_client' => $this->input->post('keterangan', TRUE),
                    'client_tumbh' => 'jmc_tumbh.png',
                );
                $berhasil = array(
                    "notif" => "success menambah client"
                );
                $this->client_model->insert($data_client);
                $this->session->set_flashdata($berhasil);
                redirect('admin/client');
            }
        } else {
            $this->newclient();
        }
    }

    function updateformclient() {
        
    }

    function updateclient() {
        
    }

    function delete() {
       
        if($this->uri->segment(4)!=''||  is_numeric($this->uri->segment(4))){
            
            
        }
        else {
            
        }
    }
    

}

?>
