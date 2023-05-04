<!-- Kode untuk mengecek cookies -->
<?php
    if (isset($_COOKIE['username'])) {
        echo "<h1>Cookie 'username' ada. </h1><br> Isinya : " .$_COOKIE['username'];
    } else {
        echo "<h1>Cookie 'username' TIDAK ada.</h1>";
    }

    if (isset($_COOKIE['namalengkap'])) {
        echo "<h1>Cookie 'nama_lengkap' ada. </h1><br> Isinya : " .$_COOKIE['namalengkap'];
    } else {
        echo "<h1>Cookie 'nama_lengkap' TIDAK ada.</h1>";
    }
    echo "<h2>Klik <a href='cookies3.php'>di sini</a> untuk menghapus cookies.</h2>"
?>