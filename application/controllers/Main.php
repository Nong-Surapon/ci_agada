<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/*public function index()
	{

        $data['title'] = "Dino";
	    $this->load->view('partials/header', $data);

	    $this->load->model('contacts_model');

	    $content['contacts'] = $this->contacts_model->get_all_contacts();
		$this->load->view('main_view', $content);

        $this->load->view('partials/footer');
	}*/

    function index(){

        $data['title'] = "home page";

        $this->load->view('layouts/header', $data);
        $this->load->view('home/index');
        $this->load->view('layouts/footer');

    }

    function about(){

	    $data['title'] = "about page";

	    $this->load->view('header', $data);
	    $this->load->view('about');
	    $this->load->view('footer');

    }

    function contact(){

        $data['title'] = "contact us";

        $this->load->view('header', $data);
        $this->load->view('about');
        $this->load->view('footer');

    }

	public function handle_form(){
        $contact_name = $this->input->post('contact_name');

        $this->load->model('contacts_model');
        $this->contacts_model->add_contact($contact_name);


    }

}
