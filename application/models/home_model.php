<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_member()
    {
        $query = $this->db->get('member');
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
}