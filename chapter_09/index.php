<?php

$errors = [];
$success = "";

$nama = "";
$email = "";
$umur = "";
$password = "";
$konfirmasiPassword = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Ambil data dari form
    $nama = trim($_POST["nama"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $umur = trim($_POST["umur"] ?? "");
    $password = $_POST["password"] ?? "";
    $konfirmasiPassword = $_POST["konfirmasi_password"] ?? "";

    // =========================
    // VALIDASI NAMA
    // =========================

    if (empty($nama)) {

        $errors["nama"] = "Nama wajib diisi.";
    } elseif (strlen($nama) < 3) {

        $errors["nama"] = "Nama minimal 3 karakter.";
    } elseif (strlen($nama) > 100) {

        $errors["nama"] = "Nama maksimal 100 karakter.";
    }


    // =========================
    // VALIDASI EMAIL
    // =========================

    if (empty($email)) {

        $errors["email"] = "Email wajib diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errors["email"] = "Format email tidak valid.";
    }


    // =========================
    // VALIDASI UMUR
    // =========================

    if (empty($umur)) {

        $errors["umur"] = "Umur wajib diisi.";
    } elseif (
        filter_var(
            $umur,
            FILTER_VALIDATE_INT,
            [
                "options" => [
                    "min_range" => 17,
                    "max_range" => 100
                ]
            ]
        ) === false
    ) {

        $errors["umur"] = "Umur harus berupa angka antara 17-100.";
    }


    // =========================
    // VALIDASI PASSWORD
    // =========================

    if (empty($password)) {

        $errors["password"] = "Password wajib diisi.";
    } elseif (strlen($password) < 8) {

        $errors["password"] = "Password minimal 8 karakter.";
    }


    // =========================
    // VALIDASI KONFIRMASI PASSWORD
    // =========================

    if (empty($konfirmasiPassword)) {

        $errors["konfirmasi_password"] =
            "Konfirmasi password wajib diisi.";
    } elseif ($password !== $konfirmasiPassword) {

        $errors["konfirmasi_password"] =
            "Konfirmasi password tidak cocok.";
    }


    // =========================
    // JIKA TIDAK ADA ERROR
    // =========================

    if (empty($errors)) {

        $success = "Registrasi berhasil!";

        // Kosongkan password setelah berhasil
        $password = "";
        $konfirmasiPassword = "";
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Form Registrasi</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

        <div class="card">

            <h1>Form Registrasi</h1>

            <p class="subtitle">
                Silakan isi data untuk membuat akun.
            </p>


            <?php if (!empty($success)): ?>

                <div class="success">
                    <?= htmlspecialchars($success) ?>
                </div>

            <?php endif; ?>


            <form method="POST">


                <!-- NAMA -->

                <div class="form-group">

                    <label for="nama">
                        Nama
                    </label>

                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        value="<?= htmlspecialchars($nama) ?>"
                        placeholder="Masukkan nama">

                    <?php if (isset($errors["nama"])): ?>

                        <p class="error">
                            <?= htmlspecialchars($errors["nama"]) ?>
                        </p>

                    <?php endif; ?>

                </div>


                <!-- EMAIL -->

                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="<?= htmlspecialchars($email) ?>"
                        placeholder="contoh@email.com">

                    <?php if (isset($errors["email"])): ?>

                        <p class="error">
                            <?= htmlspecialchars($errors["email"]) ?>
                        </p>

                    <?php endif; ?>

                </div>


                <!-- UMUR -->

                <div class="form-group">

                    <label for="umur">
                        Umur
                    </label>

                    <input
                        type="number"
                        id="umur"
                        name="umur"
                        value="<?= htmlspecialchars($umur) ?>"
                        placeholder="Masukkan umur">

                    <?php if (isset($errors["umur"])): ?>

                        <p class="error">
                            <?= htmlspecialchars($errors["umur"]) ?>
                        </p>

                    <?php endif; ?>

                </div>


                <!-- PASSWORD -->

                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Minimal 8 karakter">

                    <?php if (isset($errors["password"])): ?>

                        <p class="error">
                            <?= htmlspecialchars($errors["password"]) ?>
                        </p>

                    <?php endif; ?>

                </div>


                <!-- KONFIRMASI PASSWORD -->

                <div class="form-group">

                    <label for="konfirmasi_password">
                        Konfirmasi Password
                    </label>

                    <input
                        type="password"
                        id="konfirmasi_password"
                        name="konfirmasi_password"
                        placeholder="Ulangi password">

                    <?php if (isset($errors["konfirmasi_password"])): ?>

                        <p class="error">
                            <?= htmlspecialchars(
                                $errors["konfirmasi_password"]
                            ) ?>
                        </p>

                    <?php endif; ?>

                </div>


                <button type="submit">
                    Daftar
                </button>

            </form>

        </div>

    </div>

</body>

</html>