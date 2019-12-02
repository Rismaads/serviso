<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_user extends CI_Controller {
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('bengkel_m','bm');
		
	}
	
	public function index()
	{	
			$this->load->view('v_home_user');	
	}

	public function get_bengkel()
	{
		$dt = $this->bm->get_bengkel();
		echo json_encode($dt);
	}
			
		
			
		
	
	
	

}

/* End of file Kasir.php */
/* Location: ./application/controllers/Kasir.php */