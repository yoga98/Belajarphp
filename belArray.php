<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
</head>
<body>
    <h2>Belajar Array</h2>
    <?php
        //tipe data array dan pemanggila
        //array di panggil menggunakan print_r
        echo "<h3>cara pemanggilan pertama <br></h3>";
        $hewan= array('kucing','sapi','ayam','jebra');
        print_r($hewan);
        echo "<hr>";    
        //cara kedua pemanggilan array
        $nama=['yoga','dewi','ririn'];
        echo $nama[0];
    ?>
    <?php
    //metode Array 
    //array_unique => hanya menampilkan yang unik saja bila ada yang double maka akan menampilkan 1
    echo "<h2>Metode dalam Array</h2>";
    print_r(array_unique($hewan));
    echo "<br>";
    //array _reverse membalikan array di tampilkan dari belakang
    print_r(array_reverse($nama));
    echo "<br>";
    //shuffle => mengacak array bisa digunakan game pazzle
    //caranya harus di shuffle terlebih dahulu baru dipanggin tampilkan
    // shuffle($nama);
    // print_r($nama);

    //count adalah jumlah dari isi array kita
    // echo"Jumlah dalam array adalah ".count($hewan)
    //sort adalah mengurutkan sebuah kalimat berdasarkan abjad 
    //atau jika angka maka akan mengurutkan berdasarkan angka pertama
    //sama seperti suffle harus terlebih dahulu dideklarasikan
    // sort($hewan);
    // print_r($hewan);
    $angka = [5,1,2,4,7,8,9];
    sort($angka);
    print_r($angka)
    ?>
    <br>
    <?php
    //Associaty array
    //ciri associaty arra mempunya kiy/kunci
    $data=array(
        "nama"=>'yoga',
        'umur'=>22,
        'Pekerjaan'=>'Freelance'
    );
    //cara mengganti jika data sudah dinamin
    $data['nama']='yoga muhamad rimba andika';
    //pemanggilan
    echo "nama saya adalah " .$data['nama'];
    ?>
    <br>
    <?php 
    //Multi dimensi array
    $data=array(
        array('Yoga','21','tekun'),
        array('dewi','20','rajin'),
        array('ririn','26','berjiwa semangat'),
    );
    // cara bacanya array ke samping ccntoh 
    //00 01 02 03 dst
    //cara baca ke bawah 00 11 22
    // print_r($data);
    $data[0][0]="yoga muhamad Rimba andika";
    echo $data[0][0];
    var_dump($data);
    ?>
</body>
</html>