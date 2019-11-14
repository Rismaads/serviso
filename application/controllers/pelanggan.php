<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan extends CI_Controller {
        public function __construct()
        {
          parent::__construct();
          $this->load->model('pelanggan_m');
          $this->load->library('form_validation');
      
      }

	public function index()
	{
        $data['konten']="pelanggan_v";

        $this->load->model('pelanggan_m');

        $data['arr']=$this->pelanggan_m->get_pelanggan();
        
        $this->load->view('dashboard',$data, FALSE);
        }
        
        public function add_pelanggan()
{
  $this->form_validation->set_rules('nama_lengkap','NAMA LENGKAP', 'trim|required',
  array('required' => 'Silahkan Isi Nama Lengkap'));
  $this->form_validation->set_rules('nomer_hp','NOMOR HP', 'trim|required',
  array('required' => 'Silahkan Isi Nomor HP'));
  $this->form_validation->set_rules('email','EMAIL', 'trim|required',
  array('required' => 'Silahkan Isi Email'));
  $this->form_validation->set_rules('alamat','ALAMAT', 'trim|required',
  array('required' => 'Silahkan Isi Alamat '));

  if ($this->form_validation->run() == TRUE)
  {
    $this->load->model('pelanggan_m', 'pelanggan');
    $masuk=$this->pelanggan->add_pelanggan();
    if($masuk==true){
      $this->session->set_flashdata('pesan', 'Berhasil Masuk');
  }else {
  $this->session->set_flashdata('pesan', 'Gagal Masuk');
  }
  redirect(base_url('index.php/pelanggan'),'refresh');

  }
  $this->session->set_flashdata('pesan', validation_errors());
  redirect(base_url('index.php/pelanggan'), 'refresh');

}

public function get_detail_pelanggan($id_pelanggan='')
{
  $this->load->model('pelanggan_m');
  $data_detail=$this->pelanggan_m->detail_pelanggan($id_pelanggan);
  echo json_encode($data_detail);
}

      public function update_pelanggan()
      {
     
        $this->form_validation->set_rules('nama_lengkap_edit','NAMA LENGKAP', 'trim|required');
      
        $this->form_validation->set_rules('nomer_hp_edit','NOMOR HP', 'trim|required');
      
        $this->form_validation->set_rules('email_edit', 'EMAIL', 'trim|required');
      
        $this->form_validation->set_rules('alamat_edit','ALAMAT', 'trim|required');
      
         
      
        if($this->form_validation->run() == TRUE){

          if($this->pelanggan_m->update_pelanggan() == TRUE){
            $this->session->set_flashdata('pesan', 'Ubah Data Pelanggan Berhasil!');
            redirect('pelanggan');
      
          }else{
            $this->session->set_flashdata('pesan', 'Ubah Data Pelanggan Gagal!');
            redirect('pelanggan');
          }
        }else{
            $this->session->set_flashdata('pesan', validation_errors());
            redirect('pelanggan');
          }
        

}

public function hapus_pelanggan($id_pelanggan='')
	{
		$this->load->model('pelanggan_m','pelanggan');
		$hapus=$this->pelanggan->hapus_pelanggan($id_pelanggan);
		if($hapus){
			$this->session->set_flashdata('pesan', 'sukses hapus data');
			} else {
				$this->session->set_flashdata('pesan', 'gagal hapus data');
			}
			redirect(base_url('index.php/pelanggan'),'refresh');
	}

}
