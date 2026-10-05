<?php

function formatRupiah(int $nominal): string
{
    return "Rp " . number_format($nominal, 0, ',', '.');
}

function hitungTotal(int $harga, int $jumlah): int
{
    return $harga * $jumlah;
}

function hitungDiskon(int $harga, float $persen): int
{
    return (int) ($harga * $persen / 100);
}

function validasi(string $value): bool
{
    return trim($value) !== '';
}
