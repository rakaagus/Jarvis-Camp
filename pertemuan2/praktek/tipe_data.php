<?php

// tipe data integer
$umur = 20;

var_dump($umur);

// tipe data float

$phi = 3.14;

var_dump($phi);

// tipe data string

$nama = "Raka";

var_dump($nama);

echo '<br>';

echo "Hello Semua $nama Umur Saya $umur. nilai 'Phi' adalah $phi";

// tipe data boolean
$isStudent = true;

echo "<br>";
var_dump($isStudent);

echo "<br>";
// tipe data array indexing

$siswa = ["Raka", 19, true];

echo "Halo Semua Nama saya $siswa[0], Umur saya $siswa[1].";

// tipe data array assosiatif
$mahasiswa = ["nama" => "Raka Agus Maulana", "umur" => 19, "ipk" => 3.80];
echo "<br>";
echo "Hai Saya $mahasiswa[nama], saya seorang mahasiswa dengan ipk $mahasiswa[ipk], yang berumur $mahasiswa[umur] tahun";

?>