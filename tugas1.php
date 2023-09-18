<?php

$saldoAwal = 2000000; //Saldo awal nasabah saya sesuaikan dengan di modul ya itu 2jt
$bunga = 0.03;
$bulan = 11;
$saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);
echo "Saldo akhir setelah " .$bulan. " bulan adalah: Rp. " . number_format($saldoAkhir, 0, ',', '.') . ",-";

?>