<?php
if ($_POST) {
    include "koneksi.php";

    // Capture form data
    $id_pegawai = $_POST['id_pegawai'] ?? null;
    $nama_pegawai = $_POST['nama_pegawai'];
    $gender = $_POST['gender'];
    $nik = $_POST['nik'];
    $no_phone = $_POST['no_phone'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_jabatan = $_POST['id_jabatan'];

    // Check if all required fields are filled
    if (empty($nama_pegawai)) {
        echo "<script>alert('Nama pegawai tidak boleh kosong');location.href='ubah_pegawai.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='ubah_pegawai.php';</script>";
    } else {
        // Update logic
        if (empty($password)) {
            $update = mysqli_query($conn, "UPDATE pegawai SET 
                nama_pegawai='$nama_pegawai', 
                gender='$gender', 
                nik='$nik', 
                no_phone='$no_phone', 
                alamat='$alamat', 
                username='$username', 
                id_jabatan='$id_jabatan' 
                WHERE id_pegawai = '$id_pegawai'") or die(mysqli_error($conn));
        } else {
            $password_hash = md5($password);
            $update = mysqli_query($conn, "UPDATE pegawai SET 
                nama_pegawai='$nama_pegawai', 
                gender='$gender', 
                nik='$nik', 
                no_phone='$no_phone', 
                alamat='$alamat', 
                username='$username', 
                password='$password_hash', 
                id_jabatan='$id_jabatan' 
                WHERE id_pegawai = '$id_pegawai'") or die(mysqli_error($conn));
        }

        // Check if update succeeded
        if ($update) {
            echo "<script>alert('Sukses Update Pegawai');location.href='tampil.php';</script>";
        } else {
            echo "<script>alert('Gagal Update Pegawai');location.href='ubah_pegawai.php?id_pegawai=" . $id_pegawai . "';</script>";
        }
    }
}
?>