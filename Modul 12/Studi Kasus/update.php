<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$keluhan = $_POST['keluhan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE pasien SET keluhan='$keluhan', alamat='$alamat' WHERE nama='$nama'");
header("location:Dashboard.php?pesan=update");

?>