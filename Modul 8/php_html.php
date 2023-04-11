<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>

<!-- Latihan 1 Program PHP -->
<?php
    echo "Kode PHP di sini";
    // ...
?>

<p> Dokumen HTML </p>

<?php
    echo "Kode PHP di sini";
    // ...
?>

<p> Kode <?php echo "PHP";?> di HTML</p>

<!-- Latihan 2 Variabel PHP -->
<?php
    //Deklarasi dan inisialisasi
    $bil = 3;

    echo $bil;
    //output: 3

    echo "<br>";

    //Dumping informasi variabel
    var_dump($bil);
    //output: int(3)

    echo "<br>";

    print_r($bil);
    //output: 3
?>
<br><br>
<?php
    //Menggunakan konstruksi bahasa isset()
    $var = "";
    var_dump($var);
    //output: string(0) ""

    echo "<br>";

    $var = null;
    var_dump($var);
    //output: NULL
?>
<br><br>

<!-- Latihan 3 Tipe Data dan Casting PHP -->
<?php
    //Menguji tipe data menggunakan fungsi berawalan is_
    $bil = 3;
    var_dump(is_int($bil));
    //output: bool(true)

    echo "<br>";

    $var = "";
    var_dump(is_string($var));
    //output: bool(true)
?>
<br><br>
<?php
    $str = "123abc";

    //Casting nilai variabel $str ke integer
    $bil = (int)$str; // $bil = 123

    echo gettype($str);
    //output: string

    echo "<br>";

    echo gettype($bil);
    //output: integer
?>
<br><br>

<!-- Latihan 4 Pernyataan Seleksi PHP -->
<?php
    //Pernyataan if
    $a = 10;
    $b = 5;
    if ($a > $b) {
        echo "a lebih besar dari b";
    }
    echo "<br>";

    //Pernyataan if-else
    if ($a > $b) {
        echo "a lebih besar dari b";
    } else {
        echo "a lebih kecil dari b";
    }
    echo "<br>";

    //Pernyataan if-elseif-else
    if ($a > $b) {
        echo "a lebih besar dari b";
    } elseif ($a == $b) {
        echo "a sama dengan b";
    } else {
        echo "a lebih kecil dari b";
    }
    echo "<br>";

    //Pernyataan switch
    $i = 0;

    if ($i == 0) {
        echo "i sama dengan 0";
    } elseif ($i == 1) {
        echo "i sama dengan 1";
    } elseif ($i == 2) {
        echo "i sama dengan 2";
    }
    echo "<br>";

    //Ekuivalen, dengan pendekatan switch
    switch ($i) {
        case 0:
            echo "i sama dengan 0";
            break;
        case 1:
            echo "i sama dengan 1";
            break;
        case 2:
            echo "i sama dengan 2";
            break;
    }
?>
<br><br>

<!-- Latihan 5 Pengulangan PHP -->
<?php
    //Pengulangan while
    $i = 0;
    while ($i < 10) {
        echo $i;
        //Inkremen counter
        $i++;
    }
    echo "<br>";

    //Pengulangan do-while
    $i = 0;
    do {
        echo $i;
        //Inkremen counter
        $i++;
    } while ($i < 10);
    echo "<br>";

    //Pengulangan for
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }
    echo "<br>";

    //Pengulangan foreach
    $arr = array(1, 2, 3, 4, 5);
    foreach ($arr as $value) {
        echo $value;
    }
?>
<br><br>

<!-- Latihan 6 Fungsi dan Prosedur PHP -->
<?php
    //Definisi Fungsi/Prosedur
    //Contoh Prosedur
    function do_print() {
        //Mencetak informasi timestamp
        echo time();
    }

    //Memanggil Prosedur
    do_print();
    echo "<br>";

    //Contoh Fungsi Penjumlahan
    function jumlah($a, $b) {
        return $a + $b;
    }
    echo jumlah(2, 3);
    //output: 5
    echo "<br>";

    //Argumen Fungsi/Prosedur
    /**
     * Mencetak String
     * $teks nilai string
     * $bold adalah argumen opsional
     */
    function print_teks($teks, $bold = true) {
        echo $bold ? "<b>" .$teks. "</b>" : $teks;
    }
    print_teks("Indonesiaku");
    //Mencetak dengan huruf tebal
    echo "<br>";

    print_teks("Indonesiaku", false);
    //Mencetak dengan huruf reguler
?>
</body>
</html>