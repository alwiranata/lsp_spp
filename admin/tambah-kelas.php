<h6 class="text-secondary">Halaman Tambah Data Kelas</h6>
<a href="?url=kelas" class="btn btn-primary"><i class="bi bi-dash">Kembali</i></a>

<form action="?url=proses-tambah-kelas" method="post">
    <div class="form-group mb-2 mt-2">
        <label for="">Nama Kelas</label>
        <input type="text" name="nama_kelas" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Kompetensi Keahlian</label>
        <input type="text" name="kompetensi_keahlian" class="form-control" required>
    </div>
    <div class="form-group  mt-3 d-flex justify-content-end  ">
        <button type="submit" class="btn btn-success">Simpan</button>
        <div class="btn btn-default"></div>
        <button type="reset" class="btn btn-warning text-light">Reset</button>
    </div>
</form>