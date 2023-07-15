<?php


$hari = "Sabtu";
$pakaian;

switch($hari){
    case "Senin":
        $pakaian = "Senin | Baju Abu Putih";
        break;
    case "Selasa":
        $pakaian = "Selasa | Baju Abu Putih";
        break;
    case "Rabu":
        $pakaian = "Rabu | Baju Pramuka";
        break;
    case "Kamis":
        $pakaian = "Kamis | Baju Batik";
        break;
    case "Jum'at":
        $pakaian = "Jum'at | Baju Koko";
        break;
    case "Sabtu":
    case "Minggu":
        $pakaian = "Sabtu Minggu | Libur Baju Bebas";
        break;       
    default: 
        $pakaian = "Baju Tefa";
        break;           
}

echo "Hari ini saya pakai baju " . $pakaian;


?>