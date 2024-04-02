<?php

class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function getInfo() {
        $str = "{$this->getJudul()} | {$this->getLabel()}, (Rp. {$this->getHarga()})";
            return $str;
       }

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis , $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
  
    public function getInfoLengkap() {
        $str = "Game : ". $this->getInfo() . " ~ {$this->waktuMain} Jam";
        return $str;
    }
}