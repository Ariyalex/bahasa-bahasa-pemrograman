<?php
    abstract class Produk {
        abstract public function cekHarga3($jumlah);
    }

    class Televisi extends Produk {
        public function cekHarga3($jumlah) {
            return 3000000 * $jumlah;
        }
    }

    $produk01 = new Televisi();
    echo $produk01->cekHarga3(2);
