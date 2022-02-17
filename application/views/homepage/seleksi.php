<div class="" style="margin-top: 4rem;">
    <div class="container marketing">
        <h2 class="text-center" style="margin-top: 80px; font-family: montserrat;">Informasi PPDB Online 2021/2022</h2>
        <div class="featurette" style="align-items: center;">
            <br>
            <div class="w-100 border p-4">
                <h4 class="text-center" style="color: rgb(0, 152, 240);">TABEL HASIL SELEKSI PESERTA DIDIK BARU</h4>
                <br>
                <table class="table table-hover" style="font-size: 10px;">
                    <thead class="fw-bold">
                        <tr class="bg-light">
                            <td>No</td>
                            <td>Nama Lengkap</td>
                            <td>Asal Sekolah</td>
                            <td>Nilai B. Indonesia</td>
                            <td>Nilai B. Inggris</td>
                            <td>Nilai Matematika</td>
                            <td>Nilai IPA</td>
                            <td>Jumlah Nilai</td>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($siswa as $siswa) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $siswa->namaijazah ?></td>
                                <td><?php echo $siswa->sekolah ?></td>
                                <td><?php echo $siswa->indonesia ?></td>
                                <td><?php echo $siswa->inggris ?></td>
                                <td><?php echo $siswa->matematika ?></td>
                                <td><?php echo $siswa->ipa ?></td>
                                <td><?php echo $siswa->jumlahnilai ?></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
</main>