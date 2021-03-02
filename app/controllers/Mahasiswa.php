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

    public function detail($id)
    {
        $data['title'] = "Detail Mahasiswa";
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getMahasiswa($id);
        $this->view("template/header", $data);
        $this->view("mahasiswa/detail", $data);
        $this->view("template/footer");
    }

    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahMahasiswa($_POST) > 0) {
            Flasher::setFlasher("Berhasil", "Ditambahkan", "success");
            header("Location: " . BASEURL . "/Mahasiswa");
            exit;
        } else {
            Flasher::setFlasher("Gagal", "Ditambahkan", "danger");
            header("Location: " . BASEURL . "/Mahasiswa");
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusMahasiswa($id) > 0) {
            Flasher::setFlasher("Berhasil", "Dihapus", "success");
            header("Location: " . BASEURL . "/Mahasiswa");
            exit;
        } else {
            Flasher::setFlasher("Gagal", "Dihapus", "danger");
            header("Location: " . BASEURL . "/Mahasiswa");
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswa($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Mahasiswa_model')->ubahMahasiswa($_POST) > 0) {
            Flasher::setFlasher("Berhasil", "Diubah", "success");
            header("Location: " . BASEURL . "/Mahasiswa");
            exit;
        } else {
            Flasher::setFlasher("Gagal", "Diubah", "danger");
            header("Location: " . BASEURL . "/Mahasiswa");
            exit;
        }
    }
}