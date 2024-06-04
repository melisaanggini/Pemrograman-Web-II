<?php
    // deklarasi variabel
    $jarijari = 4.2;
    $tinggi = 5.4;
    $panjang = 8.9;
    $lebar = 14.7;
    $sisi = 7.9;
    $alasPrisma = 5.5;
    $tinggiPrisma = 7.5;
    $tinggiLimas = 8.5;

    // NIM
    $nim = 4;

    if ($nim == 0 || $nim == 1) {
        $tabung = 3.14 * $jarijari * $jarijari * $tinggi;
        echo number_format ($tabung, 3);
        echo "m3";
    }
    else if ($nim == 2 || $nim == 3) {
        $kerucut = 1/3 * 3.14 * $jarijari * $jarijari * $tinggi;
        echo number_format ($kerucut, 3);
        echo "m3";
    }
    else if ($nim == 4 || $nim == 5) {
        $bola = 4/3 * 3.14 * $jarijari * $jarijari * $jarijari;
        echo number_format ($bola, 3);
        echo "m3";
    }
    else if ($nim == 6 || $nim == 7) {
        $prismaAlasSegitiga = 1/2 * $alasPrisma * $tinggiPrisma;
        echo number_format ($prismaAlasSegitiga, 3);
        echo "m3";
    }
    else if ($nim == 8 || $nim == 9) {
        $limasAlasPersegiPanjang = 1/3 * $panjang * $lebar * $tinggiLimas;
        echo number_format ($limasAlasPersegiPanjang, 3);
        echo "m3";
    }
?>