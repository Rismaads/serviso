<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail_bengkel extends CI_Controller {
	
	public function index($id_bengkel)
	{
		$this->load->model('bengkel_m','bm');
		$data['jadwal']=$this->bm->tampil_jadwal($id_bengkel);
		$data['bengkel']=$this->bm->get_bengkel_by_id($id_bengkel);
		$this->load->view('v_detail_bengkel',$data);
	}

	public function detail_beng($id_bengkel)
	{
		$this->load->model('bengkel_m','bm');
		$dt = $this->bm->get_bengkel_by_id2($id_bengkel);
		echo json_encode($dt);
	}
	
	//proses transaksi (ojo diubah!!!!!!)
	public function tambah_antri($id_bengkel){
		$this->load->model('bengkel_m','bm');
		$masuk = $this->bm->add_antrian($id_bengkel);
		if ($masuk) 
		{
			date_default_timezone_set('Asia/Jakarta');
			$now = date("Y-m-d");
			$data = array(
				'tanggal' => $now,
				'nama_pelanggan' => $this->session->userdata('username'),
				'keterangan' => "pending",
				'id_bengkel' => $id_bengkel
			);
			$in = $this->db->insert('nota', $data);
			$get = $this->bm->get_unit();
			$data2 = array(
				'status' => "terpakai"
			);
			$in2 = $this->db->where('id_jadwal', $get->id_jadwal )->update('jadwal',$data2);
			$dt['status']=1;
			echo json_encode($dt);
		} 
		else 
		{
			$dt['status']=0;
			echo json_encode($dt);
		}
		
		
	}
	
	
	
	public function get_detail_antri($id_antri='')
	{
	  $this->load->model('detail_bengkel_m');
	  $data_detail=$this->antri_m->detail_bengkel($id_antri);
	  echo json_encode($data_detail);
	}	
			
		
	
	
	

}		
		
			
		
	
	
	

