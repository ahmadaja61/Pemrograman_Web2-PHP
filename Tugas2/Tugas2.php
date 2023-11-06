<?php 
$hewan = array(
    1=> array(
        "Foto" => "<img src = '1.jpeg' width ='100' height = '80'>",  
        "Nama_flora_dan_fauna" => "Bunga Bangkai (Rafflesia arnoldii)",
        "Kategori" => "Flora (Termasuk dalam keluarga Rafflesiaceae)",
        "Keunikan" => "Bunga terbesar didunia yang bisa mencapai diameter hingga 1 meter dan memiliki bau bangkai yang sangat kuat",
        "Asal" => "Indonesia (Pulau Sumatera dan Kalimantan)",
    ),
    2 => array(
        "Foto" => "<img src = '2.jpeg' width ='100' height = '80'>",
        "Nama_flora_dan_fauna" => "Aster Georgia (Symphyotrichum georgianum)",
        "Kategori" => "Flora (Termasuk dalam spesies Epiphyllum oxypetalum)",
        "Keunikan" => "Memiliki warna biru atau ungu yang menarik dan sering digunakan dalam taman hias",
        "Asal" => "Amerika Serikat (Georgia dan Carolina)",
    ),
    3 => array(
        "Foto" => "<img src = '3.jpeg' width ='100' height = '80'>",
        "Nama_flora_dan_fauna" => "Kantong Semar (Pitcher Attenborough)",
        "Kategori" => "Flora (Termasuk dalam keluarga Asteraceae)",
        "Keunikan" => "Memiliki kemampuan beradaptasi dengan berbagai kondisi lingkungan dan ukuran bentuk kantong yang beragam",
        "Asal" => "Indonesia (Pulau Sumatera)",
    ),
    4 => array(
        "Foto" => "<img src = '4.jpeg' width ='100' height = '80'>",
        "Nama_flora_dan_fauna" => "Bunga Kadupul (Epiphyllum oxypetalum)",
        "Kategori" => "Flora (Termasuk dalam keluarga Nepenthaceae)",
        "Keunikan" => "Bau harumnya yang sangat kuat ketika malam hari dan memiliki kelopak bunga yang besar juga indah",
        "Asal" => "India dan Sri Lanka",
    ),
    5 => array(
        "Foto" => "<img src = '5.jpeg' width ='100' height = '80'>",
        "Nama_flora_dan_fauna" => "Badak Jawa",
        "Kategori" => "Fauna (Termasuk dalam kategori Herbivora)",
        "Keunikan" => "Memiliki 1 tanduk kecil yang dapat tumbuh hingga sekitar 25 hingga 57cm dan memiliki lipatan kulit yang khas",
        "Asal" => "Indonesia (Pulau Jawa)",
    ),
    6 => array(
        "Foto" => "<img src = '6.jpeg' width ='100' height = '80'>",
        "Nama_flora_dan_fauna" => "Macan Tutul Amur (Jaguar)",
        "Kategori" => "Fauna (Termasuk dalam kategori Karnivora)",
        "Keunikan" => "Memiliki bulu yang berbintik atau berbecak untuk membantu bersembunyi dihutan atau semak-semak",
        "Asal" => "Amerika dan Meksiko",
    ),
    7 => array(
        "Foto" => "<img src = '7.jpeg' width ='100' height = '80'>",
        "Nama_flora_dan_fauna" => "Gorilla Gunung",
        "Kategori" => "Fauna (Termasuk dalam kategori Omnivora)",
        "Keunikan" => "Memiliki bulu yang panjang dan tebal untuk membantu menghadapi suhu dingin dipegunungan",
        "Asal" => "Afrika dan Republik Demokratik Kongo",
    ),
    8 => array(
        "Foto" => "<img src = '8.jpeg' width ='100' height = '80'>",
        "Nama_flora_dan_fauna" => "Orang Utan Sumatera",
        "Kategori" => "Fauna (Termasuk dalam kategori Herbivora)",
        "Keunikan" => "Memiliki wajah yang khas dengan rambut yang panjang dan cenderung lebih soliter perilakunya",
        "Asal" => "Indonesia (Pulau Sumatera)",
    ),
    9 => array(
        "Foto" => "<img src = '9.jpeg' width ='100' height = '80'>",
        "Nama_flora_dan_fauna" => "Penyu Sisik",
        "Kategori" => "Fauna (Termasuk dalam kategori Herbivora)",
        "Keunikan" => "Memiliki warna yang bervariasi dari hijau, abu-abu atau coklat dan sisik yang berbentuk seperti belimbing",
        "Asal" => "Samudra Hindia dan Pasifik",
    ),
    10 => array(
        "Foto" => "<img src = '10.jpeg' width ='100' height = '80'>",
        "Nama_flora_dan_fauna" => "Vaquita (Lumba-lumba kecil)",
        "Kategori" => "Fauna (Termasuk dalam kategori Herbivora)",
        "Keunikan" => "Memiliki pola garis hitam disekitar mata, bibir juga insang dan ukuran tubuh yang kecil dengan panjang 1,5 meter",
        "Asal" => "Meksiko dan California",
    ),
    // Lanjutkan sampai 10 hewan
);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        .foto {
            width: 100px;
            height: 80px;
        }
    </style>
</head>
<body>
    <!--Pemilihan tabel flora dan fauna-->
<b>Nama : Ahmad Fatchul Huda</b>
</br>
<b>NIM : 701220026</b>
</br>
<b> NRP %5 = 026% * 5 = 1,3 => Flora dan Fauna terancam punah </b>
    <?php
    // Menampilkan data dalam bentuk tabel HTML
echo "<center><b>FLORA DAN FAUNA TERANCAM PUNAH</b></center>";
echo "</br>";
echo "<table border='1'>";
echo "<tr><th>No</th><th>Foto</th><th>Nama flora dan fauna</th><th>Kategori<th>Keunikan</th><th>Asal</th></tr>";
$nomor = 1;

// Menggunakan loop untuk menampilkan data ke dalam tabel
foreach ($hewan as $data) {
    echo "<tr>";
    echo "<td>$nomor</td>";
    echo "<td>" . $data['Foto'] . "</td>";
    echo "<td>" . $data['Nama_flora_dan_fauna'] . "</td>";
    echo "<td>" . $data['Kategori'] . "</td>";
    echo "<td>" . $data['Keunikan'] . "</td>";
    echo "<td>" . $data['Asal'] . "</td>";
    echo "</tr>";
    $nomor++;
}

echo "</table>";


    ?>

</body>
</html>