<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan_m extends CI_Model {


	public function get_pelanggan()
	{
	   $arr= $this->db->get('pelanggan')->result();
	   return $arr;
	}

	public function add_pelanggan()
{
  $arr['nama_lengkap'] = $this->input->post('nama_lengkap');
  $arr['nomer_hp'] = $this->input->post('nomer_hp');
  $arr['email'] = $this->input->post('email');
  $arr['alamat'] = $this->input->post('alamat');
 
  $ql_masuk=$this->db->insert('pelanggan', $arr);
  return $ql_masuk;
}

public function detail_pelanggan($id_pelanggan)
	{
		return $this->db->where('id_pelanggan',$id_pelanggan)->get('pelanggan')->row();
	}
	public function update_pelanggan()
	{
		
		$dt_up_pelanggan=array(
      'nama_lengkap'=>$this->input->post('nama_lengkap_edit'),
      'nomer_hp'=>$this->input->post('nomer_hp_edit'),
      'email'=>$this->input->post('email_edit'),
      'alamat'=>$this->input->post('alamat_edit'),
		);
	return $this->db->where('id_pelanggan',$this->input->post('id_pelanggan'))->update('pelanggan', $dt_up_pelanggan);
	}
	public function hapus_pelanggan($id_pelanggan)
	{
		return $this->db->where('id_pelanggan',$id_pelanggan)->delete('pelanggan');
	}

}
