<?php

class Model_students extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getStudentData($id = null)
    {
        if($id) {
            $sql = "SELECT * FROM students WHERE id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT * FROM students ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public  function getSchoolData($id = null){
        if($id) {
            $sql = "SELECT * FROM schools WHERE  id= ?";
            $query = $this->db->query($sql, array($id));

            $data =$query->row_array();

            return $data;
        }

        $sql = "SELECT * FROM schools WHERE id != ?";
        $query = $this->db->query($sql, array(1));

        $data = $query->result_array();

        return $data;
    }
    public  function getGradeData($id = null){
        if($id) {
            $sql = "SELECT * FROM grades WHERE id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT * FROM grades WHERE id != ?";
        $query = $this->db->query($sql, array(1));
        return $query->result_array();
    }
}