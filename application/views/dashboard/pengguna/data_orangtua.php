<div id="layoutSidenav_content" style="background-color: #F0F4F5;">
    <main>
        <div class="container-fluid">
            <div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
                <form method="POST" action="<?php echo base_url('crud_controller/update_orangtua'); ?>">
                    <h3 class="text-center" style="margin-bottom: 25px; color: #28a745;">INPUT INFORMASI ORANG TUA SISWA</h3>
                    <h4 style="margin-top: 45px; margin-bottom: 30px;">INFORMASI DATA ORANG TUA</h4>

                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Nama Ayah</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="namaayah" value="<?php if (isset($orangtua->namaayah)) {
                                                                                                echo $orangtua->namaayah;
                                                                                            } ?>">
                            <small class="form-text text-danger"><?= form_error('namaayah') ?></small>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Nama Ibu</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="namaibu" value="<?php if (isset($orangtua->namaibu)) {
                                                                                                echo $orangtua->namaibu;
                                                                                            } ?>">
                            <small class="form-text text-danger"><?= form_error('namaibu') ?></small>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Pekerjaan Ayah</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pekerjaanayah" value="<?php if (isset($orangtua->pekerjaanayah)) {
                                                                                                    echo $orangtua->pekerjaanayah;
                                                                                                } ?>">
                            <small class="form-text text-danger"><?= form_error('pekerjaanayah') ?></small>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Pekerjaan Ibu</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pekerjaanibu" value="<?php if (isset($orangtua->pekerjaanibu)) {
                                                                                                    echo $orangtua->pekerjaanibu;
                                                                                                } ?>">
                            <small class="form-text text-danger"><?= form_error('pekerjaanibu') ?></small>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Alamat Rumah Orang Tua</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="alamat" value="<?php if (isset($orangtua->alamat)) {
                                                                                                echo $orangtua->alamat;
                                                                                            } ?>">
                            <small class="form-text text-danger"><?= form_error('alamat') ?></small>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Total Penghasilan Orang Tua</label>
                        <div class="col-sm-8">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp.</div>
                                <input type="text" class="form-control" name="penghasilan" value="<?php if (isset($orangtua->penghasilan)) {
                                                                                                        echo $orangtua->penghasilan;
                                                                                                    } ?>">
                            </div>
                            <small class="form-text text-danger"><?= form_error('penghasilan') ?></small>
                        </div>
                    </div>

                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <?= $this->session->flashdata('message'); ?>
                            <button type="submit" class="btn" style="background-color: #28a745; color: white;" value="add">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>

    </main>
    <footer class="py-4 bg-light " style="margin-top: 40px;">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2020</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>