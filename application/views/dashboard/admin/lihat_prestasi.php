<div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">

    <h3 class="text-center" style="margin-bottom: 25px; color: rgb(0, 152, 240);">Data Prestasi Siswa</h3>
    <br>
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
            foreach ($siswa as $siswa) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $siswa->namalengkap ?></td>
                    <td><?php echo $siswa->prestasi ?></td>
                    <td><?php echo $siswa->jenisprestasi ?></td>
                    <td><img src="<?= base_url('assets/uploads/buktiprestasi/') . $siswa->buktiprestasi; ?>" alt="" style="height: 200px;"></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="<?php echo base_url('admin/seleksi_prestasi') ?>">
        Kembali Ke Tabel Seleksi Prestasi
    </a>
</div>