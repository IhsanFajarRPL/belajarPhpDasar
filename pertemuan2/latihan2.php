<?php

// Looping

// for ($i=1; $i<=10 ; $i++) { 
//     echo $i .  "  San <br>";
// }

//While

// $a = 1;
// while ($a < 10) {
//     echo $a . "Lie <br>";
//     $a++;
// }

// forEach


// Pengkondisian
// $angka = "9";
// if ($angka <= 10) {
//     echo "SIPP! Ada No " . $angka;
// }else {
//     echo "Nich Kosong";
// }


// $nama = [ "Ihsan", "Aly", "Andarra", "Teguh"];
// foreach ($nama as $nm) {
//     echo "$nm <br>";
// }

$awal = [ "Ihsan", "Aly", "Andarra", "Teguh"];
$akhir = [ "Fajar", "Rhido", "Attari", "Nur"];
$gabung = [$awal, $akhir];
foreach ($gabung as $yee) {
    echo $yee[0][1];
}