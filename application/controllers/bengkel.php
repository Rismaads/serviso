<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bengkel extends CI_Controller {
        public function __construct()
        {
          parent::__construct();
          $this->load->model('bengkel_m');
          $this->load->library('form_validation');
      
      }

	public function index()
	{
        $data['konten']="bengkel_v";

        $this->load->model('bengkel_m');

        $data['arr']=$this->bengkel_m->get_bengkel();
        
        $this->load->view('dashboard',$data, FALSE);
        }

            
        public function add_bengkel()
{
  $this->form_validation->set_rules('nama_bengkel','NAMA BENGKEL', 'trim|required',
  array('required' => 'Silahkan Isi Nama Bengkel'));
  $this->form_validation->set_rules('deskripsi','DESKRIPSI', 'trim|required',
  array('required' => 'Silahkan Isi deskripsi'));
  $this->form_validation->set_rules('alamat','ALAMAT', 'trim|required',
  array('required' => 'Silahkan Isi Alamat'));
  $this->form_validation->set_rules('jawal','JADWAL', 'trim|required',
  array('required' => 'Silahkan Isi Jadwal '));

  if ($this->form_validation->run() == TRUE)
  {
    $this->load->model('bengkel_m', 'bengkel');
    $masuk=$this->bengkel->add_bengkel();
    if($masuk==true){
      $this->session->set_flashdata('pesan', 'Berhasil Masuk');
  }else {
  $this->session->set_flashdata('pesan', 'Gagal Masuk');
  }
  redirect(base_url('index.php/bengkel'),'refresh');

  }
  $this->session->set_flashdata('pesan', validation_errors());
  redirect(base_url('index.php/bengkel'), 'refresh');

}

public function update_bengkel()
{

  $this->form_validation->set_rules('nama_bengkel_edit','NAMA BENGKEL', 'trim|required');

  $this->form_validation->set_rules('deskripsi_edit','DESKRIPSI', 'trim|required');

  $this->form_validation->set_rules('alamat_edit', 'ALAMAT', 'trim|required');

  $this->form_validation->set_rules('jadwal_edit','JADWAL', 'trim|required');

   

  if($this->form_validation->run() == TRUE){

    if($this->bengkel_m->update_bengkel() == TRUE){
      $this->session->set_flashdata('pesan', 'Ubah Data bengkel Berhasil!');
      redirect('bengkel');

    }else{
      $this->session->set_flashdata('pesan', 'Ubah Data bengkel Gagal!');
      redirect('bengkel');
    }
  }else{
      $this->session->set_flashdata('pesan', validation_errors());
      redirect('bengkel');
    }
  

}

public function hapus_bengkel($id_bengkel='')
{
  $this->load->model('bengkel_m','bengkel');
  $hapus=$this->bengkel->hapus_bengkel($id_bengkel);
  if($hapus){
      $this->session->set_flashdata('pesan', 'sukses hapus data');
      } else {
          $this->session->set_flashdata('pesan', 'gagal hapus data');
      }
      redirect(base_url('index.php/bengkel'),'refresh');
}

    }