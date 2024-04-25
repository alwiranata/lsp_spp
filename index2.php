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
                <h4 class="text-center text-secondary" style="font-family: 'Times New Roman', Times, serif;">LOGIN ADMIN / PETUGAS</h4>
                <div class="card text-bg-tertaris">
                    <div class="card-header">
                        <img src="./picture/spp.jpeg" width="100%" height="200px" style="border-radius: 10px;" alt="Not File">
                    </div>
                    <div class="card-body">
                        <form action="proses-login-petugas.php" method="post">
                            <div class="form-group mb-2" style="font-family: 'Times New Roman', Times, serif;">
                                <label for="Username" class="text-secondary">Username</label>
                                <input type="text" name="username" class="form-control text-secondary" placeholder="Masukkan Username anda..." required>
                            </div>
                            <div class="form-group mb-2" style="font-family: 'Times New Roman', Times, serif;">
                                <label for="Password" class="text-secondary">Password</label>
                                <input type="password" name="password" class="form-control text-secondary" placeholder="Masukkan Password anda..." required>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="btn btn-primary  form-control">Login</button>
                            </div>
                            <a class="text-center d-block" style="text-decoration: none; font-family: 'Times New Roman', Times, serif;" href="index.php">Login Sebagai Siswa</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>