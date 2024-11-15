<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD MOOS ORIGINAL</title>
    <link rel="icon" href="assets/icons/logo.png" type="image/png">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstra
p.min.css" integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CRUD Moos Original</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle 
navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="page_home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page_kategori.php">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page_deskripsi.php">Deskripsi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page_galeri.php">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page_admin.php">Admin</a>
                </li>
                <a href="logout.php" class="btn btn-danger"><i class="material-icons">&#xE147;</i> <span>Logout</span></a>
            </ul>
        </div>
    </nav>
    <!-- ./navbar -->