<?php


abstract class Produk{

    private $judul ,$penulis ,$penerbit, $harga,  $diskon = 0;
    
       // Constructor Method
      public function __construct($judul = "judul", 
      $penulis = "penulis", 
      $penerbit = "penerbit", $harga = 0) {
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
      
      abstract public function getInfo();
     
  }
  
  