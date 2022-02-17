<div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
    <h3 class="text-center" style="color: rgb(0, 152, 240);">TABEL HASIL SELEKSI NILAI PESERTA DIDIK BARU</h3>
    <br>
    <table class="table table-hover" style="font-size: 10px;">
        <thead class="fw-bold">
            <tr class="bg-light">
                <td>No</td>
                <td>Foto Siswa</td>
                <td>Id peserta</td>
                <td>Nama Di Ijazah</td>
                <td>B. Indonesia</td>
                <td>B. Inggris</td>
                <td>Matematika</td>
                <td>IPA</td>
                <td>Jumlah Nilai</td>
                <!-- <td>action</td> -->
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($siswa as $siswa) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><img src="<?= base_url('assets/uploads/pasfoto/') . $siswa->pasfoto; ?>" alt="" style="height: 100px;"></td>
                    <td><?php echo $siswa->id ?></td>
                    <td><?php echo $siswa->namaijazah ?></td>
                    <td><?php echo $siswa->indonesia ?></td>
                    <td><?php echo $siswa->inggris ?></td>
                    <td><?php echo $siswa->matematika ?></td>
                    <td><?php echo $siswa->ipa ?></td>
                    <td><?php echo $siswa->jumlahnilai ?></td>
                    <!-- <td>
                        <a href="<?php echo base_url('crud_controller/edit/' . $siswa->id); ?>"> <button type="submit" class="btn" style="background-color: #01AEF0; color: white; font-size:10px;">lihat siswa</button></a>
                    </td> -->
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>