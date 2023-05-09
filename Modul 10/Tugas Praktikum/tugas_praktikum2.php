<!-- Memeberikan session pada halaman web -->
<?php
    session_start();
    if (isset($_SESSION['login'])) { //jika login sudah berhasil maka menampilkan isi session
        ?>
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
                    <title>Tugas Praktikum</title>
                </head>
                <body>
                    <div class="container-fluid text-center">
                        <h2>Selamat datang, <?php echo $_SESSION['login']?>!</h2>
                        Ini adalah beranda milik kamu!<br>
                        Tekan tombol di bawah ini untuk mengakhiri session!<br>
                        <a href="tugas_praktikum3.php"><h3>Log out</h3></a>
                    </div>
                </body>
                </html>
    <?php            
    } else {
        ?>
        <!-- session tidak muncul karena belum login atau belum berhasil login -->
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
                    <title>Tugas Praktikum</title>
                </head>
                <body>
                    <div class="container-fluid text-center">
                        <h2>Anda belum berhasil Log In!</h2><br>
                        Silakan tekan tombol di bawah untuk kembali ke halaman Log In!<br>
                        <a href="tugas_praktikum.php"><h3>Log In</h3></a>
                    </div>
                </body>
                </html>
    <?php
    }?>