<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_register','mr');
        $this->load->library('form_validation');
    }

    public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			redirect('dashboard/index');
		} else {
			$this->load->view('home_user');
		}
	}

    public function simpan_pelanggan(){
		
				$this->form_validation->set_rules('nama_admin', 'Nama Lengkap', 'trim|required|alpha',
                array('required' => 'nama Lengkap harus diisi'));
                $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha',
                array('required' => 'Username harus diisi'));
                $this->form_validation->set_rules('password', 'Password', 'trim|required|alpha',
				array('required' => 'Password harus diisi'));
				
				 if ($this->form_validation->run() == TRUE) {
					 # code...
					 $this->load->model('m_pelanggan', 'level');
					 $masuk=$this->mr->masuk_db();
					 if ($masuk==TRUE) {
						 # code...
						 $this->session->set_flashdata('pesan', 'sukses masuk!');
					 }else{
						 $this->session->set_flashdata('pesan', 'gagal masuk!');
					 }
					 redirect(base_url('index.php/home_user'),'refresh');
				 } else {
					 # code...
					 $this->session->set_flashdata('pesan', validation_errors());
					 redirect(base_url('index.php/home_user'),'refresh');
				 }
			 }
}