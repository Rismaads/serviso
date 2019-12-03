<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_bengkel extends CI_Controller {
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_daftarpesanan','md');
		
	}
	
	public function index()
	{
		$data['konten']="v_daftarpesanan";
		$data['nota']=$this->md->get_unit_nota();
			$this->load->view('dashboard_bengkel_v',$data);
		}
			
		
			
		
	
	
	

}

