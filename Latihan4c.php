<?php 

$asean = [
    "Indonesia"=> "D.K.I Jakarta",
    "Singapura"=> "Singapura",
    "Malaysia"=> "Kuala Lumpur",
    "Brunei"=> "Bandar Seri Begawan",
    "Thailand"=> "Bangkok",
    "Laos"=> "Vientiane",
    "Filipina"=> "Manila",
    "Myanmar"=> "Naypyidaw",
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas4c</title>
</head>
<body>
    <h1>Daftar Negara ASEAN dan Ibukota</h1>
    <?php foreach ($asean as $negara => $kota) : ?>
        <li><?php echo "$negara : $kota" ?></li>
    <?php endforeach ?>
    
</body>
</html>