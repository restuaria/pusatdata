<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdfview extends CI_Controller
{
    function getstandar($searchTerm = "")
    {
        $this->db->select('kategori_id, kategori_nama');
        $this->db->where("nama like '%" . $searchTerm . "%' ");
        $this->db->order_by('id_prov', 'asc');
        $fetched_records = $this->db->get('provinsi');
        $dataprov = $fetched_records->result_array();

        $data = array();
        foreach ($dataprov as $prov) {
            $data[] = array("id" => $prov['id_prov'], "text" => $prov['nama']);
        }
        return $data;
    }

    function getsub($id_prov, $searchTerm = "")
    {
        $this->db->select('id_kab, nama');
        $this->db->where('id_prov', $id_prov);
        $this->db->where("nama like '%" . $searchTerm . "%' ");
        $this->db->order_by('id_kab', 'asc');
        $fetched_records = $this->db->get('kabupaten');
        $datakab = $fetched_records->result_array();

        $data = array();
        foreach ($datakab as $kab) {
            $data[] = array("id" => $kab['id_kab'], "text" => $kab['nama']);
        }
        return $data;
    }
}
