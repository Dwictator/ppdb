<div id="layoutSidenav_content" style="background-color: #F0F4F5;">
    <main>
        <div class="container-fluid" style="width: 100%;">
            <div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
                <h3 class="text-center" style="margin-bottom: 25px; color: #28a745;">INPUT DATA PRESTASI SISWA</h3>
                <h4 style="margin-top: 45px; margin-bottom: 30px;"> INFORMASI PRESTASI SISWA</h4>


                <form method="POST" action="<?php echo base_url('crud_controller/uploadbuktiprestasi'); ?>" enctype="multipart/form-data">
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Prestasi</label>
                        <div class="col-sm-8">
                            <input type="hidden" name="nama" value="<?php echo $pengguna->namalengkap ?>">
                            <input type="text" class="form-control" name="prestasi" value="">
                            <small class="form-text text-danger"><?= form_error('prestasi') ?></small>
                        </div>
                    </div>

                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Jenis Prestasi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="jenis" value="">
                            <small class="form-text text-danger"><?= form_error('jenis') ?></small>
                        </div>
                    </div>


                    <h4 style="margin-top: 45px; margin-bottom: 30px;"> UPLOAD BUKTI PRESTASI</h4>


                    <div class="form-group row" style="margin-bottom: 20px;">
                        <label for="" class="col-sm-4 col-form-label" style="color: rgb(124, 124, 124);">Upload Bukti Prestasi</label>
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
                            <?= $this->session->flashdata('message'); ?>
                            <button type="submit" class="btn" style="background-color: #28a745; color: white;">Simpan</button>
                        </div>
                    </div>
                </form>

                <h4 style="margin-top: 45px; margin-bottom: 30px;"> TABEL PRESTASI SISWA</h4>
                <table class="table table-hover" style="font-size: 10px;">
                    <thead class="fw-bold">
                        <tr class="bg-light">
                            <td>No</td>
                            <td>Nama Siswa</td>
                            <td>Prestasi</td>
                            <td>Jenis Prestasi</td>
                            <td>Bukti</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($siswa as $siswa) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $siswa->namalengkap ?></td>
                                <td><?php echo $siswa->prestasi ?></td>
                                <td><?php echo $siswa->jenisprestasi ?></td>
                                <td><img src="<?= base_url('assets/uploads/buktiprestasi/') . $siswa->buktiprestasi; ?>" alt="" style="height: 200px;"></td>
                                <td>
                                    <a href="<?php echo base_url('/crud_controller/deleteprestasi/' . $siswa->id_prestasi); ?>"> <button type="submit" class="btn" style="background-color:#FF4D4D; color: white; font-size:10px;">hapus</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

    </main>
    <footer class="py-4 bg-light " style="margin-top: 40px;">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; SMA Harapan Bangsa 2020</div>
                <div>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>