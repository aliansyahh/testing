<?php
class Mahasiswa_model
{
    private $table = "mahasiswa";
    private $koneksi;

    public function __construct()
    {
        $this->koneksi = new Database();
    }

    public function getAllMahasiswa()
    {
        $this->koneksi->query("SELECT * FROM " . $this->table);
        return $this->koneksi->resultSet();
    }

    public function getMahasiswa($id)
    {
        $this->koneksi->query("SELECT * FROM " . $this->table . " WHERE id=:id");
        $this->koneksi->bind("id", $id);
        return $this->koneksi->single();
    }
}