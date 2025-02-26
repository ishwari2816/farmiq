<?php
class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_user($data)
    {
        $this->db->insert('users', $data);

        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        } 
    }
    public function get_user_by_username($username)
    {
        $query = $this->db->get_where('users', array('username' => $username));

        return $query->row_array();
    }
    public function get_data_by_username($username)
    {
        $query = $this->db->select('full_name')->get_where('users', array('username' => $username));

        return $query->row_array();
    }
    public function getCountToday()
    {
        $today = date('Y-m-d');
        $this->db->where('DATE(createdDate)', $today);
        $count = $this->db->count_all_results('market_all');
        return $count;
    }

    public function insert_farmer_data($data)
    {
        $this->db->insert('farmer_sell', $data);

        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        } 
    }
}
