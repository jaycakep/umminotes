<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo($pageTitle);?></title>
    <link rel="stylesheet" href="<?php echo (SERVER_HOST); ?>/assets/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Brand Logo -->
            <a class="navbar-brand" href="#">Your Logo</a>

            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Menu Items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo (SERVER_HOST); ?>/peserta">Peserta</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aktivitasDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Aktivitas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aktivitasDropdown">
                            <li><a class="dropdown-item" href="<?php echo (SERVER_HOST); ?>/membaca">Membaca</a></li>
                            <li><a class="dropdown-item" href="<?php echo (SERVER_HOST); ?>/iqra">Iqra</a></li>
                            <li><a class="dropdown-item" href="<?php echo (SERVER_HOST); ?>/hafalan">Hafalan</a></li>
                            <li><a class="dropdown-item" href="<?php echo (SERVER_HOST); ?>/murojaah">Murojaah</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 