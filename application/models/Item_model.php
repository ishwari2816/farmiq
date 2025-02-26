<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // public function get_items($limit, $start)
    // {
    //     $query = $this->db->get('items', $limit, $start);
    //     return $query->result();
    // }
    public function get_items($limit, $offset)
    {
        $this->db->limit($limit, $offset);
        $query = $this->db->get('items');
        return $query->result();
    } 


    public function count_all_items()
    {
        return $this->db->count_all('items');
    }

    public function get_item_by_id($id)
    {
        $query = $this->db->get_where('items', ['id' => $id]);
        return $query->row();
    }

    public function insert_item($data)
    {
        $this->db->insert('items', $data);
    }

    public function update_item($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('items', $data);
    }

    public function delete_item($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('items');
    }
}
