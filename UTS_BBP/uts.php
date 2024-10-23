<?php
    // Mendefinisikan paragraf dalam variabel $doc
    $doc = "ini merupakan kalimat pertama dalam paragraf ini. coba pisahkan paragraf ini per kalimat. apakah bisa.";

    // Memecah paragraf menjadi array kalimat berdasarkan tanda titik (.)
    $pecah = explode(".", $doc);

    // Menghitung total kata dalam paragraf
    $total_kata_dlm_paragraf = str_word_count($doc);
    
    // Melakukan iterasi pada setiap kalimat yang telah dipecah
    foreach ($pecah as $index => $kalimat){
        // Menghapus spasi di awal dan akhir kalimat
        $kalimat = trim($kalimat);

        // Memastikan kalimat tidak kosong
        if ($kalimat != "") {
            // Memecah kalimat menjadi array kata berdasarkan spasi
            $pecah_kalimat = explode(" ", $kalimat);

            // Menggabungkan kata-kata dalam kalimat dengan koma sebagai pemisah
            $kalimat_dgn_koma = implode(",", $pecah_kalimat);

            // Menghitung jumlah kata dalam kalimat
            $jumlah_kata = count($pecah_kalimat);

            // Menghitung persentase jumlah kata dalam kalimat terhadap total kata dalam paragraf
            $presentase = ($jumlah_kata / $total_kata_dlm_paragraf) * 100;

            // Menampilkan kalimat yang telah dipisahkan dengan koma
            echo "kalimat ". ($index + 1). ": ". $kalimat_dgn_koma. "<br>";

            // Menampilkan jumlah kata dalam kalimat
            echo "kalimat ". ($index + 1).": ". $jumlah_kata. " kata". "<br>";

            // Menampilkan persentase jumlah kata dalam kalimat terhadap total kata dalam paragraf
            echo "kalimat ". ($index + 1).": ". $presentase. "%<br>";
        }
    }
