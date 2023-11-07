<!DOCTYPE html>
<html>
<head>
    <title>Tabel Harga Barang</title>
</head>
<body>
    <h1>Tabel Harga Barang</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>

        <?php
        // Inisialisasi array data barang
        $dataBarang = array(
            array("1", "Pepsodent", 20, 10000),
            array("2", "Sunlight", 15, 11000),
            array("3", "Baygon", 10, 16000),
            array("4", "Dove", 18, 22000),
            array("5", "Rinso", 15, 20000),
            array("6", "Downy", 20, 11500),
            array("7", "Le Mineral", 25, 5000)
        );

        // Iterasi melalui data barang
        foreach ($dataBarang as $barang) {
            $no = $barang[0];
            $produk = $barang[1];
            $stok = $barang[2];
            $harga = $barang[3];
            $jumlah = $stok * $harga;

            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$produk</td>";
            echo "<td>$stok</td>";
            echo "<td>Rp $harga</td>";
            echo "<td>Rp $jumlah</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
