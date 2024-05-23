<?php
function insert_dollar_sign($array, $n) {
    if (!is_array($array) || !is_numeric($n) || $n < 0 || $n >= count($array)) {
        echo "BŁĄD";
        return;
    }
    
    array_splice($array, $n, 0, '$');
    
    print_r($array);
}

$array = [1, 2, 3, 4, 5];
$n = 2;
insert_dollar_sign($array, $n);
?>