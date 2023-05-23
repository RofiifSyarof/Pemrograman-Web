<?php
session_start();
if (isset($_SESSION['login'])) {
    unset ($_SESSION);
    session_destroy();
    ?>
    <script>
        alert("Anda Berhasil Log Out!");
        document.location.href = "Login Page.php";
    </script>
<?php
}
?>