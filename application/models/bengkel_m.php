<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bengkel_m extends CI_Model {


	public function get_bengkel()
	{
	   $arr= $this->db->get('bengkel')->result();
	   return $arr;
	}

	public function add_bengkel()
{
  $arr['nama_bengkel'] = $this->input->post('nama_bengkel');
  $arr['deskripsi'] = $this->input->post('deskripsi');
  $arr['alamat'] = $this->input->post('alamat');
  $arr['jadwal'] = $this->input->post('jadwal');
  $arr['jam_tutup'] = $this->input->post('jam_tutup');

  $ql_masuk=$this->db->insert('bengkel', $arr);
  return $ql_masuk;
}

public function detail_bengkel($id_bengkel)
	{
		return $this->db->where('id_bengkel',$id_bengkel)->get('bengkel')->row();
	}
	public function update_bengkel()
	{
		
		$dt_up_bengkel=array(
      'nama_bengkel'=>$this->input->post('nama_bengkel_edit'),
      'deskripsi'=>$this->input->post('deskripsi_edit'),
      'alamat'=>$this->input->post('alamat_edit'),
	  'jadwal'=>$this->input->post('jadwal_edit'),
	  'jam_tutup'=>$this->input->post('jam_tutup_edit'),
		);
	return $this->db->where('id_bengkel',$this->input->post('id_bengkel'))->update('bengkel', $dt_up_bengkel);
	}
	public function hapus_bengkel($id_bengkel)
	{
		return $this->db->where('id_bengkel',$id_bengkel)->delete('bengkel');
	}

}