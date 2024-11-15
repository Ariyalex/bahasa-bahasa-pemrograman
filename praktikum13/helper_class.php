<?php
    class ProdukHelper {
        public static function cekValidSKU($sku) {
            return preg_match("/[A-Z]{2}[0-9]{3}/", $sku);
        }

        public static function cekValidMerek($merek) {
            $semuaMerek = ["Samsung", "Apple", "Xiaomi", "Oppo", "Vivo"];
            return in_array($merek, $semuaMerek);
        }
    }

    if (ProdukHelper::cekValidSKU("AA545")) {
        echo "Merek AA545 valid<br>";
    }

    if (ProdukHelper::cekValidSKU("AAa545")) {
        echo "Merek AAa545 valid<br>";
    }

    if (ProdukHelper::cekValidMerek("Samsung")) {
        echo "Merek Samsung tersedia <br>";
    }

    if (ProdukHelper::cekValidMerek("Nokia")) {
        echo "Merek Nokia tersedia <br>";
    }

    if (ProdukHelper::cekValidMerek("Apple")) {
        echo "Merek Apple tersedia <br>";
    }