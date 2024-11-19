<?php
    abstract class Produk {
        abstract public function cekHarga3();
    }

    class Televisi extends Produk {
        public function cekHarga3() {
            return 3000000;
        }
    }

    class MesinCuci extends Produk {
        public function cekHarga3() {
            return 1500000;
        }
    }

    $produk01 = new Televisi();
    echo $produk01->cekHarga3();
    echo "<br>";
    $produk02 = new MesinCuci();
    echo $produk02->cekHarga3();