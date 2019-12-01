<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jadwal extends CI_Controller {
        public function __construct()
        {
          parent::__construct();
          $this->load->model('jadwal_m');
          $this->load->library('form_validation');
      
      }

	public function index()
	{
        $data['konten']="v_jadwal";
        $this->load->model('bengkel_m', 'beng');
		$data['data_bengkel']=$this->beng->get_bengkel();

        $this->load->model('jadwal_m');

        $data['arr']=$this->jadwal_m->get_jadwal();
        
        $this->load->view('dashboard',$data, FALSE);
        }

        public function add_jadwal()
        {
          $this->form_validation->set_rules('jadwal_mulai','JAM MULAI SERVIS', 'trim|required',
          array('required' => 'Silahkan Isi JAM MULAI SERVIS'));
          $this->form_validation->set_rules('jadwal_selesai','JAM SELESAI SERVIS', 'trim|required',
          array('required' => 'Silahkan Isi JAM SELESAI SERVIS'));
          $this->form_validation->set_rules('status','JAM SELESAI SERVIS', 'trim|required',
          array('required' => 'Silahkan Isi Status'));
          $this->form_validation->set_rules('id_bengkel','ID BENGKEL', 'trim|required',
          array('required' => 'Silahkan Isi ID BENGKEL '));
         
        
          if ($this->form_validation->run() == TRUE)
          {
            $this->load->model('jadwal_m', 'jadwal');
            $masuk=$this->jadwal->add_jadwal();
            if($masuk==true){
              $this->session->set_flashdata('pesan', 'Berhasil Masuk');
          }else {
          $this->session->set_flashdata('pesan', 'Gagal Masuk');
          }
          redirect(base_url('index.php/jadwal'),'refresh');
        
          }
          $this->session->set_flashdata('pesan', validation_errors());
          redirect(base_url('index.php/jadwal'), 'refresh');
        
        }
        
        public function get_detail_jadwal($id_jadwal='')
        {
          $this->load->model('jadwal_m');
          $data_detail=$this->jadwal_m->detail_jadwal($id_jadwal);
          echo json_encode($data_detail);
        }


              public function update_jadwal()
              {
                $this->form_validation->set_rules('jadwal_mulai_edit','JAM MULAI SERVIS', 'trim|required');
              
                $this->form_validation->set_rules('jadwal_selesai_edit','JAM SELESAI SERVIS', 'trim|required');
                $this->form_validation->set_rules('status_edit','JAM SELESAI SERVIS', 'trim|required');
              
            
               

              
                 
                if($this->form_validation->run() == TRUE){

                  if($this->jadwal_m->update_jadwal() == TRUE){
                    $this->session->set_flashdata('pesan', 'Ubah Data jadwal Berhasil!');
                    redirect('jadwal');
              
                  }else{
                    $this->session->set_flashdata('pesan', 'Ubah Data jadwal Gagal!');
                    redirect('jadwal');
                  }
                }else{
                    $this->session->set_flashdata('pesan', validation_errors());
                    redirect('jadwal');
                  }
                
        }
        public function hapus_jadwal($id_jadwal='')
            {
                $this->load->model('jadwal_m','jadwal');
                $hapus=$this->jadwal->hapus_jadwal($id_jadwal);
                if($hapus){
                    $this->session->set_flashdata('pesan', 'sukses hapus data');
                    } else {
                        $this->session->set_flashdata('pesan', 'gagal hapus data');
                    }
                    redirect(base_url('index.php/jadwal'),'refresh');
            }

            
    }