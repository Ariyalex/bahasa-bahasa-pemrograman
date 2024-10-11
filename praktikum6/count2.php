<?php
    $zoo = [
        "ayam" => ["kampung", "bangkok", "buras", "kate", "hutan"],
        "kucing" => ["anggora", "persia", "kampung", "hutan"],
    ];

    echo count($zoo);
    echo "<br>";
    echo count ($zoo, COUNT_RECURSIVE);