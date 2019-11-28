<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail_bengkel extends CI_Controller {
	
	public function index()
	{
		$this->load->model('bengkel_m','bm');
		$data['jadwal']=$this->bm->tampil_jadwal();
		$this->load->view('v_detail_bengkel',$data);
	}
			
		
			
		
	
	
	

}