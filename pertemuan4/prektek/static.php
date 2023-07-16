<?php


class Kucing{
    public $nama;
    public static $jumlah_kucing = 0;

    public function __construct($nama)
    {
        self::$jumlah_kucing++;
        $this->nama = $nama;
    }

    public static function jumlahKucing(){
        echo "<br> Jumlah Kucing: ". self::$jumlah_kucing;
    }
}

$oyen = new Kucing("oyen");
Kucing::jumlahKucing();

$ireng = new Kucing("Ireng");
Kucing::jumlahKucing();