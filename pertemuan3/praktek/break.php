<?php


for($i = 1; $i <=10; $i++){
    if($i == 5){
        break;
    }
    echo "$i ";
}

echo "<br>";

$hewan = ["Kucing", "Kuda", "Gajah", "Jerapah"];

for($i = 0; $i < count($hewan); $i++){
    if($hewan[$i] == "Jerapah"){
        echo "Ketemu Jerapah";
        break;
    }
    echo $hewan[$i] . "<br>";
}


?>