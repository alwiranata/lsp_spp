<?php
$nisn = $_GET['nisn'];
include "../koneksi.php";
$sql = "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<h6 class="text-secondary">Halaman Edit Data Siswa</h6>
<a href="?url=siswa" class="btn btn-primary"><i class="bi bi-dash">Kembali</i></a>

<form action="?url=proses-edit-siswa&nisn=<?= $nisn ?>" method="post">
    <div class="form-group mb-2 mt-2">
        <label for="">NISN</label>
        <input value="<?= $data['nisn'] ?>" type="number" name="nisn" class="form-control" readonly>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">NIS</label>
        <input value="<?= $data['nis'] ?>" type="number" name="nis" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Nama</label>
        <input value="<?= $data['nama'] ?>" type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="kelas">Kelas</label>
        <select name="id_kelas" class="form-control" required>
            <option value="<?= $data['id_kelas'] ?>"><?= $data['nama_kelas'] ?></option>
            <?php
            include '../koneksi.php';
            $kelas = mysqli_query($koneksi, "SELECT*FROM kelas ORDER BY nama_kelas ASC");
            foreach ($kelas as $data_kelas) {
            ?>
                <option value="<?= $data_kelas['id_kelas'] ?>"><?= $data_kelas['nama_kelas'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-btn-group mb-2 mt-2">
        <label for="">Alamat</label>
        <textarea name="alamat" class="form-control" required><?= $data['alamat'] ?></textarea>
    </div>
    <div class=" form-group mb-2 mt-2">
        <label for="">Nomor Telpon</label>
        <input value="<?= $data['no_telp'] ?>" type="number" name="no_telp" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="kelas">SPP</label>
        <select name="id_spp" class="form-control" required>
            <option value="<?= $data['id_spp'] ?>"><?= $data['tahun'] ?> - <?= "Rp"; ?><?= number_format($data['nominal'], 2, ',', '.') ?></option>
            <?php
            include '../koneksi.php';
            $kelas = mysqli_query($koneksi, "SELECT*FROM spp ORDER By id_spp ASC");
            foreach ($kelas as $data_spp) {
            ?>
                <option value="<?= $data_spp['id_spp'] ?>"><?= $data_spp['tahun'] ?> - <?= "Rp"; ?><?= number_format($data_spp['nominal'], 2, ',', '.') ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group  mt-3 d-flex justify-content-end  ">
        <button type="submit" class="btn btn-success">Simpan</button>
        <div class="btn btn-default"></div>
        <button type="reset" class="btn btn-warning text-light">Reset</button>
    </div>
</form>