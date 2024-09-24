<?php
$nama = @$_GET['nama'];
// tanda @ agar tidak ada peringatan error ketike key nya kosong
$usia = @$_GET['usia'];
// tanda @ agar tidak ada peringatan error ketike key nya kosong

echo "Halo {$nama}! Apakah benar anda berusaia {$usia} tahun?";