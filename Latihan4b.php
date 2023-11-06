<?php
$negara = ["Indonesia","Singapura","Malaysia","Brunei","Thailand"];

?>
	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Negara ASEAN</title>
</head>
<body>
<h1>Daftar Negara ASEAN awal</h1>
    <?php 
    foreach ($negara as $nr){
	    echo"<li>$nr</li>";
    } ?>

<h1>Daftar Negara ASEAN baru</h1>
<?php
$ngr = array_push($negara, "Filipina","Laos","Myanmar");
?>
	<?php 
    foreach ($negara as $nr){
	    echo"<li>$nr</li>";
    } ?>

</body>
</html>
