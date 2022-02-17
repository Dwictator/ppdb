<div id="layoutSidenav_content" style="background-color: #F0F4F5;">
    <main>
        <div class="container-fluid">
            <div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
                <h3 class="text-center" style="margin-bottom: 25px; color: #28a745;">INPUT INFORMASI DATA DIRI SISWA</h3>
                <br>
                <div class="form-group row" style="margin-bottom: 10px;">
                    <label for="" class="col-sm-4 col-form-label" style="color: rgb(124, 124, 124);"></label>
                    <div class="col-sm-8">
                        <div class="mb-3">
                            <img src="<?= base_url('assets/uploads/pasfoto/') . $siswa->pasfoto; ?>" alt="" style="height: 200px;" class="center">
                            <br>
                            <br>
                            <small>*Upload Pasfoto Siswa. Foto yang diupload harus sesuai contoh diatas(3x4)</small>
                        </div>
                    </div>
                </div>
                <?= form_open_multipart('Crud_controller/uploadgambarpasfoto'); ?>
                <div class="form-group row" style="margin-bottom: 10px;">
                    <label for="" class="col-sm-4 col-form-label" style="color: rgb(124, 124, 124);">Ganti Pasfoto Data Diri Siswa</label>
                    <div class="col-sm-8">
                        <div class="mb-3">
                            <input class="form-control form-control-sm " name="gambar" id="gambar" type="file">
                            <small class="form-text text-danger"><?= $this->session->flashdata('error_upload'); ?></small>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="margin-bottom: 20px;">
                    <label for="" class="col-sm-4 col-form-label"></label>
                    <div class="col-sm-8">
                        <button type="submit" class="btn" style="background-color: #28a745; color: white;">Simpan</button>
                    </div>
                </div>
                </form>

                <h4 style="margin-top: 45px; margin-bottom: 30px;">INFORMASI DATA DIRI</h4>
                <form method="POST" action="<?php echo base_url('crud_controller/update_datadiri'); ?>">
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Nama Di Ijazah SMP</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="namaijazah" value="<?php if (isset($siswa->namaijazah)) {
                                                                                                    echo $siswa->namaijazah;
                                                                                                } ?>">
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Tanggal lahir Siswa</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="tanggal" value="<?php if (isset($siswa->tanggallahir)) {
                                                                                                echo $siswa->tanggallahir;
                                                                                            } ?>">
                            <small id="nisn" class="form-text text-muted">Format: mm-dd-yyyy(bulan-tanggal-tahun)</a></small>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Nomer Induk Siswa Nasional</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nisn" value="<?php if (isset($siswa->nisn)) {
                                                                                            echo $siswa->nisn;
                                                                                        } ?>">
                            <small id="nisn" class="form-text text-muted">NISN anda dapat dicari di link berikut: <a target="_blank" href="https://referensi.data.kemdikbud.go.id/nisn/index.php/Cindex/formcaribynama">Klik Disini</a></small>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Alamat Domisili Siswa</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="alamatsiswa" value="<?php if (isset($siswa->alamatsiswa)) {
                                                                                                    echo $siswa->alamatsiswa;
                                                                                                } ?>">
                        </div>
                    </div>

                    <h4 style="margin-top: 45px; margin-bottom: 30px;">INFORMASI SEKOLAH SEBELUMNYA</h4>
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Nama Sekolah</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="namasekolah" value="<?php if (isset($siswa->sekolah)) {
                                                                                                    echo $siswa->sekolah;
                                                                                                } ?>">
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Alamat Sekolah</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="alamatsekolah" value="<?php if (isset($siswa->alamatsekolah)) {
                                                                                                    echo $siswa->alamatsekolah;
                                                                                                } ?>">
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">NPSN</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="npsn" value="<?php if (isset($siswa->npsn)) {
                                                                                            echo $siswa->npsn;
                                                                                        } ?>">
                            <small id="nisn" class="form-text text-muted">NPSN anda dapat dicari di link berikut: <a target="_blank" href="https://referensi.data.kemdikbud.go.id/index11.php">Klik Disini</a></small>
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
        </div>

    </main>
    <footer class="py-4 bg-light " style="margin-top: 40px;">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; SMA Harapan Bangsa 2020-2021</div>
            <div>
                <a href="<?= base_url('homepage/profil')?>">Profil Kami</a>
            </div>
            </div>
        </div>
    </footer>
</div>
</div>