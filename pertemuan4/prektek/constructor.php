<?php

class Leptop{
    public $merek;
    public $processor;
    public $memori;

    public function __construct($merek, $procie, $memori){
        $this->merek = $merek;
        $this->processor = $procie;
        $this->memori = $memori;
    }

    public function desc(){
        return "Merek Leptop ini adalah $this->merek, dengan prosessor $this->processor dan memorinya sebesar $this->memori";
    }
}

$lenovo = new Leptop("Lenovo", "intel i5", "8 gb");
echo $lenovo->desc();


?>