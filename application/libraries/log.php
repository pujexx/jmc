<?php

class Log {

    var $LG = null;

    function __construct() {
        $this->LG = & get_instance();
        $this->LG->load->database();
        $this->__deleteLogBack();
        $this->__deleteLogFront();
    }

    function setLog($activity, $type) {
        $data = array(
            'time' => time(),
            'date' => date('Ymd'),
            'name_log' => $activity,
            'type' => $type
        );
        $this->LG->db->insert('log', $data);
    }

    function getLog($type, $limit, $uri) {
        if ($type == 0) {

            $this->LG->db->where('type', 0);
            $this->LG->db->order_by('id_log', 'desc');
            $result = $this->LG->db->get('log', $limit, $uri);
            if ($result->num_rows() > 0) {
                return $result->result_array();
            } else {
                return array();
            }
        } else {

            $this->LG->db->where('type', 1);
            $this->LG->db->order_by('id_log', 'desc');
            $result = $this->LG->db->get('log', $limit, $uri);
            if ($result->num_rows() > 0) {
                return $result->result_array();
            } else {
                return array();
            }
        }
    }

    function __deleteLogFront() {
        $this->LG->db->where('type', 0);
        $data = $this->LG->db->get('log');
        if ($data->num_rows() > 1000) {
            $this->LG->db->where('id_log', $this->_getexpiredID(0));
            $this->LG->db->delete('log');
        }
    }

    function __deleteLogBack() {
        $this->LG->db->where('type', 1);
        $data = $this->LG->db->get('log');
        if ($data->num_rows() > 1000) {
            $this->LG->db->where('id_log', $this->_getexpiredID(1));
            $this->LG->db->delete('log');
        }
    }

    function _getexpiredID($type) {
        $this->LG->db->select('MIN(id_log) as id');
        $this->LG->db->where('type', $type);
        $result = $this->LG->db->get('log');
        $data = $result->row_array();
        return $data['id'];
    }

}

?>
