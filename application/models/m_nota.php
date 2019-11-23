<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_nota extends CI_Model {

	public function get_nota()
	{
		return $this->db->join('bengkel','bengkel.id_bengkel=nota.id_bengkel')
						->join('admin','admin.id_admin=nota.id_admin')
						->join('unit_sepeda','unit_sepeda.id_unit_sepeda=nota.id_unit_sepeda')
						->get('nota')->result();
	}
	public function add_nota()
{
  
  $arr['tanggal'] = $this->input->post('tanggal');
  $arr['no_antrian'] = $this->input->post('no_antrian');
  $arr['id_bengkel'] = $this->input->post('id_bengkel');
  $arr['jadwal'] = $this->input->post('jadwal');
  $arr['id_unit_sepeda'] = $this->input->post('id_unit_sepeda');
  $arr['id_admin'] = $this->input->post('id_admin');

  $ql_masuk=$this->db->insert('nota', $arr);
  return $ql_masuk;
}

 public function detail_nota($id_nota)
	{
		return $this->db->where('id_nota',$id_nota)->get('nota')->row();
	}
	public function update_nota()
	{
		
		$dt_up_nota=array(
      'tanggal'=>$this->input->post('tanggal_edit'),
      'no_antrian'=>$this->input->post('no_antrian_edit'),
      'id_bengkel'=>$this->input->post('id_bengkel_edit'),
      'jadwal'=> $this->input->post('jadwal_edit')

		);
	return $this->db->where('id_nota',$this->input->post('id_nota'))->update('nota', $dt_up_nota);
	}
	public function hapus_nota($id_nota)
	{
		return $this->db->where('id_nota',$id_nota)->delete('nota');
	}
	
}

