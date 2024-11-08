<?php
    class Produk {
        public function hello () {
            echo "Ini dari Produk";
        }
    }

    class Televisi extends produk {
        public function hello () {
            echo "Ini dari Televisi";
        }

        public function helloProduk () {
            return parent::hello();
        }
    }

    $produk01 = new Televisi();
    echo $produk01 -> helloProduk();