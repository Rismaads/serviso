<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_riwayat_transaksi extends CI_Model {

	public function get_Data_nota()
	{
        return $this->db->join('bengkel','bengkel.id_bengkel=nota.id_bengkel')
                         ->join('unit_sepeda','unit_sepeda.id_unit_sepeda=nota.id_unit_sepeda')
                         ->get('nota')->result();
	}
	public function add_nota()
{
  $arr['id_unit_sepeda'] = $this->input->post('id_unit_sepeda');
  $arr['id_bengkel'] = $this->input->post('id_bengkel');
  $arr['keterangan'] = $this->input->post('keterangan');

 
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
     
      'kerusakan'=> $this->input->post('kerusakan_edit')

		);
	return $this->db->where('id_nota',$this->input->post('id_nota'))->update('nota', $dt_up_nota);
	}
	public function hapus_nota($id_nota)
	{
		return $this->db->where('id_nota',$id_nota)->delete('nota');
	}

}

