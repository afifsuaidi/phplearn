<?php

$buku = [
    [
        "judul" => "Belajar PHP Dasar",
        "penulis" => "Afif Su'aidi",
        "tahun" => 2026,
        "kategori" => "Pemrograman",
        "stok" => 5
    ],
    [
        "judul" => "Belajar JavaScript",
        "penulis" => "Budi Santoso",
        "tahun" => 2025,
        "kategori" => "Pemrograman",
        "stok" => 0
    ],
    [
        "judul" => "HTML dan CSS untuk Pemula",
        "penulis" => "Andi Wijaya",
        "tahun" => 2024,
        "kategori" => "Web",
        "stok" => 3
    ],
    [
        "judul" => "Dasar-Dasar MySQL",
        "penulis" => "Siti Aminah",
        "tahun" => 2023,
        "kategori" => "Database",
        "stok" => 2
    ]
];

$totalBuku = count($buku);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Perpustakaan Sederhana</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Perpustakaan Sederhana</h1>

        <p>
            Koleksi Buku:
            <?= $totalBuku ?>
        </p>
    </header>

    <main>

        <h2>Daftar Buku</h2>

        <table>

            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($buku as $index => $item): ?>

                    <tr>

                        <td>
                            <?= $index + 1 ?>
                        </td>

                        <td>
                            <?= $item["judul"] ?>
                        </td>

                        <td>
                            <?= $item["penulis"] ?>
                        </td>

                        <td>
                            <?= $item["tahun"] ?>
                        </td>

                        <td>
                            <?= $item["kategori"] ?>
                        </td>

                        <td>
                            <?= $item["stok"] ?>
                        </td>

                        <td>

                            <?php if ($item["stok"] > 0): ?>

                                <span class="tersedia">
                                    Tersedia
                                </span>

                            <?php else: ?>

                                <span class="habis">
                                    Habis
                                </span>

                            <?php endif; ?>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </main>

    <footer>

        <p>
            &copy; <?= date("Y") ?> Perpustakaan Sederhana
        </p>

    </footer>

</body>

</html>