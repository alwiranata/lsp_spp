<?php
$id_petugas = $_GET['id_petugas'];
include "../koneksi.php";
$sql = "SELECT*FROM petugas WHERE id_petugas='$id_petugas'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<h6 class="text-secondary">Halaman Edit Data Petugas</h6>
<a href="?url=petugas" class="btn btn-primary"><i class="bi bi-dash">Kembali</i></a>

<form action="?url=proses-edit-petugas&id_petugas=<?= $id_petugas ?>" method="post">
    <div class="form-group mb-2 mt-2">
        <label for="">Username</label>
        <input value="<?= $data['username'] ?>" type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Password</label>
        <input value="<?= $data['password'] ?>" type="password" name="password" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Nama Petugas</label>
        <input value="<?= $data['nama_petugas'] ?>" type="text" name="nama_petugas" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Petugas</label>
        <select name="level" class="form-control" required>
            <?php if ($data['level'] === 'admin') : ?>
                <!-- Jika level adalah admin, hilangkan opsi admin -->
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
            <?php elseif ($data['level'] === 'petugas') : ?>
                <!-- Jika level adalah petugas, hilangkan opsi petugas -->
                <option value="petugas">Petugas</option>
                <option value="admin">Admin</option>
            <?php else : ?>
                <!-- Jika level tidak sesuai, tampilkan kedua opsi -->
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
            <?php endif; ?>
        </select>

    </div>
    <div class="form-group  mt-3 d-flex justify-content-end">
        <button type="submit" class="btn btn-success">Simpan</button>
        <div class="btn btn-default"></div>
        <button type="reset" class="btn btn-warning text-light">Reset</button>
    </div>
</form>