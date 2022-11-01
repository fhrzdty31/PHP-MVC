<div class="container mt-5">
    <div class="card col-lg-8 col-md-10 col-sm-12">
        <div class="card-body m-2">
            <h2 class="card-title"><?= $data['siswa']['nama'] ?></h2>
            <hr>
            <h5 class="card-subtitle mb-3 text-muted"><?= $data['siswa']['nis'] ?></h5>
            <ul class="list-group card-text">
                <li class="list-group-item"><?= $data['siswa']['tel'] ?></li>
                <li class="list-group-item"><?= $data['siswa']['jurusan'] ?></li>
                <li class="list-group-item"><?= $data['siswa']['email'] ?></li>
            </ul>
            <hr>
            <a href="<?= BASEURL . '/siswa'; ?>" class="btn btn-outline-secondary">Kembali</a>
            <a href="<?= BASEURL . '/siswa/hapus/' . $data['siswa']['id']; ?>" class="btn btn-outline-danger float-end mx-1" onclick="return confirm('Apakah anda ingin menghapus data <?= $data['siswa']['nama'] ?>')">Hapus</a>
            <a href="" class="btn btn-outline-primary float-end mx-1 ubahData" data-bs-toggle="modal" data-bs-target="#formTambah" data-id="<?= $data['siswa']['id']; ?>">Edit</a>
        </div>
    </div>
</div>