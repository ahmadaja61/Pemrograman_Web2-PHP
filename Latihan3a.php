<?php

function styleText($text, $kelas) {
    $styledText = '<span class="' . $kelas . '" style="font-size: 28px; 
    font-family: Arial; color: #1A0547; font-style: italic; border: 1px solid ;">' . $text . '</span>';
    return $styledText;
}

// Contoh pemanggilan fungsi:
$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";
$styledResult = styleText($tulisan, $kelas);
echo $styledResult;


?>