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
    <title>Tugas Praktikum 2</title>
</head>

<?php
include 'koneksi.php'
?>

<body style="background-color:rgba(52,53,65);">
    <section style="color: #fff">
        <div class="text-center container-fluid">
            <h2>Data Pasien</h2>
            <div class="text-center" style="display:flex; justify-content:center;">
                <table class="table-responsive" border="1" style="margin: 5;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Keluhan</th>
                    <th>Alamat</th>
                    <th>Menu</th>
                </tr>
                <?php
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM pasien");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['keluhan']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td>
                        <a href="edit.php?nama=<?php echo $data['nama']; ?>">edit</a>
                        <a href="hapus.php?nama=<?php echo $data['nama']; ?>">hapus</a>
                    </td>
                </tr>
                <?php 
                } ?>
                </table>
            </div>
        </div>
        <div>
            <h2>Tambah Data Pasien</h2>
            <form action="" method="post">
                <table class="table-responsive">
                    <tr>
                        <td>Nama</td>
                        <td>: <input type="text" name="nama" required style="color: rgba(0,0,0);"></td>
                    </tr>
                    <tr>
                        <td>Keluhan</td>
                        <td>: <input type="text" name="keluhan" required style="color: rgba(0,0,0);"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <input type="text" name="alamat" required style="color: rgba(0,0,0);"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="button_submit" type="submit" name="simpan">SIMPAN</button></td>
                    </tr>
                </table>
                <?php
                if (isset($_POST['simpan'])) {
                    $nama = $_POST['nama'];
                    $keluhan = $_POST['keluhan'];
                    $alamat = $_POST['alamat'];
                    $data = mysqli_query($koneksi, "INSERT INTO pasien (nama, keluhan, alamat) VALUES ('$nama','$keluhan','$alamat')") or die(mysqli_error());
                    if ($data) {
                        echo "Data berhasil ditambahkan!";
                    } else {
                        echo "Data gagal ditambahkan!";
                    }
                }
                ?>
            </form>
        </div>
        Tekan tombol di bawah untuk keluar dari halaman ini!
        <br>
        <a href="logout.php"><h3>Log Out</h3></a>
    </section>
</body>
</html>