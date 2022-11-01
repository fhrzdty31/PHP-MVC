<div class="container mt-5">
    <div class="card">
        <div class="card-body m-2">
            <h2 class="card-title">Selamat Datang di Website Saya</h2>
            <p class="card-text">Hallo, nama saya <?= $data['nama']; ?></p>
            <hr>
            <a href="<?= BASEURL . '/about'; ?>" class="btn btn-primary">About Me</a>
        </div>
    </div>
</div>