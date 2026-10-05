<?php

$pesan = "";

if (isset($_POST["submit"])) {

    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $tahun = $_POST["tahun"];

    if (
        empty($judul) ||
        empty($penulis) ||
        empty($tahun)
    ) {
        $pesan = "Semua field harus diisi.";
    } else {
        $pesan = "Buku berhasil ditambahkan.";
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form Tambah Buku</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="container">

        <div class="card">

            <h1>Tambah Buku</h1>

            <p class="subtitle">
                Masukkan informasi buku yang ingin ditambahkan.
            </p>

            <?php if ($pesan !== ""): ?>

                <div class="message">
                    <?= $pesan ?>
                </div>

            <?php endif; ?>

            <form method="POST">

                <div class="form-group">

                    <label for="judul">
                        Judul Buku
                    </label>

                    <input
                        type="text"
                        id="judul"
                        name="judul"
                        placeholder="Masukkan judul buku">

                </div>

                <div class="form-group">

                    <label for="penulis">
                        Penulis
                    </label>

                    <input
                        type="text"
                        id="penulis"
                        name="penulis"
                        placeholder="Masukkan nama penulis">

                </div>

                <div class="form-group">

                    <label for="tahun">
                        Tahun Terbit
                    </label>

                    <input
                        type="number"
                        id="tahun"
                        name="tahun"
                        placeholder="Contoh: 2026">

                </div>

                <button
                    type="submit"
                    name="submit">
                    Tambah Buku
                </button>

            </form>

        </div>

    </main>

</body>

</html>