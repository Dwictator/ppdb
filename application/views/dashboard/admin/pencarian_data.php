<div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
    <h3 class="text-center" style="margin-bottom: 25px; color: #01AEF0;">PENCARIAN DATA SISWA</h3>
    <form action="<?php echo base_url('index.php/admin/hasil') ?>" action="GET">
        <div class="form-group">
            <label for="cari">Ketikkan Nama Siswa Yang Ingin Dicari</label>
            <input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
        </div>
        <input class="btn btn-primary" type="submit" value="Cari">
    </form>
</div>
<div class="bg-white shadow-sm p-5" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">

    <h3 class="text-center" style="margin-bottom: 25px; color: #01AEF0;">HASIL PENCARIAN</h3>
    <h4>Hasil Pencarian : </h4>
    <?php if (isset($cari) > 0) {
        if (count($cari) > 0) {
            foreach ($cari as $data) {
                echo $data->namalengkap . " => " . $data->namalengkap . "<br>";
            }
        } else {
            echo "data tidak ditemukan";
        }
    } ?>
    <br>

    <table class="table table-hover" style="font-size: 10px;">
        <thead class="fw-bold">
            <tr class="bg-light">
                <td>No</td>
                <td>NISN Siswa</td>
                <td>Nama Siswa</td>
                <td>Nama Sekolah</td>
                <td>NPSN Sekolah</td>
                <td>Foto Siswa</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($cari) > 0) {
                if (count($cari) > 0) {

                    $no = 1;
                    foreach ($cari as $data) {
            ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->nisn ?></td>
                            <td><?php echo $data->namalengkap ?></td>
                            <td><?php echo $data->sekolah ?></td>
                            <td><?php echo $data->npsn ?></td>
                            <td><img src="<?= base_url('assets/uploads/pasfoto/') . $data->pasfoto; ?>" alt="" style="height: 200px;"></td>
                            <td>
                                <a href="<?php echo base_url('crud_controller/validasi/' . $data->id); ?>"> <button type="submit" class="btn" style="background-color:rgb(0, 152, 240); color: white; font-size:10px;">Lihat</button></a>
                            </td>
                        </tr>
            <?php }
                }
            } ?>

        </tbody>
    </table>

</div>