<?php
class Contacts_model extends CI_Model{

    public function get_all_contacts(){
        //$row = ["Dino Cajic", "Some other guy", "Frank Ramirez", "Steven Johnson"];

        $this->db->select("*");
        $this->db->from("contacts");
        $this->db->where("id", 1);

        $query = $this->db->get();
        $row = $query->row();

        return $row;
    }

    public function add_contact($name){

        $data['name'] = $name;
        $this->db->insert("contacts",$data);

        return true;
    }
}