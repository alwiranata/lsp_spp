<h6 class="text-secondary">Halaman Tambah Data SPP</h6>
<a href="?url=spp" class="btn btn-primary"><i class="bi bi-dash">Kembali</i></a>

<form action="?url=proses-tambah-petugas" method="post">
    <div class="form-group mb-2 mt-2">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Password</label>
        <input type="password" name="password" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Nama Petugas</label>
        <input type="text" name="nama_petugas" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Petugas</label>
        <select name="level" class="form-control" required>
            <option value="">Pilih level petugas</option>
            <option value="admin">Admin</option>
            <option value="petugas">Petugas</option>
        </select>
    </div>
    <div class="form-group  mt-3 d-flex justify-content-end  ">
        <button type="submit" class="btn btn-success">Simpan</button>
        <div class="btn btn-default"></div>
        <button type="reset" class="btn btn-warning text-light">Reset</button>
    </div>
</form>