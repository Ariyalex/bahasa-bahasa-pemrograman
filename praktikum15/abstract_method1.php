<?php
    abstract class Produk {
        abstract public function cekHarga1();
    }

    class Televisi extends Produk {
        public function cekHarga1() {
            return 3000000;
        }
    }

    $produk01 = new Televisi();
    echo $produk01->cekHarga1();