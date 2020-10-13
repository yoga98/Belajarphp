<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data</title>
</head>
<body>
    <h3>Tipe Data Boolean</h3>
    <?php
    //*--Tipe data boolean ( true dan false)
    // $hasil1=true;
    // $hasil2=false;
    //*If dan else
    // $pas  ='123';
    // $pass = '123';
    // if($pass == $pas){
    //     echo "selamat anda berhasil";
    // }else{
    //     echo "gagal! pass tidak cocok";
    // }
    //* operator Penugasan 
    // $angka1=100;
    // $angka2=10;
    // if($angka1 != $angka2){
    //     echo "benar, angka tidak benar";
    // }else{
    //     echo "selamat anda salah";
    // }
    //* else if
    $uang_programmer=3000;
    $keyboard =2000;
    $uang_desainer=5000;
    // if($uang_programmer > $keyboard){
    //     echo 'beli';
    // }else if($uang_desainer > $keyboard){
    //     echo "beli sekarang";
    // }
    // else{
    //     echo"uang tidak cukup";
    // }
    // && atau ||
    if($uang_desainer>$keyboard || $uang_desainer>$keyboard){
        echo "beli";
    }else{
        echo "sama belum cukup";
    }
    echo "<br>";
    $skLeft = 5000;
    $skRight= 5000;
    $permen =4000;
    if($skLeft>$permen && $skRight>$permen){
        echo "beli semua";
    }else{
        echo "belum cukup";
    }
    ?>
</body>
</html>