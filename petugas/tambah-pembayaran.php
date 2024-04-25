<?php
$nisn = $_GET['nisn'];
$kekurangan = $_GET['kekurangan'] ;

include "../koneksi.php";
$sql = "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND nisn = '$nisn'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<h6 class="text-secondary">Halaman Tambah Data Pembayaran</h6>
<a href="?url=pembayaran" class="btn btn-primary"><i class="bi bi-dash">Kembali</i></a>

<form action="?url=proses-tambah-pembayaran&nisn=<?= $nisn ?>" method="post">
<input value="<?= $data['id_spp'] ?>" type="text" name="id_spp" class="form-control" hidden>


    <div class="form-group mb-2 mt-2">
        <label for="">Nama Petugas</label>
        <input value="<?= $_SESSION['nama_petugas'] ?>" type="text"  class="form-control" readonly>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">NISN</label>
        <input value="<?= $data['nisn'] ?>" type="text" name="nisn" class="form-control" readonly>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Siswa</label>
        <input  value="<?= $data['nama'] ?>" type="text"  class="form-control" readonly>
    </div>
    <div class="from-group mb-2 mt-2"><label for="">
        Tanggal Bayar</label>
        <input type="date" class="form-control" name="tgl_bayar" required>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Bulan Bayar</label>
        <select name="bulan_dibayar" class="form-control"  required>
            <option value="" >Pilih Bulan Dibayar</option>
            <option value="Januari" >Januari</option>
            <option value="Februari" >Februari</option>
            <option value="Maret" >Maret</option>
            <option value="April" >April</option>
            <option value="Mei" >Mei</option>
            <option value="Juni" >Juni</option>
            <option value="Juli" >Juli</option>
            <option value="Agustus" >Agustus</option>
            <option value="September" >September</option>
            <option value="Oktober" >Oktober</option>
            <option value="November" >November</option>
            <option value="Desember" >Desember</option>
        </select>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Tahun Bayar</label>
        <select name="tahun_dibayar" class="form-control">
            <option value="">Pilih Tahun Dibayar</option>
            <?php
            for($i=2010 ; $i<= date('Y');$i++){
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group mb-2 mt-2">
        <label for="">Jumlah yang harus dibayarkan adalah <b>Rp<?= number_format($kekurangan , 2, ',', '.')?></b></label>
        <input  type="number" name="jumlah_bayar" max="<?= $kekurangan ?>" class="form-control">
    </div>
    <div class="form-group  mt-3 d-flex justify-content-end  ">
        <button type="submit" class="btn btn-success">Simpan</button>
        <div class="btn btn-default"></div>
        <button type="reset" class="btn btn-warning text-light">Reset</button>
    </div>
</form>