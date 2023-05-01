<!DOCTYPE html>
<html lang="en">
<head>
    <title>Studi Kasus</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
<body>
    <div class="container-fluid">
        <img src="visualhunter-33fd8316d0.png" alt="icon">
        <p class="text-center">Welcome to ChatGPT <br>
        Log in with your OpenAI account to continue</p>
        <!-- form login -->
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" placeholder="Enter username" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" placeholder="Enter password" id="password" name="password">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

<!-- php code -->
<?php
    if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) { //jika username dan password terisi
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        if ($username == "Rofiif" && $password == "admin") { //jika username dan password benar
            echo "<h2 align=center><b>Welcome, " . $username . "!</b></h2>";
        } else {
            echo "<h2 align=center><b>Username or Password is incorrect!</b></h2>";
        }
    }
?>
</body>
</html>