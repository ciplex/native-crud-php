<?php
//for
//while
//while do
//foreach

//for
$data=['kemseng', 'kem', 'juki'];

foreach($data as $nama){
    echo $nama."</br>";
}

foreach($data as $key => $value){
    echo "No". " " .$key. " " .$value. "</br>";
}

for($i = 0; $i < 10; $i++){
    echo $i . "</br>";
}

//while
$awal = 0;
while($awal < 10){
    echo "blo" . "</br>";
    $awal++;
}
//do while
$awal2 = 0;
do{
    echo $awal2;
    $awal2++;
}while($awal2 < 10)
?>