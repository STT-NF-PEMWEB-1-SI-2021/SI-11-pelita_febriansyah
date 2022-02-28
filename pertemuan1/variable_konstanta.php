<?php
// defenisikan konstanta
define ('PHI', 3.14);
define ('DBNAME', 'inventori');
define ('DBSERVER', 'locahost');

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan jari jari ' .$jari. ' : ' .$luas;
echo ' <br/>Keliling nya : ' .$kll;
?>
<hr/>
<?php
echo 'Nama Databasenya : ' .DBNAME;
echo '<br/> Lokasi databasenya ada di ' .DBSERVER;
?>

