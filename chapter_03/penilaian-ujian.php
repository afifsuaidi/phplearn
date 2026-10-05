<?php


$nama = "Afif";

$bahasaIndonesia = 85;
$matematika = 90;
$bahasaInggris = 80;

$total = $bahasaIndonesia + $matematika + $bahasaInggris;

$rataRata = $total / 3;

if ($rataRata >= 90) {
    $grade = "A";
} elseif ($rataRata >= 80) {
    $grade = "B";
} elseif ($rataRata >= 70) {
    $grade = "C";
} elseif ($rataRata >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}

$status = $rataRata >= 70 ? "Lulus" : "Tidak Lulus";

$keterangan = match ($grade) {
    "A" => "Sangat Baik",
    "B" => "Baik",
    "C" => "Cukup",
    "D" => "Kurang",
    "E" => "Sangat Kurang",
    default => "Tidak diketahui",
};

echo "=================================" . "<br>";
echo "       SISTEM PENILAIAN UJIAN" . "<br>";
echo "=================================" . "<br>";

echo "Nama              : $nama" . "<br>";
echo "Bahasa Indonesia  : $bahasaIndonesia" . "<br>";
echo "Matematika        : $matematika" . "<br>";
echo "Bahasa Inggris    : $bahasaInggris" . "<br>";

echo "---------------------------------" . "<br>";

echo "Total Nilai       : $total" . "<br>";
echo "Nilai Rata-rata   : " . number_format($rataRata, 2) . "<br>";
echo "Grade             : $grade" . "<br>";
echo "Keterangan        : $keterangan" . "<br>";
echo "Status            : $status" . "<br>";

echo "=================================" . "<br>";
