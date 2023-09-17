<?php
$saldoAwal = 2000000; //Saldo awal nasabah saya sesuaikan dengan di modul ya itu 2jt
$bunga = 0.03;
$bulan = 11;
$saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);
echo "no.1";
echo "<br>";
echo "Saldo akhir setelah " .$bulan. " bulan adalah: Rp. " . number_format($saldoAkhir, 0, ',', '.') . ",-";

$phi = 3.14; //Pi
$r = 5; //Jari-jari kerucut
$s = 10; //Tinggi kerucut
$luasAlas = $phi * $r * $r;
$luasPermukaan = $phi * $r * $r + $phi * $r * $s;
echo "<br><br>";
echo "no.2";
echo "<br>";
echo "Perhitungan Kerucut:<br>";
echo "Luas Alas Kerucut = " . $luasAlas . " cm²<br>";
echo "Luas Permukaan Kerucut = " . $luasPermukaan . " cm²";
echo "<p><i>Copyright : Mahfudz Khaitami</i></p>";
?>