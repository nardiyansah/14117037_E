<?php
// range dari 1 - 50

$prima = array(1, 2);

for($i=3; $i<=50; $i++){
    $isPrima = true;
    for($j=2; $j<$i; $j++){
        if($i % $j == 0){
            $isPrima = false;
        }
    }
    if($isPrima){
        array_push($prima, $i);
    }
}

echo "bilangan prima antara 1-50: \n";
foreach($prima as $i){
    echo"$i \n";
}
?>