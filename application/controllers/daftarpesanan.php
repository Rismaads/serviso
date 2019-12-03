<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftarpesanan extends CI_Controller {
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_daftarpesanan','mp');
	}
	
	public function index()
	{
		$arr['nota'] = $this->mp->get_unit_nota();
		$this->load->view('v_daftarpesanan', $arr);
	
	}
	public function get()
	{
		$dt = $this->mp->get_unit_nota();
		echo json_encode($dt);
	}
	public function get_byId($id_nota)
	{
		$dt = $this->mp->get_unit_nota_byId($id_nota);
		echo json_encode($dt);
	}
	public function terima()
	{
		$data = array(
			'keterangan' => $this->input->post('keterangan'),
			'id_admin' => $this->session->userdata('id_admin')
			);
		$masuk = $this->db->where('id_nota', $this->input->post('id_nota'))->update('nota',$data);
		if ($masuk) 
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil</div>');
			redirect('dashboard_bengkel/index','refresh');
		} 
		else 
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal</div>');
			redirect('dashboard_bengkel/index','refresh');
		}
		
		
	}
	
			
		
			
		
	
	
	

}