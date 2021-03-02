<?php
class Mahasiswa extends Controller
{
    public function index()
    {
        $data['title'] = "Halaman Mahasiswa";
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view("template/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("template/footer");
    }
}