<?php
echo "<h3>Rumus Bunga Majemuk</h3>";
$modal = 1000000; // modal awal
$bunga = 0.05;    // 5% per periode
$periode = 3;     // 3 tahun

$jumlah = $modal * pow((1 + $bunga), $periode);

echo "Modal Awal = Rp $modal <br>";
echo "Bunga = 5% per tahun <br>";
echo "Periode = $periode tahun <br>";
echo "Jumlah Akhir = Modal × (1 + bunga)^periode = Rp $jumlah";
?>
