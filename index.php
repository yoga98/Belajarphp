<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h2>Tipe String Data</h2>
    <!-- tag php -->
    <?php 
    //ini adalah variabel 
    $nama ="yoga muhamad rimba andika";
    $alamat="Kabupaten tasikmalaya ";
    //ini pemanggilan php
    echo "Perkenalkan saya \$nama tinggal di $alamat";
    echo "<hr>";
    //ini adalah operator +,-,*,% 
    $angka1=10;
    $angka2=20;
    //cara pertama
    echo "ini adalah angka $angka1";
    echo "ini adalah operator <br>";
    echo "Hasil dari penambahan 10 + 20 = $angka1 + $angka2 <br>";
    echo "Hasil dari penguranga 10 - 20 = $angka1 - $angka2 <br>";
    echo "Hasil dari perkalian 10 * 20  = $angka1 * $angka2 <br>";
    echo "hasil dari pembagian dari 10 %20 = $angka1 % $angka2";
    //cara kedua
    echo "<hr>";
    $hasil1=5;
    $hasil2=10;
    $tambah= $hasil1 + $hasil2;
    $kurang=$hasil1 - $hasil2;
    $kali= $hasil1 * $hasil2;
    $bagi=$hasil1 % $hasil2;
    $incre=$hasil1++;
    $decre=$hasil2--;
    echo "ini tambah $tambah <br>";
    echo "ini kuranng $kurang <br>";
    echo "ini kali $kali <br>";
    echo "ini bagi $bagi <br>";
    echo "<hr>";
    //math
    /*
    ini adalah round mengembalikan bilangan bulat
    */
    $desimal = 12.091;
    echo "Hasilnya adalah ".round($desimal);
    echo "<br>";
    //ini adalah rand mengacak angka dari dua parameter/nilai
    echo "hasil acak dari dadu adalaha ".rand(1,10);
    //mencari nilai tertinggi Max
    //bisa menggunakan int langsung atau menggunakan variabel
    echo "hasil tertingginya adalah ".max(12,90);
    echo "<br>";
    //menggunakan variabel
    $ting=12;
    $kec=4;
    echo "hasilnya adalah ".max($ting,$kec);
    echo "<br>";
    //mencari nilai terkecil min
    echo "nilai terkecil adalah ".min($ting, $kec)
   ?>
    <!-- akhir php -->
</body>
</html>