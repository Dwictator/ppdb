<div class="bg-white shadow-sm p-4" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
    <h3 class="text-center" style="color: rgb(0, 152, 240);">TABEL PENDAFTARAN SISWA PESERTA DIDIK BARU</h3>
    <br>

    <table class="table table-hover" style="font-size: 10px;">
        <thead class="fw-bold">
            <tr>
                <td>No</td>
                <td>Nomor peserta</td>
                <td>Nama Di Ijazah</td>
                <td>Tanggal Lahir</td>
                <td>NISN</td>
                <td>Alamat Siswa</td>
                <td>Asal Sekolah</td>
                <td>Alamat Asal Sekolah</td>
                <td>NPSN</td>
                <td>Foto Siswa</td>
                <td>action</td>
            </tr>
        </thead>
        <?php

        // $no = $this->uri->segment('3') + 1;

        if (isset($this->request->get['page'])) {
            $no = (int)$this->request->get['page'];
        } else {
            $no = 1;
        }

        foreach ($data_siswa as $siswa) {

        ?>

            <tr>

                <td><?php echo $no++ ?></td>
                <td><?php echo $siswa->id ?></td>
                <td><?php echo $siswa->namaijazah ?></td>
                <td><?php echo $siswa->tanggallahir ?></td>
                <td><?php echo $siswa->nisn ?></td>
                <td><?php echo $siswa->alamatsiswa ?></td>
                <td><?php echo $siswa->sekolah ?></td>
                <td><?php echo $siswa->alamatsekolah ?></td>
                <td><?php echo $siswa->npsn ?></td>
                <td><img src="<?= base_url('assets/uploads/pasfoto/') . $siswa->pasfoto; ?>" alt="" style="height: 100px;"></td>
                <td>
                    <a href="<?php echo base_url('crud_controller/edit/' . $siswa->id); ?>"> <button type="submit" class="btn" style="background-color: #01AEF0; color: white; font-size:10px;">edit</button></a>
                    <a href="<?php echo base_url('/crud_controller/delete/' . $siswa->id); ?>" onclick="return confirm('Apakah Anda Yakin?')"> <button type="submit" class="btn" style="background-color: #FF4D4D; color: white; font-size:10px;">delete</button></a>
                </td>

            </tr>

        <?php } ?>

    </table>

    <br />



    <nav>
        <div class="d-flex justify-content-center" style="letter-spacing: 20px;">
            <?php

            echo $this->pagination->create_links();

            ?>
        </div>
    </nav>

</div>