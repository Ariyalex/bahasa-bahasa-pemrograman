<?php
    $komentar = "<b>Ini adalah komentar</b>, <br> <i>kunjingi blog gw</i>
                <a href='www.blog.com'>www.blog.com</a>";
    echo $komentar."<br>";

    echo "<br>";

    echo strip_tags($komentar)."<br>";

    echo strip_tags($komentar, "<br><i>");