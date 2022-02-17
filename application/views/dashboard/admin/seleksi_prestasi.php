<?php

// menghubungkan dengan koneksi database
// koneksi database
$koneksi = mysqli_connect('localhost', 'id15889567_root', 'Bjsn%{0Y}Jqg=\4-', 'id15889567_ppdb');

?>

<div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
    <h3 class="text-center" style="margin-bottom: 25px; color: rgb(0, 152, 240);">SELEKSI PRESTASI SISWA</h3>
    <br>
    <table class="table table-hover" style="font-size: 10px;">
        <thead class="fw-bold">
            <tr class="bg-light">
                <td>No</td>
                <td>NISN</td>
                <td>Nama Siswa</td>
                <td>Prestasi</td>
                <td>Jenis Prestasi</td>
                <td>Bukti</td>
                <td>total Prestasi</td>
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
                    <td><?php echo $siswa->nisn ?></td>
                    <td><?php echo $siswa->namalengkap ?></td>
                    <td><?php echo $siswa->prestasi ?></td>
                    <td><?php echo $siswa->jenisprestasi ?></td>
                    <td><img src="<?= base_url('assets/uploads/buktiprestasi/') . $siswa->buktiprestasi; ?>" alt="" style="height: 200px;"></td>
                    <td><?php $jumlah_mhs = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_prestasi WHERE id =$siswa->id;"));
                        echo $jumlah_mhs; ?></td>
                    <td>
                        <a href="<?php echo base_url('crud_controller/lihatprestasi/' . $siswa->id); ?>"> <button type="submit" class="btn" style="background-color:rgb(0, 152, 240); color: white; font-size:10px;">Lihat</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>