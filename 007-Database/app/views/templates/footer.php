        <!-- Modal -->
        <div class="modal fade" id="formTambah" tabindex="-1" aria-labelledby="judul" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="judul">Tambah Data Siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= BASEURL ?>/siswa/tambah" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="form-grup">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-grup">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="text" name="nis" class="form-control" id="nis" placeholder="001/002**" required>
                        </div>
                        <div class="form-grup">
                            <label for="tel" class="form-label">Nomor Telepon</label>
                            <input type="tel" name="tel" class="form-control" id="tel" placeholder="+62**" required>
                        </div>
                        <div class="form-grup">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Teknik Informatika" required>
                        </div>
                        <div class="form-grup">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-outline-success">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="<?= BASEURL; ?>/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
        <script src="<?= BASEURL; ?>/js/jQuery/jquery-3.6.1.min.js"></script>
        <script src="<?= BASEURL; ?>/js/jQuery/script.js"></script>
    </body>
</html>