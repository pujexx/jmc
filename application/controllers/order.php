<?php

class Order extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $config = array(
            array(
                'field' => 'nama',
                'label' => 'name',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required'
            ),
             array(
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
            ),
             array(
                'field' => 'notelp',
                'label' => 'telp number',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == TRUE) {
            if ($this->input->post('post')) {

                $this->session->set_flashdata('notif', 'data has been inserted');
               
            }
        }
        $data['setting'] = $this->setting_content_model->get_all_setting();
        $data['content'] = "front/order";
        $this->load->view('front/template', $data);
    }

}

?>
