<?php

abstract class Buah {
    private $warna;

    abstract public function makan();

    public function setWarna($warna) {
        $this->warna = $warna;
    }
}


interface Buah {
    public function makan();
    public function setWarna($warna);
}

interface Benda {
    public function setUkuran($ukuran);
}

class Apel implements Buah, Benda{
    protected $warna;
    protected $ukuran;

    abstract public function makan(){
        // kunyah
        // sampai bagian tengah 
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }
}






<?