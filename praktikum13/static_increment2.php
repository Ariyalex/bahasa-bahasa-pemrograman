<?php
    class Produk {
        private $totalProduk = 0;

        public function __construct() {
           $this->totalProduk++;
            echo "class Produk dibuat, total produk = ".$this->totalProduk."<br>";
        }
    }

    $produkA = new Produk();
    $produkB = new Produk();
    $produkC = new Produk();
    $produkD = new Produk();