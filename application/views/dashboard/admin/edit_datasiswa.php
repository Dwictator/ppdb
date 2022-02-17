<div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
    <h3 class="text-center" style="margin-bottom: 25px; color: #01AEF0;">EDIT INFORMASI DATA DIRI SISWA</h3>

    <img src="<?= base_url('assets/uploads/pasfoto/') . $siswa->pasfoto; ?>" alt="" style="height: 200px;">

    <h4 style="margin-top: 45px; margin-bottom: 30px;">INFORMASI DATA DIRI SISWA</h4>

    <form id="datasiswa1" method="POST" action="<?php echo base_url('crud_controller/update_datadiri_siswa'); ?>">
        <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
            <label for="" class="col-sm-4 col-form-label">Nama Di Ijazah SMP</label>
            <div class="col-sm-8">
                <input type="hidden" name="id" value="<?php echo $siswa->id ?>">
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
                <?= $this->session->flashdata('message1'); ?>
                <button type="submit" class="btn" style="background-color: #01AEF0; color: white;" value="add">Simpan</button>
            </div>
        </div>
    </form>

    <br>
    <a href="<?php echo base_url('admin/data_siswa') ?>">
        Kembali Ke Tabel Data Siswa
    </a>

</div>

<div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
    <form id="orangtua1" method="POST" action="<?php echo base_url('crud_controller/update_orangtua_siswa'); ?>">
        <h3 class="text-center" style="margin-bottom: 25px; color: #01AEF0;">EDIT ORANG TUA SISWA</h3>
        <h4 style="margin-top: 45px; margin-bottom: 30px;">INFORMASI DATA ORANG TUA</h4>

        <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
            <label for="" class="col-sm-4 col-form-label">Nama Ayah</label>
            <div class="col-sm-8">
                <input type="hidden" name="id" value="<?php echo $siswa->id ?>">
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
                <?= $this->session->flashdata('message2'); ?>
                <button type="submit" class="btn" style="background-color: #01AEF0; color: white;" value="add">Simpan</button>
            </div>
        </div>
    </form>

    <br>
    <a href="<?php echo base_url('admin/data_siswa') ?>">
        Kembali Ke Tabel Data Siswa
    </a>

</div>


<div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
    <form method="POST" action="<?php echo base_url() . 'index.php/crud_controller/update_nilai_siswa'; ?>">
        <h3 class="text-center" style="margin-bottom: 25px; color: #01AEF0;">INPUT DATA NILAI</h3>
        <h4 style="margin-top: 45px; margin-bottom: 30px;"> Data Nilai UN SMP</h4>

        <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
            <label for="" class="col-sm-4 col-form-label">
                <p>contoh penulisan nilai :</p>
            </label>
            <div class="col-sm-8">
                <p>8.75</p>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $siswa->id ?>">
        <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
            <label for="" class="col-sm-4 col-form-label">Nilai Bahasa Indonesia</label>
            <div class="col-sm-8">
                <input type="number" step="0.01" min="0" max="10" class="form-control" name="nilai_bi" value="<?php if (isset($nilai->indonesia)) {
                                                                                                                    echo $nilai->indonesia;
                                                                                                                } ?>">
                <small class="form-text text-danger"><?= form_error('nilai_bi') ?></small>
            </div>
        </div>
        <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
            <label for="" class="col-sm-4 col-form-label">Nilai Bahasa Inggris</label>
            <div class="col-sm-8">
                <input type="number" step="0.01" min="0" max="10" class="form-control" name="nilai_ing" value="<?php if (isset($nilai->inggris)) {
                                                                                                                    echo $nilai->inggris;
                                                                                                                } ?>">
                <small class="form-text text-danger"><?= form_error('nilai_ing') ?></small>
            </div>
        </div>
        <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
            <label for="" class="col-sm-4 col-form-label">Nilai Matematika</label>
            <div class="col-sm-8">
                <input type="number" step="0.01" min="0" max="10" class="form-control" name="nilai_mtk" value="<?php if (isset($nilai->matematika)) {
                                                                                                                    echo $nilai->matematika;
                                                                                                                } ?>">
                <small class="form-text text-danger"><?= form_error('nilai_mtk') ?></small>
            </div>
        </div>
        <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
            <label for="" class="col-sm-4 col-form-label">Nilai IPA</label>
            <div class="col-sm-8">
                <input type="number" step="0.01" min="0" max="10" class="form-control" name="nilai_ipa" value="<?php if (isset($nilai->ipa)) {
                                                                                                                    echo $nilai->ipa;
                                                                                                                } ?>">
                <small class="form-text text-danger"><?= form_error('nilai_ipa') ?></small>
            </div>
        </div>

        <h4 style="margin-top: 45px; margin-bottom: 30px;">Bukti Nilai SKHUN SMP</h4>
        <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
            <label for="" class="col-sm-4 col-form-label">Gambar SKHUN SMP</label>
            <div class="col-sm-8">
                <img src="<?= base_url('assets/uploads/buktinilai/') . $nilai->skhun; ?>" alt="" style="height: 200px;">
            </div>
        </div>

        <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
            <label for="" class="col-sm-4 col-form-label"></label>
            <div class="col-sm-8">
                <?= $this->session->flashdata('message3'); ?>
                <button type="submit" class="btn" style="background-color: #01AEF0; color: white;" value="add">Simpan</button>
            </div>
        </div>
    </form>

    <br>
    <a href="<?php echo base_url('admin/data_siswa') ?>">
        Kembali Ke Tabel Data Siswa
    </a>

</div>