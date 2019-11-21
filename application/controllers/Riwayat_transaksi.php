<?PHP 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Riwayat_transaksi extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_riwayat_transaksi','ma');
		$this->load->model('bengkel_m', 'beng');
		$this->load->model('pelanggan_m', 'pel');
		$this->load->model('m_riwayat_transaksi', 'trans');
		
	}
	
    public function index()
    {
		
		
		$data['konten'] = "v_riwayat_transaksi";
		$data['data_bengkel']=$this->beng->get_bengkel();
		$data['data_pelanggan']=$this->pel->get_pelanggan();
        $data['DataRiwayat']= $this->trans->get_Data_riwayat_transaksi();
        
        $this->load->view('dashboard', $data);
    }
	public function add_riwayat_transaksi()
	{
	  
	  $this->form_validation->set_rules('id_pelanggan','ID PELANGGAN', 'trim|required',
	  array('required' => 'Silahkan Isi ID PELANGGAN'));
	  $this->form_validation->set_rules('id_bengkel','ID BENGKEL', 'trim|required',
	  array('required' => 'Silahkan Isi ID BENGKEL'));
	  $this->form_validation->set_rules('kerusakan','KERUSAKAN', 'trim|required',
	  array('required' => 'Silahkan Isi KERUSAKAN'));
	
	  if ($this->form_validation->run() == TRUE)
	  {
		$this->load->model('m_riwayat_transaksi', 'riwayat_transaksi');
		$masuk=$this->riwayat_transaksi->add_riwayat_transaksi();
		if($masuk==true){
		  $this->session->set_flashdata('pesan', 'Berhasil Masuk');
	  }else {
	  $this->session->set_flashdata('pesan', 'Gagal Masuk');
	  }
	  redirect(base_url('index.php/riwayat_transaksi'),'refresh');
	
	  }
	  $this->session->set_flashdata('pesan', validation_errors());
	  redirect(base_url('index.php/riwayat_transaksi'), 'refresh');
	
	}
	
	public function get_detail_riwayat_transaksi($id_riwayat_transaksi='')
	{
	  $this->load->model('m_riwayat_transaksi');
	  $data_detail=$this->m_riwayat_transaksi->detail_riwayat_transaksi($id_riwayat_transaksi);
	  echo json_encode($data_detail);
	}
	
		  public function update_riwayat_transaksi()
		  {
		 
			$this->form_validation->set_rules('kerusakan_edit','KERUSAKAN', 'trim|required');
		  
		  
		
			if($this->form_validation->run() == TRUE){
			  
				if($this->ma->update_riwayat_transaksi() == TRUE){
				$this->session->set_flashdata('pesan', 'Ubah Data riwayat_transaksi Berhasil!');
				redirect('riwayat_transaksi');
		  
			   }else{
				$this->session->set_flashdata('pesan', 'Ubah Data riwayat_transaksi Gagal!');
				redirect('riwayat_transaksi');
			  }
			}else{
				$this->session->set_flashdata('pesan', validation_errors());
				redirect('riwayat_transaksi');
			  }
			
	
	}
	
	public function hapus_riwayat_transaksi($id_riwayat_transaksi='')
		{
			$this->load->model('m_riwayat_transaksi','riwayat_transaksi');
			$hapus=$this->riwayat_transaksi->hapus_riwayat_transaksi($id_riwayat_transaksi);
			if($hapus){
				$this->session->set_flashdata('pesan', 'sukses hapus data');
				} else {
					$this->session->set_flashdata('pesan', 'gagal hapus data');
				}
				redirect(base_url('index.php/riwayat_transaksi'),'refresh');
		}
	
	}
	
?>