<?php
function multiply_matrices($matrix1, $matrix2) {
    if (count($matrix1[0]) != count($matrix2)) {
        echo "Wymiary macierzy nie są zgodne!";
        return null;
    }

    $result = array_fill(0, count($matrix1), array_fill(0, count($matrix2[0]), 0));

    for ($i = 0; $i < count($matrix1); $i++) {
        for ($j = 0; $j < count($matrix2[0]); $j++) {
            for ($k = 0; $k < count($matrix2); $k++) {
                $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }

    return $result;
}

$matrix1 = [[1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]];

$matrix2 = [[9, 8, 7],
            [6, 5, 4],
            [3, 2, 1]];

$result_matrix = multiply_matrices($matrix1, $matrix2);
if ($result_matrix) {
    echo "Wynik mnożenia macierzy:\n";
    foreach ($result_matrix as $row) {
        echo implode(" ", $row) . "\n";
    }
}
?>