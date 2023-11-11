<?php
//Buatkan saya data nilai siswa kelulusan menggunakan percabangan PHP
// Menerima input nilai dari pengguna
$nilai = 70;

// percabangan untuk menentukan status kelulusan 
if ($nilai >= 75  ) {
    echo "Lulus";
} elseif($nilai >= 40 && $nilai <= 74) {
    echo "Remidial";
} else {
    echo "Tidak Lulus";
}
// jika nilai anda masukkan 100 , maka akan menampilkan Lulus, begitupun sebaliknya
?>