<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_c extends CI_Controller {
	
	public function index()
	{
	
		$data['konten']="dashboard";
			$this->load->view('dashboard');
		}
			
		
			
		
	
	
	

}

/* End of file Kasir.php */
/* Location: ./application/controllers/Kasir.php */