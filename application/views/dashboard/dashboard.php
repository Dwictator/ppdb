<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>
      <?= $title ?>
   </title>
   <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('/assets/css/auth.css'); ?>">
</head>

<body>
   <div class="card card-rounded m-auto">
      <div class="card-header bg-success text-center py-4">
         <h4 class="text-white">Percobaan Input data gambar</h4>
      </div>
      <form method="POST" action="<?= base_url('authentication/register') ?>" class="m-4 p-2">
         <div class="form-row">
            <div class="form-group pr-3">
               <label for="namadepan">Nama depan</label>
               <input name="namadepan" type="text" class="form-control mr-3 mb-3" id="namadepan" value="">
               <small id="namadepan" class="form-text text-muted">Isikan nama tanpa disingkat</small>
               <small class="form-text text-danger"></small>
            </div>
            <div class="form-group">
               <label for="namabelakang">Nama belakang</label>
               <input name="namabelakang" type="text" class="form-control mr-3 mb-3" id="namalengkap" value="">
               <small id="namabelakang" class="form-text text-muted">Isikan nama tanpa disingkat</small>
               <small class="form-text text-danger"></small>
            </div>
         </div>
         <div class="form-group mb-4">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" value="">
            <small class="form-text text-danger"></small>
         </div>
         <div class="form-group mb-4">
            <label for="telepon">No Telepon</label>
            <input name="telepon" type="text" class="form-control" id="telepon" value="">
            <small class="form-text text-danger"></small>
         </div>
         <div class="form-group mb-4">
            <label for="pasfoto">Pas Foto 4 x 3</label>
            <input type="file" class="form-control" id="pasfoto">
            <small class="form-text text-danger"></small>
         </div>
         <div class="text-center">
            <button type="submit" class="btn btn-lg btn-success btn-block">Submit</button>
         </div>
      </form>
      <div class="card-footer text-center">
         <small>Sudah memiliki Akun? <a href="">Login Sekarang</a></small>
      </div>
   </div>
</body>

</html>