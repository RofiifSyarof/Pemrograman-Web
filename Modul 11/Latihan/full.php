<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>

<!-- PHP untuk menyambungkan ke database -->
<?php
include 'koneksi.php';
?>

<body>
    <h3>Data Mahasiswa</h3>
    <h5>Menambahkan data mahasiswa</h5>
    <form action="" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN" name="simpan"></td>
            </tr>
        </table>
        <!-- PHP untuk menyimpan data -->
        <?php
        if (isset($_POST['simpan'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $data = mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, nama, alamat) VALUES ('$nim','$nama','$alamat')") or die(mysqli_error());
            if ($data) {
                echo "Data berhasil ditambahkan!";
            } else {
                echo "Data gagal ditambahkan!";
            }
        }
        ?>
    </form>
    <h5>Menampilkan data mahasiswa</h5>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Menu</th>
        </tr>
        <!-- PHP untuk menampilkan data -->
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nim']?></td>
                <td><?php echo $d['nama']?></td>
                <td><?php echo $d['alamat']?></td>
                <td>
                    <a href="lihat.php?nim=<?php echo $d['nim']; ?>">Lihat</a>
                    <a href="edit.php?nim=<?php echo $d['nim']; ?>">Edit</a>
                    <a href="hapus.php?nim=<?php echo $d['nim']; ?>">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>