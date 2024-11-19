<?php
    abstract class Produk {
        private $stok = 200;
        abstract public function cekHarga3();

        public function cekStok() {
            return $this->stok;
        }
    }

    class Televisi extends Produk {
        public function cekHarga3() {
            return 3000000;
        }
    }

    $produk01 = new Televisi();
    echo $produk01->cekHarga3();
    echo "<br>";
    echo $produk01->cekStok();