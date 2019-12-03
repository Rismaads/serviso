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
		
					$masuk = $this->mr->masuk_db();
					if ($masuk) 
					{
						$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Daftar</div>');
						
						redirect(base_url('index.php/home_user'),'refresh');
					}
					else
					{
						$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Daftar</div>');
						redirect(base_url('index.php/home_user'),'refresh');
					}
					
					//redirect(base_url('index.php/home_user'),'refresh');
			 }
}