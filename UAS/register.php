<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Register Page</title>
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
            width: 25%;
            height: auto;
            padding: 20px;
            margin: 10px;
        }
        .btn {
            float: right;
            background-color: #CC6600;
            border-color: #984D02;
        }
    </style>
    <script>
        function konfirmasi() {
            var konfirmasi = confirm("Apakah anda yakin ingin melakukan registrasi?");
            if (konfirmasi) {
                return konfirmasi;
            } 
        }
    </script>
</head>

<?php
include 'koneksi.php';
?>

<body>
    
    <form action="" method="post" onsubmit="return konfirmasi()">
        <h1 class="text-center">Register</h1>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukkan nama" required>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input class="form-control" type="text" name="username" id="username" placeholder="Masukkan Username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" type="text" name="password" id="password" placeholder="Masukkan password" required>
        </div>
        <button class="btn btn-primary" type="submit" name="register">Register</button>
        <?php
        if (isset($_POST['register'])) {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = mysqli_query($koneksi, "INSERT INTO users VALUES ('', '$nama', '$username', '$password')");
            if ($query) {
                ?>
                <script>
                    alert('Register berhasil! Silakan login untuk melanjutkan.');
                    document.location.href = 'login.php';
                </script>
            <?php
            } else {
                ?>
                <script>
                    alert('Register gagal! Silakan coba lagi.');
                    document.location.href = 'register.php';
                </script>
        <?php
            }
        }
        ?>
        Kembali ke halaman <a href="login.php">Log In</a>
    </form>
    
</body>
</html>