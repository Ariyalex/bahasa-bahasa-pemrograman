<?php
    class Produk {
        final public function hallo() {
            return "Ini dari Produk";
        }
    }

    class Televisi extends Produk {
        public function hallo() {
            return "Ini dari Televisi";
        }
    }
?>