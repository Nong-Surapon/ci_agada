<?php
class Home_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    function get_condition()
    {
        /*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/

        $query = $this->db->query('SELECT condition_id, condition_name FROM tb_condition WHERE condition_status = 1 ORDER BY condition_id');
        return $query->result();

        //echo 'Total Results: ' . $query->num_rows();
    }


}