<?php
session_start();
if (isset($_POST['Login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
        if ($username == "Rofiif" && $password == "admin") {
            $_SESSION['login'] = $username;
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Tugas Praktikum 1</title>
                <link rel="stylesheet" href="style.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            </head>
            <body style="background-color: rgba(52,53,65);">
                <section style="color: #fff">
                    <div style="display: flex; 
                    width: 100%; height: 100vh; 
                    background-color: rgba(52,53,65); 
                    justify-content: center; 
                    align-items: center; 
                    flex-direction: column;">
                        <h2>Kamu berhasil Log In!</h2>
                        <p>Silakan pilih tombol di bawah untuk melanjutkan...</p>
                        <a href="Tugas Praktikum 2.php">Beranda</a><br>
                        <a href="logout.php">Log out</a>
                    </div>
                </section>
            </body>
            </html>
        <?php
        } else {
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Tugas Praktikum 1</title>
                <link rel="stylesheet" href="style.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            </head>
            <body style="background-color: rgba(52,53,65);color:#fff;">
                <div class="container-fluid text-center"
                style="display: flex; 
                    width: 100%; height: 100vh; 
                    background-color: rgba(52,53,65); 
                    justify-content: center; 
                    align-items: center; 
                    flex-direction: column;">
                    <h2>Username atau Password Anda salah!</h2><br>
                    Silakan tekan tombol di bawah untuk kembali ke halaman Log In!<br>
                    <a href="Tugas Praktikum 1.php"><h3>Log In</h3></a>
                </div>
            </body>
            </html>
        <?php
        }
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Tugas Praktikum 1</title>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="style.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

            <!-- javascript validation -->
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

        </head>
        <body style="background-color:rgba(52,53,65);">
            <section style="color: #fff">
                <div style="display: flex; width: 100%; height: 100vh; background-color: rgba(52,53,65); justify-content: center; align-items: center; flex-direction: column;">
                    <img src="visualhunter-33fd8316d0.png" alt="icon">
                    <p class="text-center">Welcome to <s>ChatGPT</s> <br>
                    Log in with your OpenAI account to continue</p>
                    <!-- form login -->
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" placeholder="Enter username" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" id="password" name="password">
                        </div>
                        <button class="button_submit" type="submit" name="Login">Submit</button>
                    </form>
                </div>
            </section>
        </body>
    </html>
<?php
}
?>
