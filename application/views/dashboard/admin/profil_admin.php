<div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
    <h3 class="text-center" style="margin-bottom: 25px; color: #01AEF0;">PROFIL ADMIN</h3>
    <div class="form-group row" style="margin-bottom: 10px;">
        <label for="" class="col-sm-3 col-form-label" style="color: rgb(124, 124, 124);"></label>
        <div class="col-sm-9">
            <div class="mb-3">
                <a href="<?= base_url('assets/uploads/fotoadmin/') . $admin->foto; ?>">
                    <img src="<?= base_url('assets/uploads/fotoadmin/') . $admin->foto; ?>" alt="" style="height: 200px;">
                </a>
            </div>
        </div>
    </div>

    <?= form_open_multipart('crud_controller/uploadfotoadmin'); ?>
    <div class="form-group row" style="margin-bottom: 20px;">
        <label for="" class="col-sm-3 col-form-label" style="color: rgb(124, 124, 124);">Upload Foto profil Admin</label>
        <div class="col-sm-9">
            <div class="mb-3">
                <input class="form-control form-control-sm " name="gambar" id="gambar" type="file">
                <small class="form-text text-danger"><?= $this->session->flashdata('error_upload'); ?></small>
            </div>
        </div>

    </div>
    <div class="form-group row" style="margin-bottom: 20px;">
        <label for="" class="col-sm-3 col-form-label"></label>
        <div class="col-sm-9">
            <button type="submit" class="btn" style="background-color: #01AEF0; color: white;">Simpan</button>
        </div>
    </div>
    </form>


    <form method="POST" action="<?= base_url('crud_Controller/update_profil_admin') ?> " enctype="multipart/form-data">


        <h4 style="margin-top: 45px; margin-bottom: 30px;">INFORMASI AKUN</h4>
        <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
            <label for="" class="col-sm-3 col-form-label">Nama lengkap</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="namalengkap" value="<?php if (isset($admin->nama)) {
                                                                                        echo $admin->nama;
                                                                                    } ?>">
            </div>
        </div>
        <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
            <label for="" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" name="email" value="<?php if (isset($admin->email)) {
                                                                                    echo $admin->email;
                                                                                } ?>">
            </div>
        </div>
        <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
            <label for="" class="col-sm-3 col-form-label">Nomor Telepon</label>
            <div class="col-sm-9">
                <input type="int" class="form-control" name="telepon" value="<?php if (isset($admin->telepon)) {
                                                                                    echo $admin->telepon;
                                                                                } ?>">
            </div>
        </div>
        <fieldset disabled>
            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-9">
                    <input type="text" id="disabledTextInput" class="form-control" name="username" value="<?php echo $admin->username; ?>">
                </div>
            </div>
        </fieldset>

        <div class="form-group row" style="margin-bottom: 20px;">
            <label for="" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
                <?= $this->session->flashdata('message1'); ?>
                <button type="submit" class="btn" style="background-color: #01AEF0; color: white;">Simpan</button>
            </div>
        </div>

    </form>
</div>


<div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
    <form method="POST" action="<?= base_url('CRUD_Controller/update_pass_admin') ?> ">
        <h3 class="text-center" style="margin-bottom: 25px; color: #01AEF0;">PASSWORD ADMIN</h3>
        <h4 style="margin-top: 45px; margin-bottom: 30px;">GANTI PASSWORD</h4>
        <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
            <label for="" class=" col-sm-3 col-form-label">Password Baru</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" name="password_1" placeholder="" id="password_1">
            </div>
        </div>
        <div class="form-group row" style="margin-bottom: 40px; color: rgb(124, 124, 124);">
            <label for="" class="col-sm-3 col-form-label">Konfirmasi Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" name="password_2" placeholder="" id="password_2">
                <small class="form-text text-danger"><?= form_error('password_2') ?></small>
            </div>
        </div>

        <div class="form-group row" style="margin-bottom: 20px;">
            <label for="" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
                <?= $this->session->flashdata('message2'); ?>
                <button type="submit" class="btn" style="background-color: #01AEF0; color: white;">Simpan</button>
            </div>
        </div>

    </form>
</div>