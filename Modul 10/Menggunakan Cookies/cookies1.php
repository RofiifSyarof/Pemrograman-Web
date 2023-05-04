<!-- Kode untuk membuat cookies -->
<?php
    $value = 'ani';
    $value2 = 'Ani Roma';
    setcookie("username", $value);
    setcookie("namalengkap", $value2, time()+3600); //loginnya expired 1 jam
    echo "<h2>Ini halaman untuk set cookies";
    echo "<h2>Klik <a href='cookies2.php'>di sini</a> untuk mengecek cookies.</h2>";
?>