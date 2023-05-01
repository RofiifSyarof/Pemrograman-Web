<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Default pada Radio Button</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Jenis Kelamin
        <!-- Nilai default pada radio button dapat diberikan dengan menambahkan atribut checked pada elemen radio button -->
        <input type="radio" name="sex" value="Pria"> Pria
        <input type="radio" name="sex" value="Wanita"> Wanita 
        <input type="radio" name="sex" value="Anon" checked> Tidak Disebutkan <br>
        <input type="submit" value="OK">
    </form>
</body>
</html>