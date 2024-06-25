<?php
class Student_model extends CI_Model
{
    public $failover; // Tambahkan ini

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_students()
    {
        $query = $this->db->get('tb_mahasiswa');
        return $query->result_array();
    }

    public function get_students()
    {
        $query = $this->db->get('tb_mahasiswa');
        return $query->result_array();
    }

    public function insert_student($data)
    {
        return $this->db->insert('tb_mahasiswa', $data);
    }

    public function get_student($id)
    {
        $query = $this->db->get_where('tb_mahasiswa', array('id' => $id));
        return $query->row_array();
    }

    public function update_student($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_mahasiswa', $data);
    }

    public function delete_student($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tb_mahasiswa');
    }
}
