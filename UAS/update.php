<?php
include 'koneksi.php';
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$mapel = $_POST['mapel'];
$alamat = $_POST['alamat'];

$sql = "UPDATE guru SET nama='$nama', mapel='$mapel', alamat='$alamat' WHERE nip='$nip'";
$query = mysqli_query($koneksi, $sql); 

if ($query) {
    echo "<script>alert('Data berhasil diupdate!'); window.location='dashboard.php';</script>";
} else {
    echo "<script>alert('Data gagal diupdate!'); window.location='dashboard.php';</script>";
}
?>