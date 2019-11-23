<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_register extends CI_Model {

    public function masuk_db(){
		$data = array(
			'nama_admin' => $this->input->post('nama_admin'),
            'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'id_level' => 1
         );
		$ql_masuk=$this->db->insert('admin', $data);
		return $ql_masuk;
	}
}
