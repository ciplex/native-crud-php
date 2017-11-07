<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//Function adalah sekumpulan perintah
//untu menyelesaikan tugas2 tertentu
function tambah2angka($angka1 = 0, $angka2 = 0){
    echo $angka1 + $angka2;
}
function perkalian2angka($angka1 = 0, $angka2 = 0){
    return $angka1 * $angka2;
}
//tambah2angka(10, 10) ;
function returnArray(){
    return [10,20,30,40];
}
function returnAngka10(){
    return 10;
}

foreach(returnArray() as $nomor){
    echo $nomor ."</br>";
}

$hasil = tambah2angka(5,5) +  perkalian2angka(10,10);
echo $hasil;
?>