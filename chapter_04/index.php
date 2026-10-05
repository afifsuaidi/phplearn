<?php

$buku = [
    [
        "judul" => "Belajar PHP Dasar",
        "penulis" => "Afif Su'aidi",
        "tahun" => 2026,
        "status" => "Tersedia"
    ],
    [
        "judul" => "Belajar JavaScript",
        "penulis" => "Budi Santoso",
        "tahun" => 2025,
        "status" => "Dipinjam"
    ],
    [
        "judul" => "Belajar MySQL",
        "penulis" => "Citra Lestari",
        "tahun" => 2024,
        "status" => "Tersedia"
    ],
    [
        "judul" => "Belajar Laravel",
        "penulis" => "Doni Pratama",
        "tahun" => 2026,
        "status" => "Tersedia"
    ]
];

$totalBuku = count($buku);
$totalTersedia = 0;
$totalDipinjam = 0;

foreach ($buku as $item) {

    if ($item["status"] === "Tersedia") {
        $totalTersedia++;
    }

    if ($item["status"] === "Dipinjam") {
        $totalDipinjam++;
    }
}

echo "<h1>Daftar Koleksi Buku</h1>";

echo "<p>Total buku: $totalBuku</p>";
echo "<p>Buku tersedia: $totalTersedia</p>";
echo "<p>Buku dipinjam: $totalDipinjam</p>";

echo "<hr>";

foreach ($buku as $index => $item) {

    echo "<h2>" . ($index + 1) . ". " . $item["judul"] . "</h2>";

    echo "Penulis: " . $item["penulis"] . "<br>";
    echo "Tahun: " . $item["tahun"] . "<br>";
    echo "Status: " . $item["status"] . "<br>";

    echo "<hr>";
}
