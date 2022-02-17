<div class="card card-rounded m-auto" style="width: 25%;">
   <div class="card-header bg-success text-center py-4">
      <h4 class="text-white">Sign Up</h4>
   </div>
   <form method="POST" action="<?= base_url('authentication/register') ?>" class="m-4 p-2">
      <div class="form-group">
         <label for="namadepan">Nama Lengkap</label>
         <input name="namadepan" type="text" class="form-control mr-3 mb-3" id="namadepan" value="<?= set_value('namadepan') ?>">
         <small id="namadepan" class="form-text text-muted">Isikan nama asli dengan benar dan tanpa disingkat</small>
         <small class="form-text text-danger"><?= form_error('namadepan') ?></small>
      </div>
      <div class="form-group mb-4">
         <label for="email">Email</label>
         <input name="email" type="email" class="form-control" id="email" value="<?= set_value('email') ?>">
         <small class="form-text text-danger"><?= form_error('email') ?></small>
      </div>
      <div class="form-group mb-4">
         <label for="telepon">No Telepon</label>
         <input name="telepon" type="text" class="form-control" id="telepon" value="">
         <small class="form-text text-danger"><?= form_error('telepon') ?></small>
      </div>
      <div class="form-group mb-4">
         <label for="password_1">Password</label>
         <input name="password_1" type="password" class="form-control" id="password_1">
      </div>
      <div class="form-group mb-4">
         <label for="password_2">Konfirmasi Password</label>
         <input name="password_2" type="password" class="form-control" id="password_2">
         <small class="form-text text-danger"><?= form_error('password_1') ?></small>
      </div>
      <div class="text-center">
         <button type="submit" class="btn btn-lg btn-success btn-block">Submit</button>
      </div>
   </form>
   <div class="card-footer text-center">
      <small>Sudah memiliki Akun? <a href="<?= base_url('authentication') ?>">Login Sekarang</a></small>
   </div>
</div>