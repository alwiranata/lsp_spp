<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran SPP</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>



<body class="text-primary">
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <h4 class="text-center text-secondary" style="font-family: 'Times New Roman', Times, serif;">LOGIN SISWA</h4>
                <div class="card text-bg-tertaris">
                    <div class="card-header">
                        <img src="./picutre/student.jfif" width="100%" height="200px" style="border-radius: 10px;" alt="Not File">
                    </div>
                    <div class="card-body">
                        <form action="proses-login-siswa.php" method="post">
                            <div class="form-group mb-2" style="font-family: 'Times New Roman', Times, serif;">
                                <label for="nisn" class="text-secondary">NISN</label>
                                <input type="number" name="nisn" class="form-control text-secondary" placeholder="Masukkan NISN anda..." required>
                            </div>
                            <div class="form-group mb-2" style="font-family: 'Times New Roman', Times, serif;">
                                <label for="nis" class="text-secondary">NIS</label>
                                <input type="number" name="nis" class="form-control text-secondary" placeholder="Masukkan NIS anda..." required>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="btn btn-primary  form-control">Login</button>
                            </div>
                            <a class="text-center d-block" style="text-decoration: none; font-family: 'Times New Roman', Times, serif;" href="index2.php">Login Sebagai Administrator / Petugas</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>