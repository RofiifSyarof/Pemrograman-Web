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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Tugas Praktikum</title>
    </head>
    <body style="background-color:rgba(53,52,65);color:#fff;">
        <h2>Anda Berhasil Log Out!</h2><br>
        Silakan tekan tombol di bawah untuk kembali ke halaman Log In!<br>
        <a href="Tugas Praktikum 1.php"><h3>Log In</h3></a>
    </body>
    </html>
<?php
}
?>