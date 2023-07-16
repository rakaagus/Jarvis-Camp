<?php


class Kendaraan {
    public $nama;
    public $roda;
    public $bahanBakar;
    public $track;

    public function __construct($nama, $roda, $bahanBakar, $track)
    {
        $this->nama = $nama;
        $this->roda = $roda;
        $this->bahanBakar = $bahanBakar;
        $this->track = $track;
    }

    public function jalan(){
        echo "<br> $this->nama ini berjalan di $this->track";
    }
}

class Kereta extends Kendaraan {
    public $jumlah_gerbong;

    public function __construct($nama, $roda, $bahanBakar, $track, $jumlah_gerbong)
    {
        parent::__construct($nama, $roda, $bahanBakar, $track);
        $this->jumlah_gerbong = $jumlah_gerbong;
    }

    public function berenti(){
        echo "<br> $this->nama berenti di setiap stasiun yang dilintasi";
    }
}

$mrt = new Kereta("MRT", "banyak", "Listrik", "Rell", 10);
$mrt->jalan();
$mrt->berenti();

?>