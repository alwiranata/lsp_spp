<h6 class='text-secondary'> Halaman Data SPP</h6>
<a href="?url=tambah-spp" class="btn btn-primary"><i class="bi bi-plus-lg">Tambah</i></a>

<table class="table table-striped mt-3 table-primary  table-bordered ">
    <tr class="fw-bold  bg-light">
        <th class="text-primary text-center">
            No
        </th>
        <th class="text-primary text-center">
            Tahun
        </th>
        <th class="text-primary text-center">
            Nominal
        </th>
        <th class=" text-center">
            <i class="bi bi-gear text-primary"></i>
        </th>

    </tr>
    <!-- looping data -->
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM spp ORDER BY id_spp DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach ($query as $data) {
    ?>
        <tr>
            <td class="text-secondary text-center">
                <?= $no++ ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['tahun'] ?>
            </td>
            <td class="text-secondary text-center">
                <?= $data['nominal'] ?>
            </td>
            <td class="text-secondary text-center">
                <a href="?url=edit-spp&id_spp=<?= $data['id_spp'] ?>"><i class="bi bi-pencil-square text-warning"></i></a>
                <a onclick="return confirm('Yakin Ingin Hapus Data')" href="?url=hapus-spp&id_spp=<?= $data['id_spp'] ?>"><i class="bi bi-trash3 text-danger"></i></a>
            </td>

        </tr>

    <?php } ?>
</table>