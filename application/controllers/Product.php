<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model(['home_model']);
        $this->load->model(['category_model']);
    }

    function index(){


        $data['title']              = "หาซื้อ ขาย เช่า บ้าน คอนโด ที่ดิน - Agada";
        $data['description']        = "รวมประกาศซื้อขายบ้านมือสอง คอนโด ที่ดิน ทาวน์เฮ้าส์-ทาวน์โฮม อพาร์ทเม้นท์ให้เช่า และโครงการบ้านใหม่ คอนโดใหม่ พร้อมรีวิวโครงการบ้านจัดสรร หลากทำเล หลายรายการ ครอบคลุมทุกความต้องการของคุณ - Agada";
        $data['keywords']           = "คอนโด บ้านเดี่ยว ทาวน์เฮ้าส์ ขายบ้าน บ้านมือสอง บ้านใหม่ โครงการใหม่ คอนโดใหม่";
        $data['condition']          = $this->home_model->get_condition();
        $data['categories']         = $this->category_model->category();

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/inc_header');
        $this->load->view('layouts/navbar', $data);
        $this->load->view('product/index',$data);
        $this->load->view('layouts/footer');
        $this->load->view('layouts/inc_footer');
    }

}
