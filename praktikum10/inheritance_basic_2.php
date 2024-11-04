<?php
    class produk {
        public $merek = "Sharp";
        public $stok = 50;

        public function cekStok () {
            return "Sisa stok: ".$this->stok;
        }
    }

    class Televisi extends produk {
        public $jenis = "Televisi";

        public function cekStokTelevisi() {
            return $this ->jenis." ".$this->merek." ".$this->cekStok();
        }
    }

    $produk01 = new Televisi();
    echo $produk01->merek;
    echo "<br>";
    echo $produk01->cekStokTelevisi();