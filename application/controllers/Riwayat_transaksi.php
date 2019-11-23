<?PHP 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Riwayat_transaksi extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_nota','ma');
		$this->load->model('bengkel_m', 'beng');
		$this->load->model('sepeda_m', 'sep');
		$this->load->model('m_riwayat_transaksi', 'trans');
		
	}
	
    public function index()
    {
		$data['konten'] = "v_riwayat_transaksi";
		$data['data_bengkel']=$this->beng->get_bengkel();
		$data['data_pelanggan']=$this->sep->get_sepeda();
        $data['DataRiwayat']= $this->trans->get_Data_nota();
        
        $this->load->view('dashboard', $data);
    }
	public function add_nota()
	{
	  
	  $this->form_validation->set_rules('id_pelanggan','ID PELANGGAN', 'trim|required',
	  array('required' => 'Silahkan Isi ID PELANGGAN'));
	  $this->form_validation->set_rules('id_bengkel','ID BENGKEL', 'trim|required',
	  array('required' => 'Silahkan Isi ID BENGKEL'));
	  $this->form_validation->set_rules('kerusakan','KERUSAKAN', 'trim|required',
	  array('required' => 'Silahkan Isi KERUSAKAN'));
	
	  if ($this->form_validation->run() == TRUE)
	  {
		$this->load->model('m_Riwayat_transaksi', 'nota');
		$masuk=$this->nota->add_nota();
		if($masuk==true){
		  $this->session->set_flashdata('pesan', 'Berhasil Masuk');
	  }else {
	  $this->session->set_flashdata('pesan', 'Gagal Masuk');
	  }
	  redirect(base_url('index.php/Riwayat_transaksi'),'refresh');
	
	  }
	  $this->session->set_flashdata('pesan', validation_errors());
	  redirect(base_url('index.php/Riwayat_transaksi'), 'refresh');
	
	}
	
	public function get_detail_nota($id_nota='')
	{
	  $this->load->model('m_Riwayat_transaksi');
	  $data_detail=$this->m_nota->detail_nota($id_nota);
	  echo json_encode($data_detail);
	}
	
	
	public function hapus_nota($id_nota='')
		{
			$this->load->model('m_Riwayat_transaksi','nota');
			$hapus=$this->nota->hapus_nota($id_nota);
			if($hapus){
				$this->session->set_flashdata('pesan', 'sukses hapus data');
				} else {
					$this->session->set_flashdata('pesan', 'gagal hapus data');
				}
				redirect(base_url('index.php/Riwayat_transaksi'),'refresh');
		}
	
	}
	
?>