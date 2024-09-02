<?php
if ($_POST)


    $nama_pegawai = $_POST['nama_pegawai'];
$gender = $_POST['gender'];
$nik = $_POST['nik'];
$no_phone = $_POST['no_phone'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];
$id_jabatan = $_POST['id_jabatan'];

if (empty($nama_pegawai)) {
    echo "<script>alert('Nama Pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
} elseif (empty($username)) {
    echo "<script>alert('Username tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
} elseif (empty($password)) {
    echo "<script>alert('Password tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
} else {
    include "koneksi.php";
    $insert = mysqli_query($conn, "insert into pegawai (nama_pegawai, gender, nik, no_phone, alamat, username, password, id_jabatan) 
    value ('" . $nama_pegawai . "','" . $gender . "','" . $nik . "','" . $no_phone . "','" . $alamat . "','" . $username . "','" . md5($password) . "','" . $id_jabatan . "')") or die(mysqli_error($conn));
    if ($insert) {
        echo "<script>alert('Sukses menambahkan Pegawai');location.href='tambah_pegawai.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan Pegawai');location.href='tambah_pegawai.php';</script>";
    }
}

header("Location: tampil.php");
exit();
?>