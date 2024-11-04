<?php
    class produk {
        public $jenis;
        public $merek;
        public $stok;
    }

    $produk01 = new produk();
    $produk01->jenis = "Televisi";
    $produk01->merek = "Samsung";
    $produk01->stok = 20;

    $produk02 = new produk();
    $produk02->jenis = "Mesin Cuci";
    $produk02->merek = "LG";
    $produk02->stok = 10;

    print_r($produk01);
    echo "<br>";
    print_r($produk02);