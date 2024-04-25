<h6 class="text-secondary">Halaman Tambah Data Siswa</h6>
<a href="?url=siswa" class="btn btn-primary"><i class="bi bi-dash">Kembali</i></a>

<form action="?url=proses-tambah-siswa" method="post">
    <div class="form-group mb-2 mt-2">
        <label for="">NISN</label>
        <input type="number" name="nisn" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">NIS</label>
        <input type="number" name="nis" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="kelas">Kelas</label>
        <select name="id_kelas" class="form-control" required>
            <option value="">Pilih Kelas</option>
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
        <textarea name="alamat" class="form-control" required></textarea>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Nomor Telpon</label>
        <input type="number" name="no_telp" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="kelas">SPP</label>
        <select name="id_spp" class="form-control" required>
            <option value="">Pilih SPP</option>
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