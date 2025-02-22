<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/tambah_pegawai.css">
    <title>Document</title>
</head>

<body>

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
                        <p class="login-card-description">Sign into your account</p>
                        <form action="proses_login.php" method="post">
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
                            <button type="submit" name="simpan" class="btn btn-block login-btn mb-4">Login</button>
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


        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>



</html>