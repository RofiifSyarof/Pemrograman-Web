<!-- Kode untuk memeriksa session -->
<?php
    session_start();
    if (isset($_SESSION['login'])) { //jika login sudah berhasil maka menampilkan isi session
        echo "<h1>Selamat datang, ". $_SESSION['login'] ."</h1>";
        echo "<h2>Halaman ini bisa tampil jika berhasil login. ini adalah HOME (beranda) kamu.</h2>";
        echo "<h2>Klik <a href='session3.php'>di sini (session3.php)</a> untuk logout (keluar)</h2>";
    } else {
        //session tidak muncul karena belum login atau belum berhasil login
        die ("Anda belum login! Login dulu <a href='session.php'>di sini</a>");
    }
?>