<?php
    class Produk {
        final public function hallo() {
            return "Ini dari Produk";
        }
    }

    $produk01 = new Produk();
    echo $produk01 -> hallo();