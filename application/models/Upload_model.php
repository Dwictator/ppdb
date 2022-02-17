<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload_model extends CI_Model
{
    // private $table = 'tb_nilai';
    // private $id = 'tb_nilai.id';

    public function get_all()
    {
        // $this->db->where($this->id, $id);
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function update($data, $id)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);

        return $this->db->affected_rows();
    }

    public function insert($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->insert($table, $data);
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
