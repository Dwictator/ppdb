<div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">

    <form>
        <fieldset disabled>
            <h3 class="text-center" style="margin-bottom: 25px; color: #01AEF0;">VALIDASI SISWA</h3>

            <!-- INFORMASI TABEL DATA DIRI SISWA -->
            <h4 style="margin-top: 45px; margin-bottom: 30px;">PASFOTO SISWA</h4>
            <img src="<?= base_url('assets/uploads/pasfoto/') . $siswa->pasfoto; ?>" alt="" style="height: 200px;">
            <h4 style="margin-top: 45px; margin-bottom: 30px;">DATA DIRI SISWA</h4>
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
                    <input type="text" class="form-control" name="tanggal" value="<?php if (isset($siswa->tanggallahir)) {
                                                                                        echo $siswa->tanggallahir;
                                                                                    } ?>">
                </div>
            </div>
            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Alamat Siswa</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamatsiswa" value="<?php if (isset($siswa->alamatsiswa)) {
                                                                                            echo $siswa->alamatsiswa;
                                                                                        } ?>">
                </div>
            </div>
            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Nama Sekolah Asal </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="namasekolah" value="<?php if (isset($siswa->sekolah)) {
                                                                                            echo $siswa->sekolah;
                                                                                        } ?>">
                </div>
            </div>
            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Alamat Sekolah Asal</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamatsekolah" value="<?php if (isset($siswa->alamatsekolah)) {
                                                                                            echo $siswa->alamatsekolah;
                                                                                        } ?>">
                </div>
            </div>

            <!-- INFORMASI TABEL DATA ORANG TUA SISWA -->
            <h4 style="margin-top: 45px; margin-bottom: 30px;">DATA ORANG TUA SISWA</h4>

            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Nama Ayah</label>
                <div class="col-sm-8">

                    <input type="hidden" name="id" value="<?php echo $siswa->id ?>">

                    <input type="text" class="form-control" name="nama" value="<?php if (isset($orangtua->namaayah)) {
                                                                                    echo $orangtua->namaayah;
                                                                                } ?>">
                </div>
            </div>

            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-8">

                    <input type="hidden" name="id" value="<?php echo $siswa->id ?>">

                    <input type="text" class="form-control" name="nama" value="<?php if (isset($orangtua->namaibu)) {
                                                                                    echo $orangtua->namaibu;
                                                                                } ?>">
                </div>
            </div>
            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Pekerjaan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="pekerjaan" value="<?php if (isset($orangtua->pekerjaanayah)) {
                                                                                        echo $orangtua->pekerjaanayah;
                                                                                    } ?>">
                </div>
            </div>
            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Pekerjaan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="pekerjaan" value="<?php if (isset($orangtua->pekerjaanibu)) {
                                                                                        echo $orangtua->pekerjaanibu;
                                                                                    } ?>">
                </div>
            </div>
            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat" value="<?php if (isset($orangtua->alamat)) {
                                                                                        echo $orangtua->alamat;
                                                                                    } ?>">
                </div>
            </div>
            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Total Penghasilan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="penghasilan" value="<?php if (isset($orangtua->penghasilan)) {
                                                                                            echo $orangtua->penghasilan;
                                                                                        } ?>">
                </div>
            </div>


            <!-- INFORMASI TABEL DATA NILAI SISWA -->
            <h4 style="margin-top: 45px; margin-bottom: 30px;">DATA NILAI SISWA</h4>

            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Bahasa Indonesia</label>
                <div class="col-sm-8">

                    <input type="hidden" name="id" value="<?php echo $siswa->id ?>">

                    <input type="text" class="form-control" name="nama" value="<?php if (isset($nilai->indonesia)) {
                                                                                    echo $nilai->indonesia;
                                                                                } ?>">
                </div>
            </div>
            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Bahasa Inggris</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat" value="<?php if (isset($nilai->inggris)) {
                                                                                        echo $nilai->inggris;
                                                                                    } ?>">
                </div>
            </div>
            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Matematika</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="pekerjaan" value="<?php if (isset($nilai->matematika)) {
                                                                                        echo $nilai->matematika;
                                                                                    } ?>">
                </div>
            </div>
            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Ilmu Pengetahuan Alam</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="penghasilan" value="<?php if (isset($nilai->ipa)) {
                                                                                            echo $nilai->ipa;
                                                                                        } ?>">
                </div>
            </div>
            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Nilai Rata-Rata UN SMP</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="penghasilan" value="<?php if (isset($nilai->jumlahnilai)) {
                                                                                            echo $nilai->jumlahnilai;
                                                                                        } ?>">
                </div>
            </div>
            <br>

            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Bukti Gambar SKHUN</label>
                <div class="col-sm-8">
                    <img src="<?= base_url('assets/uploads/pasfoto/') . $siswa->pasfoto; ?>" alt="" style="height: 200px;">
                </div>
            </div>

            <!-- INFORMASI TABEL DATA PRESTASI SISWA -->
            <h4 style="margin-top: 45px; margin-bottom: 30px;">DATA PRESTASI SISWA</h4>

            <table class="table table-hover" style="font-size: 10px;">
                <thead class="fw-bold">
                    <tr class="bg-light">
                        <td>No</td>
                        <td>Nama Siswa</td>
                        <td>Prestasi</td>
                        <td>Jenis Prestasi</td>
                        <td>Bukti Prestasi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($prestasi as $prestasi) {
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $prestasi->namalengkap ?></td>
                            <td><?php echo $prestasi->prestasi ?></td>
                            <td><?php echo $prestasi->jenisprestasi ?></td>
                            <td><img src="<?= base_url('assets/uploads/buktiprestasi/') . $prestasi->buktiprestasi; ?>" alt="" style="height: 200px;"></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <br>
            <br>
            <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                <label for="" class="col-sm-4 col-form-label">Status Penerimaan Siswa (diterima / ditolak)</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control " style="background-color: #01AEF0; color: white;" name="penghasilan" value="<?php if (isset($siswa->status)) {
                                                                                                                                            echo $siswa->status;
                                                                                                                                        } ?>">
                </div>
            </div>
        </fieldset>
    </form>
</div>


<div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
    <form method="POST" action="<?php echo base_url('crud_controller/updatestatussiswa'); ?>">
        <h3 class="text-center" style="margin-bottom: 25px; color: #01AEF0;">EDIT VALIDASI PENERIMAAN SISWA</h3>
        <br>
        <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
            <label for="" class="col-sm-4 col-form-label">Status Validasi Siswa</label>
            <div class="col-sm-8">

                <input type="hidden" name="id" value="<?php echo $siswa->id ?>">

                <select class="form-select" style="width: 50%; height: 30px;" id="status" name="status">
                    <option value="diterima">Diterima</option>
                    <option value="ditolak">Ditolak</option>
                </select>
            </div>
        </div>

        <div class="form-group row" style="margin-bottom: 20px;">
            <label for="" class="col-sm-4 col-form-label"></label>
            <div class="col-sm-8">
                <?= $this->session->flashdata('message1'); ?>
                <button type="submit" class="btn" style="background-color: #01AEF0; color: white;">Simpan</button>
            </div>
        </div>
    </form>

    <a href="<?php echo base_url('admin/validasi_data') ?>">
        Kembali Ke Tabel Validasi Data
    </a>
</div>