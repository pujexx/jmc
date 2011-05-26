<?php

class Contact_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all() {
        $result2 = array();
        $this->db->where('id_contact', 1);
        $result = $this->db->get('contact');
        
        if ($result->num_rows() > 0) {
           foreach($result->result_array() as $row){
               $result2['contact'] =array('judul'=>$row['title_contact'],'isi'=>$row['content_contact']);
              
           }
           return $result2;
        } else {
            return 0;
        }
    }

    function get_one($id) {
        $this->db->where('id_contact', $id);
        $result = $this->db->get('contact');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function insert() {
        $data = array(
            'title_contact' => $this->input->post('title_contact', TRUE),
            'content_contact' => $this->input->post('content_contact', TRUE),
        );
        $this->db->insert('contact', $data);
    }

    function update($id) {
        $data = array(
            'title_contact' => $this->input->post('title_contact', TRUE),
            'content_contact' => $this->input->post('content_contact', TRUE),
        );
        $this->db->where('id_contact', $id);
        $this->db->update('contact', $data);
    }

    function delete($id) {
        foreach ($id as $sip) {
            $this->db->where('id_contact', $sip);
            $this->db->delete('contact');
        }
    }

}

?>
