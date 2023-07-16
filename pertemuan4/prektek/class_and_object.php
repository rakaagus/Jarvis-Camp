<?php

class Mobil{
    private $merek;
    private $warna;

    public function setMerek($merek){
        $this->merek = "Mobil $merek";
    }

    public function getMerek(){
        echo $this->merek;
    }

    public function setWarna($warna){
        $this->warna = $warna;
    }

    public function getWarna(){
        echo $this->warna;
    }

    public function hidupkanMesin(){
        echo "mesin mobil dihidupkan";
    }

    public function jalan(){
        echo "mobil berjalan";
    }
}

$toyota = new Mobil();
$toyota->hidupkanMesin();
echo "<br>";
$toyota->jalan();
$toyota->setMerek("Toyota");
$toyota->setWarna("Hitam");
echo "<br>";
$toyota->getMerek();
echo "<br>";
$toyota->getWarna();

?>