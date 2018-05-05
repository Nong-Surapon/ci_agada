<?php
class Register_model extends CI_Model{

    protected $table = 'user';

    function __construct()
    {
        parent::__construct();
    }

    function create_user($username, $email, $password){

        $query = $this->db->query("SELECT COUNT(id) AS row FROM `tb_users` WHERE (`username` = '$username' OR `email` = '$username' OR `phone` = '$username') ");

        $result = $query->row();
        // $result = $query->result();
        // $result = $result[0];

        if(!empty($result) && $result->row > 0){

           return NULL;

        }else{

            $this->db->query("INSERT INTO tb_users (username, email, password) VALUES ('$username', '$email', '$password') ");

            return (object) ['username'=>$username];
        }
    }

    function can_login($username, $password){

        $query = $this->db->query("SELECT * FROM `tb_users` WHERE (`username` = '$username' OR `email` = '$username' OR `phone` = '$username') AND `password` = '$password' AND status = 1");
        $result = $query->row();

        if(!empty($result)){

            return $result;

        }else{

            return NULL;
        }

    }



    //============ test ============//

    public function get_users($arr){

        $this->db->select($arr['fields']);
        $this->db->order_by($arr['order']);
        $query = $this->db->get_where($this->table, $arr['conditions']);

        return $query->result_array();

    }

    public function update($arr){

        $fields = [
            'name' => $arr['user_name']
        ];

        // Check if data existed
        $conditions = ['id'=>$arr['user_id'], 'deleted_flag' => 0];
        $query      = $this->db->get_where($this->table, $conditions);
        $results    = $query->result_array();

        if(!empty($results)){

            $fields['updated_date'] = date('Y-m-d H:i:s');
            // Process update
            $this->db->where($conditions);
            $this->db->update($this->table, $fields);

        }else{

            $fields['created_date'] = date('Y-m-d H:i:s');
            // Process insert table
            $this->db->insert($this->table,$fields);

        }

    }

    public function delete($arr){


        foreach($arr as $user_id) {

            $conditions = ['id'=> $user_id];

            $this->db->delete($this->table, $conditions);
        }

    }
}