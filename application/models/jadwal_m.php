<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jadwal_m extends CI_Model {


	public function get_jadwal()
	{
       $arr= $this->db->join('bengkel','bengkel.id_bengkel=jadwal.id_bengkel')
                        ->get('jadwal')->result();
                        return $arr;
    }
    
    
	public function add_jadwal()
    {
      $arr['jadwal_mulai'] = $this->input->post('jadwal_mulai');
      $arr['jadwal_selesai'] = $this->input->post('jadwal_selesai');
      $arr['status'] = $this->input->post('status');
      $arr['id_bengkel'] = $this->input->post('id_bengkel');
     
     
      $ql_masuk=$this->db->insert('jadwal', $arr);
      return $ql_masuk;
    }

    public function detail_jadwal($id_jadwal)
    {
        return $this->db->where('id_jadwal', $id_jadwal)->get('jadwal')->row();
        
    }

    public function update_jadwal()
	{
		
		$dt_up_jadwal=array(
      'jadwal_mulai'=>$this->input->post('jadwal_mulai_edit'),
      'jadwal_selesai'=>$this->input->post('jadwal_selesai_edit'),
      'status'=>$this->input->post('status_edit'),
      'id_bengkel'=>$this->input->post('id_bengkel_edit'),
     
		);
	return $this->db->where('id_jadwal',$this->input->post('id_jadwal'))->update('jadwal', $dt_up_jadwal);
  }
  
    public function hapus_jadwal($id_jadwal)
	{
		return $this->db->where('id_jadwal',$id_jadwal)->delete('jadwal');
	}

}