<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model {

	public function cek_user()
	{
		$passwod = $this->input->post('password');
		$user = $this->db->get_where('admin', ['username' => $this->input->post('username')])->row_array();
		if (password_verify($passwod,$user['password'])) {
			$array = array('id_admin' => $user['id_admin'],
											'username' => $user['username'],
											'password' => $user['password'],
											'id_level' => $user['id_level'],
											'login_user' => true
											);
			$this->session->set_userdata($array);
			return true;
		} 
		else 
		{
			return false;
		}
  
  }

}