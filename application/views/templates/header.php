<!doctype html>
<html lang="en">

<head>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image" href="<?php echo base_url(); ?>assets/favicon.png">

    <!-- W3 flat ui -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title><?= $judul; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light gradient">
        <a><a class="navbar-brand" href="<?= base_url(); ?>" id="logo"><img src="<?php echo base_url(); ?>assets/ohi.png" width="100px"></a></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link mr-sm-2" href="<?php echo base_url(); ?>" id="navbar">Beranda</a>
                </li>
                <li class="nav-item active mr-sm-2">
                    <a class="nav-link .transition .transition:hover" href="<?php base_url() ?>post" id="navbar">Artikel</a>
                </li>
                <li class="nav-item active mr-sm-2">
                    <a class="nav-link" href="<?php base_url() ?>about" id="navbar">Tentang Blog</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="POST" action="">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari judul.." name="keyword" autocomplete="off" aria-label="Search" id="search">
                <button class="button1 btn-rad mr-sm-3 search nav-link w3-flat-sun-flower" type="submit" name="submit">Cari</button>
            </form>
            <?php if (logged_in()) : ?>
                <a class="btn-login btn-rad mr-sm-2 search nav-link w3-flat-midnight-blue" href="<?= base_url('auth/'); ?>logout ">Logout</a>
            <?php else : ?>
                <a class="btn-login btn-rad mr-sm-2 search nav-link w3-flat-midnight-blue" href="<?php base_url(); ?>auth">Login</a>
            <?php endif; ?>
        </div>
        </div>
    </nav>