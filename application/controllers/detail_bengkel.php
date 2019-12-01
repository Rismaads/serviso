<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail_bengkel extends CI_Controller {
	
	public function index($id_bengkel)
	{
		$this->load->model('bengkel_m','bm');
		$data['jadwal']=$this->bm->tampil_jadwal();
		$data['bengkel']=$this->bm->get_bengkel_by_id($id_bengkel);
		$this->load->view('v_detail_bengkel',$data);
	}
			
		
			
		
	
	
	

}