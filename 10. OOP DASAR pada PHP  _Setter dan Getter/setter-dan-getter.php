<?php

// Jualan Produk
// game
// komik


class Produk{

  private $judul ,$penulis ,$penerbit, $harga,  $diskon = 0;
  
     // Constructor Method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
    }
    
    // judul
    public function setJudul($judul) {
        return $this->judul= $judul;
    }
    
    public function getJudul() {
        return $this->judul;
    }

    //penulis
    public function setPenulis($penulis) {
       return $this->penulis= $penulis;
    }
   
    public function getPenulis() {
        return $this->penulis;
    }

    //penerbit
    public function setPenerbit($penerbit) {
         return $this->penerbit= $penerbit;
    }

    public function getPenerbit() {
    
    return $this->penerbit;
    }

    // harga
    public function setHarga() {
        return $this->harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
// diskon 
    public function getDiskon() {
        return $this->diskon;
    }
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        $str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
        return $str;
    }
}


class Komik extends Produk {

    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis , $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoLengkap() {
        $str = "Komik : " . parent::getInfoLengkap() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis , $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

  
    
    public function getInfoLengkap() {
        $str = "Game : ". parent::getInfoLengkap() . " ~ {$this->waktuMain} Jam";
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk) {
        return $produk->getInfoLengkap();
    }
}

$produk2 = new Komik("Twenty Five Twenty One", "Jeong Jiman", "TVN", 1500000, 100);
$produk3 = new Game("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 50);

$newProduk1 = new CetakInfoProduk();
echo $newProduk1->cetak($produk2);
echo "<br>";
echo $newProduk1->cetak($produk3);
echo "<hr>";

$produk3->setDiskon(50);
echo $produk3->getHarga();
echo "<br>";

echo $produk2->getPenerbit();


// awal nya
// Komik : Jeong Jiman, TVN
// Twenty Five Twenty One | Jeong Jiman, TVN, (Rp. 1500000)


// Problem Inharitance
// Komik : Twenty Five Twenty One | Jeong Jiman, TVN, (Rp. 1500000) - 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) - 50 jam.