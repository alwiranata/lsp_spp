<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan-Pembayaran-SPP.xlsx");
?>
<h6 class='text-secondary'>Laporan Pembayaran SPP</h6>


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
            Tahun Spp
        </th>
        <th class="text-primary text-center">
            Nominal Dibayar
        </th>
        <th class="text-primary text-center">
            Sudah Dibayar
        </th>
        <th class="text-primary text-center">
            Tanggal Bayar
        </th>
        <th class="text-primary text-center">
            Petugas
        </th>

    </tr>
    <!-- looping data  dan relasi db-->
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql="SELECT*FROM pembayaran,siswa,kelas,spp,petugas WHERE pembayaran.nisn = siswa.nisn AND siswa.id_kelas = kelas.id_kelas AND pembayaran.id_spp = spp.id_spp AND pembayaran.id_petugas=pembayaran.id_petugas ORDER BY tgl_bayar DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach ($query as $data) {
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
                <?= "Rp"; ?><?= number_format($data['jumlah_bayar'], 2, ',', '.') ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data["tgl_bayar"] ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data["nama_petugas"] ?>
            </td>
           
            
        </tr>

    <?php } ?>
</table>
