<?php
session_start();

if (isset($_POST['Login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'root' && $password == 'admin') {
        $_SESSION['login'] = $username;
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <script>
                function logout() {
                    var result = confirm("Apakah Anda yakin ingin Log Out?")
                    if (result) {
                        window.location="logout.php";
                    }
                }
            </script>
            <title>Login Page</title>
        </head>
        <body>
            <h2>Selamat Datang!</h2>
            <h3>Silakan pilih menu di bawah ini untuk melanjutkan...</h3>
            <a href="dashboard.php">Dashboard</a>
            <a href="#" onclick="logout()">Logout</a>
        </body>
        </html>
    <?php } else {
        if ($username != 'root' && $password != 'admin') {
            ?>
            <script>
                alert('Username dan Password salah!'); 
                document.location.href='login.php';
            </script>
        <?php
        } else if ($username != 'root') {
            ?>
            <script>
                alert('Username salah!'); 
                document.location.href='login.php';
            </script>
        <?php
        } else if ($password != 'admin') {
            ?>
            <script>
                alert('Password salah!'); 
                document.location.href='login.php';
            </script>
        <?php
        }
    }
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
            function validateForm() { //metode untuk validasi form
                var x = document.getElementById("username").value;
                var y = document.getElementById("password").value;
                if (x == "" && y == "") { //jika username dan password kosong
                    alert("Username and Password must be filled out!");
                    document.getElementById("username").focus();
                    document.getElementById("username").select();
                    return false;
                }

                if (!/^[a-zA-Z]*$/g.test(x) && !/^[a-zA-Z]*$/g.test(y)) { //jika username dan password mengandung angka
                    alert("Username and Password must be filled with alphabet only!");
                    document.getElementById("username").focus();
                    document.getElementById("username").select();
                    return false;
                }
                return true;
            }
        </script>
        <title>Login Page</title>
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <button class="btn btn-primary" type="submit" name="Login">Submit</button>
        </form>
    </body>
    </html>
<?php
}
?>