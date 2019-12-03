<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemesanan extends CI_Model {
    public function get_unit_nota()
    {
        return $this->db->join('nota','nota.id_bengkel = unit_sepeda.id_bengkel')
                        ->join('jadwal','jadwal.id_jadwal = unit_sepeda.id_jadwal')
                        ->where('nota.nama_pelanggan', $this->session->userdata('username'))
                        ->get('unit_sepeda')->row();
    }
}
