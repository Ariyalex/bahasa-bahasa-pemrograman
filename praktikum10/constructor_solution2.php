<?php
    class produk {
        public $jenis;
        public $merek;
        public $stok;

        public function __construct($jenis, $merek, $stok = 10) {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
        }
    }

    $produk01 = new produk("Televisi", "Samsung", 20);
    $produk02 = new produk("Mesin Cuci", "LG", 10);



    print_r($produk01);
    echo "<br>";
    print_r($produk02);