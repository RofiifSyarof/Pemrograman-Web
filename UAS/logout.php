<?php
session_start();
if (isset($_SESSION['login'])) {
    unset ($_SESSION);
    session_destroy();
    ?>
    <script>
        alert("Log Out berhasil!");
        document.location.href = "login.php"
    </script>
<?php
}
?>