<?php

$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
foreach ($daftarNilai as $nilai) {
    $totalNilai += $nilai[1];
}

$rataRata = $totalNilai / count($daftarNilai);

echo "Rata-rata kelas: $rataRata <br><br>";
echo "Daftar siswa dengan nilai di atas rata-rata kelas: <br>";

foreach ($daftarNilai as $nilai) {
    if ($nilai[1] > $rataRata) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }
}
?>
