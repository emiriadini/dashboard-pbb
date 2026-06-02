<?php
// Mendapatkan nama file
$file_name = '/mnt/mountdir/utdastorage/afterquery/dboTugasBelumDinilai_Praktik_FST.csv';

// Mendapatkan waktu terakhir file diperbarui dalam bentuk timestamp
$last_updated = filemtime($file_name);

date_default_timezone_set('Asia/Jakarta');

// Menggunakan fungsi date() untuk mengubah timestamp ke format tanggal
$last_updated_date = date('Y-m-d H:i:s', $last_updated);

// Menampilkan tanggal terakhir file diperbarui
echo 'File terakhir diperbarui pada: ' . $last_updated_date;

?>
