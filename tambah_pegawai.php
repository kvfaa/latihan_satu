<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Pegawai</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/tambah_pegawai.css">
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="img/company.jpg" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <img src="img/logo.svg" alt="logo" class="logo">
                            </div>
                            <p class="login-card-description">Register Data Pegawai Anda</p>

                            <form action="proses_tambah_pegawai.php" method="post">
                                <div class="form-group">
                                    Nama:
                                    <label for="nama" class="sr-only">Nama</label>
                                    <input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control"
                                        placeholder="John Doe">
                                </div>
                                <div class="form-group">
                                    Gender:
                                    <select name="gender" class="form-control" id="gender">
                                        <option></option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    NIK:
                                    <label for="nik" class="sr-only">NIK</label>
                                    <input type="text" name="nik" id="nik" class="form-control"
                                        placeholder="Terdiri Dari 10 Digit">
                                </div>
                                <div class="form-group">
                                    No Telepon:
                                    <label for="nik" class="sr-only">No Telepon</label>
                                    <input type="text" name="no_phone" id="no_phone" class="form-control"
                                        placeholder="Terdiri Dari 10 Digit">
                                </div>
                                <div class="form-group">
                                    Alamat:
                                    <label for="nik" class="sr-only">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control"
                                        placeholder="JL. Kenangan">
                                </div>
                                <div class="form-group mb-4">
                                    Jabatan:
                                    <select name="id_jabatan" class="form-control" id="id_jabatan">
                                        <option></option>
                                        <?php
                                        include "koneksi.php";
                                        $qry_jabatan = mysqli_query($conn, "select * from jabatan");
                                        while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                                            echo '<option value="' . $data_jabatan['id_jabatan'] . '">' . $data_jabatan['nama_jabatan'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    Username:
                                    <label for="username" class="sr-only">Username</label>
                                    <input type="text" name="username" id="username" class="form-control"
                                        placeholder="John Doe">
                                </div>
                                <div class="form-group mb-4">
                                    Password:
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="***********">
                                </div>
                                <!-- <input name="submit" id="submit" class="btn btn-block login-btn mb-4" type="button"
                                value="Login"> -->
                                <button type="submit" name="simpan" class="btn btn-block login-btn mb-4">Tambah
                                    Pegawai</button>
                            </form>
                            <a href="#!" class="forgot-password-link">Forgot password?</a>
                            <p class="login-card-footer-text">Don't have an account? <a href="#!"
                                    class="text-reset">Register here</a></p>
                            <nav class="login-card-footer-nav">
                                <a href="#!">Terms of use.</a>
                                <a href="#!">Privacy policy</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>