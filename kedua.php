<?php

function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

function kelilingLingkaran($jari) : float {
    $keliling = 3.14*2*$jari;
    return $keliling;
}

function volumeBola($jari) : float {
    $volume_bola = 4/3*3.14*$jari*$jari*$jari;
    return $volume_bola;
}

function volumeTabung($jari, $tinggi) : float {
    $volume_tabung = 3.14*$jari*$jari*$tinggi;
    return $volume_tabung; 
}

function volumeKerucut($jari, $tinggi) : float {
    $volume_kerucut = 1/3*3.14*$jari*$jari*$tinggi;
    return $volume_kerucut;
}

$luas_tanah = luasLingkaran(45);
echo "Luas tanah budi adalah {$luas_tanah}";