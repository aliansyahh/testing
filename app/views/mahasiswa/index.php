<div class="container mt-4">
    <div class="row">
        <div class="col-md-5">
            <?php Flasher::flash(); ?>
            <!-- Button trigger modal -->
            <button type="button" class="btn tambah btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <h1>Daftar Mahasiswa</h1>
            <ul class="list-group">
                <?php foreach ($data['mahasiswa'] as $mhs) : ?>
                <li class="list-group-item"><?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/Mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn badge bg-danger float-end"
                        onclick="return confirm('Yakin ?')">hapus</a>
                    <a href="<?= BASEURL; ?>/Mahasiswa/ubah/<?= $mhs['id']; ?>"
                        class="btn badge bg-warning float-end me-1 ubah" data-bs-toggle="modal"
                        data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                    <a href="<?= BASEURL; ?>/Mahasiswa/detail/<?= $mhs['id']; ?>"
                        class="btn badge bg-primary float-end me-1">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/Mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="npm" class="form-label">Npm</label>
                        <input type="number" name="npm" id="npm" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-select">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>