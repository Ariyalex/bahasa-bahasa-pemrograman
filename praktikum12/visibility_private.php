<?php
    class Produk {
        private $merek;

        private function hello() {
            return "ini adalah produk";
        }
    }

    $produk01 = new Produk();
    $produk01->merek = "Asus"; // Error: Cannot access private property Produk::$merek

    echo $produk01->merek; // Error: Cannot access private property Produk::$merek
    
    echo  $produk01->hello(); // Error: Call to private method Produk::hello() from context