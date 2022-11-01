<div class="container mt-5">
    <div class="row">
        <h3>Daftar Siswa</h3>
        <?php foreach($data['siswa'] as $siswa) : ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mt-4">
                    <div class="card-body m-2">
                        <h4 class="card-title"><?= $siswa['nama'] ?></h4>
                        <hr>
                        <table>
                            <tr>
                                <td>NIS </td>
                                <td> : <?= $siswa['nis'] ?></td>
                            </tr>
                            <tr>
                                <td>Telepon </td>
                                <td> : <?= $siswa['tel'] ?></td>
                            </tr>
                            <tr>
                                <td>Jurusan </td>
                                <td> : <?= $siswa['jurusan'] ?></td>
                            </tr>
                            <tr>
                                <td>Email </td>
                                <td> : <?= $siswa['email'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<br><br>