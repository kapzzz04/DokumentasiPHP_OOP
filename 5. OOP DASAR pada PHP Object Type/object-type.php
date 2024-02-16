<?php

// Jualan Produk
// game
// komik

class Produk{

  public $judul ,$penulis ,$penerbit ,$harga;
  
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

class CetakInfoProduk{
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

$produk2 = new Produk("Twenty Five Twenty One", "Jeong Jiman", "TVN", 1500000);
$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);


echo "Komik : " . $produk2->getLabel();


$infoProduk1 = new CetakInfoProduk();
echo "<br>" . $infoProduk1->cetak($produk2);

?>