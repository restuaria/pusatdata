<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('M_admin', 'm_admin');
    }

    public function index()
    {
        $data['kate'] = $this->db->query("SELECT * FROM kategori order by kategori_id asc")->result();
        $this->template->load('template_guest', 'guest/v_admin', $data);
    }

    function open($id)
    {
        $data['kategori'] = $this->db->query("SELECT * FROM kategori where kategori_id = $id")->row();
        $data['naskah'] = $this->db->query("SELECT * FROM naskah order by naskah_id asc")->result();
        $this->template->load('template_guest', 'guest/v_open', $data);
    }
    function opentoopen($id_kategori, $id_naskah)
    {
        $data['file'] = $this->m_admin->ambilarsip($id_kategori, $id_naskah);
        $data['kategori'] = $this->db->query("SELECT * FROM kategori where kategori_id = $id_kategori")->row();
        $data['naskah'] = $this->db->query("SELECT * FROM naskah where naskah_id = $id_naskah")->row();
        $this->template->load('template_guest', 'guest/v_open2', $data);
    }

    function viewpdf($id)
    {
        $arsip = $this->db->query("SELECT * FROM arsip where arsip_id = $id")->row();
        $kate = $arsip->arsip_kategori;
        $nas = $arsip->arsip_naskah_id;
        $data['kategori'] = $this->db->query("SELECT * FROM kategori where kategori_id = $kate")->row();
        $data['naskah'] = $this->db->query("SELECT * FROM naskah where naskah_id = $nas")->row();
        $data['arsip'] = $this->db->query("SELECT * FROM arsip where arsip_id = $id")->row();
        $data['file'] = $this->db->query("SELECT * FROM arsip ORDER BY arsip_waktu_upload ASC LIMIT 5")->result();
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $this->template->load('template_guest', 'guest/v_pdf', $data);
    }
    function viewpdf2($id)
    {
        $arsip = $this->db->query("SELECT * FROM arsip where arsip_id = $id")->row();
        $kate = $arsip->arsip_kategori;
        $nas = $arsip->arsip_naskah_id;
        $data['kategori'] = $this->db->query("SELECT * FROM kategori where kategori_id = $kate")->row();
        $data['naskah'] = $this->db->query("SELECT * FROM naskah where naskah_id = $nas")->row();
        $data['arsip'] = $this->db->query("SELECT * FROM arsip where arsip_id = $id")->row();
        $data['file'] = $this->db->query("SELECT * FROM arsip ORDER BY arsip_waktu_upload ASC LIMIT 5")->result();
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $this->template->load('template_guest', 'guest/v_pdf2', $data);
    }
    function insearch()
    {
        $ini = $this->input->post('insearch');
        $data['hasil'] = $this->m_admin->insearch($ini);
        $this->template->load('template_guest', 'guest/v_cari', $data);
    }
    function insearchkate($id_kategori)
    {
        $data['kategori'] = $this->db->query("SELECT * FROM kategori where kategori_id = $id_kategori")->row();
        $ini = $this->input->post('insearch');
        $data['hasil'] = $this->m_admin->insearchkate($ini, $id_kategori);
        $this->template->load('template_guest', 'guest/v_cari2', $data);
    }
}
