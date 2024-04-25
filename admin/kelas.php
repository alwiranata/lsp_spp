<h6 class='text-secondary'> Halaman Data Kelas</h6>
<a href="?url=tambah-kelas" class="btn btn-primary"><i class="bi bi-plus-lg">Tambah</i></a>

<table class="table table-striped mt-3 table-primary  table-bordered ">
    <tr class="fw-bold  bg-light">
        <th class="text-primary text-center">
            No
        </th>
        <th class="text-primary text-center">
            Nama Kelas
        </th>
        <th class="text-primary text-center">
            Komptensi Keahlian
        </th>
        <th class=" text-center">
            <i class="bi bi-gear text-primary"></i>
        </th>

    </tr>
    <!-- looping data -->
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM kelas ORDER BY id_kelas DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach ($query as $data) {
    ?>
        <tr>
            <td class="text-secondary text-center">
                <?= $no++ ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['nama_kelas'] ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['kompetensi_keahlian'] ?>
            </td>
            <td class="text-secondary text-center">
                <a href="?url=edit-kelas&id_kelas=<?= $data['id_kelas'] ?>"><i class="bi bi-pencil-square text-warning"></i></a>
                <a onclick="return confirm('Yakin Ingin Hapus Data')" href="?url=hapus-kelas&id_kelas=<?= $data['id_kelas'] ?>"><i class="bi bi-trash3 text-danger"></i></a>
            </td>

        </tr>

    <?php } ?>
</table>