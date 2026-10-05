<?php

$buku = [
    [
        "judul" => "Belajar PHP",
        "penulis" => "Afif",
        "tahun" => 2026,
        "harga" => 100000
    ],
    [
        "judul" => "Belajar JavaScript",
        "penulis" => "Budi",
        "tahun" => 2025,
        "harga" => 120000
    ],
    [
        "judul" => "Belajar Laravel",
        "penulis" => "Andi",
        "tahun" => 2026,
        "harga" => 150000
    ],
    [
        "judul" => "Belajar MySQL",
        "penulis" => "Citra",
        "tahun" => 2024,
        "harga" => 90000
    ]
];

echo "==============================" . "<br>";
echo "       BOOK CATALOG" . "<br>";
echo "==============================" . "<br>";

echo "<br>";

echo "Jumlah buku: " . count($buku) . "<br>";

echo "<br>";

echo "DAFTAR BUKU" . "<br>";
echo "------------------------------" . "<br>";

foreach ($buku as $index => $item) {
    echo ($index + 1) . ". " . $item["judul"] . "<br>";
    echo "   Penulis : " . $item["penulis"] . "<br>";
    echo "   Tahun   : " . $item["tahun"] . "<br>";
    echo "   Harga   : Rp" . $item["harga"] . "<br>";
    echo "<br>";
}

echo "BUKU TAHUN 2026" . "<br>";
echo "------------------------------" . "<br>";

$buku2026 = array_filter(
    $buku,
    fn($item) => $item["tahun"] === 2026
);

foreach ($buku2026 as $item) {
    echo "- " . $item["judul"] . "<br>";
}

echo "<br>";

echo "CARI BUKU" . "<br>";
echo "------------------------------" . "<br>";

$hasil = array_find(
    $buku,
    fn($item) => $item["judul"] === "Belajar Laravel"
);

if ($hasil !== null) {
    echo "Buku ditemukan:" . "<br>";
    echo "Judul   : " . $hasil["judul"] . "<br>";
    echo "Penulis : " . $hasil["penulis"] . "<br>";
    echo "Tahun   : " . $hasil["tahun"] . "<br>";
} else {
    echo "Buku tidak ditemukan." . "<br>";
}

echo "<br>";

echo "MENAIKKAN HARGA 10%" . "<br>";
echo "------------------------------" . "<br>";

$bukuHargaBaru = array_map(
    function ($item) {
        $item["harga"] = $item["harga"] * 1.10;

        return $item;
    },
    $buku
);

foreach ($bukuHargaBaru as $item) {
    echo $item["judul"] . " = Rp" . $item["harga"] . "<br>";
}

echo "<br>";

echo "PENULIS" . "<br>";
echo "------------------------------" . "<br>";

$penulis = array_map(
    fn($item) => $item["penulis"],
    $buku
);

foreach ($penulis as $nama) {
    echo "- " . $nama . "<br>";
}

echo "<br>";

echo "CEK PENULIS" . "<br>";
echo "------------------------------" . "<br>";

if (in_array("Afif", $penulis)) {
    echo "Afif memiliki buku di katalog." . "<br>";
} else {
    echo "Afif tidak memiliki buku di katalog." . "<br>";
}

echo "<br>";

echo "MENAMBAHKAN BUKU" . "<br>";
echo "------------------------------" . "<br>";

array_push($buku, [
    "judul" => "Belajar Git",
    "penulis" => "Doni",
    "tahun" => 2026,
    "harga" => 80000
]);

echo "Buku berhasil ditambahkan." . "<br>";
echo "Jumlah buku sekarang: " . count($buku) . "<br>";

echo "<br>";

echo "MENGHAPUS BUKU TERAKHIR" . "<br>";
echo "------------------------------" . "<br>";

$bukuTerhapus = array_pop($buku);

echo "Buku dihapus: " . $bukuTerhapus["judul"] . "<br>";
echo "Jumlah buku sekarang: " . count($buku) . "<br>";
