<?php
    class Produk {
        public static $totalProduk = 100;

        public static function cekProduk() {
            return "Total Produk ada 100 ";
        }

        public static function cekProduk2() {
            return "Total Produk ada " . self::$totalProduk;
        }

        public static function cekProduk3() {
            Return "Total Produk ada " .Produk::$totalProduk;
        }
    }

    class Blender extends Produk {
    }

    class Blender2 extends Produk {
        public function cekBlender() {
            return self::cekProduk();
        }
    }

    class HairDryer extends Produk {
        public function cekHairDryer() {
            return parent::cekProduk();
        }
    }

    class Mixer extends Produk {
        public function cekMixer() {
            return Produk::cekProduk();
        }
    }

    echo Produk::cekProduk();
    echo "<br>";
    echo Produk::cekProduk2();
    echo "<br>";
    echo Produk::cekProduk3();
    echo "<br>";
    echo Blender::cekProduk();

    $produk01 = new Blender2();
    echo $produk01->cekBlender();

    $produk02 = new HairDryer();
    echo $produk02->cekHairDryer();

    $produk03 = new Mixer();
    echo $produk03->cekMixer();