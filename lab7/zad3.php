<?php
function create_array($a, $b, $c, $d) {
    $result = [];
    for ($i = $a; $i <= $b; $i++) {
        for ($j = $c; $j <= $d; $j++) {
            $result[$i] = $j;
            $i++;
        }
    }
    return $result;
}

$a = 1;
$b = 3;
$c = 5;
$d = 7;
$array = create_array($a, $b, $c, $d);
print_r($array);

?>