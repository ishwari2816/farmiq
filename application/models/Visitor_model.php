<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visitor_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function increment_count()
    {
        $this->db->set('count', 'count+1', FALSE);
        $this->db->where('id', 1);
        $this->db->update('visitor_count');
    }

    public function get_count()
    {
        $query = $this->db->get('visitor_count');
        if ($query->num_rows() > 0) {
            return $query->row()->count;
        } else {
            return 0;
        }
    }
}
