<?php
class Category_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function main_category(){

        $query = $this->db->query("SELECT category_id, category_name FROM tb_categories WHERE category_status = 1 ORDER BY category_id");

        return $query->result();
    }

    public function category(){

        $query = $this->db->query("SELECT category_id, category_name FROM tb_categories WHERE category_status = 1 ORDER BY category_id");

        $result = $query->result();
        $arr = [];
        $i=0;
        foreach ($result as $res){

            $arr[$i]['category_name']   = $res->category_name;
            $arr[$i]['category_id']     = $res->category_id;
            $arr[$i]['sub_category']    = $this->sub_category($res->category_id);
            $i++;
        }

        return $arr;

    }

    public function sub_category($category_id){

        $query = $this->db->query("SELECT sub_category_id, sub_category_name FROM tb_sub_categories WHERE category_id = {$category_id} AND sub_category_status = 1 ORDER BY sub_category_id");

        return $query->result_array();

    }

}