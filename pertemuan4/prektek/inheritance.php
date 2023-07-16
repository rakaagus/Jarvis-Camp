<?php


class Hero {
    public $nama;
    public $attk;
    public $hp;

    public function __construct($nama, $attk, $hp){
        $this->nama = $nama;
        $this->attk = $attk;
        $this->hp = $hp;
    }

    public function skill(){
        echo "$this->nama menggunakan Skill";
    }
}

class Mage extends Hero {
    public $mana;
    public $magic_attk;

    public function __construct($nama, $attk, $hp, $mana, $magic_attk)
    {
        parent::__construct($nama, $attk, $hp);
        $this->mana = $mana;
        $this->magic_attk = $magic_attk;
    }

    public function skill(){
        echo "$this->nama Menggunakan magic skill";
    }
}

$kagura = new Mage("Kagura", 50, 3200, 1000, 4000);
echo $kagura->nama;
echo "<br>";
$kagura->skill();







?>