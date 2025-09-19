<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a = {$a} <br>";
echo "Nilai b = {$b} <br><br>";

echo "Hasil Penjumlahan (a + b) = {$hasilTambah} <br>";
echo "Hasil Pengurangan (a - b) = {$hasilKurang} <br>";
echo "Hasil Perkalian (a * b)   = {$hasilKali} <br>";
echo "Hasil Pembagian (a / b)   = {$hasilBagi} <br>";
echo "Hasil Sisa Bagi (a % b)   = {$sisaBagi} <br>";
echo "Hasil Pangkat (a ** b)    = {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah a == b? : "; var_dump($hasilSama); echo "<br>";
echo "Apakah a != b? : "; var_dump($hasilTidakSama); echo "<br>";
echo "Apakah a < b?  : "; var_dump($hasilLebihKecil); echo "<br>";
echo "Apakah a > b?  : "; var_dump($hasilLebihBesar); echo "<br>";
echo "Apakah a <= b? : "; var_dump($hasilLebihKecilSama); echo "<br>";
echo "Apakah a >= b? : "; var_dump($hasilLebihBesarSama); echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil a && b : "; var_dump($hasilAnd); echo "<br>";
echo "Hasil a || b : "; var_dump($hasilOr); echo "<br>";
echo "Hasil !a     : "; var_dump($hasilNotA); echo "<br>";
echo "Hasil !b     : "; var_dump($hasilNotB); echo "<br>";

$a += $b;
echo "Setelah a += b, nilai a = {$a} <br>";

$a -= $b;
echo "Setelah a -= b, nilai a = {$a} <br>";

$a *= $b;
echo "Setelah a *= b, nilai a = {$a} <br>";

$a /= $b;
echo "Setelah a /= b, nilai a = {$a} <br>";

$a %= $b;
echo "Setelah a %= b, nilai a = {$a} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Nilai a = "; var_dump($a); echo "<br>";
echo "Nilai b = "; var_dump($b); echo "<br><br>";

echo "Apakah a === b? : "; var_dump($hasilIdentik); echo "<br>";
echo "Apakah a !== b? : "; var_dump($hasilTidakIdentik); echo "<br>";
?>
