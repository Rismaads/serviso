<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class level_m extends CI_Model {


	public function get_level()
	{
	   $arr= $this->db->get('level')->result();
	   return $arr;
	}

	public function add_level()
{
  $arr['nama_level'] = $this->input->post('nama_level');
  
 
  $ql_masuk=$this->db->insert('level', $arr);
  return $ql_masuk;
}

public function detail_level($id_level)
	{
		return $this->db->where('id_level',$id_level)->get('level')->row();
	}
	public function update_level()
	{
		
		$dt_up_level=array(
      'nama_level'=>$this->input->post('nama_level_edit'),
    
		);
	return $this->db->where('id_level',$this->input->post('id_level'))->update('level', $dt_up_level);
	}
	public function hapus_level($id_level)
	{
		return $this->db->where('id_level',$id_level)->delete('level');
	}

}