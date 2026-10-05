<?php

require_once "functions.php";

$buku = [
    [
        "judul" => "PHP Dasar",
        "harga" => 75000,
        "jumlah" => 2,
        "diskon" => 10
    ],
    [
        "judul" => "JavaScript Dasar",
        "harga" => 85000,
        "jumlah" => 1,
        "diskon" => 5
    ],
    [
        "judul" => "Laravel untuk Pemula",
        "harga" => 120000,
        "jumlah" => 3,
        "diskon" => 15
    ]
];

foreach ($buku as $item) {

    if (!validasi($item["judul"])) {
        continue;
    }

    $total = hitungTotal(
        $item["harga"],
        $item["jumlah"]
    );

    $diskon = hitungDiskon(
        $total,
        $item["diskon"]
    );

    $hargaAkhir = $total - $diskon;

    echo "========================\n";
    echo "Judul       : {$item["judul"]}\n";
    echo "Harga       : " . formatRupiah($item["harga"]) . "\n";
    echo "Jumlah      : {$item["jumlah"]}\n";
    echo "Total       : " . formatRupiah($total) . "\n";
    echo "Diskon      : " . formatRupiah($diskon) . "\n";
    echo "Harga Akhir : " . formatRupiah($hargaAkhir) . "\n";
}
