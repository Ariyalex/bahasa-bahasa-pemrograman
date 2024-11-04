<?php
    class produk {

        public function __construct() {
            echo "Constructor dijalankan... <br>";
        }

        public function __destruct() {
            echo "Destructor dijalankan... <br>";
        }
    }

    $produk01 = new produk();
    $produk02 = null;

    echo "program selesai <br>";