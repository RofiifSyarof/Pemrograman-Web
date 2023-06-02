<?php
include 'koneksi.php';
$nip = $_GET['nip'];
$sql = "DELETE FROM guru WHERE nip='$nip'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='dashboard.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus!'); window.location='dashboard.php';</script>";
}
?>