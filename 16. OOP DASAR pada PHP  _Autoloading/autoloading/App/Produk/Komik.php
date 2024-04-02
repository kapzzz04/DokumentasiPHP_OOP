<?php


class Komik extends Produk  implements InfoProduk{

    public $jmlHalaman;

    public function getInfo() {
        $str = "{$this->getjudul()} | {$this->getLabel()}, (Rp. {$this->getHarga()})";
            return $str;
       }

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis , $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoLengkap() {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }
}