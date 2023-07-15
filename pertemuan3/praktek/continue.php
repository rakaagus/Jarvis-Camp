<?php

$hewan = ["Kucing", "Kuda", "Gajah", "Kammbing", "Ayam", "Singa", "Jerapah", "Anjing", "Badak"];

for($i = 0; $i < count($hewan); $i++){
    if($hewan[$i] == "Jerapah" || $hewan[$i] == "Gajah"){
        echo "Ketemu Target <br>";
        continue;
    }
    echo $hewan[$i] . "<br>";
}

?>