<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>
    <link rel="icon" href="<?php echo base_url('assets/image/logo.png') ?>">
    <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #28a745;">
        <a class="navbar-brand" href="index.html">PESERTA DIDIK</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

        </form>

        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <h6 style="color: white; margin-right: 20px;"><?php if (isset($pengguna->namalengkap)) {echo $pengguna->namalengkap;} ?></h6>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url('authentication/logout') ?>">Logout</a>
                </div>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav" style="background-color: #192942;">
            <nav class="sb-sidenav accordion" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading" style="color: #8393ac;">MENU DASHBOARD</div>
                        <a class="nav-link" href="<?php echo base_url('pengguna/index') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="<?php echo base_url('pengguna/profil') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Profil Siswa
                        </a>
                        <a class="nav-link" href="<?php echo base_url('pengguna/datadiri') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                            Input Data Siswa
                        </a>
                        <a class="nav-link" href="<?php echo base_url('pengguna/dataorangtua') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-id-badge"></i></div>
                            Input Data Orang Tua
                        </a>
                        <a class="nav-link" href="<?php echo base_url('pengguna/datanilai') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div>
                            Input Data Nilai
                        </a>
                        <a class="nav-link" href="<?php echo base_url('pengguna/dataprestasi') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div>
                            Input Data Prestasi
                        </a>
                    </div>
                </div>
            </nav>
        </div>