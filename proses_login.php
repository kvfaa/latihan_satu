<?php
if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username)) {
        echo "<script> alert ('Username Tidak Boleh Kosong');location.href='login.php:</script>";
    } elseif (empty($password)) {
        echo "<script> alert ('Password Tidak Boleh Kosong');location.href='login.php:</script>";
    } else {
        include "koneksi.php";
        $qry_login = mysqli_query($conn, "select * from pegawai where username = '" . $username . "' and password = '" . md5($password) . "'");
        if (mysqli_num_rows($qry_login) > 0) {
            $data_login = mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION['id_pegawai'] = $data_login['id_pegawai'];
            $_SESSION['nama_pegawai'] = $data_login['nama_pegawai'];
            $_SESSION['status_login'] = true;
            header("location:tampil.php");
        } else {
            echo "<script> alert ('Username dan Password tidak benar');location.href='login.php';</script>";
        }
    }
}


?>