<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        input {
            color: rgba(0,0,0);
        }
    </style>
    <script>
        function edit() {
            alert("Data berhasil diubah!")
        }
    </script>
    <title>Tugas Praktikum</title>
</head>
<body style="background-color: rgba(53,52,65); color:#fff;">
    <h2>Edit Data</h2>
    <?php
    include "koneksi.php";
    $nama = $_GET['nama'];
    $query = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nama='$nama'") or die(mysqli_error($koneksi));
    $no = 1;
    while($data = mysqli_fetch_array($query)){
    ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>: <input type="hidden" name="nama" value="<?php echo $data['nama'] ?>">
                    <?php echo $data['nama'] ?></td>
            </tr>
            <tr>
                <td>Keluhan</td>
                <td><input type="hidden" name="nama" value="<?php echo $data['nama'] ?>">
                    <input type="text" name="keluhan" value="<?php echo $data['keluhan'] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN" onclick="return edit()"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
    Untuk kembali ke beranda, tekan tombol di bawah:
    <br>
    <a href="Dashboard.php">Beranda</a>
</body>
</html>