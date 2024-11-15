<?php
    class Produk {
        public static $totalProduk = 100;
    }

    echo Produk::$totalProduk;
    echo "<br>";

    $produk01 = new Produk();
    echo $produk01::$totalProduk;
    echo "<br>";

    class Blender extends Produk {
    }

    echo Blender::$totalProduk;