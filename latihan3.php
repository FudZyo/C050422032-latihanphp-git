<?php
$a="5";
$b="2.5";
$komentar="Selamat Datang ";
echo ("Nilai variable a adalah = $a <br>");
//variable bertipe integer
echo ("Nilai variable b adalah = $b <br>");
//variable bertipe real
echo ("Nilai variable komentar adalah = $komentar<br>");
//variable bertipe string
$tambah= $a + $b;
//rumus pengurangan
$kurang = $a -$b;
//rumus perkalian
$kali = $a * $b;
//rumus pembagian
$bagi = $a / $b;

echo ("Hasil penjumlahan a dan b adalah = $tambah <br>");
echo ("Hasil pengurangan a dan b adalah = $kurang <br>");
echo ("Hasil perkalian a dan b adalah = $kali <br>");
echo ("Hasil pembagian a dan b adalah = $bagi <br>");
$nama = "POLIBAN";
$garis= "=====================================";
echo "<p>";
echo $garis."<br>";
echo $komentar. "Di Lab ". $nama. "<br>Selamat Belajar Pemrograman Web <br>";
echo $garis."<br>";
?>