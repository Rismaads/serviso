<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_riwayat_transaksi extends CI_Model {

	public function get_Data_riwayat_transaksi()
	{
        return $this->db->join('bengkel','bengkel.id_bengkel=riwayat_transaksi.id_bengkel')
                         ->join('pelanggan','pelanggan.id_pelanggan=riwayat_transaksi.id_pelanggan')
                         ->get('riwayat_transaksi')->result();
	}
	public function add_riwayat_transaksi()
{
  $arr['id_pelanggan'] = $this->input->post('id_pelanggan');
  $arr['id_bengkel'] = $this->input->post('id_bengkel');
  $arr['kerusakan'] = $this->input->post('kerusakan');

 
  $ql_masuk=$this->db->insert('riwayat_transaksi', $arr);
  return $ql_masuk;
}

 public function detail_riwayat_transaksi($id_riwayat_transaksi)
	{
		return $this->db->where('id_riwayat_transaksi',$id_riwayat_transaksi)->get('riwayat_transaksi')->row();
	}
	public function update_riwayat_transaksi()
	{
		
		$dt_up_riwayat_transaksi=array(
     
      'kerusakan'=> $this->input->post('kerusakan_edit')

		);
	return $this->db->where('id_riwayat_transaksi',$this->input->post('id_riwayat_transaksi'))->update('riwayat_transaksi', $dt_up_riwayat_transaksi);
	}
	public function hapus_riwayat_transaksi($id_riwayat_transaksi)
	{
		return $this->db->where('id_riwayat_transaksi',$id_riwayat_transaksi)->delete('riwayat_transaksi');
	}

}

