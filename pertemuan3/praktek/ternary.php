<?php

$hari = "Senin";
$mood = ($hari == "Sabtu")? "Full Senyum" : (($hari == "Minggu")? "Full Senyum": " Tidak Full Senyum");

echo "Hari Ini saya " . $mood;


?>