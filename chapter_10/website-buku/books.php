<?php

$title = 'Daftar Buku';

$buku = [
    [
        'judul' => 'Belajar PHP Dasar',
        'penulis' => 'Andi',
        'tahun' => 2024
    ],
    [
        'judul' => 'Belajar JavaScript',
        'penulis' => 'Budi',
        'tahun' => 2023
    ],
    [
        'judul' => 'Belajar Laravel',
        'penulis' => 'Citra',
        'tahun' => 2025
    ]
];

include 'components/header.php';
include 'components/navbar.php';

?>

<main class="container">

    <h1>Daftar Buku</h1>

    <div class="book-grid">

        <?php foreach ($buku as $item): ?>

            <article class="book-card">

                <h2><?= htmlspecialchars($item['judul']); ?></h2>

                <p>
                    Penulis:
                    <?= htmlspecialchars($item['penulis']); ?>
                </p>

                <p>
                    Tahun:
                    <?= $item['tahun']; ?>
                </p>

            </article>

        <?php endforeach; ?>

    </div>

</main>

<?php include 'components/footer.php'; ?>