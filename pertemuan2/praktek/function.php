<?php

function penjumlahan($nilai1, $nilai2){
    echo "<br>";
    $hasil = $nilai1 + $nilai2;
    echo $hasil;
}

function perkalian($nilai1, $nilai2){
    return $nilai1 * $nilai2;
}

$penjumlahan1 = penjumlahan(5, 20);
$penjumlahan2 = penjumlahan(290, 850);

// mengkalikan hasil penjulahan pertama dan kedua

echo perkalian($penjumlahan1, $penjumlahan2);

?>