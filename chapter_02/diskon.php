<?php

$namaBuku = "Belajar PHP";
$hargaBuku = 75000;
$jumlahBuku = 3;

$total = $hargaBuku * $jumlahBuku;

$diskon = $total * 0.10;

$totalBayar = $total - $diskon;

echo "Nama Buku: " . $namaBuku . "<br>";
echo "Harga Buku: Rp " . $hargaBuku . "<br>";
echo "Jumlah: " . $jumlahBuku . "<br>";
echo "Total: Rp " . $total . "<br>";
echo "Diskon: Rp " . $diskon . "<br>";
echo "Total Bayar: Rp " . $totalBayar . "<br>";
