<?php
class Location_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert_location($data)
    {
        $this->db->insert('market_places', $data);
    }

    public function get_locations($limit, $start) {
        $this->db->select('market_places.*, states.state_name, districts.district_name');
        $this->db->from('market_places');
        $this->db->join('states', 'market_places.state = states.id', 'left');  // Join with state table
        $this->db->join('districts', 'market_places.district = districts.district_id', 'left');  // Join with district table
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    } 
    

    public function count_all_items() {
        return $this->db->count_all('market_places');
    }

    public function get_location_by_id($id)
    {
        $query = $this->db->get_where('market_places', array('id' => $id));
        return $query->row();
    }

    public function update_location($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('market_places', $data);
    }

    public function delete_location($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('market_places');
    }
    public function get_all_states() {
        $query = $this->db->get('states');  
        return $query->result(); 
    }
    public function getStatebyID($stateId) {
        $this->db->where('id', $stateId);  // Assuming districts table has 'state_id'
        $query = $this->db->get('states');  // Assuming 'districts' is the table for districts
        return $query->row();  // Return districts as an array of objects
    }
    public function get_all_districts() {
        $query = $this->db->get('districts');  
        return $query->result(); 
    }
    public function getDistrictsByState($stateId) {
        $this->db->where('state_id', $stateId);  // Assuming districts table has 'state_id'
        $query = $this->db->get('districts');  // Assuming 'districts' is the table for districts
        return $query->result();  // Return districts as an array of objects
    }
    public function getDistrictbyID($distId) {
        $this->db->where('district_id', $distId);  // Assuming districts table has 'state_id'
        $query = $this->db->get('districts');  // Assuming 'districts' is the table for districts
        return $query->row();  // Return districts as an array of objects
    }
}
