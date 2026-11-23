<?php
function rupiah($angka) {
  return 'Rp ' . number_format($angka, 0, ',', '.');
}
function hitung_total($harga, $qty, $diskon = 0) {
  return $harga * $qty * (1 - $diskon);
}

// Fungsi format rupiah sebelumnya (jika ada)
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

// Tambahkan fungsi hitungDiskon untuk Drill 2
function hitungDiskon($harga, $persen = 10) {
    $diskon = $harga * ($persen / 100);
    return $diskon;
}

// Tambahan untuk Drill 3: Fungsi predikat nilai A-E
function cekPredikat($nilai) {
    if ($nilai >= 85) {
        return "A";
    } elseif ($nilai >= 70) {
        return "B";
    } elseif ($nilai >= 55) {
        return "C";
    } elseif ($nilai >= 40) {
        return "D";
    } else {
        return "E";
    }
}

// Fungsi untuk menguji bug variabel $total di dalam fungsi
function ujiBugTotal() {
    $total = 15000; // Variabel lokal di dalam fungsi
}
?>
