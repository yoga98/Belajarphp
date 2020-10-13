<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <h2>Belajar Fungsi pada PHP</h2>
    <?php 
    //Function
    function cetak_teks($teks,$angka){
       $teks="Bahasa ".$teks." " .$angka;
        echo "------";
        echo $teks;
        echo "------";
    }
    function jarak(){
        echo "<br>";
    }
    // cetak_teks("Wilujeng Sumping",45);
    // jarak();
    // cetak_teks("Selamat datang",33);
    // jarak();
    // cetak_teks("good morning",90);

    //---mengembalikan nilai balik pada function yaitu return
    function hitung($a,$b){
        return ($a*$b);
    }
    $hasil = hitung(3,5)*10;
    // echo "<br>Hasil dari nilai ini adalah ".$hasil;
    //--------scope---------
    //cara memanggil variabel di luar scope
    //menggunakan global
    $c=10;
    $d=5;
    function etang()
    {   global $e,$d;
        $e=$c+$d;
        return $e;
    }
    // echo etang();
    //Anymous Function (fungsi yang gk punya nama)
    //hampir sama seperti function tetap harus menggunakan tutp kurang buka
    $ngetik = function(){
        echo "selamat datang";
    };
    
    //tetap harus menggunakan tutp kurung
    $ngetik();


    ?> 
</body>
</html>