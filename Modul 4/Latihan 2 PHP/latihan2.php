<?php
    $nama = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");

    echo "array sebelum disorting";
    echo "</br>";
    var_dump($nama);
    echo "</br>";
    echo "array setelah disorting";
    echo "</br>";
    sort($nama);
    var_dump($nama);
?>