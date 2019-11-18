<?PHP 
defined('BASEPATH') OR exit ('No direct script access allowed');

class admin extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin','ma');
		
	}
	
    public function index()
    {
		$data['konten'] = "v_admin";
		$data['data_level']=$this->ma->get_level();
        $this->load->model('m_admin', 'Data_admin');
        $data['Data_admin1']=$this->Data_admin->get_Data_admin();
        
        $this->load->view('dashboard', $data, FALSE);
    }
	public function add_admin()
	{
	  $this->form_validation->set_rules('nama_admin','NAMA ADMIN', 'trim|required',
	  array('required' => 'Silahkan Isi NAMA LENGKAP'));
	  $this->form_validation->set_rules('username','USERNAME', 'trim|required',
	  array('required' => 'Silahkan Isi USERNAME'));
	  $this->form_validation->set_rules('password','PASSWORD', 'trim|required',
	  array('required' => 'Silahkan Isi PASSWORD'));
	  $this->form_validation->set_rules('id_level',' ID LEVEL', 'trim|required',
	  array('required' => 'Silahkan Isi LEVEL'));
	
	  if ($this->form_validation->run() == TRUE)
	  {
		$this->load->model('m_admin', 'admin');
		$masuk=$this->admin->add_admin();
		if($masuk==true){
		  $this->session->set_flashdata('pesan', 'Berhasil Masuk');
	  }else {
	  $this->session->set_flashdata('pesan', 'Gagal Masuk');
	  }
	  redirect(base_url('index.php/admin'),'refresh');
	
	  }
	  $this->session->set_flashdata('pesan', validation_errors());
	  redirect(base_url('index.php/admin'), 'refresh');
	
	}
	
	public function get_detail_admin($id_admin='')
	{
	  $this->load->model('m_admin');
	  $data_detail=$this->m_admin->detail_admin($id_admin);
	  echo json_encode($data_detail);
	}
	
		  public function update_admin()
		  {
		 
			$this->form_validation->set_rules('nama_admin_edit','NAMA ADMIN', 'trim|required');
		  
			$this->form_validation->set_rules('username_edit','USERNAME', 'trim|required');
		  
			$this->form_validation->set_rules('password_edit', 'PASSWORD', 'trim|required');
			// $this->form_validation->set_rules('id_level_edit', 'ID LEVEL', 'trim|required');
		  
		
			if($this->form_validation->run() == TRUE){
			  
				if($this->ma->update_admin() == TRUE){
				$this->session->set_flashdata('pesan', 'Ubah Data admin Berhasil!');
				redirect('admin');
		  
			   }else{
				$this->session->set_flashdata('pesan', 'Ubah Data admin Gagal!');
				redirect('admin');
			  }
			}else{
				$this->session->set_flashdata('pesan', validation_errors());
				redirect('admin');
			  }
			
	
	}
	
	public function hapus_admin($id_admin='')
		{
			$this->load->model('m_admin','admin');
			$hapus=$this->admin->hapus_admin($id_admin);
			if($hapus){
				$this->session->set_flashdata('pesan', 'sukses hapus data');
				} else {
					$this->session->set_flashdata('pesan', 'gagal hapus data');
				}
				redirect(base_url('index.php/admin'),'refresh');
		}
	
	}
	
?>