<div class="" style="margin-top: 4rem;">
    <div class="container marketing">
        <h2 class="text-center" style="margin-top: 60px; font-family: montserrat;">Kontak Kami</h2>
        <br>
        <div class="d-flex">
            <div class="w-50 p-4">
                <form method="POST" action="<?php echo base_url() . 'index.php/crud_controller/buat_pesan'; ?>">
                    <div class="s-12 m-12 l-6">
                        <h5 style="font-family: montserrat;">Jika ada yang ingin ditanyakan silahkan tulis pesan untuk kami </h5>
                        <br>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tuliskan Nama Anda</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tuliskan Email Anda</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@email.com" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Subyek</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="subyek">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Tuliskan Pesan Anda</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="pesan" maxlength="256"></textarea>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <button type="submit" class="btn btn-primary w-100">Kirim</button>
                    </div>
                </form>
            </div>

            <div class="featurette w-50 p-4" style="align-items: center;">
                <h5 style="font-family: montserrat;">SMA Harapan Bangsa</h5>
                <p class="text-muted">Mendidik lulusan generasi emas dengan dan kemampuan global, kompeten, bertata krama berdasarkan budaya indonesia serta mampu berguna di masyarakat</p>
                <br>


                <h5 style="font-family: montserrat;">Kontak SMA Harapan Bangsa</h5>
                <p class="text-muted">Social media kami:</p>
                <br>
                <table class="table">
                    <tr>
                        <td><i class="fas fa-map-marker-alt text-info"></i></td>
                        <td>Jalan no 4, Condong catur, Sleman, Yograkarta, 55581</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-phone-alt fa-lg text-info"></i></td>
                        <td>+62 277 1212 9999</td>
                    </tr>
                    <tr>
                        <td><i class="far fa-envelope fa-lg text-info"></i></td>
                        <td>sekolah@email.com</td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-facebook fa-lg text-info"></i></td>
                        <td>SMA Harapan Bangsa</td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-instagram fa-lg text-info"></i></td>
                        <td>@SMAHarapanBangsa</td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-twitter fa-lg text-info"></i></td>
                        <td>@SMAHarapanBangsa</td>
                    </tr>
                </table>

            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>
</main>