<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Dashboard</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: url("education-learning-concept-with-opening-book-textbook-old-library.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            font-family: sans-serif;
            color: #CC6600;
        }
        h1 {
            font-size: 50px;
            font-weight: 600;
            margin-top: 100px;
            background: #CC6600;
            border: 2px solid #984D02;
            border-radius: 10px;
            color: #fff;
            padding: 10px;
        }
        h2 {
            font-size: 30px;
            font-weight: 600;
            margin-bottom: 20px;
            background: #CC6600;
            border: 2px solid #984D02;
            border-radius: 10px;
            color: #fff;
            padding: 10px;
        }
        form {
            border: 2px solid #984D02;
            border-radius: 10px;
            background: #FFBB77;
            width: 35%;
            height: auto;
            padding: 20px;
            margin: 10px;
        }
        input[type=text],
        select {
            border: 1px solid #984D02;
        }
        .viewTable {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 2px solid #984D02;
            border-radius: 10px;
            background: #FFBB77;
            width: 35%;
            height: auto;
            padding: 20px;
            margin: 10px;
            color: black;
        }
        .table-bordered {
            border: 2px solid #984D02;
            background: #FFBB77;
            width: 100%;
            padding: 20px;
            border-collapse: collapse;
        }
        .table-bordered th {
            border-color: #984D02;
        }
        .btn {
            padding: 10px;
        }
        .btn-success {
            float: right;
        }
    </style>
    <script>
        function hapus(nip) {
            var konfirmasi = confirm("Apakah anda yakin ingin menghapus data ini?");
            if (konfirmasi) {
                window.location.href = "hapus.php?nip=" + nip;
            } else {
                return false;
            }
        }
        function logout() {
            var result = confirm("Apakah anda yakin ingin keluar?");
            if (result) {
                window.location.href = "logout.php";
            }
        }
    </script>
</head>

<?php
include 'koneksi.php';
?>

<body>
    <h1>DATA GURU</h1>
    <form class="form-horizontal" action="" method="post">
        <h2 class="text-center">Menambahkan Data Guru</h2>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nip">NIP:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nip" placeholder="Masukkan NIP" name="nip" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nama">Nama:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="mapel">Mata Pelajaran:</label>
            <div class="col-sm-10">
                <select name="mapel">
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
                    <option value="Seni Budaya">Seni Budaya</option>
                    <option value="Pendidikan Jasmani">Pendidikan Jasmani</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="alamat">Alamat:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" required>
            </div> 
        </div>
        <button type="submit" class="btn btn-success" name="tambah">Tambah</button>
        <button class="btn btn-danger" onclick="logout()">Log Out</button>
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
    <div class="viewTable">
        <h2 class="text-center">Tabel Guru</h2>
        <table class="table table-bordered">
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
                        <button class="btn btn-primary" onclick="location.href='edit.php?nip=<?php echo $data['nip']; ?>'">Edit</button>
                        <button class="btn btn-danger" onclick="hapus('<?php echo $data['nip']; ?>')">Hapus</button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>