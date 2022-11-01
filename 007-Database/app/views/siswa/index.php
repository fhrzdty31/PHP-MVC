<div class="container mt-5">
  <div class="row mb-3">
    <div class="col-lg-4 col-md-6 col-sm-12">
      <?php Flasher::flash() ?>
    </div>
  </div>
  <h3>Daftar Siswa</h3>
  <hr>
  <div class="row">
    <form action="<?= BASEURL ?>/siswa/cari" method="post" class="col-9 mb-3">
      <div class="input-group">
        <input type="text"  name="cari" id="cari" class="form-control" placeholder="Cari Nama" autocomplate="off" aria-label="Cari Nama" aria-describedby="button-addon2">
        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
      </div>
    </form>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-primary col-3 mb-3" data-bs-toggle="modal" data-bs-target="#formTambah">Tambah Data</button>
  </div>
  <div class="row">
      <?php foreach($data['siswa'] as $siswa) : ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="list-group mt-2">
              <a href="<?= BASEURL ?>/siswa/detail/<?= $siswa['id'] ?>" class="list-group-item list-group-item-action"><b><?= $siswa['nama'] ?></b></a>
            </div>
          </div>
      <?php endforeach; ?>
  </div>
</div>
<br><br>