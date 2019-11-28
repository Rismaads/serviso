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
  $this->form_validation->set_rules('jadwal','JADWAL', 'trim|required',
  array('required' => 'Silahkan Isi Jam Buka '));
  $this->form_validation->set_rules('jam_tutup','JAM TUTUP', 'trim|required',
  array('required' => 'Silahkan Isi Jam Tutup '));

  if ($this->form_validation->run() == TRUE)
  {
    $config['upload_path'] = './assets/cover_bengkel/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2000000';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('foto')){
          if($this->bengkel_m->add_bengkel($this->upload->data()) == TRUE)
          {
      $this->session->set_flashdata('pesan', 'Berhasil Tambah Bengkel');
      redirect('/bengkel');
  }else {
  $this->session->set_flashdata('pesan', 'Gagal Tambah Bengkel');
  redirect('bengkel');
  }
} else {
    $this->session->set_flashdata('notif', 'Tambah Bengkel gagal upload');
					redirect('bengkel');
  

  }
  } else {
  $this->session->set_flashdata('pesan', validation_errors());
  redirect(base_url('bengkel'), 'refresh');

}
  
}

public function get_detail_bengkel($id_bengkel='')
{
  $this->load->model('bengkel_m');
  $data_detail=$this->bengkel_m->detail_bengkel($id_bengkel);
  echo json_encode($data_detail);
}

public function update_bengkel()
{


  if($this->bengkel_m->update_bengkel()){
    $this->session->set_flashdata('pesan', 'Ubah Data bengkel Berhasil!'  );
    redirect('bengkel');

  }else{
    $this->session->set_flashdata('pesan', 'Ubah Data bengkel Gagal!');
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