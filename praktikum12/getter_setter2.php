<?php
    class Produk {
        private $stok = 0;

        public function setStok ($stok) {
            if (is_int($stok)) {
                $this->stok = $stok;
            } else {
                echo "Stok harus berupa angka";
            }
        }

        public function getStok() {
            return $this->stok;
        }
    }

    $produk01 = new Produk();
    echo $produk01->getStok();
    echo "<br>";

    $produk01->setStok(10.5);
    echo $produk01->getStok();
    echo "<br>";

    $produk01->setStok("satu");
    echo $produk01->getStok();
    echo "<br>";

    $produk01->setStok(10);
    echo $produk01->getStok();