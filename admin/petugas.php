<h6 class='text-secondary'> Halaman Data Petugas</h6>
<a href="?url=tambah-petugas" class="btn btn-primary"><i class="bi bi-plus-lg">Tambah</i></a>

<table class="table table-striped mt-3 table-primary  table-bordered ">
    <tr class="fw-bold  bg-light">
        <th class="text-primary text-center">
            No
        </th>
        <th class="text-primary text-center">
            Uername
        </th>
        <th class="text-primary text-center">
            Password
        </th>
        <th class="text-primary text-center">
            Nama Petugas
        </th>
        <th class="text-primary text-center">
            Level
        </th>
        <th class=" text-center">
            <i class="bi bi-gear text-primary"></i>
        </th>

    </tr>
    <!-- looping data -->
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM petugas ORDER BY id_petugas DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach ($query as $data) {
    ?>
        <tr>
            <td class="text-secondary text-center">
                <?= $no++ ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['username'] ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['password'] ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['nama_petugas'] ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['level'] ?>
            </td>
            <td class="text-secondary text-center">
                <a href="?url=edit-petugas&id_petugas=<?= $data['id_petugas'] ?>"><i class="bi bi-pencil-square text-warning"></i></a>
                <a onclick="return confirm('Yakin Ingin Hapus Data')" href="?url=hapus-petugas&id_petugas=<?= $data['id_petugas'] ?>"><i class="bi bi-trash3 text-danger"></i></a>
            </td>

        </tr>

    <?php } ?>
</table>