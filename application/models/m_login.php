<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model {

	public function cek_user()
	{
		$login_user = $this->db
						->where('username', $this->input->post('username'))
						->where('password', $this->input->post('password'))
						->get('admin');
	
	if ($this->db->affected_rows()>0){
		$data=$login_user->row();
		$array = array('id_admin' => $data->id_admin,
											'username' => $data->username,
											'password' => $data->password,
											'nama_level' => $data->nama_level,
											'login_user' => true
											);
		$this->session->set_userdata($array);
		return true;
	}
	else{
		return false;
	}
  
  }

}