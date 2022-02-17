<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CRUD_Model extends CI_Model
{

    function read($id, $table)
    {
        $this->db->select("*");
        $this->db->where("id", $id);
        return $this->db->get($table)->row();
    }

    function readprestasi($id, $table)
    {
        $this->db->select("*");
        $this->db->from($table);
        $this->db->where('id', $id);
        return $this->db->get()->result();
    }

    function readdata($table)
    {
        return $this->db->get($table);
    }

    function readsiswaditerima()
    {
        $this->db->select('*');
        $this->db->from('tb_datadiri');
        $this->db->where('status = "diterima"');
        $this->db->order_by('jumlahnilai', 'desc');
        $this->db->join('tb_nilai', 'tb_nilai.id = tb_datadiri.id');
        return $this->db->get();
    }

    function jumlahdata($table)
    {
        return $this->db->get($table)->num_rows();
    }

    function data($table, $number, $offset)
    {

        return $query = $this->db->get($table, $number, $offset)->result();
    }


    function readsiswaditerimaprestasi()
    {
        $this->db->select('*');
        $this->db->from('tb_datadiri');
        $this->db->where('status = "diterima"');
        $this->db->join('tb_prestasi', 'tb_prestasi.id = tb_datadiri.id');
        $this->db->group_by('tb_prestasi.id');
        return $this->db->get();
    }

    function jumlahprestasi()
    {
        $this->db->select('*');
        $this->db->from('tb_datadiri');
        $this->db->where('status = "diterima"');
        $this->db->join('tb_prestasi', 'tb_prestasi.id = tb_datadiri.id');
        $this->db->group_by('tb_prestasi.id');
        return $this->db->get();
    }

    function read2tabel()
    {
        $this->db->select('*');
        $this->db->from('tb_datadiri');
        $this->db->join('tb_orangtua', 'tb_orangtua.id = tb_datadiri.id');
        return $this->db->get();
    }

    function readvalidasi()
    {
        $this->db->select('*');
        $this->db->from('tb_datadiri');
        $this->db->order_by('jumlahnilai', 'desc');
        $this->db->join('tb_nilai', 'tb_nilai.id = tb_datadiri.id');
        return $this->db->get();
    }

    public function carisiswa()
    {
        $cari = $this->input->GET('cari', TRUE);
        $data = $this->db->query("SELECT * from tb_datadiri where namalengkap like '%$cari%' ");
        return $data->result();
    }

    function create($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function insertprestasi($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update($where, $data, $table)
    {
        $this->db->where($where);
        //$data berisi inputan yg ingin di update
        $this->db->update($table, $data);
    }

    function insert($where, $data, $table)
    {
        $this->db->where($where);
        //$data berisi inputan yg ingin di update
        $this->db->insert($table, $data);
    }

    function delete($where)
    {
        $tables = array('pengguna', 'tb_datadiri', 'tb_orangtua', 'tb_nilai', 'tb_prestasi');
        $this->db->where('id', $where);
        $this->db->delete($tables);
    }
}
