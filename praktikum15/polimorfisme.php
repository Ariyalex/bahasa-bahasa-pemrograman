<?php
abstract class Produk {
    abstract public function cekMerek();
}

class Televisi extends Produk {
    public function cekMerek() {
        return "Polytron";
    }
}

class MesinCuci extends Produk {
    public function cekMerek() {
        return "Electrolux";
    }
}

class LemariEs extends Produk {
    public function cekMerek() {
        return "Sharp";
    }
}

$produk01 = new Televisi();
$produk02 = new MesinCuci();
$produk03 = new LemariEs();

echo $produk01->cekMerek() . "<br>";
echo $produk02->cekMerek() . "<br>";
echo $produk03->cekMerek() . "<br>";