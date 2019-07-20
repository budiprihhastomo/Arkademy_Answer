<?php 
defined('BASEPATH') OR exit('Maaf, Anda Dilarang Mengakses Area Ini');

class Helper extends CI_Model {
    function __construct() {
        parent::__construct();
        // TODO 
    }
    
    public function FetchAllData() {
        $this->db->select('X1.id,X1.name as nama,X2.name as work,X3.salary,X1.id_work as id_work,X1.id_salary as id_salary');
        $this->db->join('work X2','X1.id_work=X2.id');
        $this->db->join('kategori X3','X1.id_salary=X3.id');
        return $this->db->get('nama X1')->result();
    }

    public function FetchDataComboBox($table) {
        return $this->db->get($table)->result();
    }

    public function insertData($table,$data) {
        $this->db->insert($table,$data);
        return $this->db->affected_rows();
    }
    public function updateData($table,$data, $filter) {
        $this->db->update($table,$data,$filter);
        return $this->db->affected_rows();
    }
    public function deleteData($table, $filter) {
        $this->db->delete($table,$filter);
        return $this->db->affected_rows();
    }
}