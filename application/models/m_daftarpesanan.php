<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_daftarpesanan extends CI_Model {
    public function get_unit_nota()
    {
        return $this->db->join('nota','nota.id_bengkel = unit_sepeda.id_bengkel')
                        ->join('jadwal','jadwal.id_jadwal = unit_sepeda.id_jadwal')
                        ->get('unit_sepeda')->result();
    }
    public function get_unit_nota_byId($id_nota)
    {
        return $this->db->where('id_nota',$id_nota)
                        ->join('nota','nota.id_bengkel = unit_sepeda.id_bengkel')
                        ->join('jadwal','jadwal.id_jadwal = unit_sepeda.id_jadwal')
                        ->get('unit_sepeda')->row();
    }
}
