<?php
$koneksi = mysqli_connect("localhost" ,"root","","db_spp_ukk");

if(!$koneksi){
    echo "<script> alert(Koneksi Gagal)</script>";
}
?>