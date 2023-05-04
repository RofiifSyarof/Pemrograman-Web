<!-- Kode untuk menciptakan session -->
<?php
    session_start();
    if (isset($_POST['Login'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        //periksa login
            if ($user == "ani" && $pass = "1111") {
                //menciptakan session
                $_SESSION['login'] = $user;
                //menuju ke halaman pemeriksaan session
                echo "<h1>Halo, kamu berhasil login</h1>";
                echo "<h2>Klik <a href='session2.php'>di sini (session2.php)</a> untuk menuju ke halaman pemeriksaan session";
            } else { //jika login gagal
                die("Username atau Password Anda salah. Silahkan kembali <a href='session.php'>Login</a>");
            }
        } else {
            ?>
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Login di sini</title>
                </head>
                <body>
                    <form action="" method="post">
                        <h2>Login di sini</h2>
                        Username : <input type="text" name="user"><br>
                        Password : <input type="password" name="pass"><br>
                        <input type="submit" name="Login" value="Log In">
                    </form>
                </body>
            </html>
        <?php 
        } ?>   