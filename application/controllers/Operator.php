<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('M_admin', 'm_admin');
        if ($this->session->userdata('user_level') != "operator") {
            $this->session->sess_destroy();
            redirect(base_url("login"));
        }
    }

    public function index()
    {

        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['a'] = $this->db->query("SELECT * FROM arsip where arsip_kategori='103'")->num_rows();
        $data['b'] = $this->db->query("SELECT * FROM arsip where arsip_kategori='104' ")->num_rows();
        $data['c'] = $this->db->query("SELECT * FROM arsip where arsip_kategori='105'")->num_rows();
        $data['d'] = $this->db->query("SELECT * FROM arsip where arsip_kategori='106'")->num_rows();
        $data['e'] = $this->db->query("SELECT * FROM arsip where arsip_kategori='107'")->num_rows();
        $data['f'] = $this->db->query("SELECT * FROM arsip where arsip_kategori='108'")->num_rows();
        $data['g'] = $this->db->query("SELECT * FROM arsip where arsip_kategori='109'")->num_rows();
        $data['h'] = $this->db->query("SELECT * FROM arsip where arsip_kategori='110'")->num_rows();
        $data['i'] = $this->db->query("SELECT * FROM arsip where arsip_kategori='111'")->num_rows();
        $data['aa'] = $this->db->query("SELECT * FROM arsip where arsip_kategori='101'")->num_rows();
        $data['bb'] = $this->db->query("SELECT * FROM arsip where arsip_kategori='102'")->num_rows();
        $data['cc'] = $this->db->query("SELECT * FROM arsip where arsip_kategori='112'")->num_rows();


        $this->template->load('template_op', 'operator/v_operator', $data);
    }

    public function standar1($sub_arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.1";
        $data['title2'] = "Visi, Misi, Tujuan dan Strategi";
        $data['title3'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
        $ts = $this->input->post('pilihts', TRUE);
        if ($ts == "") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar1', $data);
        } elseif ($ts == "1") {

            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standarts($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar1', $data);
        } elseif ($ts == "2") {

            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standarts1($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar1', $data);
        } elseif ($ts == "3") {

            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standarts2($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar1', $data);
        }
    }

    public function standar2($sub_arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title3'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
        $ts = $this->input->post('pilihts', TRUE);
        if ($ts == "") {
            $data['title1'] = "C.2";
            $data['title2'] = "Tata Pamong, Tata Kelola dan Kerjasama";
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar2($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar2', $data);
        } elseif ($ts == "1") {
            $data['title1'] = "C.2";
            $data['title2'] = "Tata Pamong, Tata Kelola dan Kerjasama";
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar2ts($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar2', $data);
        } elseif ($ts == "2") {
            $data['title1'] = "C.2";
            $data['title2'] = "Tata Pamong, Tata Kelola dan Kerjasama";
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar2ts1($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar2', $data);
        } elseif ($ts == "3") {
            $data['title1'] = "C.2";
            $data['title2'] = "Tata Pamong, Tata Kelola dan Kerjasama";
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar2ts2($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar2', $data);
        }
    }

    public function standar3($sub_arsip_id)
    {
        $data['masuk'] = $this->m_admin->standar3($sub_arsip_id);
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title3'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
        $ts = $this->input->post('pilihts', TRUE);
        if ($ts == "") {
            $data['title1'] = "Standar 3";
            $data['title2'] = "Mahasiswa";
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar3($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar3', $data);
        } elseif ($ts == "1") {
            $data['title1'] = "Standar 3";
            $data['title2'] = "Mahasiswa";
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar3ts($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar3', $data);
        } elseif ($ts == "2") {
            $data['title1'] = "Standar 3";
            $data['title2'] = "Mahasiswa";
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar3ts1($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar3', $data);
        } elseif ($ts == "3") {
            $data['title1'] = "Standar 3";
            $data['title2'] = "Mahasiswa";
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar3ts2($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar3', $data);
        }
    }

    public function standar4($sub_arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "Standar 4";
        $data['title2'] = "Sumber Daya Manusia";
        $data['title3'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();

        $ts = $this->input->post('pilihts', TRUE);
        if ($ts == "") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar4($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar4', $data);
        } elseif ($ts == "1") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar4ts($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar4', $data);
        } elseif ($ts == "2") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar4ts1($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar4', $data);
        } elseif ($ts == "3") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar4ts2($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar4', $data);
        }
    }

    public function standar5($sub_arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "Standar 5";
        $data['title2'] = "Keuangan, Sarana dan Prasarana";
        $data['title3'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();

        $ts = $this->input->post('pilihts', TRUE);
        if ($ts == "") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar5($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar5', $data);
        } elseif ($ts == "1") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar5ts($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar5', $data);
        } elseif ($ts == "2") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar5ts1($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar5', $data);
        } elseif ($ts == "3") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar5ts2($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar5', $data);
        }
    }

    public function standar6($sub_arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "Standar 6";
        $data['title2'] = "Pendidikan";
        $data['title3'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();

        $ts = $this->input->post('pilihts', TRUE);
        if ($ts == "") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar6($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar6', $data);
        } elseif ($ts == "1") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar6ts($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar6', $data);
        } elseif ($ts == "2") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar6ts1($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar6', $data);
        } elseif ($ts == "3") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar6ts2($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar6', $data);
        }
    }

    public function standar7($sub_arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "Standar 7";
        $data['title2'] = "Penelitian";
        $data['title3'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();

        $ts = $this->input->post('pilihts', TRUE);
        if ($ts == "") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar7($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar7', $data);
        } elseif ($ts == "1") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar7ts($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar7', $data);
        } elseif ($ts == "2") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar7ts1($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar7', $data);
        } elseif ($ts == "3") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar7ts2($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar7', $data);
        }
    }

    public function standar8($sub_arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "Standar 8";
        $data['title2'] = "Pengabdian Kepada Masyarakat";
        $data['title3'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();

        $ts = $this->input->post('pilihts', TRUE);
        if ($ts == "") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar8($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar8', $data);
        } elseif ($ts == "1") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar8ts($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar8', $data);
        } elseif ($ts == "2") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar8ts1($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar8', $data);
        } elseif ($ts == "3") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar8ts2($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar8', $data);
        }
    }

    public function standar9($sub_arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "Standar 9";
        $data['title2'] = "Luaran dan Capaian Tridharma";
        $data['title3'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();

        $ts = $this->input->post('pilihts', TRUE);
        if ($ts == "") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar9($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar9', $data);
        } elseif ($ts == "1") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar9ts($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar9', $data);
        } elseif ($ts == "2") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar9ts1($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar9', $data);
        } elseif ($ts == "3") {
            $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
            $data['masuk'] = $this->m_admin->standar9ts2($sub_arsip_id);
            $this->template->load('template_op', 'operator/standar9', $data);
        }
    }

    public function analisa($sub_arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "D.";
        $data['title2'] = "Analisa dan Penetapan Program Pengembangan";
        $data['title3'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();

        $data['ts'] = $this->db->query('SELECT * FROM sub_arsip WHERE sub_arsip_id =' . $sub_arsip_id)->row();
        $ts = $this->input->post('pilihts', TRUE);
        if ($ts == "") {
            $data['masuk'] = $this->m_admin->analisa($sub_arsip_id);
            $this->template->load('template_op', 'operator/analisa', $data);
        } elseif ($ts == "1") {
            $data['masuk'] = $this->m_admin->analisats($sub_arsip_id);
            $this->template->load('template_op', 'operator/analisa', $data);
        } elseif ($ts == "2") {
            $data['masuk'] = $this->m_admin->analisats1($sub_arsip_id);
            $this->template->load('template_op', 'operator/analisa', $data);
        } elseif ($ts == "3") {
            $data['masuk'] = $this->m_admin->analisats2($sub_arsip_id);
            $this->template->load('template_op', 'operator/analisa', $data);
        }
    }

    public function tambah()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['standar'] = $this->m_admin->get_standar();
        $this->template->load('template_op', 'operator/v_tambah_all', $data);
    }

    public function cek()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['standar'] = $this->m_admin->get_standar();
        $this->load->view('operator/cek', $data);
    }

    //request data sub_standar berdasarkan id standar yang di pilih
    function sub_standar()
    {
        $kategori_id = $this->input->post('kat');
        $data = $this->m_admin->get_sub_standar($kategori_id);
        echo json_encode($data);
    }

    public function proses_tambah_file()
    {
        $kategori = $this->input->post('kategori', TRUE);
        $keterangan = $this->input->post('keterangan', TRUE);
        $id_user = $this->session->userdata("user_id");
        $nama = $this->input->post('nama', TRUE);
        $naskah = $this->input->post('naskah', TRUE);
        $tgl = $this->input->post('tgl', TRUE);
        $tahuns = $this->input->post('tahuns', TRUE);
        if ($kategori == 103) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                redirect("admin?alert=gagal");
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->insert('arsip', $data);
                redirect('operator/standar1/' . $keterangan . '/?' . 'alert=berhasil');
            }

            // $this->db->insert('arsip', $dar);
        } elseif ($kategori == 104) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                redirect("admin?alert=gagal");
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->insert('arsip', $data);
                redirect('operator/standar2/' . $keterangan . '?' . 'alert=berhasil');
            }
        } elseif ($kategori == 105) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                redirect("admin?alert=gagal");
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->insert('arsip', $data);
                redirect('operator/standar3/' . $keterangan . '?' . 'alert=berhasil');
            }
        } elseif ($kategori == 106) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                redirect("admin?alert=gagal");
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->insert('arsip', $data);
                redirect('operator/standar4/' . $keterangan . '?' . 'alert=berhasil');
            }
        } elseif ($kategori == 107) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                redirect("admin?alert=gagal");
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->insert('arsip', $data);
                redirect('operator/standar5/' . $keterangan . '?' . 'alert=berhasil');
            }
        } elseif ($kategori == 108) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                redirect("admin?alert=gagal");
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->insert('arsip', $data);
                redirect('operator/standar6/' . $keterangan . '?' . 'alert=berhasil');
            }
        } elseif ($kategori == 109) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                redirect("admin?alert=gagal");
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->insert('arsip', $data);
                redirect('operator/standar7/' . $keterangan . '?' . 'alert=berhasil');
            }
        } elseif ($kategori == 110) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                redirect("admin?alert=gagal");
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->insert('arsip', $data);
                redirect('operator/standar8/' . $keterangan . '?' . 'alert=berhasil');
            }
        } elseif ($kategori == 111) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                redirect("admin?alert=gagal");
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->insert('arsip', $data);
                redirect('operator/standar9/' . $keterangan . '?' . 'alert=berhasil');
            }
        } elseif ($kategori == 112) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                redirect("admin?alert=gagal");
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->insert('arsip', $data);
                redirect('operator/analisa/' . $keterangan . '?' . 'alert=berhasil');
            }
        }
    }
    public function edit($arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.1";
        $data['title2'] = "Visi, Misi, Tujuan dan Strategi";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 103')->result();
        $data['me'] = $this->m_admin->masuk_edit($arsip_id);
        $this->template->load('template_op', 'operator/v_edit', $data);
    }
    public function edit2($arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.2";
        $data['title2'] = "Tata Pamong, Tata Kelola dan Kerjasama";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 104')->result();
        $data['me'] = $this->m_admin->masuk_edit($arsip_id);
        $this->template->load('template_op', 'operator/v_edit', $data);
    }
    public function edit3($arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.3";
        $data['title2'] = "Mahasiswa";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 105')->result();
        $data['me'] = $this->m_admin->masuk_edit($arsip_id);
        $this->template->load('template_op', 'operator/v_edit', $data);
    }
    public function edit4($arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.4";
        $data['title2'] = "Sumber Daya Manusia";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 106')->result();
        $data['me'] = $this->m_admin->masuk_edit($arsip_id);
        $this->template->load('template_op', 'operator/v_edit', $data);
    }
    public function edit5($arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.5";
        $data['title2'] = "Keuangan, Sarana, Dan Prasarana";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 107')->result();
        $data['me'] = $this->m_admin->masuk_edit($arsip_id);
        $this->template->load('template_op', 'operator/v_edit', $data);
    }
    public function edit6($arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.6";
        $data['title2'] = "Pendidikan";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 108')->result();
        $data['me'] = $this->m_admin->masuk_edit($arsip_id);
        $this->template->load('template_op', 'operator/v_edit', $data);
    }
    public function edit7($arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.7";
        $data['title2'] = "Penelitian";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 109')->result();
        $data['me'] = $this->m_admin->masuk_edit($arsip_id);
        $this->template->load('template_op', 'operator/v_edit', $data);
    }
    public function edit8($arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.8";
        $data['title2'] = "Pengabdian Kepada Masyarakat";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 110')->result();
        $data['me'] = $this->m_admin->masuk_edit($arsip_id);
        $this->template->load('template_op', 'operator/v_edit', $data);
    }
    public function edit9($arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.9";
        $data['title2'] = "Luaran dan Capaian Tridharma";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 111')->result();
        $data['me'] = $this->m_admin->masuk_edit($arsip_id);
        $this->template->load('template_op', 'operator/v_edit', $data);
    }
    public function edit_analisa($arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['title1'] = "D.";
        $data['title2'] = "Analisa dan Penetapan Program Pengembangan";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 112')->result();
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['me'] = $this->m_admin->masuk_edit($arsip_id);
        $this->template->load('template_op', 'operator/v_edit', $data);
    }
    public function proses_edit($arsip_id)
    {
        // $user =  $this->input->post('user', true);
        $keterangan = $this->input->post('keterangan', true);
        $kategori = $this->input->post('kategori', TRUE);
        $nama = $this->input->post('nama', TRUE);
        $user = $this->session->userdata("user_id");
        $tgl = $this->input->post('tgl', TRUE);
        $tahuns = $this->input->post('tahuns', TRUE);
        $naskah = $this->input->post('naskah', TRUE);
        $file = $this->input->post('file', true);
        //Standar 1
        if ($kategori == 103) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_naskah_id' => $naskah,
                    'arsip_kategori' => $kategori,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar1/' . $keterangan . '/?' . 'alert=update');
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_naskah_id' => $naskah,
                    'arsip_kategori' => $kategori,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar1/' . $keterangan . '/?' . 'alert=update');
            }
        }
        //standar 2
        elseif ($kategori == 104) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar2/' . $keterangan . '/?' . 'alert=update');
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar2/' . $keterangan . '/?' . 'alert=update');
            }
        }
        //Standar 3
        elseif ($kategori == 105) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar3/' . $keterangan . '/?' . 'alert=update');
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar3/' . $keterangan . '/?' . 'alert=update');
            }
        }
        //Standar 4
        elseif ($kategori == 106) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar4/' . $keterangan . '/?' . 'alert=update');
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar4/' . $keterangan . '/?' . 'alert=update');
            }
        }
        //Standar 5
        elseif ($kategori == 107) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar5/' . $keterangan . '/?' . 'alert=update');
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar5/' . $keterangan . '/?' . 'alert=update');
            }
        }
        //Standar 6
        elseif ($kategori == 108) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar6/' . $keterangan . '/?' . 'alert=update');
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar6/' . $keterangan . '/?' . 'alert=update');
            }
        }
        // Standar 7
        elseif ($kategori == 109) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar7/' . $keterangan . '/?' . 'alert=update');
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar7/' . $keterangan . '/?' . 'alert=update');
            }
        }
        // Standar 8 
        elseif ($kategori == 110) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar8/' . $keterangan . '/?' . 'alert=update');
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar8/' . $keterangan . '/?' . 'alert=update');
            }
        }
        //Standar 9 
        elseif ($kategori == 111) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar9/' . $keterangan . '/?' . 'alert=update');
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/standar9/' . $keterangan . '/?' . 'alert=update');
            }
        }
        //Analisa
        elseif ($kategori == 112) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/analisa/' . $keterangan . '/?' . 'alert=update');
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_sub_arsip' => $keterangan,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/analisa/' . $keterangan . '/?' . 'alert=update');
            }
        }
    }
    public function hapus_standar($arsip_id)
    {
        $where = array('arsip_id' => $arsip_id);
        $this->m_admin->hapus($where, 'arsip');
        redirect('operator/?alert=hapus');
    }

    //SUB_arsip
    public function sub_arsip()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "Menu Pusat Data";
        $data['title2'] = "View Sub Arsip";
        $data['sub_arsip'] = $this->m_admin->subarsip();
        $this->template->load('template_op', 'operator/sub_arsip', $data);
    }
    function tambah_sub_arsip()
    {
        $nama = $this->input->post('nama');
        $kategori = $this->input->post('kategori');

        $data = array(
            'sub_arsip_nama' => $nama,
            'sub_arsip_kategori' => $kategori,
        );
        $this->db->insert('sub_arsip', $data);
        redirect('operator/sub_arsip/?' . 'alert=berhasil');
    }
    function edit_sub_arsip($sub_arsip_id)
    {
        $nama = $this->input->post('nama');
        $kategori = $this->input->post('kategori');

        $data = array(
            'sub_arsip_nama' => $nama,
            'sub_arsip_kategori' => $kategori,
        );
        $this->db->where('sub_arsip_id', $sub_arsip_id);
        $this->db->update('sub_arsip', $data);
        redirect('operator/sub_arsip/?' . 'alert=berhasil');
    }
    function hapus_sub_arsip($sub_arsip_id)
    {
        $where = array('sub_arsip_id' => $sub_arsip_id);
        $this->m_admin->hapus($where, 'sub_arsip');
        redirect('operator/sub_arsip/?' . 'alert=hapus');
    }

    //CONTROLLER USER
    public function user()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['pts'] = $this->db->query("SELECT * FROM pts WHERE pts_id = 1 ")->row();
        $this->template->load('template_op', 'operator/user', $data);
    }
    public function usertambah()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['pts'] = $this->db->query("SELECT * FROM pts WHERE pts_id = 1 ")->row();
        $this->template->load('template_op', 'operator/user_tambah', $data);
    }
    function p_tambah_user()
    {
        if (isset($_FILES["foto"]["name"])) {
            //konfigurasi 
            $config["upload_path"]      = './file/user/';
            $config["allowed_types"]    = 'jpg|jpeg|png|gif|';
            //load library upload
            $this->load->library("upload", $config);
            // lakukan upload
            if (!$this->upload->do_upload("foto")) {
                $user_nama = $this->input->post('nama', TRUE);
                $username = $this->input->post('username', true);
                $password = $this->input->post('password', true);
                $level = $this->input->post('level', true);
                $data_gambar2 = [
                    'user_nama' => $user_nama,
                    'user_password' => md5($password),
                    'user_username' => $username,
                    'user_level' => $level,
                    'user_foto' => 'user.png',
                ];

                // call method simpan gambar
                $this->db->insert('user', $data_gambar2);
                //response ke ajax
                redirect('operator/user/?' . 'alert=berhasil');
            } else {
                $data_gambar = $this->upload->data(); // simpan gambar
                $user_nama = $this->input->post('nama', TRUE);
                $username = $this->input->post('username', true);
                $password = $this->input->post('password', true);
                $level = $this->input->post('level', true);

                // compress image start
                $config['image_library'] = 'gd2';
                $config['source_image']  = './file/user/' . $data_gambar["file_name"];
                $config['create_thumb']  = false;
                $config['maintain_ratio'] = false;
                $config['width']         = 100;
                $config['height']        = 150;
                // $config['new_image']     = './file/user/' . $data_gambar["file_name"];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                // end compress setup

                // data yg akan dusernamempan
                $data_gambar2 = [
                    'user_nama' => $user_nama,
                    'user_username' => $username,
                    'user_password' => md5($password),
                    'user_level' => $level,
                    'user_foto' => $data_gambar["file_name"],
                ];

                // call method simpan gambar
                $this->db->insert('user', $data_gambar2);
                //response ke ajax
                redirect('operator/user/?' . 'alert=berhasil');
            }
        }
    }
    public function hapus_user($user_id)
    {
        $where = array('user_id' => $user_id);
        $this->m_admin->hapus($where, 'user');
        redirect('operator/user/?' . 'alert=hapus');
    }
    public function user_edit($user_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['us'] = $this->m_admin->ambiliduser($user_id);
        $data['pts'] = $this->db->query("SELECT * FROM pts WHERE pts_id = 1 ")->row();
        $this->template->load('template_op', 'operator/user_edit', $data);
    }

    function p_edit_user($user_id)
    {
        if (isset($_FILES["foto"]["name"])) {
            //konfigurasi 
            $config["upload_path"]      = './file/user/';
            $config["allowed_types"]    = 'jpg|jpeg|png|gif|';
            $password = $this->input->post('password', true);
            //load library upload
            $this->load->library("upload", $config);
            // lakukan upload
            if (!$this->upload->do_upload("foto")) {
                if ($password == "") {
                    $user_nama = $this->input->post('nama', TRUE);
                    $username = $this->input->post('username', true);
                    $level = $this->input->post('level', true);
                    $data_gambar2 = [
                        'user_nama' => $user_nama,
                        'user_username' => $username,
                        'user_level' => $level,
                    ];
                    $this->db->where('user_id', $user_id);
                    $this->db->update('user', $data_gambar2);
                    //response ke ajax
                    redirect('operator/user/?' . 'alert=berhasil');
                } else {
                    $user_nama = $this->input->post('nama', TRUE);
                    $username = $this->input->post('username', true);
                    $level = $this->input->post('level', true);
                    $data_gambar2 = [
                        'user_nama' => $user_nama,
                        'user_username' => $username,
                        'user_password' => md5($password),
                        'user_level' => $level,
                    ];
                    $this->db->where('user_id', $user_id);
                    $this->db->update('user', $data_gambar2);
                    //response ke ajax
                    redirect('operator/user/?' . 'alert=berhasil');
                }


                // call method simpan gambar


            } else {
                $password = $this->input->post('password', true);
                if ($password == "") {
                    $data_gambar = $this->upload->data(); // simpan gambar
                    $user_nama = $this->input->post('nama', TRUE);
                    $username = $this->input->post('username', true);

                    $level = $this->input->post('level', true);

                    // compress image start
                    $config['image_library'] = 'gd2';
                    $config['source_image']  = './file/user/' . $data_gambar["file_name"];
                    $config['create_thumb']  = false;
                    $config['maintain_ratio'] = false;
                    $config['width']         = 100;
                    $config['height']        = 150;
                    // $config['new_image']     = './file/user/' . $data_gambar["file_name"];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    // end compress setup

                    // data yg akan dusernamempan
                    $data_gambar2 = [
                        'user_nama' => $user_nama,
                        'user_username' => $username,

                        'user_level' => $level,
                        'user_foto' => $data_gambar["file_name"],
                    ];

                    // call method simpan gambar
                    $this->db->where('user_id', $user_id);
                    $this->db->update('user', $data_gambar2);
                    //response ke ajax
                    redirect('operator/user/?' . 'alert=berhasil');
                } else {
                    $data_gambar = $this->upload->data(); // simpan gambar
                    $user_nama = $this->input->post('nama', TRUE);
                    $username = $this->input->post('username', true);

                    $level = $this->input->post('level', true);

                    // compress image start
                    $config['image_library'] = 'gd2';
                    $config['source_image']  = './file/user/' . $data_gambar["file_name"];
                    $config['create_thumb']  = false;
                    $config['maintain_ratio'] = false;
                    $config['width']         = 100;
                    $config['height']        = 150;
                    // $config['new_image']     = './file/user/' . $data_gambar["file_name"];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    // end compress setup

                    // data yg akan dusernamempan
                    $data_gambar2 = [
                        'user_nama' => $user_nama,
                        'user_username' => $username,
                        'user_password' => md5($password),
                        'user_level' => $level,
                        'user_foto' => $data_gambar["file_name"],
                    ];

                    // call method simpan gambar
                    $this->db->where('user_id', $user_id);
                    $this->db->update('user', $data_gambar2);
                    //response ke ajax
                    redirect('operator/user/?' . 'alert=berhasil');
                }
            }
        }
    }
    function pass()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $this->template->load('template_op', 'operator/ganti_password', $data);
    }

    function update()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1);
        $id_user = $this->session->userdata("user_id");

        $user_password = $this->input->post('password');

        $data1 = array(
            'user_password' => md5($user_password)
        );

        $user_id = array(
            'user_id' => $id_user
        );

        $this->m_admin->update_data($user_id, $data1, 'user');
        redirect('operator/pass/?' . 'alert=sukses');
    }
    public function all()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $this->template->load('template_op', 'operator/v_tambah_all', $data);
    }
    public function tambah_file()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.1";
        $data['title2'] = "Visi, Misi, Tujuan dan Strategi";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 103')->result();
        $data['kon'] = $this->db->query('SELECT *FROM kategori WHERE kategori_id = 103')->row();
        $this->template->load('template_op', 'operator/v_tambah', $data);
    }
    public function tambah_file2()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.2";
        $data['title2'] = "Tata Pamong, Tata Kelola dan Kerjasama";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 104')->result();
        $data['kon'] = $this->db->query('SELECT *FROM kategori WHERE kategori_id = 104')->row();
        $this->template->load('template_op', 'operator/v_tambah', $data);
    }
    public function tambah_file3()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.3";
        $data['title2'] = "Mahasiswa";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 105')->result();
        $data['kon'] = $this->db->query('SELECT *FROM kategori WHERE kategori_id = 105')->row();
        $this->template->load('template_op', 'operator/v_tambah', $data);
    }
    public function tambah_file4()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.4";
        $data['title2'] = "Sumber Daya Manusia";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 106')->result();
        $data['kon'] = $this->db->query('SELECT *FROM kategori WHERE kategori_id = 106')->row();
        $this->template->load('template_op', 'operator/v_tambah', $data);
    }
    public function tambah_file5()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.5";
        $data['title2'] = "Keuangan, Sarana, Dan Prasarana";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 107')->result();
        $data['kon'] = $this->db->query('SELECT *FROM kategori WHERE kategori_id = 107')->row();
        $this->template->load('template_op', 'operator/v_tambah', $data);
    }
    public function tambah_file6()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.6";
        $data['title2'] = "Pendidikan";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 108')->result();
        $data['kon'] = $this->db->query('SELECT *FROM kategori WHERE kategori_id = 108')->row();
        $this->template->load('template_op', 'operator/v_tambah', $data);
    }
    public function tambah_file7()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.7";
        $data['title2'] = "Penelitian";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 109')->result();
        $data['kon'] = $this->db->query('SELECT *FROM kategori WHERE kategori_id = 109')->row();
        $this->template->load('template_op', 'operator/v_tambah', $data);
    }
    public function tambah_file8()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.8";
        $data['title2'] = "Pengabdian Kepada Masyarakat";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 110')->result();
        $data['kon'] = $this->db->query('SELECT *FROM kategori WHERE kategori_id = 110')->row();
        $this->template->load('template_op', 'operator/v_tambah', $data);
    }
    public function tambah_file9()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "C.9";
        $data['title2'] = "Luaran dan Capaian Tridharma";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 111')->result();
        $data['kon'] = $this->db->query('SELECT *FROM kategori WHERE kategori_id = 111')->row();
        $this->template->load('template_op', 'operator/v_tambah', $data);
    }
    public function tambah_analisa()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['title1'] = "D.";
        $data['title2'] = "Analisa dan Penetapan Program Pengembangan";
        $data['skon'] = $this->db->query('SELECT *FROM sub_arsip WHERE sub_arsip_kategori = 112')->result();
        $data['kon'] = $this->db->query('SELECT *FROM kategori WHERE kategori_id = 112')->row();
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $this->template->load('template_op', 'operator/v_tambah', $data);
    }
    public function kondisi_eksternal()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "Kondisi Eksternal";
        $data['masuk'] = $this->m_admin->koneks();
        $this->template->load('template_op', 'operator/kon_eks', $data);
    }

    function tambah_file_kondisi()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "Tambah Kondisi Eksternal";
        $data['kon'] = $this->db->query('SELECT *FROM kategori WHERE kategori_id = 101')->row();
        $this->template->load('template_op', 'operator/v_tambah_kon', $data);
    }
    function proses_tambah_file_kondisi()
    {
        $kategori = $this->input->post('kategori', TRUE);
        $naskah = $this->input->post('naskah', TRUE);
        $id_user = $this->session->userdata("user_id");
        $nama = $this->input->post('nama', TRUE);
        $tgl = $this->input->post('tgl', TRUE);
        $tahuns = $this->input->post('tahuns', TRUE);
        if ($kategori == 101) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                redirect("admin?alert=gagal");
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->insert('arsip', $data);
                redirect('operator/kondisi_eksternal/?' . 'alert=berhasil');
            }
        } elseif ($kategori == 102) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                redirect("admin?alert=gagal");
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->insert('arsip', $data);
                redirect('operator/instansi/?' . 'alert=berhasil');
            }
        }
    }
    public function edit_kondisi($arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "Edit Kondisi Eksternal";
        $data['me'] = $this->m_admin->masuk_edit_kon($arsip_id);
        $this->template->load('template_op', 'operator/edit_kondisi', $data);
    }
    function proses_edit_file_kondisi($arsip_id)
    {
        $kategori = $this->input->post('kategori', TRUE);
        $naskah = $this->input->post('naskah', TRUE);
        $id_user = $this->session->userdata("user_id");
        $nama = $this->input->post('nama', TRUE);
        $tgl = $this->input->post('tgl', TRUE);
        $tahuns = $this->input->post('tahuns', TRUE);
        if ($kategori == 101) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/kondisi_eksternal/?' . 'alert=update');
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/kondisi_eksternal/?' . 'alert=update');
            }
        } elseif ($kategori == 102) {
            $config['upload_path']          = './file/arsip';
            $config['allowed_types']        = 'PDF|pdf';
            $config['max_size']             = 11000;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/instansi/?' . 'alert=update');
            } else {
                $data_gambar = $this->upload->data();
                $data = [
                    'arsip_waktu_upload' => $tgl,
                    'arsip_nama' => $nama,
                    'arsip_user' => $id_user,
                    'arsip_kategori' => $kategori,
                    'arsip_naskah_id' => $naskah,
                    'arsip_ts' => $tahuns,
                    'arsip_file' => $data_gambar["file_name"],
                ];
                $this->db->where('arsip_id', $arsip_id);
                $this->db->update('arsip', $data);
                redirect('operator/instansi/?' . 'alert=update');
            }
        }
    }
    public function instansi()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "Profil Institusi";
        $data['masuk'] = $this->m_admin->koneks1();
        $this->template->load('template_op', 'operator/v_instansi', $data);
    }

    function tambah_file_instansi()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "Tambah Intansi";
        $data['kon'] = $this->db->query('SELECT *FROM kategori WHERE kategori_id = 102')->row();
        $this->template->load('template_op', 'operator/v_tambah_kon', $data);
    }

    public function edit_instansi($arsip_id)
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['me'] = $this->m_admin->masuk_edit_kon($arsip_id);
        $this->template->load('template_op', 'operator/edit_kondisi', $data);
    }

    function viewpdf($id)
    {
        $data['arsip'] = $this->db->query("SELECT * FROM arsip where arsip_id = $id")->row();
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "View PDF";
        $this->template->load('template_op', 'operator/v_pdf', $data);
    }
    function kategori()
    {
        $where1 = array('user_id' => $this->session->userdata("user_id"));
        $data['user'] = $this->m_admin->cek_login('user', $where1)->result();
        $data['title1'] = "Menu Pusat Data";
        $data['title2'] = "View Kategori";
        $data['kategori'] = $this->m_admin->naskah();
        $this->template->load('template_op', 'operator/kategori', $data);
    }
    function tambah_kategori()
    {
        $nama = $this->input->post('nama');

        $data = array(
            'naskah_nama' => $nama,
        );
        $this->db->insert('naskah', $data);
        redirect('operator/kategori/?' . 'alert=berhasil');
    }
    function edit_kategori($sub_arsip_id)
    {
        $nama = $this->input->post('nama');

        $data = array(
            'naskah_nama' => $nama,
        );
        $this->db->where('naskah_id', $sub_arsip_id);
        $this->db->update('naskah', $data);
        redirect('operator/kategori/?' . 'alert=berhasil');
    }
    function hapus_kategori($sub_arsip_id)
    {
        $where = array('naskah_id' => $sub_arsip_id);
        $this->m_admin->hapus($where, 'naskah');
        redirect('operator/kategori/?' . 'alert=hapus');
    }
}
