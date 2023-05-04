<!-- Kode untuk menghapus session -->
<?php
    session_start();
    if (isset($_SESSION['login'])) {
        unset ($_SESSION);
        session_destroy();
        echo "<h1>Anda sudah berhasil logout/keluar</h1>";
        echo "<h1>Klik <a href='session.php'>di sini</a> untuk login lagi. <br>Kamu tidak bisa masuk ke <a href='session2.php'>HOME (beranda)</a>lagi.</h2>";
    }
?>