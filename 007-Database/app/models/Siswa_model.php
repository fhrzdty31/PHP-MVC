<?php

class Siswa_model {
    private $table = 'siswa';
    private $db;

    public function __construct() {
        $this->db = new DB;
    }

    public function getData()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }

    public function getDataByID($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahData($data)
    {
        $this->db->query("INSERT INTO $this->table VALUES ('', :nama, :nis, :tel, :jurusan, :email)");
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('tel', $data['tel']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('email', $data['email']);
        return $this->db->rowCount();
    }

    public function hapusData($id)
    {
        $this->db->query("DELETE FROM $this->table WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->rowCount();
    }

    public function ubahData($data)
    {
        $this->db->query("UPDATE $this->table SET nama = :nama, nis= :nis, tel = :tel, jurusan = :jurusan, email = :email WHERE id = :id");
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('tel', $data['tel']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('email', $data['email']);
        return $this->db->rowCount();
    }

    public function cariData()
    {
        if(isset($_POST['cari'])) {
            $keyword = $_POST['cari'];
        } else {
            $keyword = "";
        }
        $this->db->query("SELECT * FROM $this->table WHERE nama LIKE :keyword");
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}