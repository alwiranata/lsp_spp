<h6 class='text-secondary'> Halaman Data Siswa</h6>
<a href="?url=tambah-siswa" class="btn btn-primary"><i class="bi bi-plus-lg">Tambah</i></a>

<table class="table table-striped mt-3 table-primary  table-bordered ">
    <tr class="fw-bold  bg-light">
        <th class="text-primary text-center">
            No
        </th>
        <th class="text-primary text-center">
            NISN
        </th>
        <th class="text-primary text-center">
            NIS
        </th>
        <th class="text-primary text-center">
            Nama
        </th>
        <th class="text-primary text-center">
            Kelas
        </th>
        <th class="text-primary text-center">
            Alamat
        </th>
        <th class="text-primary text-center">
            Nomor Telpon
        </th>
        <th class="text-primary text-center">
            SPP
        </th>
        <th class=" text-center">
            <i class="bi bi-gear text-primary"></i>
        </th>

    </tr>
    <!-- looping data  dan relasi db-->
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER By nama ASC";
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
                <?= $data['nis'] ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['nama'] ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['nama_kelas'] ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['alamat'] ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['no_telp'] ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['tahun'] ?> - <?= "Rp"; ?><?= number_format($data['nominal'], 2, ',', '.') ?>
            </td>
            <td class="text-secondary text-center">
                <a href="?url=edit-siswa&nisn=<?= $data['nisn'] ?>"><i class="bi bi-pencil-square text-warning"></i></a>
                <a onclick="return confirm('Yakin Ingin Hapus Data')" href="?url=hapus-siswa&nisn=<?= $data['nisn'] ?>"><i class="bi bi-trash3 text-danger"></i></a>
            </td>
        </tr>

    <?php } ?>
</table>