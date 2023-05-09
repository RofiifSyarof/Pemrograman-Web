<!-- Menghapus session -->
<?php
    session_start();
    if (isset($_SESSION['login'])) {
        unset ($_SESSION);
        session_destroy();
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
                        <h2>Anda berhasil Log Out!</h2><br>
                        Silakan tekan tombol di bawah untuk kembali ke halaman Log In!<br>
                        <a href="tugas_praktikum.php"><h3>Log In</h3></a>
                        Tekan tombol di bawah untuk mengecek session<br>
                        <a href="tugas_praktikum2.php"><h3>Cek Session</h3></a>
                    </div>
                </body>
                </html>
    <?php    
    }
?>