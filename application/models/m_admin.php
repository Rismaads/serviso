<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_admin extends CI_Model {

	public function get_Data_admin()
	{
		return $this->db->join('level','level.id_level=admin.id_level')->get('admin')->result();
	}
	public function add_admin()
{
  $arr['nama_admin'] = $this->input->post('nama_admin');
  $arr['username'] = $this->input->post('username');
  $arr['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
  $arr['id_level'] = $this->input->post('id_level');
 
  $ql_masuk=$this->db->insert('admin', $arr);
  return $ql_masuk;
}

 public function detail_admin($id_admin)
	{
		return $this->db->where('id_admin',$id_pelanggan)->get('admin')->row();
	}
	public function update_admin()
	{
		
		$dt_up_pelanggan=array(
      'nama_admin'=>$this->input->post('nama_admin_edit'),
      'username'=>$this->input->post('username_edit'),
      'password'=> $this->input->post('password_edit')
      
		);
	return $this->db->where('id_admin',$this->input->post('id_admin'))->update('admin', $dt_up_admin);
	}
	public function hapus_admin($id_admin)
	{
		return $this->db->where('id_admin',$id_admin)->delete('admin');
	}
	public function get_level()
	{
		return $this->db->get('level')->result();
		
	}
}

