<?php
    class Produk {
        public $merek;

        public function hello() {
            return "ini adalah produk";
        }
    }

    $produk01 = new produk();
    $produk01->merek = "Asus";

    echo $produk01->merek;
    echo "<br>";
    echo $produk01->hello();