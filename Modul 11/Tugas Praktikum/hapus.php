<?php
include 'koneksi.php';
$nama = $_GET['nama'];
mysqli_query($koneksi, "DELETE FROM pasien WHERE nama='$nama'") or die(mysqli_error());

header("location:Tugas Praktikum 2.php?pesan=hapus");
?>