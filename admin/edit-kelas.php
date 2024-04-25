<?php
$id_kelas = $_GET['id_kelas'];
include "../koneksi.php";
$sql = "SELECT*FROM kelas WHERE id_kelas='$id_kelas'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<h6 class="text-secondary">Halaman Edit Data SPP</h6>
<a href="?url=spp" class="btn btn-primary"><i class="bi bi-dash">Kembali</i></a>

<form action="?url=proses-edit-kelas&id_kelas=<?= $id_kelas ?>" method="post">
    <div class="form-group mb-2 mt-2">
        <label for="">Tahun</label>
        <input value="<?= $data['nama_kelas'] ?>" type="text" name="nama_kelas" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Nominal</label>
        <input value="<?= $data['kompetensi_keahlian'] ?>" type="text" name="kompetensi_keahlian" class="form-control" required>
    </div>
    <div class="form-group  mt-3 d-flex justify-content-end  ">
        <button type="submit" class="btn btn-success">Simpan</button>
        <div class="btn btn-default"></div>
        <button type="reset" class="btn btn-warning text-light">Reset</button>
    </div>
</form>