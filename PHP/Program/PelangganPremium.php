<?php
require_once "Pelanggan.php";

class PelangganPremium extends Pelanggan {
    private $level;
    private $diskon;
    private $point;

    // Constructor
    public function __construct(
        $noktp = "",
        $nama = "",
        $alamat = "",
        $idPelanggan = "",
        $noTelp = "",
        $riwayat = "",
        $fotoProduk = "",
        $level = "",
        $diskon = 0,
        $point = 0
    ) {
        parent::__construct($noktp, $nama, $alamat, $idPelanggan, $noTelp, $riwayat, $fotoProduk);
        $this->level = $level;
        $this->diskon = $diskon;
        $this->point = $point;
    }

    // Getter dan Setter Level
    public function getLevel() {
        return $this->level;
    }

    public function setLevel($level) {
        $this->level = $level;
    }

    // Getter dan Setter Diskon
    public function getDiskon() {
        return $this->diskon;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    // Getter dan Setter Point
    public function getPoint() {
        return $this->point;
    }

    public function setPoint($point) {
        $this->point = $point;
    }

    // Tampilkan Data
    public function tampilDataPremium() {
        $this->tampilDataPelanggan();
        echo "Level   : " . $this->getLevel() . PHP_EOL;
        echo "Diskon  : " . $this->getDiskon() . PHP_EOL;
        echo "Point   : " . $this->getPoint() . PHP_EOL;
    }
}
?>