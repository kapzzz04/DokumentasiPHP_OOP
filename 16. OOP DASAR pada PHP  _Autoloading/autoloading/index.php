<?php
require_once 'App/init.php';


$produk2 = new Komik("Twenty Five Twenty One", "Jeong Jiman", "TVN", 1500000, 100);
$produk3 = new Game("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 50);

$newP = new CetakInfoProduk();

$newP->tambahProduk($produk2);
$newP->tambahProduk($produk3);

echo $newP->cetak();



?>