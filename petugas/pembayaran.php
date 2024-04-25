<h6 class='text-secondary'> Halaman Pilih Data Untuk Pembayaran</h6>

<table class="table table-striped mt-3 table-primary  table-bordered ">
    <tr class="fw-bold  bg-light">
        <th class="text-primary text-center">
            No
        </th>
        <th class="text-primary text-center">
            NISN
        </th>
        <th class="text-primary text-center">
            Nama
        </th>
        <th class="text-primary text-center">
            Kelas
        </th>
        <th class="text-primary text-center">
            SPP
        </th>
        <th class="text-primary text-center">
            Nominal
        </th>
        <th class="text-primary text-center">
            Sudah Dibayar
        </th>
        <th class="text-primary text-center">
            Kekurangan
        </th>
        <th class="text-primary text-center">
            Status
        </th>
        <th class="text-primary text-center">
            History
        </th>

    </tr>
    <!-- looping data  dan relasi db-->
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER By nama ASC";
    $query = mysqli_query($koneksi, $sql);
    foreach ($query as $data) {
        $data_pembayaran = mysqli_query($koneksi, "SELECT sum(jumlah_bayar) as jumlah_bayar FROM 
        pembayaran WHERE nisn = '$data[nisn]'");
        $data_pembayaran = mysqli_fetch_array($data_pembayaran);
        $sudah_dibayar = $data_pembayaran['jumlah_bayar'];
        $kekurangan = $data["nominal"] -  $data_pembayaran['jumlah_bayar'];

    ?>
        <tr>
            <td class="text-secondary text-center">
                <?= $no++ ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['nisn'] ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['nama'] ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['nama_kelas'] ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data["tahun"] ?>
            </td>
            <td class="text-secondary text-center">
                <?= "Rp"; ?><?= number_format($data['nominal'], 2, ',', '.') ?>
            </td>
            <td class="text-secondary text-center">
                <?= "Rp"; ?><?= number_format($sudah_dibayar, 2, ',', '.') ?>
            </td>
            <td class="text-secondary text-center">
                <?= "Rp"; ?><?= number_format($kekurangan, 2, ',', '.') ?>
            </td>
            <td class="text-secondary text-center">
                <?php
                if ($kekurangan == 0) {
                    echo "<span class= 'btn btn-outline-success'>Sudah Lunas</span>";
                } else { ?>
                    <a href="?url=tambah-pembayaran&nisn=<?= $data['nisn'] ?>&kekurangan=<?= $kekurangan ?>" class="btn btn-outline-danger">Pilih dan Bayar</a>
                <?php } ?>
            </td>
            <td class="text-secondary text-center">
                <a href="?url=history-pembayaran&nisn=<?= $data['nisn'] ?>" class="btn btn-outline-warning ">History</a>
            </td>
        </tr>

    <?php } ?>
</table>