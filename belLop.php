<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Loop</title>
</head>
<body>
    <h2>Perulangan Loop</h2>
    <?php
    //*Perulangan Loor For 
    //keuntungannya bisa dibatas sesuai keinginan
    echo "<h2>Perulangan menggunakan For</h2>";
    // for($i=0; $i<5; $i++){
    //     echo "Selamat Datang Dunia<br>";
    // }
    // for ($i=0;$i<10;$i++){
    //     echo "ini adalah angka nomor $i <br>";
    // }
    //* Memnunculkan data Array
    // $hewan =['ayam','kucing','cicak','sapi'];
    // for($i=0;$i<count($hewan);$i++){
    //     echo $hewan[$i]."<br>";
    // }
    //*contoh dua data array
    $properti=['meja','kursi','lemari','kulkas','piring','gelas'];
    // for($i=0;$i<count($properti);$i++){
    //     echo "$properti[$i]<br>";
    // }
    //perulangan menggunakna foreach
    //keuntungannya mengeluarkan jumlah seluruhnya
    // foreach($properti as $h){
    //     echo "$h<br>";
    // }
    //* perulangan While
    $i=9;
    // while($i < count($properti)){
    //    echo"------------";
    //     echo $properti[$i]."<br>";
    //     $i++;
    // }
    // do while 
    do {
        echo"---";
        echo $properti[$i];
        $i++;
    } while ($i< count($properti));
    ?>
</body>
</html>