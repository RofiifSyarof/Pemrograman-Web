<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo REQUEST</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> Nama
        <input type="text" name="nama"/> <br>
        <input type="submit" value="OK"/>
    </form>

<?php
    if (isset($_REQUEST['nama'])) {
        echo 'Hallo, ' . $_REQUEST['nama'];
    }
?>
</body>
</html>