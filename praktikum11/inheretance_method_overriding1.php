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
    }

    $produk01 = new Televisi();
    echo $produk01 -> hello();