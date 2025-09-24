<?php
class Manusia {
    private $noktp;
    private $nama;
    private $alamat;

    // Constructor
    public function __construct($noktp = "", $nama = "", $alamat = "") {
        $this->noktp = $noktp;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    // Getter dan Setter NoKTP
    public function getNoktp() {
        return $this->noktp;
    }

    public function setNoktp($noktp) {
        $this->noktp = $noktp;
    }

    // Getter dan Setter Nama
    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter dan Setter Alamat
    public function getAlamat() {
        return $this->alamat;
    }

    public function setAlamat($alamat) {
        $this->alamat = $alamat;
    }

    // Method untuk menampilkan data
    public function tampilDataManusia() {
        echo "No KTP   : " . $this->getNoktp() . PHP_EOL;
        echo "Nama     : " . $this->getNama() . PHP_EOL;
        echo "Alamat   : " . $this->getAlamat() . PHP_EOL;
    }
}
?>