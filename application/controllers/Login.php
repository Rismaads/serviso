<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	// public function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('m_login');
	// }

	public function index()
	{
			$this->load->view('v_login');
	}

	public function login_cek(){
		$this->load->model('m_login','login');
		if($this->session->userdata('logged_in') == FALSE){

			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->login->cek_user() == TRUE){

					if ($this->session->userdata('id_level') == '2') {
						 redirect('dashboard_c','refresh');
					}
					elseif ($this->session->userdata('id_level') == '1') {
						 redirect('home_user', 'refresh');
					
					}
					else {
						
						redirect('dashboard_bengkel', 'refresh');
					}
					
				} else {
					$this->session->set_flashdata('notif', 'Login gagal');
					redirect('home_user','refresh');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
					redirect('home_user','refresh');
			}

		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home_user');
	}

}
