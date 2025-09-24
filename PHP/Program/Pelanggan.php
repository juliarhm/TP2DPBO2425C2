<?php
require_once "Manusia.php";

class Pelanggan extends Manusia {
    private $idPelanggan;
    private $noTelp;
    private $riwayat;
    private $fotoProduk; // atribut baru untuk foto produk

    // Constructor
    public function __construct($noktp = "", $nama = "", $alamat = "", $idPelanggan = "", $noTelp = "", $riwayat = "", $fotoProduk = "") {
        parent::__construct($noktp, $nama, $alamat);
        $this->idPelanggan = $idPelanggan;
        $this->noTelp = $noTelp;
        $this->riwayat = $riwayat;
        $this->fotoProduk = $fotoProduk;
    }

    // Getter dan Setter ID Pelanggan
    public function getIdPelanggan() {
        return $this->idPelanggan;
    }

    public function setIdPelanggan($idPelanggan) {
        $this->idPelanggan = $idPelanggan;
    }

    // Getter dan Setter NoTelp
    public function getNoTelp() {
        return $this->noTelp;
    }

    public function setNoTelp($noTelp) {
        $this->noTelp = $noTelp;
    }

    // Getter dan Setter Riwayat Pesanan
    public function getRiwayat() {
        return $this->riwayat;
    }

    public function setRiwayat($riwayat) {
        $this->riwayat = $riwayat;
    }

    // Getter dan Setter Foto Produk
    public function getFotoProduk() {
        return $this->fotoProduk;
    }

    public function setFotoProduk($fotoProduk) {
        $this->fotoProduk = $fotoProduk;
    }

    // Tampilkan data
    public function tampilDataPelanggan() {
        $this->tampilDataManusia();
        echo "ID Pelanggan   : " . $this->getIdPelanggan() . PHP_EOL;
        echo "No. Telepon    : " . $this->getNoTelp() . PHP_EOL;
        echo "Riwayat Pesanan: " . $this->getRiwayat() . PHP_EOL;
        echo "Foto Produk    : " . $this->getFotoProduk() . PHP_EOL;
    }
}
?>