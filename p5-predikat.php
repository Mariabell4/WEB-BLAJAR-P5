<?php
require_once __DIR__ . '/functions.php';

// Uji fungsi predikat
echo "Nilai 88 adalah predikat: " . cekPredikat(88) . "<br>";
echo "Nilai 60 adalah predikat: " . cekPredikat(60) . "<br>";

// Penjelasan Bug Variabel $total:
/*
  Mengapa variabel $total di dalam fungsi tidak bisa terbaca dari luar?
  Karena $total adalah "variabel lokal" yang hanya hidup dan bisa diakses 
  di dalam blok fungsi tempat ia dibuat. Begitu fungsi selesai dieksekusi, 
  variabel tersebut akan terhapus dari memori dan tidak dapat diakses 
  dari luar fungsi (global scope), sehingga akan memicu error "Undefined variable" 
  jika dipanggil di luar fungsi.
*/
?>
