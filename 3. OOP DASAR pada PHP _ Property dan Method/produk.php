<?php

// Jualan Produk
// game
// komik

class Produk{

  public $judul = "judul"
         , $penulis = "penulis"
         , $penerbit = "penerbit"
         , $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "<br><br>Komik : " . $produk3->getLabel();
echo "<br><br>Game : " . $produk4->getLabel();

// $produk1 = new Produk();
// $produk1->judul = "Twenty Five Twenty One";
// var_dump($produk1);

// echo "<br><br>";

// $produk2 = new Produk();
// $produk2->judul = "Hometown cha cha";
// $produk2->tanggalTerbit = "2022-02-19";
// var_dump($produk2->tanggalTerbit);




?>