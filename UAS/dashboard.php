<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script>
        function hapus(nip) {
            var konfirmasi = confirm("Apakah anda yakin ingin menghapus data ini?");
            if (konfirmasi) {
                window.location.href = "hapus.php?nip=" + nip;
            } else {
                return false;
            }
        }
    </script>
</head>

<?php
include 'koneksi.php';
?>

<body>
    <h3>Data Guru</h3>
    <h5>Menambahkan data guru</h5>
    <form action="" method="post">
        <table>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><input type="text" pattern="[0-9]+" name="nip" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" pattern="[a-z A-Z]+" name="nama" required></td>
            </tr>
            <tr>
                <td>Mata Pelajaran</td>
                <td>:</td>
                <td><select name="mapel">
                    <option value="Matematika">Matematika</option>
                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                    <option value="Fisika">Fisika</option>
                    <option value="Kimia">Kimia</option>
                    <option value="Biologi">Biologi</option>
                    <option value="Sejarah">Sejarah</option>
                    <option value="Geografi">Geografi</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="Sosiologi">Sosiologi</option>
                </select></td>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Tambah" name="tambah"></td>
            </tr>
        </table>
        <?php
        if (isset($_POST['tambah'])) {
            $nip = $_POST['nip'];
            $nama = $_POST['nama'];
            $mapel = $_POST['mapel'];
            $alamat = $_POST['alamat'];

            $sql = "INSERT INTO guru (nip, nama, mapel, alamat) VALUES ('$nip', '$nama', '$mapel', '$alamat')";
            $query = mysqli_query($koneksi, $sql);

            if ($query) {
                echo "<script>alert('Data berhasil ditambahkan!'); window.location='dashboard.php';</script>";
            } else {
                echo "<script>alert('Data gagal ditambahkan');</script>";
            }
        }
        ?>
    </form>
    <h5>Tabel Guru</h5>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Mata Pelajaran</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM guru";
        $query = mysqli_query($koneksi, $sql);

        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nip']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['mapel']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td>
                    <a href="edit.php?nip=<?php echo $data['nip']; ?>">Edit</a>
                    <a href="#" onclick="hapus('<?php echo $data['nip']; ?>')">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>