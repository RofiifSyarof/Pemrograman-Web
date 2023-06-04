<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: url("education-learning-concept-with-opening-book-textbook-old-library.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100;
            font-family: sans-serif;
            color: #CC6600;
        }
        form {
            margin-bottom: 10px;
        }
        input[type="text"] {
            border: 1px solid #CC6600;
        }
        h1 {
            font-size: 40px;
            font-weight: 600;
            background: #CC6600;
            border: 2px solid #984D02;
            border-radius: 10px;
            color: #fff;
            padding: 10px;
        }
        .container {
            border: 2px solid #984D02;
            border-radius: 10px;
            background: #FFBB77;
            width: 35%;
            height: auto;
            padding: 20px;
            margin: 10px;
        }
        .btn-success {
            float: right;
        }
    </style>
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
    <div class="container">
        <h1 class="text-center"><b>Edit Data</b></h1><br>

        <?php
        $nip = $_GET['nip'];
        $data = mysqli_query($koneksi, "SELECT * FROM guru WHERE nip='$nip'") or die(mysqli_error());
        $no =1;
        while ($row = mysqli_fetch_assoc($data)) {
        ?>
        <form class="form-horizontal" action="update.php" method="post" onsubmit="return konfirmasi(<?php echo $row['nip']; ?>);">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Nama:</label>
                <div class="col-sm-10">
                    <input type="hidden" name="nip" value="<?php echo $row['nip']; ?>">
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?php echo $row['nama']; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="mapel">Mata Pelajaran</label>
                <div class="col-sm-10">
                    <select name="mapel">
                        <option value="Matematika" <?php if ($row['mapel'] == 'Matematika') { echo 'selected'; } ?>>Matematika</option>
                        <option value="Bahasa Indonesia" <?php if ($row['mapel'] == 'Bahasa Indonesia') { echo 'selected'; } ?>>Bahasa Indonesia</option>
                        <option value="Bahasa Inggris" <?php if ($row['mapel'] == 'Bahasa Inggris') { echo 'selected'; } ?>>Bahasa Inggris</option>
                        <option value="Fisika" <?php if ($row['mapel'] == 'Fisika') { echo 'selected'; } ?>>Fisika</option>
                        <option value="Kimia" <?php if ($row['mapel'] == 'Kimia') { echo 'selected'; } ?>>Kimia</option>
                        <option value="Biologi" <?php if ($row['mapel'] == 'Biologi') { echo 'selected'; } ?>>Biologi</option>
                        <option value="Bahasa Indonesia" <?php if ($row['mapel'] == 'Bahasa Indonesia') { echo 'selected'; } ?>>Bahasa Indonesia</option>
                        <option value="Sejarah" <?php if ($row['mapel'] == 'Sejarah') { echo 'selected'; } ?>>Sejarah</option>
                        <option value="Geografi" <?php if ($row['mapel'] == 'Geografi') { echo 'selected'; } ?>>Geografi</option>
                        <option value="Ekonomi" <?php if ($row['mapel'] == 'Ekonomi') { echo 'selected'; } ?>>Ekonomi</option>
                        <option value="Sosiologi" <?php if ($row['mapel'] == 'Sosiologi') { echo 'selected'; } ?>>Sosiologi</option>
                        <option value="Seni Budaya" <?php if ($row['mapel'] == 'Seni Budaya') { echo 'selected'; } ?>>Seni Budaya</option>
                        <option value="Pendidikan Jasmani" <?php if ($row['mapel'] == 'Pendidikan Jasmani') { echo 'selected'; } ?>>Pendidikan Jasmani</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="alamat">Alamat:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
        </form>
        <?php
        }
        ?>
        <button class="btn btn-primary" onclick="location.href='dashboard.php'">Kembali</button>
    </div>
</body>
</html>
