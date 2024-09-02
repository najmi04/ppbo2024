<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H:i');
$jam = date('H');

if ($jam >= 5 && $jam < 11) {
    echo "Selamat Pagi, {$nama}, sekarang pukul {$waktu}";
} else if ($jam >= 11 && $jam < 15) {
    echo "Selamat Siang, {$nama}, sekarang pukul {$waktu}";
} else if ($jam >= 15 && $jam < 19) {
    echo "Selamat Sore, {$nama}, sekarang pukul {$waktu}";
} else {
    echo "Selamat Malam, {$nama}, sekarang pukul {$waktu}";
}