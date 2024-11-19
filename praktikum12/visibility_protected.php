<?php
class Produk {
    protected $merek;

    protected function hello() {
        return "ini adalah produk";
    }
}

$produk01 = new Produk();

$produk01->merek = "Asus"; // Error: Cannot access protected property Produk::$merek

echo $produk01->merek; // Error: Cannot access protected property Produk::$merek

echo  $produk01->hello(); // Error: Call to protected method Produk::hello() from context