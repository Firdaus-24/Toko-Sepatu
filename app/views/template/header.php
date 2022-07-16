<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/style.css">
    <title>Halaman <?= $data['judul']; ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#ff7f00;">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="<?= BASEURL; ?>">EMUT RASA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/barang">Barang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Artikel</a>
            </li>
            </ul>
        </div>
  </div>
</nav>