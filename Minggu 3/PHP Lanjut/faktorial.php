<?php

function faktorial($x){
    if($x <= 1){
        return 1;
    }
    return $x * faktorial($x-1);
}


?>