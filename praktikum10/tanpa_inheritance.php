<?php
    class produk {
        public $merek = "Sharp";
        public $stok = 50;

        public function cekStok () {
            return "Sisa stok: ".$this->stok;
        }
    }

    $produk01 = new produk();
    echo $produk01->merek;
    echo "<br>";
    echo $produk01->cekStok();