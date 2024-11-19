<?php
    class Produk {
        public $merek = "Sharp";
        public $stok = 50;

        public function cekStok () {
            return "Sisa stok: ".$this->stok;
        }
    }

    class Televisi extends Produk {
    }

    $produk01 = new Televisi();
    echo $produk01->merek;
    echo "<br>";
    echo $produk01->cekStok();