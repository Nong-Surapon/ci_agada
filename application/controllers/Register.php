<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('register_model');
        $this->load->library('form_validation');

    }

    public function index(){

        $data['title']              = "หาซื้อ ขาย เช่า บ้าน คอนโด ที่ดิน - Agada";
        $data['description']        = "รวมประกาศซื้อขายบ้านมือสอง คอนโด ที่ดิน ทาวน์เฮ้าส์-ทาวน์โฮม อพาร์ทเม้นท์ให้เช่า และโครงการบ้านใหม่ คอนโดใหม่ พร้อมรีวิวโครงการบ้านจัดสรร หลากทำเล หลายรายการ ครอบคลุมทุกความต้องการของคุณ - Agada";
        $data['keywords']           = "คอนโด บ้านเดี่ยว ทาวน์เฮ้าส์ ขายบ้าน บ้านมือสอง บ้านใหม่ โครงการใหม่ คอนโดใหม่";

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/inc_header');
        $this->load->view('layouts/navbar', $data);
        $this->load->view('register/index',$data);
        $this->load->view('layouts/footer');
        $this->load->view('layouts/inc_footer');

    }

    public function create_user(){

        $this->form_validation->set_rules('create_username', 'Username', 'required');
        $this->form_validation->set_rules('create_email', 'Email', 'required');
        $this->form_validation->set_rules('create_password', 'Password', 'required');

        if($this->form_validation->run()){

            echo "form_validation";

            $username   = $this->input->post('create_username');
            $email      = $this->input->post('create_email');
            $password   = $this->input->post('create_password');
            $result  = $this->register_model->create_user($username, $email, $password);


//            print_r($result);exit;
            if(!empty($result)){

                $this->session->set_userdata(['username' => $result->username ]);

                redirect(base_url().'register/enter');

            }else{

                $this->session->set_flashdata('error_create_user', 'ไม่สามารถสมัครสมาชิกได้ เนื่องจากชื่อผู้ใช้หรืออีเมลถูกใช้งานสมัครสมาชิกแล้ว');

                $this->index();
                // $this->index();          //set_flashdata ใช้ได้  แต่ form_error ใช้ได้
                // redirect('register');    //set_flashdata ใช้ได้  แต่ form_error ใช้ไม่ได้
            }

        }else{

            echo " create_user else";
            $this->index();
        }

    }

    public function login_validation(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run()){

            $username   = $this->input->post('username');
            $password   = $this->input->post('password');
            $result  = $this->register_model->can_login($username, $password);

            if(!empty($result)){

                $this->session->set_userdata(['username' => $result->username ]);

                redirect(base_url().'register/enter');

            }else{

                $this->session->set_flashdata('error', 'ไม่พบข้อมูล ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');

                $this->index();
                // $this->index();          //set_flashdata ใช้ได้  แต่ form_error ใช้ได้
                // redirect('register');    //set_flashdata ใช้ได้  แต่ form_error ใช้ไม่ได้
            }

        }else{

            $this->index();
        }
    }

    public function enter(){

        if($this->session->userdata('username') != ''){

            echo '<h2>Welcome - '.$this->session->userdata('username').'</h2><br>';
            echo '<a href="'.base_url().'register/logout">Logout</a>';

        }else{

            redirect('register');

        }
    }

    public function logout(){

        $this->session->unset_userdata('username');
        redirect(base_url().'register');
    }
}
