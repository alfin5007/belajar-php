<?php

// rumus menghitung persegi panjang

function luaspersegipanjang(int $pajang, int $lebar){
    $luas = $pajang * $lebar;
    return $luas;
}
$hasil =luaspersegipanjang(4,3);
echo "luas persegi panjang nya adalah $hasil";