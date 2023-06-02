<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <script>
        function konfirmasi(nip) {
            var konfirmasi = confirm("Apakah anda yakin ingin mengupdate data ini?");
            return konfirmasi;
        }
    </script>
</head>

<?php
include 'koneksi.php';
?>

<body>
    <h1>Edit Data</h1>
    <br>
    <a href="dashboard.php">Kembali</a>
    <br>

    <h3>Edit Data</h3>
    <?php
    $nip = $_GET['nip'];
    $data = mysqli_query($koneksi, "SELECT * FROM guru WHERE nip='$nip'") or die(mysqli_error());
    $no =1;
    while ($row = mysqli_fetch_assoc($data)) {
    ?>
    <form action="update.php" method="post" onsubmit="return konfirmasi(<?php echo $row['nip']; ?>);">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="hidden" name="nip" value="<?php echo $row['nip']; ?>">
                    <input type="text" pattern="[a-z A-Z]+" name="nama" value="<?php echo $row['nama']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Mata Pelajaran</td>
                <td>:</td>
                <td><input type="text" name="mapel" value="<?php echo $row['mapel']; ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Simpan" name="simpan"></td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>
</html>
