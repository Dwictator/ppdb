<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard Admin</title>
    <link rel="icon" href="<?php echo base_url('assets/image/logo.png') ?>">
    <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #01AEF0;">
        <a class="navbar-brand" href="index.html">ADMINISTRATOR</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

        </form>

        <p style="color: white; margin-right: 20px;"><?php echo $this->session->userdata('username'); ?></p>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url('Authentication/logout_admin') ?>">Logout</a>
                </div>
            </li>
        </ul>
    </nav>



    <div id="layoutSidenav">
        <div id="layoutSidenav_nav" style="background-color: #192942;">
            <nav class="sb-sidenav accordion" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav" style="color: #8393ac;">
                        <div class="sb-sidenav-menu-heading">MENU DASHBOARD</div>
                        <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="<?php echo base_url('admin/profil') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Profil Admin
                        </a>
                        <a class="nav-link" href="<?php echo base_url('admin/data_siswa') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                            Data Siswa
                        </a>
                        <a class="nav-link" href="<?php echo base_url('admin/validasi_data') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-id-badge"></i></div>
                            Validasi Data
                        </a>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Seleksi Siswa
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url('admin/seleksi_nilai') ?>">Seleksi Nilai</a>
                                <a class="nav-link" href="<?php echo base_url('admin/seleksi_prestasi') ?>">Seleksi Prestasi</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="<?php echo base_url('admin/pertanyaan') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></i></div>
                            Pesan Pertanyaan
                        </a>
                        <a class="nav-link" href="<?php echo base_url('admin/pencarian') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-search"></i></div>
                            Pencarian Data
                        </a>
                    </div>
                </div>
            </nav>
        </div>


        <div id="layoutSidenav_content" style="background-color: #F0F4F5;">
            <main>
                <div class="container-fluid">