<?php

$nama = "Afif";
$nilai = 85;

if ($nilai >= 90) {
    $grade = "A";
} elseif ($nilai >= 80) {
    $grade = "B";
} elseif ($nilai >= 70) {
    $grade = "C";
} elseif ($nilai >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}

$status = $nilai >= 70 ? "Lulus" : "Tidak Lulus";

echo "Nama: $nama <br>";
echo "Nilai: $nilai <br>";
echo "Grade: $grade <br>";
echo "Status: $status <br>";
