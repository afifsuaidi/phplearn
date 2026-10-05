<?php

$buku1 = "Belajar PHP";
$harga1 = 75000;
$jumlah1 = 2;

$buku2 = "Belajar MySQL";
$harga2 = 85000;
$jumlah2 = 1;

$total1 = $harga1 * $jumlah1;
$total2 = $harga2 * $jumlah2;

$totalBelanja = $total1 + $total2;

$diskon = 0;

if ($totalBelanja >= 200000) {
    $diskon = $totalBelanja * 0.10;
}

$totalBayar = $totalBelanja - $diskon;

echo "<h1>Kalkulator Belanja Buku</h1>";

echo $buku1 . " x " . $jumlah1 . " = Rp " . $total1 . "<br>";
echo $buku2 . " x " . $jumlah2 . " = Rp " . $total2 . "<br>";

echo "<hr>";

echo "Total Belanja: Rp " . $totalBelanja . "<br>";
echo "Diskon: Rp " . $diskon . "<br>";
echo "Total Bayar: Rp " . $totalBayar . "<br>";
