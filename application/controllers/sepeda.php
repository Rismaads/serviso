<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sepeda extends CI_Controller {
        public function __construct()
        {
          parent::__construct();
          $this->load->model('sepeda_m');
          $this->load->library('form_validation');
      
      }

	public function index()
	{
        $data['konten']="sepeda_v";

        $this->load->model('sepeda_m');

        $data['arr']=$this->sepeda_m->get_sepeda();
        
        $this->load->view('dashboard',$data, FALSE);
        }

        public function add_sepeda()
        {
          $this->form_validation->set_rules('id_pelanggan','ID PELANGGAN', 'trim|required',
          array('required' => 'Silahkan Isi Id Pelanggan'));
          $this->form_validation->set_rules('no_polisi','NOMOR POLISI', 'trim|required',
          array('required' => 'Silahkan Isi Nomor POLISI'));
          $this->form_validation->set_rules('jenis_sepeda','JENIS SEPEDA', 'trim|required',
          array('required' => 'Silahkan Isi JENIS SEPEDA '));
          $this->form_validation->set_rules('merk_sepeda','MERK SEPEDA', 'trim|required',
          array('required' => 'Silahkan Isi Merk Sepeda '));
          $this->form_validation->set_rules('kerusakan','KERUSAKAN', 'trim|required',
          array('required' => 'Silahkan Isi Kerusakan '));
        
          if ($this->form_validation->run() == TRUE)
          {
            $this->load->model('sepeda_m', 'sepeda');
            $masuk=$this->sepeda->add_sepeda();
            if($masuk==true){
              $this->session->set_flashdata('pesan', 'Berhasil Masuk');
          }else {
          $this->session->set_flashdata('pesan', 'Gagal Masuk');
          }
          redirect(base_url('index.php/sepeda'),'refresh');
        
          }
          $this->session->set_flashdata('pesan', validation_errors());
          redirect(base_url('index.php/sepeda'), 'refresh');
        
        }
        
        public function get_detail_sepeda($id_unit_sepeda='')
        {
          $this->load->model('sepeda_m');
          $data_detail=$this->sepeda_m->detail_sepeda($id_unit_sepeda);
          echo json_encode($data_detail);
        }


              public function update_sepeda()
              {
             
                $this->form_validation->set_rules('nama_lengkap_edit','NAMA LENGKAP', 'trim|required');
              
                $this->form_validation->set_rules('nomer_hp_edit','NOMOR HP', 'trim|required');
              
                $this->form_validation->set_rules('email_edit', 'EMAIL', 'trim|required');
              
                $this->form_validation->set_rules('alamat_edit','ALAMAT', 'trim|required');
              
                 
              
                if ($this->form_validation->run() == FALSE) {
                  $this->session->set_flashdata('pesan', validation_errors());
                  redirect(base_url('index.php/pelanggan'),'refresh');
                } else {
                  $this->load->model('sepeda_m');
                  $proses_update=$this->sepeda_m->update_pelanggan();
                  if($proses_update){
                    $this->session->set_flashdata('pesan', 'sukses update');
                  } else {
                    $this->session->set_flashdata('pesan', 'gagal update');
                  }
                  redirect(base_url('index.php/pelanggan'),'refresh');
                }
        
        }
        
        public function hapus_pelanggan($id_pelanggan='')
            {
                $this->load->model('sepeda_m','pelanggan');
                $hapus=$this->pelanggan->hapus_pelanggan($id_pelanggan);
                if($hapus){
                    $this->session->set_flashdata('pesan', 'sukses hapus data');
                    } else {
                        $this->session->set_flashdata('pesan', 'gagal hapus data');
                    }
                    redirect(base_url('index.php/pelanggan'),'refresh');
            }

            
    }