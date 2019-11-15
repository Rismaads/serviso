<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sepeda_m extends CI_Model {


	public function get_sepeda()
	{
	   $arr= $this->db->get('unit_sepeda')->result();
	   return $arr;
    }
    
    
	public function add_sepeda()
    {
      $arr['id_pelanggan'] = $this->input->post('id_pelanggan');
      $arr['no_polisi'] = $this->input->post('no_polisi');
      $arr['jenis_sepeda'] = $this->input->post('jenis_sepeda');
      $arr['merk_sepeda'] = $this->input->post('merk_sepeda');
      $arr['kerusakan'] = $this->input->post('kerusakan');
     
      $ql_masuk=$this->db->insert('unit_sepeda', $arr);
      return $ql_masuk;
    }

    public function hapus_sepeda($id_unit_sepeda)
	{
		return $this->db->where('id_unit_sepeda',$id_unit_sepeda)->delete('unit_sepeda');
	}

}