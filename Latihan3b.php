<?php
function styleText($jawabanIsset, $jawabanEmpty) {
    $style = "font-size: 28px; font-family: Arial; border: solid; padding: 10px;";
    $styledText = "<p style='$style'>$jawabanIsset $jawabanEmpty</p>";

    return $styledText;
}

// Contoh pemanggilan fungsi:
$jawabanIsset = "Isset adalah = Digunakan untuk mengecek sebuah inputan baik itu teks field, checkbox, atau radio button.<br> </br>";
$jawabanEmpty = "Empty adalah = Penanda suatu kondisi. Contohnya adalah dalam pengisian suatu data. ";
$styledTexts = styleText($jawabanIsset, $jawabanEmpty);

echo $styledTexts; // Output dua teks dengan gaya yang ditentukan

?>