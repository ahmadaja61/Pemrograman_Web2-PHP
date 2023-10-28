<?php
function pangkat($angka, $pangkat) {
    $result = 1;
    for ($i = 1; $i <= $pangkat; $i++) {
        $result *= $angka;
    }
    return $result;
}

$angka = 5;      // Bilangan dasar
$pangkat = 4;  // Pangkat

$result = pangkat($angka, $pangkat);

echo " $angka pangkat $pangkat = $result";




?>