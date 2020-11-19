<?php

function harga_bet($nama, $warna="red"){
    $harga = 0;
    $panjang = strlen($nama);

    if($panjang > 20){
        $harga = $panjang * 700;
    }elseif ($panjang > 10) {
        $harga = $panjang * 500;
    }elseif ($panjang > 0) {
        $harga = $panjang * 300;
    }

    echo '<p style="color: '.$warna.'">Bet nama '.$nama.' dengan harga '.strval($harga).'</p>';
}

harga_bet("nardiyansah", "green");

?>