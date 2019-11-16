<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class level extends CI_Controller {
        public function __construct()
        {
          parent::__construct();
          $this->load->model('level_m');
          $this->load->library('form_validation');
      
      }

	public function index()
	{
        $data['konten']="level_v";

        $this->load->model('level_m');

        $data['arr']=$this->level_m->get_level();
        
        $this->load->view('dashboard',$data, FALSE);
        }

            
        public function add_level()
{
  $this->form_validation->set_rules('nama_level','NAMA LEVEL', 'trim|required',
  array('required' => 'Silahkan Isi Nama level'));
  
  if ($this->form_validation->run() == TRUE)
  {
    $this->load->model('level_m', 'level');
    $masuk=$this->level->add_level();
    if($masuk==true){
      $this->session->set_flashdata('pesan', 'Berhasil Masuk');
  }else {
  $this->session->set_flashdata('pesan', 'Gagal Masuk');
  }
  redirect(base_url('index.php/level'),'refresh');

  }
  $this->session->set_flashdata('pesan', validation_errors());
  redirect(base_url('index.php/level'), 'refresh');

}

public function get_detail_level($id_level='')
{
  $this->load->model('level_m');
  $data_detail=$this->level_m->detail_level($id_level);
  echo json_encode($data_detail);
}

public function update_level()
{

  $this->form_validation->set_rules('nama_level_edit','NAMA level', 'trim|required');


  if($this->form_validation->run() == TRUE){

    if($this->level_m->update_level() == TRUE){
      $this->session->set_flashdata('pesan', 'Ubah Data level Berhasil!');
      redirect('level');

    }else{
      $this->session->set_flashdata('pesan', 'Ubah Data level Gagal!');
      redirect('level');
    }
  }else{
      $this->session->set_flashdata('pesan', validation_errors());
      redirect('level');
    }
  

}

public function hapus_level($id_level='')
{
  $this->load->model('level_m','level');
  $hapus=$this->level->hapus_level($id_level);
  if($hapus){
      $this->session->set_flashdata('pesan', 'sukses hapus data');
      } else {
          $this->session->set_flashdata('pesan', 'gagal hapus data');
      }
      redirect(base_url('index.php/level'),'refresh');
}

    }