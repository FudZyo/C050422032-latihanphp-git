<?php

$phi = 3.14; //Pi
$r = 5; //Jari-jari kerucut
$s = 10; //Tinggi kerucut
$luasAlas = $phi * $r * $r;
$luasPermukaan = $phi * $r * $r + $phi * $r * $s;
echo "Perhitungan Kerucut:<br>";
echo "Luas Alas Kerucut = " . $luasAlas . " cm²<br>";
echo "Luas Permukaan Kerucut = " . $luasPermukaan . " cm²";
echo "<p><i>Copyright : Mahfudz Khaitami</i></p>";

?>