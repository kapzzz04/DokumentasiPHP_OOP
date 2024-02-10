<?php

// Jualan Produk
// game
// komik

class Produk{

  public $judul
         , $penulis 
         , $penerbit 
         , $harga ;

         // Constructor Method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

$produk2 = new Produk("Twenty Five Twenty One", "Jeong Jiman", "TVN", 1500000);
$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk4 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$produk5 = new Produk("Free Fire");

echo "Komik : " . $produk2->getLabel();
echo "<br>Komik : " . $produk3->getLabel();
echo "<br>Game : " . $produk4->getLabel();


?>