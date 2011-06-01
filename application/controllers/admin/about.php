<?php

class About extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->library('ck');

        $this->load->model('about_model');
        $data['about'] = $this->about_model->get_all_model();
        $data['content'] = "admin/form_about";
        $this->load->view('admin/template', $data);
    }

    function update() {
        $this->load->model('about_model');
        if ($this->input->post('id') == 1) {

            if ($this->input->post('judul1', TRUE)=="" ||$this->input->post('aboutcontent1', TRUE)=="") {
                $this->session->set_flashdata('notif', 'tidak boleh kosong');
                redirect('admin/about');
            } else {
                $data['title_about'] = $this->input->post('judul1', TRUE);
                $data['content_about'] = $this->input->post('aboutcontent1', TRUE);
                $this->about_model->update(1, $data);
                $this->log->setLog('admin mengubah about top => '.  word_limiter( $data['content_about'],50 ),1);
                $this->session->set_flashdata('notif', 'sukses mengubah halaman about');
                redirect('admin/about');
            }
        } else if ($this->input->post('id') == 2) {

           
            if ($this->input->post('judul2', TRUE)=="" ||$this->input->post('aboutcontent2', TRUE)=="") {
                $this->session->set_flashdata('notif', 'tidak boleh kosong');
                redirect('admin/about');
            } else {
                $data['title_about'] = $this->input->post('judul2', TRUE);
                $data['content_about'] = $this->input->post('aboutcontent2', TRUE);
                $this->about_model->update(2, $data);
                $this->session->set_flashdata('notif', 'sukses mengubah halaman about');
                redirect('admin/about');
            }
        } else if ($this->input->post('id') == 3) {

          
            if ($this->input->post('judul3', TRUE)=="" ||$this->input->post('aboutcontent3', TRUE)=="") {
                $this->session->set_flashdata('notif', 'tidak boleh kosong');
                redirect('admin/about');
            } else {
                $data['title_about'] = $this->input->post('judul3', TRUE);
                $data['content_about'] = $this->input->post('aboutcontent3', TRUE);
                $this->about_model->update(3, $data);
                $this->session->set_flashdata('notif', 'sukses mengubah halaman about');
                redirect('admin/about');
            }
        } else if ($this->input->post('id') == 4) {

//       
            if ($this->input->post('judul4', TRUE)=="" ||$this->input->post('aboutcontent4', TRUE)=="") {
                $this->session->set_flashdata('notif', 'tidak boleh kosong');
                redirect('admin/about');
            } else {
                $data['title_about'] = $this->input->post('judul4', TRUE);
                $data['content_about'] = $this->input->post('aboutcontent4', TRUE);
                $this->about_model->update(4, $data);
                $this->session->set_flashdata('notif', 'sukses mengubah halaman about');
                redirect('admin/about');
            }
            // }
        }
    }

}

?>
