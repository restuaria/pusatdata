<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    //Login
    public function __construct()
    {
        parent::__construct();
    }

    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data1, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data1);
    }
    function ts($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('sub_arsip');
        $this->db->where('sub_arsip_id', $sub_arsip_id);
        $query = $this->db->get();
        return $query->row();
    }
    //Standar 1
    function standar($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 103);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standarts($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 103);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standarts1($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 103);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standarts2($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 103);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //Standar 2
    function standar2($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 104);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar2ts($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 104);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar2ts1($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 104);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar2ts2($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 104);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //Standar 3
    function standar3($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 105);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar3ts($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 105);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar3ts1($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 105);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar3ts2($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 105);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //Standar 4
    function standar4($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 106);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar4ts($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 106);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar4ts1($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 106);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar4ts2($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 106);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //Standar 5
    function standar5($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 107);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar5ts($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 107);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar5ts1($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 107);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar5ts2($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 107);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //Standar 6
    function standar6($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 108);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar6ts($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 108);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar6ts1($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 108);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar6ts2($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 108);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //Standar 7
    function standar7($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 109);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar7ts($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 109);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar7ts1($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 109);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar7ts2($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 109);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //Standar 8
    function standar8($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 110);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar8ts($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 110);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar8ts1($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 110);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar8ts2($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 110);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //Standar 9
    function standar9($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 111);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar9ts($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 111);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar9ts1($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 111);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar9ts2($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 111);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //Analisa 
    function analisa($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 112);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function analisats($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 112);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function analisats1($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 112);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function analisats2($sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 111);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }


    //OPERATOR 1
    function standar1_op($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 103);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar1_opts($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 103);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar1_opts1($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 103);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar1_opts2($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 103);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //OPERATOR 2
    function standar2_op($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 104);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar2_opts($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 104);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar2_opts1($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 104);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar2_opts2($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 104);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //OPERATOR 3
    function standar3_op($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 105);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar3_opts($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 105);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar3_opts1($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 105);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar3_opts2($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 105);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //OPERATOR 4
    function standar4_op($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 106);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar4_opts($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 106);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar4_opts1($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 106);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar4_opts2($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 106);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //OPERATOR 5
    function standar5_op($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 107);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar5_opts($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 107);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar5_opts1($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 107);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar5_opts2($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 107);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    //OPERATOR 6
    function standar6_op($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 108);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar6_opts($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 107);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar6_opts1($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 107);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar6_opts2($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 107);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //OPERTAOR 7
    function standar7_op($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 109);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar7_opts($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 109);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar7_opts1($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 109);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar7_opts2($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 109);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //OPERATOR 8
    function standar8_op($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 110);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar8_opts($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 110);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar8_opts1($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 110);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar8_opts2($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 110);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //OPERATOR 9
    function standar9_op($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 111);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar9_opts($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 111);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar9_opts1($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 111);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-1');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function standar9_opts2($id_user, $sub_arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id = arsip.arsip_sub_arsip');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 111);
        $this->db->where('arsip_sub_arsip', $sub_arsip_id);
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_ts', 'ts-2');
        $this->db->order_by('arsip_waktu_upload', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function masuk_edit($arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('sub_arsip', 'sub_arsip.sub_arsip_id=arsip.arsip_sub_arsip');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->where('arsip_id', $arsip_id);
        $query = $this->db->get();
        return $query->row();
    }



    function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function ambiliduser($user_id)
    {
        return $this->db->get_where('user', ['user_id' => $user_id])->row();
    }

    function get_standar()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->order_by('kategori_id', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    function get_sub_standar($kategori_id)
    {
        $this->db->where('sub_arsip_kategori', $kategori_id);
        $result = $this->db->get('sub_arsip')->result(); // Tampilkan semua data kota berdasarkan id provinsi

        return $result;
    }
    function subarsip()
    {
        $this->db->select('*');
        $this->db->from('sub_arsip');
        $this->db->join('kategori', 'kategori.kategori_id = sub_arsip.sub_arsip_kategori');
        $this->db->order_by('sub_arsip_kategori', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function naskah()
    {
        $this->db->select('*');
        $this->db->from('naskah');
        $this->db->order_by('naskah_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function koneks()
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ');
        $this->db->where('arsip_kategori', 101);
        $query = $this->db->get();
        return $query->result();
    }
    public function masuk_edit_kon($arsip_id)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->where('arsip_id', $arsip_id);
        $query = $this->db->get();
        return $query->row();
    }
    function koneks1()
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id');
        $this->db->where('arsip_kategori', 102);
        $query = $this->db->get();
        return $query->result();
    }
    function koneks_op($id_user)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->where('arsip_user', $id_user);
        $this->db->where('arsip_kategori', 101);
        $query = $this->db->get();
        return $query->result();
    }

    function ambilarsip($id_kategori, $id_naskah)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ', 'left');
        $this->db->where('arsip_kategori', $id_kategori);
        $this->db->where('arsip_naskah_id', $id_naskah);
        $query = $this->db->get();
        return $query->result();
    }
    function insearch($ini)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ', 'left');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->like('arsip_nama', $ini);
        $query = $this->db->get();
        return $query->result();
    }
    function insearchkate($ini, $id_kategori)
    {
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->join('kategori', 'kategori.kategori_id = arsip.arsip_kategori  ', 'left');
        $this->db->join('user', 'user.user_id = arsip.arsip_user  ', 'left');
        $this->db->join('naskah', 'naskah.naskah_id = arsip.arsip_naskah_id  ', 'left');
        $this->db->where('arsip.arsip_kategori', $id_kategori);
        $this->db->like('arsip_nama', $ini);
        $query = $this->db->get();
        return $query->result();
    }
}
