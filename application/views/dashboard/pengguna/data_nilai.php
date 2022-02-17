<div id="layoutSidenav_content" style="background-color: #F0F4F5;">
    <main>
        <div class="container-fluid" style="width: 70%;">
            <div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
                <form method="POST" action="<?php echo base_url('crud_controller/update_nilai'); ?>" enctype="multipart/form-data">
                    <h3 class="text-center" style="margin-bottom: 25px; color: #28a745;">INPUT DATA NILAI</h3>
                    <h4 style="margin-top: 45px; margin-bottom: 30px;"> Data Nilai UN SMP</h4>

                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">
                            <p>contoh penulisan nilai :</p>
                        </label>
                        <div class="col-sm-8">
                            <p>8.75</p>
                        </div>
                    </div>

                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Nilai Bahasa Indonesia</label>
                        <div class="col-sm-8">
                            <input type="number" step="0.01" min="0" max="10" class="form-control" name="nilai_bi" value="<?php if (isset($siswa->indonesia)) {
                                                                                                                                echo $siswa->indonesia;
                                                                                                                            } ?>">
                            <small class="form-text text-danger"><?= form_error('nilai_bi') ?></small>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Nilai Bahasa Inggris</label>
                        <div class="col-sm-8">
                            <input type="number" step="0.01" min="0" max="10" class="form-control" name="nilai_ing" value="<?php if (isset($siswa->inggris)) {
                                                                                                                                echo $siswa->inggris;
                                                                                                                            } ?>">
                            <small class="form-text text-danger"><?= form_error('nilai_ing') ?></small>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Nilai Matematika</label>
                        <div class="col-sm-8">
                            <input type="number" step="0.01" min="0" max="10" class="form-control" name="nilai_mtk" value="<?php if (isset($siswa->matematika)) {
                                                                                                                                echo $siswa->matematika;
                                                                                                                            } ?>">
                            <small class="form-text text-danger"><?= form_error('nilai_mtk') ?></small>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 20px; color: rgb(124, 124, 124);">
                        <label for="" class="col-sm-4 col-form-label">Nilai IPA</label>
                        <div class="col-sm-8">
                            <input type="number" step="0.01" min="0" max="10" class="form-control" name="nilai_ipa" value="<?php if (isset($siswa->ipa)) {
                                                                                                                                echo $siswa->ipa;
                                                                                                                            } ?>">
                            <small class="form-text text-danger"><?= form_error('nilai_ipa') ?></small>
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

            <div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
                <h3 class="text-center" style="margin-bottom: 25px; color: #28a745;">Upload Bukti Nilai SKHUN SMP</h3>

                <div class="form-group row" style="margin-bottom: 10px;">
                    <label for="" class="col-sm-4 col-form-label" style="color: rgb(124, 124, 124);"></label>
                    <div class="col-sm-8">
                        <div class="mb-3">
                            <img src="<?= base_url('assets/uploads/buktinilai/') . $siswa->skhun; ?>" alt="" style="height: 200px;">
                        </div>
                    </div>
                </div>

                <?= form_open_multipart('Crud_controller/uploadbuktinilai'); ?>
                <div class="form-group row" style="margin-bottom: 20px;">
                    <label for="" class="col-sm-4 col-form-label" style="color: rgb(124, 124, 124);">Upload Bukti Nilai yaitu Foto SKHUN</label>
                    <div class="col-sm-8">
                        <div class="mb-3">
                            <input class="form-control form-control-sm " name="gambar" id="gambar" type="file">
                                                                                                                                  
                            <small class="form-text text-danger"><?= $this->session->flashdata('error_upload'); ?></small>
                            <?= $this->session->flashdata('message2'); ?>                                                                                                     
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