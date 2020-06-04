<?php
class Kompetisi_model extends CI_Model
{


    public function getKomById($id_kompetisi)
    {
        return $this->db->get_where('kompetisi', ['id_kompetisi' => $id_kompetisi])->row_array();
    }
}
