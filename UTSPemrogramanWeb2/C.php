<?php
// Data barang
$barang = array(
    array(
        'no_produk' => 1,
        'nama_produk' => 'Pepsodent',
        'stok' => 20,
        'harga' => 10000
    ),
    array(
        'no_produk' => 2,
        'nama_produk' => 'Sunlight',
        'stok' => 15,
        'harga' => 11000
    ),
    array(
        'no_produk' => 3,
        'nama_produk' => 'Baygon',
        'stok' => 10,
        'harga' => 16000
    ),
    array(
        'no_produk' => 4,
        'nama_produk' => 'Dove',
        'stok' => 18,
        'harga' => 22000
    ),
    array(
        'no_produk' => 5,
        'nama_produk' => 'Rinso',
        'stok' => 15,
        'harga' => 20000
    ),
    array(
        'no_produk' => 6,
        'nama_produk' => 'Downy',
        'stok' => 20,
        'harga' => 11500
    ),
    array(
        'no_produk' => 7,
        'nama_produk' => 'Le Mineral',
        'stok' => 25,
        'harga' => 5000
    )
);

// Fungsi untuk mengurutkan berdasarkan nomor produk
usort($barang, function ($a, $b) {
    return $a['no_produk'] - $b['no_produk'];
});

// Membuat tabel
echo '<table border="1">';
echo '<tr><th>ID</th><th>Nama Produk</th><th>Stok</th><th>Harga</th></tr>';

foreach ($barang as $item) {
    echo '<tr>';
    echo '<td>' . $item['no_produk'] . '</td>';
    echo '<td>' . $item['nama_produk'] . '</td>';
    echo '<td>' . $item['stok'] . '</td>';
    echo '<td>' . $item['harga'] . '</td>';
    echo '</tr>';
}

echo '</table>';
?>
