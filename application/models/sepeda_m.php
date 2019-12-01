<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sepeda_m extends CI_Model {


	public function get_sepeda()
	{
     $arr= $this->db->join('jadwal','jadwal.id_jadwal=unit_sepeda.id_jadwal')
     ->get('unit_sepeda')->result();
	   return $arr;
    }
    
    
	public function add_sepeda()
    {
      $arr['nama_pelanggan'] = $this->input->post('nama_pelanggan');
      $arr['no_hp'] = $this->input->post('no_hp');
      $arr['alamat'] = $this->input->post('alamat');
      $arr['no_polisi'] = $this->input->post('no_polisi');
      $arr['jenis_sepeda'] = $this->input->post('jenis_sepeda');
      $arr['merk_sepeda'] = $this->input->post('merk_sepeda');
      $arr['kerusakan'] = $this->input->post('kerusakan');
      $arr['id_jadwal'] = $this->input->post('id_jadwal');
     
      $ql_masuk=$this->db->insert('unit_sepeda', $arr);
      return $ql_masuk;
    }

    public function detail_sepeda($id_unit_sepeda)
    {
        return $this->db->where('id_unit_sepeda', $id_unit_sepeda)->get('unit_sepeda')->row();
        
    }

    public function update_sepeda()
	{
		
		$dt_up_sepeda=array(
      'nama_pelanggan'=>$this->input->post('nama_pelanggan_edit'),
      'no_hp'=>$this->input->post('no_hp_edit'),
      'alamat'=>$this->input->post('alamat_edit'),
      'no_polisi'=>$this->input->post('no_polisi_edit'),
      'jenis_sepeda'=>$this->input->post('jenis_sepeda_edit'),
      'merk_sepeda'=>$this->input->post('merk_sepeda_edit'),
      'kerusakan'=>$this->input->post('kerusakan_edit'),
      'id_jadwal'=>$this->input->post('id_jadwal_edit'),
		);
	return $this->db->where('id_unit_sepeda',$this->input->post('id_unit_sepeda'))->update('unit_sepeda', $dt_up_sepeda);
  }
  
    public function hapus_sepeda($id_unit_sepeda)
	{
		return $this->db->where('id_unit_sepeda',$id_unit_sepeda)->delete('unit_sepeda');
	}

}