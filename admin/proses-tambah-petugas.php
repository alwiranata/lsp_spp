<?php

$username  = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];

include "../koneksi.php";
$sql = "INSERT INTO petugas(username,password,nama_petugas,level) VALUES('$username','$password','$nama_petugas','$level')";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("Location:?url=petugas");
} else {
    echo "<script>alert('Maaf data tidak tersimpan); window.location.assign(?url=petugas)</script>";
}
