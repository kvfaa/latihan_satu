<?php
session_start();
if ($_SESSION['status_login'] != true) {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/tampil.css">
    <title></title>
</head>

<body>
    <div class="container"
        style="min-height: 70vh; display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <div class="card p-4" style="width: 100%; max-width: 1000px;">
            <h3>Tampil Data Pegawai</h3>
            <br>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>GENDER</th>
                        <th>NIK</th>
                        <th>NO TELEPON</th>
                        <th>ALAMAT</th>
                        <th>USERNAME</th>
                        <th>JABATAN</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $qry_pegawai = mysqli_query($conn, "SELECT * FROM pegawai JOIN jabatan ON jabatan.id_jabatan = pegawai.id_jabatan");
                    $no = 0;
                    while ($data_pegawai = mysqli_fetch_array($qry_pegawai)) {
                        $no++;
                        ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data_pegawai['nama_pegawai'] ?></td>
                            <td><?= $data_pegawai['gender'] ?></td>
                            <td><?= $data_pegawai['nik'] ?></td>
                            <td><?= $data_pegawai['no_phone'] ?></td>
                            <td><?= $data_pegawai['alamat'] ?></td>
                            <td><?= $data_pegawai['username'] ?></td>
                            <td><?= $data_pegawai['nama_jabatan'] ?></td>
                            <td><a href="ubah_pegawai.php?id_pegawai=<?= $data_pegawai['id_pegawai'] ?>"
                                    class="btn btn-success">Ubah</a>
                                <a href="hapus_pegawai.php?id_pegawai=<?= $data_pegawai['id_pegawai'] ?>"
                                    onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                                    class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
        <div class="card p-4" style="width: 100%; max-width: 1000px;">
            <a href="tambah_pegawai.php" class="btn btn-success">Tambah</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
</body>

</html>