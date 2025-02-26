<?php
class Main_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getTalukasByDistrict($districtId) {
        $this->db->select('taluka');  // Selecting distinct taluka names and ids
        $this->db->from('market_places');
        $this->db->where('district', $districtId);  // Filtering by district
        $this->db->group_by('taluka');
        $query = $this->db->get();
        return $query->result();  // Return the results as an array of objects
    } 

    public function get_markets_by_taluka($taluka_name) {
        $this->db->select('market');
        $this->db->from('market_places');
        $this->db->where('taluka', $taluka_name);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAState($id) {
        $this->db->select('state_name');
        $this->db->from('states');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function getADistrict($id) {
        $this->db->select('district_name');
        $this->db->from('districts');
        $this->db->where('district_id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_all_commodities() {
        $this->db->select('id,name');
        $query = $this->db->get('items');
        return $query->result();
    }
    public function count_all_items() {
        return $this->db->count_all('market_all');
    }
    public function get_all_main($limit, $start) {
        $this->db->select('market_all.*, items.name'); 
        $this->db->from('market_all');
        $this->db->join('items', 'market_all.commodity = items.id', 'left');
        $this->db->limit($limit, $start);
        $this->db->order_by('market_all.id','DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_all_main_all() {
        $this->db->select('market_all.*, items.name'); 
        $this->db->from('market_all');
        $this->db->join('items', 'market_all.commodity = items.id', 'left');
        $this->db->order_by('market_all.createdDate','DESC');
        $this->db->limit(10);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_agri_shops() {
        $this->db->select('*'); 
        $this->db->from('agri_shops');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_agri_fertilizer_shops() {
        $this->db->select('*'); 
        $this->db->from('agri_fertilizer');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_agri_soil_labs() {
        $this->db->select('*'); 
        $this->db->from('agri_soil_labs');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_agri_cold_storages() {
        $this->db->select('*'); 
        $this->db->from('agri_cold_storages');
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_update($data)
    {
        $this->db->insert('market_all', $data);
    }
}
