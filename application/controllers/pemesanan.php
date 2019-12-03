<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemesanan extends CI_Controller {
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pemesanan','mp');
	}
	
	public function index()
	{
        $this->load->view('v_pemesanan');
	}
	public function get()
	{
		$dt = $this->mp->get_unit_nota();
		echo json_encode($dt);
	}
			
		
			
		
	
	
	

}