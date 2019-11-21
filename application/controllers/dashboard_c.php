<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_c extends CI_Controller {
	
	public function index()
	{
	
		$data['konten']="home";
			$this->load->view('dashboard',$data);
		}
			
		
			
		
	
	
	

}

/* End of file Kasir.php */
/* Location: ./application/controllers/Kasir.php */