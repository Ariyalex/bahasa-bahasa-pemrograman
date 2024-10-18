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