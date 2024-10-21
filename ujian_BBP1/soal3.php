<?php
    for( $i = 10; $i <=30; $i++ ) {
        $array[] = $i;
    }

    $resultGenap = "";
    $resultGanjil = "";
    $jumlahGenap = 0;
    $jumlahGanjil = 0;
    
    for ( $i = 0; $i  < count($array); $i++ ) {
        if ( $i % 2 == 0) {
            $jumlahGenap = count($array);
            $resultGenap .= $array[$i] . ",";
    } else {
        $jumlahGanjil = count($array);
        $resultGanjil .= $array[$i] . ",";
    }
}

echo "bilangan genap ada $jumlahGenap: $resultGenap <br>";
echo "bilangan ganjil ada $jumlahGanjil: $resultGanjil <br>";

// output:
// bilangan genap ada 11: 10,12,14,16,18,20,22,24,26,28,30,
// bilangan ganjil ada 10: 11,13,15,17,19,21,23,25,27,29,