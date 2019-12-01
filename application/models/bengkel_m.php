<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bengkel_m extends CI_Model {


	public function get_bengkel()
	{
	   $arr= $this->db->get('bengkel')->result();
	   return $arr;
	}
	public function get_bengkel_by_id($id_bengkel){
		return $this->db->where('id_bengkel', $id_bengkel)->get('bengkel')->result();
			
	}

	public function add_bengkel($foto)
{
			$arr['nama_bengkel'] = $this->input->post('nama_bengkel');
			$arr['stok'] = $this->input->post('stok');
			$arr['deskripsi'] = $this->input->post('deskripsi');
			$arr['alamat'] = $this->input->post('alamat');
			$arr['jadwal'] = $this->input->post('jadwal');
			$arr['jam_tutup'] = $this->input->post('jam_tutup');
			$arr['maps'] = $this->input->post('maps');
			$arr['foto'] = $foto['file_name'];

  $ql_masuk=$this->db->insert('bengkel', $arr);
  return $ql_masuk;
}

public function detail_bengkel($id_bengkel)
	{
		return $this->db->where('id_bengkel',$id_bengkel)->get('bengkel')->row();
	}
	public function update_bengkel()
	{
		
		if ($_FILES['ubah_foto']['name']!="") 
		{
			$config['upload_path'] = './assets/cover_bengkel/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']  = '100000000000000';
			$config['max_width']  = '10240000000000000000';
			$config['max_height']  = '768000000000000000';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
			}
			else
			{
				$dt_up_bengkel=array(
					'nama_bengkel' 	=> $this->input->post('ubah_nama_bengkel'),
					'stok' 		=> $this->input->post('ubah_stok'),
					'deskripsi'			=> $this->input->post('ubah_deskripsi'),
					'alamat'		=> $this->input->post('ubah_alamat'),
					'jadwal'		=> $this->input->post('ubah_jadwal'),
					'jam_tutup'		=> $this->input->post('ubah_jam_tutup'),
					'maps'		=> $this->input->post('ubah_maps'),
					'foto' => $this->upload->data('file_name')
		
				);
				return $this->db->where('id_bengkel',$this->input->post('id_bengkel'))->update('bengkel', $dt_up_bengkel);
			}	
		} 
		else 
		{
			$dt_up_bengkel=array(
				'nama_bengkel' 	=> $this->input->post('ubah_nama_bengkel'),
				'stok' 			=> $this->input->post('ubah_stok'),
				'deskripsi'		=> $this->input->post('ubah_deskripsi'),
				'alamat'		=> $this->input->post('ubah_alamat'),
				'jadwal'		=> $this->input->post('ubah_jadwal'),
				'jam_tutup'		=> $this->input->post('ubah_jam_tutup'),
				'maps'			=> $this->input->post('ubah_maps'),
	
			);
			return $this->db->where('id_bengkel',$this->input->post('id_bengkel'))->update('bengkel', $dt_up_bengkel);
		}
		
	}
	public function hapus_bengkel($id_bengkel)
	{
		return $this->db->where('id_bengkel',$id_bengkel)->delete('bengkel');
	}
	public function tampil_jadwal()
	{
		return $this->db->get('jadwal')->result();
	}

}