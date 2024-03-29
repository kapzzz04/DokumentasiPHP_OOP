<?php

// Jualan Produk
// game
// komik

class Produk{

  public $judul ,$penulis ,$penerbit ,$harga, $jmlHalaman, $waktuMain;
  
     // Constructor Method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ) {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
       $this->jmlHalaman = $jmlHalaman;
       $this->waktuMain = $waktuMain;
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
    public function getInfoLengkap() {
        $str = "Komik : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoLengkap() {
        $str = "Game : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) - {$this->waktuMain} Jam";
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk) {
        return $produk->getInfoLengkap();
    }
}

$produk2 = new Komik("Twenty Five Twenty One", "Jeong Jiman", "TVN", 1500000, 100, 0);
$produk3 = new Game("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 0, 50);

$newProduk1 = new CetakInfoProduk();
echo $newProduk1->cetak($produk2);
echo "<br>";
echo $newProduk1->cetak($produk3);


// awal nya
// Komik : Jeong Jiman, TVN
// Twenty Five Twenty One | Jeong Jiman, TVN, (Rp. 1500000)


// Problem Inharitance
// Komik : Twenty Five Twenty One | Jeong Jiman, TVN, (Rp. 1500000) - 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) - 50 jam.