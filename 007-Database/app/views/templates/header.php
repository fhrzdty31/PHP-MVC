<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>
    <link href="<?= BASEURL; ?>/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASEURL; ?>"><img src="<?= BASEURL . '/img/profile.jpg'; ?>" alt="profile" width="40px" class="rounded-circle mx-2"><b>MVC PHP</b> | Data Siswa | </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
            <a class="nav-link" href="<?= BASEURL . '/siswa'; ?>">Siswa</a>
            <a class="nav-link" href="<?= BASEURL . '/about'; ?>">About</a>
            <a class="nav-link" href="<?= BASEURL . '/about/page'; ?>">Page</a>
        </div>
        </div>
    </div>
    </nav>