<?php
// Mendapatkan nilai dari form POST
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];

// Menggunakan file koneksi.php
include 'koneksi.php';

// Query SQL untuk memeriksa keberadaan data dengan NISN dan NIS yang diberikan
$sql = "SELECT * FROM siswa WHERE nisn = '$nisn' AND nis = '$nis'";
$query = mysqli_query($koneksi, $sql);

// Memeriksa apakah query berhasil dijalankan dan mendapatkan hasil
if(mysqli_num_rows($query) > 0){
    // Memulai sesi
    session_start();
    
    // Mendapatkan data siswa
    $data = mysqli_fetch_array($query);
    
    // Menyimpan data ke dalam sesi
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['nisn'] = $data['nisn'];
    
    // Mengarahkan pengguna ke halaman siswa.php
    header('Location: siswa/siswa.php');
    exit(); // Menghentikan eksekusi skrip setelah mengarahkan pengguna
} else {
    // Menampilkan pesan kesalahan dan mengarahkan kembali ke halaman index.php
    echo '<script>alert("NISN / NIS Salah");window.location.assign("index.php");</script>';
    exit(); // Menghentikan eksekusi skrip setelah menampilkan pesan kesalahan
}
?>
