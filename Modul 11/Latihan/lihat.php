<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD Dengan PHP dan MySQL - Menampilkan data dari database</title>
</head>
<body>
    <div>
        <h1>Detail Data</h1>
    </div>
    <br><br>

    <!-- PHP untuk menampilkan data -->
    <?php
    include "koneksi.php";
    $nim = $_GET['nim'];
    $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'") or die(mysqli_error());
    $no = 1;
    while($d = mysqli_fetch_array($data)){ // perulangan untuk menampilkan data secara otomatis
    ?>
        <table>
            <tr>
                <td>NIM</td>
                <td>: <?php echo $d['nim'] ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?php echo $d['nama'] ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?php echo $d['alamat'] ?></td>
            </tr>
            <tr>
            </tr>
        </table>
    <?php } ?>
        <a href="full.php"><<< Kembali Lihat Semua Data</a>
</body>
</html>