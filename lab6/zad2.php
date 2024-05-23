<?php

function sumOfSequences($firstTerm, $differenceOrRatio, $numberOfTerms) {
    $arithmeticSum = 0;
    for ($i = 0; $i < $numberOfTerms; $i++) {
        $arithmeticSum += $firstTerm + ($i * $differenceOrRatio);
    }
    
    $geometricSum = 0;
    for ($i = 0; $i < $numberOfTerms; $i++) {
        $geometricSum += $firstTerm * pow($differenceOrRatio, $i);
    }
    
    echo "Suma ciągu arytmetycznego: " . $arithmeticSum . "\n";
    echo "Suma ciągu geometrycznego: " . $geometricSum . "\n";
}


sumOfSequences(1, 2, 5);
?>
