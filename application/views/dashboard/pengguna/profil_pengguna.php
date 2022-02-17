<div id="layoutSidenav_content" style="background-color: #F0F4F5;">
    <main>
        <div class="container-fluid" style="width: 50%;">
            <div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
                <h3 class="text-center" style="margin-bottom: 25px; color: #28a745;">PROFIL SISWA</h3>

                <h4 style="margin-top: 45px; margin-bottom: 30px;">INFORMASI AKUN</h4>
                <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                    <label for="" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" value="<?php if (isset($pengguna->email)) {
                                                                                            echo $pengguna->email;
                                                                                        } ?>" readonly>
                    </div>
                </div>
                <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                    <label for="" class="col-sm-4 col-form-label">Nama lengkap</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="namalengkap" value="<?php if (isset($pengguna->namalengkap)) {
                                                                                                echo $pengguna->namalengkap;
                                                                                            } ?>" readonly>
                    </div>
                </div>
                <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                    <label for="" class="col-sm-4 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-8">
                        <input type="int" class="form-control" name="telepon" value="<?php if (isset($pengguna->telepon)) {
                                                                                            echo $pengguna->telepon;
                                                                                        } ?>" readonly>
                    </div>
                </div>
                <form method="POST" action="<?= base_url('Crud_controller/update_profil') ?> ">
                    <h4 style="margin-top: 45px; margin-bottom: 30px;">GANTI PASSWORD</h4>
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class=" col-sm-4 col-form-label">Password Baru</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password_1" placeholder="" id="password_1">
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 40px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Konfirmasi Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password_2" placeholder="" id="password_2">
                            <small class="form-text text-danger"><?= form_error('password_1') ?></small>
                        </div>
                    </div>

                    <div class="form-group row" style="margin-bottom: 20px;">
                        <label for="" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <?= $this->session->flashdata('message'); ?>
                            <button type="submit" class="btn" style="background-color: #28a745; color: white;">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
    </main>

    <footer class="py-4 bg-light " style="margin-top: 40px;">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; SMA Harapan Bangsa 2020-2021</div>
                <div>
                    <a href="<?php echo base_url('homepage/profil') ?>">Profil kami</a>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- div dari header -->
</div>