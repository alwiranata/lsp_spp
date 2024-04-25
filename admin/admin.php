<?php
session_start();
if (empty($_SESSION['id_petugas'])) {
    echo '<script>alert("Maaf anda belum Login!");window.location.assign("../index2.php");</script>';
}
if ($_SESSION['level'] != "admin") {
    echo '<script>alert("Maaf anda bukan Admin!");window.location.assign("../index2.php");</script>';
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Aplikasi Pembayarn SPP</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>


<body>
    <div class="container mt-5">
        <h4 style="font-family: sans-serif; text-align:center"> Aplikasi Pembayaran SPP</h4>

        <nav class="navbar navbar-expand-lg  " style="border-radius: 10px; background-color:#e3f3fd">
            <div class="container-fluid">
                <img src="../picture/admin.jpeg" alt="not file" width="50px" style="border-radius: 100%;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse d-flex" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link bi bi-list text-bg-primary" style="border-radius: 10px; width:50px ;text-align:center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="admin.php">Administrator</a></li>
                                <li><a class="dropdown-item" href="admin.php?url=spp">SPP</a></li>
                                <li><a class="dropdown-item " href="admin.php?url=kelas">Kelas</a></li>
                                <li><a class="dropdown-item" href="admin.php?url=siswa">Siswa</a></li>
                                <li><a class="dropdown-item" href="admin.php?url=petugas">Petugas</a></li>
                                <li><a class="dropdown-item" href="admin.php?url=pembayaran">Pembayaran</a></li>
                                <li><a class="dropdown-item" href="admin.php?url=laporan">Laporan</a></li>
                                <li><a class="dropdown-item" href="admin.php?url=logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="card mt-2" style="border-radius: 10px; background-color:#e3f3fd">
            <div class="card-body">
                <!-- isi web -->
                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo  "<h6 class='text-secondary'>Halaman Administrator</h6>";
                } else {
                    include $file . '.php';
                }
                ?>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>

</body>

</html>