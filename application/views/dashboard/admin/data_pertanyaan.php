<div class="bg-white shadow-sm p-4" style="border-radius: 15px; margin-top: 40px; margin-left: 10px; margin-right: 10px;">
    <h3 class="text-center" style="color: rgb(0, 152, 240);">TABEL PESAN PERTANYAAN</h3>
    <br>
    <table class="table table-hover" style="font-size: 10px;">
        <thead class="fw-bold">
            <tr class="bg-light">
                <td>No</td>
                <td>Nama Pengirim</td>
                <td>email Pengirim</td>
                <td>Subyek Pertanyaan</td>
                <td>Pesan Pertanyaan</td>
                <td>Tanggal Pertanyaan</td>

            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($pesan as $pesan) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $pesan->nama ?></td>
                    <td><?php echo $pesan->email ?></td>
                    <td><?php echo $pesan->subyek ?></td>
                    <td><?php echo $pesan->pesan ?></td>
                    <td><?php echo $pesan->tanggal ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>