<?php 

// define('NAMA', 'keyla Azahra Parlani');
echo "<br>";



// echo NAMA;

// const NAME =  'kelaa';
// echo NAME;

// class Coba {
//     const NAMA = 'hahaha';
// }

// echo Coba::NAMA;
 function uhuy() {

    return __FUNCTION__;
}

echo uhuy();


class Ahya {
   public $kelas = __CLASS__;
}

$obj = new Ahya();

echo $obj->kelas;
?>