<h6 class="text-secondary">Halaman Tambah Data SPP</h6>
<a href="?url=spp" class="btn btn-primary"><i class="bi bi-dash">Kembali</i></a>

<form action="?url=proses-tambah-spp" method="post">
    <div class="form-group mb-2 mt-2">
        <label for="">Tahun</label>
        <input type="number" name="tahun" maxlength="4" class="form-control" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Nominal</label>
        <input type="number" name="nominal" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group  mt-3 d-flex justify-content-end  ">
        <button type="submit" class="btn btn-success">Simpan</button>
        <div class="btn btn-default"></div>
        <button type="reset" class="btn btn-warning text-light">Reset</button>
    </div>
</form>