<?php

// Jualan Produk
// game
// komik

class Produk{

    public $judul ,$penulis ,$penerbit ,$harga, $jmlHalaman, $waktuMain, $tipe;
    
       // Constructor Method
      public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "tipe") {
         $this->judul = $judul;
         $this->penulis = $penulis;
         $this->penerbit = $penerbit;
         $this->harga = $harga;
         $this->jmlHalaman = $jmlHalaman;
         $this->waktuMain = $waktuMain;
         $this->tipe = $tipe;
      }
  
      public function getLabel() {
          return "$this->penulis, $this->penerbit";
      }
  
      public function getInfoLengkap() {
          $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
          if($this->tipe == "Drama Korea") {
              $str .= " - {$this->jmlHalaman} Halaman";
          } else if($this->tipe == "Game") {
              $str .= " - {$this->waktuMain} Jam";
          }
          
          return $str;
      }
  }
  
  class CetakInfoProduk{
      public function cetak(Produk $produk) {
          return $produk->getInfoLengkap();
      }
  }
  
  $produk2 = new Produk("Twenty Five Twenty One", "Jeong Jiman", "TVN", 1500000, 100, 0, "Drama Korea");
  $produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 0, 50, "Game");
  
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