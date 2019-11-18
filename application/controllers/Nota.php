<?PHP 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Nota extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_nota','ma');
		
	}
	
    public function index()
    {
		$data['konten'] = "v_nota";
        $this->load->model('m_nota', 'knota');
        $data['nota1']=$this->knota->get_nota();
        
        $this->load->view('dashboard', $data, FALSE);
    }
	public function add_nota()
	{
     $this->form_validation->set_rules('id_pelanggan','ID PELANGGAN', 'trim|required',
	  array('required' => 'Silahkan Isi ID PELANGGAN'));
	  $this->form_validation->set_rules('tanggal','Tanggal', 'trim|required',
	  array('required' => 'Silahkan Isi TANGGAL'));
	  $this->form_validation->set_rules('no_antrian',' NO ANTRIAN', 'trim|required',
	  array('required' => 'Silahkan Isi NO ANTRIAN'));
	  $this->form_validation->set_rules('id_bengkel','ID BENGKEL', 'trim|required',
	  array('required' => 'Silahkan Isi ID BENGKEL'));
	  $this->form_validation->set_rules('jadwal',' JADWAL', 'trim|required',
      array('required' => 'Silahkan Isi JADWAL'));
      $this->form_validation->set_rules('id_unit_sepeda','ID UNIT SEPEDA', 'trim|required',
	  array('required' => 'Silahkan Isi ID UNIT SEPEDA'));
	  $this->form_validation->set_rules('id_admin',' ID ADMIN', 'trim|required',
	  array('required' => 'Silahkan Isi ID ADMIN'));
	
	  if ($this->form_validation->run() == TRUE)
	  {
		$this->load->model('m_nota', 'nota');
		$masuk=$this->nota->add_nota();
		if($masuk==true){
		  $this->session->set_flashdata('pesan', 'Berhasil Masuk');
	  }else {
	  $this->session->set_flashdata('pesan', 'Gagal Masuk');
	  }
	  redirect(base_url('index.php/nota'),'refresh');
	
	  }
	  $this->session->set_flashdata('pesan', validation_errors());
	  redirect(base_url('index.php/nota'), 'refresh');
	
	}
	
	public function get_detail_nota($id_nota='')
	{
	  $this->load->model('m_nota');
	  $data_detail=$this->m_nota->detail_nota($id_nota);
	  echo json_encode($data_detail);
	}
	
		  public function update_nota()
		  {
         
		 
            // $this->form_validation->set_rules('tanggal_edit','Tanggal', 'trim|required');
            
            // $this->form_validation->set_rules('no_antrian_edit',' NO ANTRIAN', 'trim|required');
            
            $this->form_validation->set_rules('id_bengkel_edit','ID BENGKEL', 'trim|required');
            
            $this->form_validation->set_rules('jadwal_edit',' JADWAL', 'trim|required');
            
        
           
		  
		
			if($this->form_validation->run() == TRUE){
			  
				if($this->ma->update_nota() == TRUE){
				$this->session->set_flashdata('pesan', 'Ubah Data nota Berhasil!');
				redirect('nota');
		  
			   }else{
				$this->session->set_flashdata('pesan', 'Ubah Data nota Gagal!');
				redirect('nota');
			  }
			}else{
				$this->session->set_flashdata('pesan', validation_errors());
				redirect('nota');
			  }
			
	
	}
	
	public function hapus_nota($id_nota='')
		{
			$this->load->model('m_nota','nota');
			$hapus=$this->nota->hapus_nota($id_nota);
			if($hapus){
				$this->session->set_flashdata('pesan', 'sukses hapus data');
                } else {
                $this->session->set_flashdata('pesan', 'gagal hapus data');
				}
				redirect(base_url('index.php/admin'),'refresh');
		}
	
	}
	
?>